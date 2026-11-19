/**
 * Dynamic Circuit Path & Drone Line-Follower Controller
 * PT Nusa Sensa Teknologi
 */

/**
 * Pre-samples an SVG path into Float64Array coordinates for 60fps lookups
 */
function createPathSampler(pathEl, step = 2, maxSamples = 4000) {
    const totalLength = pathEl.getTotalLength();
    const count = Math.max(2, Math.min(maxSamples, Math.ceil(totalLength / step) + 1));
    const xs = new Float64Array(count);
    const ys = new Float64Array(count);

    for (let i = 0; i < count; i++) {
        const pt = pathEl.getPointAtLength((totalLength * i) / (count - 1));
        xs[i] = pt.x;
        ys[i] = pt.y;
    }

    const pointAt = (len) => {
        const clamped = Math.min(totalLength, Math.max(0, len));
        const t = (clamped / (totalLength || 1)) * (count - 1);
        const idx = Math.min(count - 2, Math.floor(t));
        const fraction = t - idx;
        return {
            x: xs[idx] + (xs[idx + 1] - xs[idx]) * fraction,
            y: ys[idx] + (ys[idx + 1] - ys[idx]) * fraction
        };
    };

    const angleAt = (len, delta = 6) => {
        const pBefore = pointAt(Math.max(0, len - delta));
        const pAfter = pointAt(Math.min(totalLength, len + delta));
        const dx = pAfter.x - pBefore.x;
        const dy = pAfter.y - pBefore.y;
        return (Math.atan2(dx, dy) * 180) / Math.PI;
    };

    return {
        length: totalLength,
        pointAt,
        angleAt,
        ys
    };
}

/**
 * Binary search to find path length corresponding to target Y coordinate
 */
function findLengthForY(samples, targetY, totalLength) {
    const ys = samples.ys;
    const count = ys.length;

    if (count < 2 || targetY <= ys[0]) return 0;
    if (targetY >= ys[count - 1]) return totalLength;

    let low = 0;
    let high = count - 1;

    while (high - low > 1) {
        const mid = (low + high) >> 1;
        if (ys[mid] <= targetY) {
            low = mid;
        } else {
            high = mid;
        }
    }

    const yLow = ys[low];
    const yHigh = ys[high];
    const fraction = yHigh === yLow ? 0 : (targetY - yLow) / (yHigh - yLow);
    const indexProgress = (low + fraction) / (count - 1);

    return indexProgress * totalLength;
}

/**
 * Shortest path angle interpolation
 */
function blendAngles(a1, a2, t) {
    let diff = (a2 - a1) % 360;
    if (diff > 180) diff -= 360;
    if (diff < -180) diff += 360;
    return a1 + diff * t;
}

export function initDroneFollower() {
    const mainEl = document.querySelector('main');
    const svgEl = document.getElementById('circuit-track-svg');
    const guidePath = document.getElementById('circuit-guide-path');
    const trailPath = document.getElementById('circuit-trail-path');
    const droneG = document.getElementById('robot-drone-g');
    const nodeContainer = document.getElementById('circuit-nodes-group');

    if (!mainEl || !svgEl || !guidePath || !trailPath || !droneG) return;

    let sampler = null;
    let totalPathLength = 0;
    let currentLength = 0;
    let targetLength = 0;
    let currentAngle = 0;
    let circuitNodes = [];

    // Autonomous Patrol States (Hero at top, Footer at bottom)
    let wanderTime = 0;
    let heroWeight = 1.0;
    let targetHeroWeight = 1.0;
    let footerWeight = 0.0;
    let targetFooterWeight = 0.0;

    let heroBounds = { top: 0, bottom: 800 };
    let footerBounds = { top: 4000, bottom: 4600, height: 450 };
    let servicesTop = 1000;
    let contactDockY = 3800;
    let totalWidth = 1440;
    let rightMarginGutter = 1300;

    function rebuildPathGeometry() {
        const mainRect = mainEl.getBoundingClientRect();
        const mainTop = window.scrollY + mainRect.top;
        const totalW = mainEl.clientWidth;
        const totalH = mainEl.scrollHeight;
        totalWidth = totalW;

        svgEl.setAttribute('viewBox', `0 0 ${totalW} ${totalH}`);
        svgEl.setAttribute('width', `${totalW}`);
        svgEl.setAttribute('height', `${totalH}`);

        const sections = Array.from(mainEl.querySelectorAll('section'));
        if (sections.length < 3) return;

        const footerEl = mainEl.querySelector('footer') || document.querySelector('footer');
        if (footerEl) {
            const fr = footerEl.getBoundingClientRect();
            footerBounds = {
                top: (window.scrollY + fr.top) - mainTop,
                bottom: (window.scrollY + fr.bottom) - mainTop,
                height: fr.height || 420
            };
        }

        const maxContentW = 1240;
        const marginW = Math.max(28, (totalW - maxContentW) / 2);
        const leftGutter = totalW > 768 ? Math.max(32, marginW + 8) : 20;
        const rightGutter = totalW > 768 ? Math.min(totalW - 32, totalW - marginW - 8) : totalW - 20;
        rightMarginGutter = rightGutter;

        const bounds = sections.map(sec => {
            const r = sec.getBoundingClientRect();
            const top = (window.scrollY + r.top) - mainTop;
            const bottom = (window.scrollY + r.bottom) - mainTop;
            return {
                id: sec.id,
                top: Math.max(0, top),
                bottom: Math.max(0, bottom)
            };
        });

        heroBounds = bounds[0];

        // Circuit line starts specifically at Layanan Utama ('services')
        const srvIdx = Math.max(0, sections.findIndex(s => s.id === 'services'));
        const activeSections = bounds.slice(srvIdx);

        if (activeSections.length > 0) {
            servicesTop = activeSections[0].top;
        }

        const xs = [leftGutter, rightGutter];
        let currentX = leftGutter;
        const startY = activeSections[0].top - 60;

        let pathD = [`M ${currentX.toFixed(1)} ${startY.toFixed(1)}`];
        let rawWaypoints = [{ x: currentX, y: startY }];

        for (let i = 0; i < activeSections.length; i++) {
            const curr = activeSections[i];
            const isLast = (i === activeSections.length - 1);

            if (!isLast) {
                const next = activeSections[i + 1];
                const gapTop = curr.bottom - 40;
                const gapBottom = next.top + 40;
                const midY = (gapTop + gapBottom) / 2;
                const targetX = xs[(i + 1) % 2];

                // Straight down the side of current section
                pathD.push(`L ${currentX.toFixed(1)} ${gapTop.toFixed(1)}`);
                rawWaypoints.push({ x: currentX, y: gapTop });

                // Smooth S-curve across the gap to the opposite side
                pathD.push(`C ${currentX.toFixed(1)} ${midY.toFixed(1)}, ${targetX.toFixed(1)} ${midY.toFixed(1)}, ${targetX.toFixed(1)} ${gapBottom.toFixed(1)}`);
                rawWaypoints.push({ x: targetX, y: gapBottom });

                currentX = targetX;
            } else {
                // Last active section (#contact): run down the side and curve into top of footer
                const contactBottom = curr.bottom - 40;
                pathD.push(`L ${currentX.toFixed(1)} ${contactBottom.toFixed(1)}`);
                rawWaypoints.push({ x: currentX, y: contactBottom });

                const footerEntryY = footerBounds.top + 40;
                const footerEntryX = totalW / 2;
                const midY = (contactBottom + footerEntryY) / 2;
                pathD.push(`C ${currentX.toFixed(1)} ${midY.toFixed(1)}, ${footerEntryX.toFixed(1)} ${midY.toFixed(1)}, ${footerEntryX.toFixed(1)} ${footerEntryY.toFixed(1)}`);
                rawWaypoints.push({ x: footerEntryX, y: footerEntryY });
            }
        }

        const fullD = pathD.join(' ');
        guidePath.setAttribute('d', fullD);
        trailPath.setAttribute('d', fullD);

        sampler = createPathSampler(guidePath, 3, 3500);
        totalPathLength = sampler.length;

        trailPath.style.strokeDasharray = `${totalPathLength} ${totalPathLength}`;
        trailPath.style.strokeDashoffset = `${totalPathLength}`;

        if (nodeContainer) {
            nodeContainer.innerHTML = '';
            circuitNodes = rawWaypoints.map((pt, i) => {
                const g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
                g.setAttribute('class', 'circuit-waypoint-node');

                // 1. Subtle Outer Halo Ring
                const halo = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                halo.setAttribute('cx', pt.x.toFixed(1));
                halo.setAttribute('cy', pt.y.toFixed(1));
                halo.setAttribute('r', '9');
                halo.setAttribute('fill', 'none');
                halo.setAttribute('stroke', '#38bdf8');
                halo.setAttribute('stroke-width', '1.5');
                halo.setAttribute('stroke-opacity', '0.35');

                // 2. White backing pad with colored rim
                const pad = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                pad.setAttribute('cx', pt.x.toFixed(1));
                pad.setAttribute('cy', pt.y.toFixed(1));
                pad.setAttribute('r', '5.5');
                pad.setAttribute('fill', '#ffffff');
                pad.setAttribute('stroke', '#0284c7');
                pad.setAttribute('stroke-width', '2');

                // 3. Center Core Dot
                const core = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
                core.setAttribute('cx', pt.x.toFixed(1));
                core.setAttribute('cy', pt.y.toFixed(1));
                core.setAttribute('r', '2.2');
                core.setAttribute('fill', '#00d2ff');

                g.appendChild(halo);
                g.appendChild(pad);
                g.appendChild(core);
                nodeContainer.appendChild(g);

                const nodeLen = sampler ? findLengthForY(sampler, pt.y, totalPathLength) : 0;

                return {
                    x: pt.x,
                    y: pt.y,
                    nodeLen,
                    halo,
                    pad,
                    core,
                    isActive: false
                };
            });
        }

        onScroll();
    }

    function onScroll() {
        if (!sampler) return;

        const scrollY = window.scrollY || window.pageYOffset;
        const mainRect = mainEl.getBoundingClientRect();
        const mainTop = scrollY + mainRect.top;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;

        // Current viewing position relative to <main>
        const viewportCenterY = (scrollY - mainTop) + (window.innerHeight * 0.46);

        // Case 1: Hero area (at the top)
        if (viewportCenterY < servicesTop) {
            targetLength = 0;
            targetHeroWeight = 1.0;
            targetFooterWeight = 0.0;
            return;
        }

        // Case 2: Bottom / Footer area
        const isNearPageBottom = scrollY >= Math.max(0, docHeight - 40);

        if (isNearPageBottom || viewportCenterY >= footerBounds.top) {
            targetLength = totalPathLength;
            targetHeroWeight = 0.0;
            targetFooterWeight = 1.0;
            return;
        } else if (viewportCenterY > footerBounds.top - 240) {
            // Smoothly transition into footer patrol as user approaches footer
            targetLength = totalPathLength;
            targetHeroWeight = 0.0;
            const progress = (viewportCenterY - (footerBounds.top - 240)) / 240;
            targetFooterWeight = Math.min(1.0, Math.max(0.0, progress));
            return;
        }

        // Case 3: Line following between services and contact docking station
        targetHeroWeight = 0.0;
        targetFooterWeight = 0.0;
        targetLength = findLengthForY(sampler, viewportCenterY, totalPathLength);
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', rebuildPathGeometry, { passive: true });

    if (window.ResizeObserver) {
        const ro = new ResizeObserver(() => {
            rebuildPathGeometry();
        });
        ro.observe(mainEl);
    }

    rebuildPathGeometry();

    // 60FPS animation loop
    function animationLoop() {
        wanderTime += 0.024;

        // Smooth transition between wander modes and line follow mode
        heroWeight += (targetHeroWeight - heroWeight) * (targetHeroWeight === 1.0 ? 0.06 : 0.08);
        footerWeight += (targetFooterWeight - footerWeight) * (targetFooterWeight === 1.0 ? 0.06 : 0.08);

        if (sampler && totalPathLength > 0) {
            currentLength += (targetLength - currentLength) * 0.10;

            const len = Math.min(totalPathLength, Math.max(0, currentLength));
            const linePt = sampler.pointAt(len);
            const lineAngle = sampler.angleAt(len);

            let finalX = linePt.x;
            let finalY = linePt.y;
            let targetAngle = lineAngle;

            // 1. Autonomous Hero Wander Coordinates (Wide sweeping flight across entire page width)
            if (heroWeight > 0.005) {
                const midX = totalWidth / 2;
                const midY = heroBounds.top + 320;
                // Span across the entire screen width (from left margin to right margin)
                const spanX = Math.max(120, (totalWidth - 240) * 0.44);
                const spanY = 135;

                // Multi-harmonic trajectory: travels across full width, from left to right and back
                const t = wanderTime * 0.55;
                const wX = midX + spanX * Math.sin(t * 0.5) + (spanX * 0.18) * Math.sin(t * 1.3);
                const wY = midY + spanY * Math.sin(t * 1.0) + 25 * Math.cos(t * 0.4);

                // Lookahead derivative for natural flight banking
                const dt = 0.06;
                const tNext = t + dt;
                const wX_next = midX + spanX * Math.sin(tNext * 0.5) + (spanX * 0.18) * Math.sin(tNext * 1.3);
                const wY_next = midY + spanY * Math.sin(tNext * 1.0) + 25 * Math.cos(tNext * 0.4);
                const heroAngle = (Math.atan2(wX_next - wX, wY_next - wY) * 180) / Math.PI;

                finalX = linePt.x + (wX - linePt.x) * heroWeight;
                finalY = linePt.y + (wY - linePt.y) * heroWeight;
                targetAngle = blendAngles(lineAngle, heroAngle, heroWeight);
            }

            // 2. Autonomous Footer Wander Coordinates (Wide sweeping patrol across footer)
            if (footerWeight > 0.005) {
                const midX = totalWidth / 2;
                // Positioned comfortably in the middle section of the footer, above copyright
                const footerMidY = footerBounds.top + Math.min(220, footerBounds.height * 0.45);
                const spanX = Math.max(110, (totalWidth - 240) * 0.42);
                const spanY = Math.min(55, Math.max(25, footerBounds.height * 0.16));

                // Figure-8 sweeping trajectory across footer columns
                const t = wanderTime * 0.52;
                const fX = midX + spanX * Math.sin(t * 0.48) + (spanX * 0.16) * Math.sin(t * 1.2);
                const fY = footerMidY + spanY * Math.sin(t * 0.96) + 16 * Math.cos(t * 0.36);

                const dt = 0.06;
                const tNext = t + dt;
                const fX_next = midX + spanX * Math.sin(tNext * 0.48) + (spanX * 0.16) * Math.sin(tNext * 1.2);
                const fY_next = footerMidY + spanY * Math.sin(tNext * 0.96) + 16 * Math.cos(tNext * 0.36);
                const footerAngle = (Math.atan2(fX_next - fX, fY_next - fY) * 180) / Math.PI;

                finalX = finalX + (fX - finalX) * footerWeight;
                finalY = finalY + (fY - finalY) * footerWeight;
                targetAngle = blendAngles(targetAngle, footerAngle, footerWeight);
            }

            currentAngle = blendAngles(currentAngle, targetAngle, 0.14);

            droneG.setAttribute('transform', `translate(${finalX.toFixed(1)}, ${finalY.toFixed(1)}) rotate(${currentAngle.toFixed(1)})`);

            if (trailPath) {
                const effectiveLen = heroWeight > 0.5 ? 0 : len;
                const remaining = totalPathLength - effectiveLen;
                trailPath.style.strokeDashoffset = `${remaining.toFixed(1)}`;
            }

            // Illuminate circuit nodes when active progress reaches them
            if (circuitNodes.length > 0) {
                const effectiveLen = heroWeight > 0.5 ? 0 : currentLength;
                circuitNodes.forEach(node => {
                    const active = effectiveLen >= Math.max(0, node.nodeLen - 12);
                    if (active !== node.isActive) {
                        node.isActive = active;
                        if (active) {
                            node.halo.setAttribute('stroke', '#00ffff');
                            node.halo.setAttribute('stroke-opacity', '0.85');
                            node.pad.setAttribute('stroke', '#10b981');
                            node.core.setAttribute('fill', '#10b981');
                            node.core.setAttribute('r', '2.8');
                        } else {
                            node.halo.setAttribute('stroke', '#38bdf8');
                            node.halo.setAttribute('stroke-opacity', '0.35');
                            node.pad.setAttribute('stroke', '#0284c7');
                            node.core.setAttribute('fill', '#00d2ff');
                            node.core.setAttribute('r', '2.2');
                        }
                    }
                });
            }
        }

        requestAnimationFrame(animationLoop);
    }

    requestAnimationFrame(animationLoop);
}

/**
 * Mobile Navigation Drawer Controller
 */
export function initMobileMenu() {
    const btn = document.getElementById('mobile-menu-btn');
    const drawer = document.getElementById('mobile-menu-drawer');
    const iconBars = document.getElementById('menu-icon-bars');
    const iconClose = document.getElementById('menu-icon-close');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    if (!btn || !drawer) return;

    btn.addEventListener('click', () => {
        const isHidden = drawer.classList.contains('hidden');
        if (isHidden) {
            drawer.classList.remove('hidden');
            if (iconBars) iconBars.classList.add('hidden');
            if (iconClose) iconClose.classList.remove('hidden');
        } else {
            drawer.classList.add('hidden');
            if (iconBars) iconBars.classList.remove('hidden');
            if (iconClose) iconClose.classList.add('hidden');
        }
    });

    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            drawer.classList.add('hidden');
            if (iconBars) iconBars.classList.remove('hidden');
            if (iconClose) iconClose.classList.add('hidden');
        });
    });
}

/**
 * Consultation Form Controller
 */
export function initConsultationForm() {
    const form = document.getElementById('consultation-form');
    const successCard = document.getElementById('consultation-success');
    const resetBtn = document.getElementById('consultation-reset-btn');

    if (!form || !successCard) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        form.classList.add('hidden');
        successCard.classList.remove('hidden');
        successCard.classList.add('flex');
    });

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            form.reset();
            successCard.classList.add('hidden');
            successCard.classList.remove('flex');
            form.classList.remove('hidden');
        });
    }
}

/**
 * Live IoT Telemetry Simulator
 * Real-time data simulation for Nusa Sensa IoT nodes
 */
export function initTelemetrySimulator() {
    const tempEl = document.getElementById('telemetry-temp');
    const humEl = document.getElementById('telemetry-hum');
    const voltEl = document.getElementById('telemetry-volt');
    const rssiEl = document.getElementById('telemetry-rssi');
    const countEl = document.getElementById('telemetry-count');
    const payloadEl = document.getElementById('telemetry-payload');
    const pingBtn = document.getElementById('telemetry-ping-btn');
    const pulseLed = document.getElementById('telemetry-led');

    if (!tempEl || !payloadEl) return;

    let packetCount = 14820;
    let baseTemp = 28.4;
    let baseHum = 64.2;
    let baseVolt = 3.68;
    let baseRssi = -68;

    function generatePacket() {
        packetCount++;
        const temp = (baseTemp + (Math.random() * 0.8 - 0.4)).toFixed(1);
        const hum = (baseHum + (Math.random() * 1.2 - 0.6)).toFixed(1);
        const volt = (baseVolt + (Math.random() * 0.04 - 0.02)).toFixed(2);
        const rssi = Math.round(baseRssi + (Math.random() * 6 - 3));

        if (tempEl) tempEl.textContent = `${temp} °C`;
        if (humEl) humEl.textContent = `${hum} %`;
        if (voltEl) voltEl.textContent = `${volt} V`;
        if (rssiEl) rssiEl.textContent = `${rssi} dBm`;
        if (countEl) countEl.textContent = packetCount.toLocaleString();

        const dataObj = {
            node_id: "NS-IOT-G408",
            firmware: "v3.1.2-sensa",
            timestamp: new Date().toISOString(),
            telemetry: {
                temperature_c: parseFloat(temp),
                humidity_rh: parseFloat(hum),
                battery_voltage: parseFloat(volt),
                signal_rssi: rssi
            },
            status: "OK_NOMINAL",
            cloud_sync: true
        };

        payloadEl.textContent = JSON.stringify(dataObj, null, 2);

        if (pulseLed) {
            pulseLed.classList.add('bg-emerald-400', 'shadow-[0_0_12px_#34d399]');
            pulseLed.classList.remove('bg-emerald-600');
            setTimeout(() => {
                pulseLed.classList.remove('bg-emerald-400', 'shadow-[0_0_12px_#34d399]');
                pulseLed.classList.add('bg-emerald-600');
            }, 300);
        }
    }

    setInterval(generatePacket, 2800);

    if (pingBtn) {
        pingBtn.addEventListener('click', () => {
            generatePacket();
            pingBtn.textContent = 'Data Pushed!';
            setTimeout(() => {
                pingBtn.textContent = 'Kirim Sample Telemetri';
            }, 1000);
        });
    }
}

/**
 * FAQ Accordion Controller
 */
export function initFaqAccordion() {
    const faqButtons = document.querySelectorAll('.faq-toggle');
    faqButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('.faq-icon');
            const isExpanded = btn.getAttribute('aria-expanded') === 'true';

            btn.setAttribute('aria-expanded', !isExpanded);
            if (!isExpanded) {
                content.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            }
        });
    });
}

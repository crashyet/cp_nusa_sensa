import { initDroneFollower, initTelemetrySimulator, initFaqAccordion, initMobileMenu, initConsultationForm } from './drone-path.js';

document.addEventListener('DOMContentLoaded', () => {
    initDroneFollower();
    initTelemetrySimulator();
    initFaqAccordion();
    initMobileMenu();
    initConsultationForm();
});

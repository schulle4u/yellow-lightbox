// Lightbox extension, https://github.com/schulle4u/yellow-lightbox

const initLightboxFromDOM = () => {
    const lightboxConfig = document.getElementById("lightboxConfig");
    const {
        lightboxNav,
        lightboxPreviousLabel,
        lightboxNextLabel,
        lightboxCloseLabel
    } = lightboxConfig.dataset;
    const tobii = new Tobii({
        captionToggle: false,
        nav: lightboxNav,
        navLabel: [lightboxPreviousLabel, lightboxNextLabel],
        closeLabel: lightboxCloseLabel
    });
};

document.addEventListener("DOMContentLoaded", initLightboxFromDOM);
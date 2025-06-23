// Lightbox extension, https://github.com/schulle4u/yellow-lightbox

const initLightboxFromDOM = () => {
    const lightboxConfig = document.getElementById("lightboxConfig");
    const {
        lightboxNav,
        lightboxAutoplay,
        lightboxPreviousLabel,
        lightboxNextLabel,
        lightboxCloseLabel
    } = lightboxConfig.dataset;
    const autoplay = lightboxAutoplay === "true";
    const tobii = new Tobii({
        nav: lightboxNav,
        navLabel: [lightboxPreviousLabel, lightboxNextLabel],
        closeLabel: lightboxCloseLabel,
        autoplayVideo: autoplay,
        autoplayAudio: autoplay
    });
};

document.addEventListener("DOMContentLoaded", initLightboxFromDOM);
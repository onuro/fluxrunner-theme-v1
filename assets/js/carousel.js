document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.logo-carousel');
    const figures = carousel.innerHTML;

    // Create a new div to wrap the images
    const logoCarouselInner = document.createElement('div');
    logoCarouselInner.classList.add('logo-carousel-inner');

    // Duplicate the images to create the infinite loop effect
    logoCarouselInner.innerHTML = figures + figures;

    // Append the wrapper to the carousel
    carousel.innerHTML = '';
    carousel.appendChild(logoCarouselInner);
});

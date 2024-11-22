const carousel = document.querySelector('.carousel');
const items = document.querySelectorAll('.carousel-item');
let currentIndex = 0;

function slideCarousel() {
    // Calculate the transform value
    const itemWidth = items[0].offsetWidth + 20; // 20px margin
    currentIndex = (currentIndex + 1) % items.length; // Loop back to start
    carousel.style.transform = `translateX(-${itemWidth * currentIndex}px)`;
}

// Slide every 3 seconds
setInterval(slideCarousel, 3000);

document.addEventListener('DOMContentLoaded', () => {
    // Carousel functionality
    const courseContainer = document.querySelector('.course-container');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    const courseArrows = document.querySelectorAll('.course-arrow');
    const indicators = document.querySelectorAll('.indicator');
    const modal = document.getElementById('modal');
    const closeButton = document.querySelector('.close-button');
    
    let currentIndex = 0;
    const courseCardWidth = document.querySelector('.course-card').offsetWidth + 20; // card width plus gap

    const updateIndicators = () => {
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentIndex);
        });
    };

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            courseContainer.scrollBy({
                left: -courseCardWidth,
                behavior: 'smooth'
            });
            updateIndicators();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < indicators.length - 1) {
            currentIndex++;
            courseContainer.scrollBy({
                left: courseCardWidth,
                behavior: 'smooth'
            });
            updateIndicators();
        }
    });

    courseArrows.forEach(arrow => {
        arrow.addEventListener('click', () => {
            modal.style.display = 'flex';
        });
    });

    closeButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Smooth appear animation for text, images, and div elements
    const textElements = document.querySelectorAll('section h1, section h2, section h3, section p, .hero-content, .feature-header');
    const imageElements = document.querySelectorAll('section img, .hero-image, .certificate-icon');
    const divElements = document.querySelectorAll('section div');

    textElements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, index * 200); // Adjust the delay as needed
    });

    imageElements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, index * 300); // Adjust the delay as needed
    });

    divElements.forEach((element, index) => {
        setTimeout(() => {
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, index * 250); // Adjust the delay as needed
    });

    // Counting animation for stats
    const statElements = document.querySelectorAll('.stats .stat h2');
    statElements.forEach(statElement => {
        const endValue = parseInt(statElement.textContent.replace(/\D/g, '')); // Extract number
        let startValue = 0;
        const duration = 2000; // Duration of the counting animation in milliseconds
        const increment = Math.ceil(endValue / (duration / 50)); // Increment per interval

        const updateCount = () => {
            startValue += increment;
            if (startValue > endValue) {
                startValue = endValue;
            }
            statElement.textContent = `${startValue}+`;

            if (startValue < endValue) {
                setTimeout(updateCount, 50); // Update every 50ms
            }
        };

        updateCount();
    });
});

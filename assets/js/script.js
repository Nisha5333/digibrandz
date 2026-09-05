// Initialize AOS and IMD Interactive Features
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 80
        });
    }

    // Animated Counter for Stats
    const counters = document.querySelectorAll('.counter');
    
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseFloat(counter.getAttribute('data-target'));
                const prefix = counter.getAttribute('data-prefix') || '';
                const suffix = counter.getAttribute('data-suffix') || '';
                const isDecimal = counter.getAttribute('data-decimal') === 'true';
                const duration = 2000;
                const increment = target / (duration / 16);
                
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = prefix + (isDecimal ? current.toFixed(1) : Math.ceil(current)) + suffix;
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = prefix + target + suffix;
                    }
                };
                
                updateCounter();
                observer.unobserve(counter);
            }
        });
    }, {
        threshold: 0.3
    });

    counters.forEach(counter => counterObserver.observe(counter));

    // Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
});
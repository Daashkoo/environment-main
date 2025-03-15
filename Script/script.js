document.addEventListener('DOMContentLoaded', () => {
    // Smooth Scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Fade in elements when in view
    const elementsToFadeIn = document.querySelectorAll('.fade-in');
    const fadeInOnScroll = () => {
        elementsToFadeIn.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                element.classList.add('visible');
            }
        });
    };
    window.addEventListener('scroll', fadeInOnScroll);
    fadeInOnScroll(); // Call it initially for elements already in view.

    // Modal Popup
    const modal = document.getElementById('modal');
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');

    openModalButton.addEventListener('click', () => {
        modal.style.display = 'block';
    });
    closeModalButton.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });
});

// Scroll Animations for Sections
window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section');
    
    sections.forEach(section => {
        const rect = section.getBoundingClientRect();
        
        // Check if section is in the viewport
        if (rect.top < window.innerHeight && rect.bottom >= 0) {
            section.classList.add('animated-scroll');
        }
    });
});

// Typing Effect
function typeWriter(element, text, speed) {
    let i = 0;
    const interval = setInterval(function () {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
        } else {
            clearInterval(interval);
        }
    }, speed);
}

const typedTextElement = document.querySelector('#typedText'); // Add an element with this ID in your HTML
typeWriter(typedTextElement, "Welcome to Global Environmental Awareness!", 100);

// Parallax Scrolling Effect
window.addEventListener('scroll', () => {
    const parallax = document.querySelectorAll('.parallax');
    
    parallax.forEach(element => {
        let scrollPosition = window.pageYOffset;
        element.style.transform = `translateY(${scrollPosition * 0.5}px)`;
    });
});

// Bounce animation for the modal
openModalButton.addEventListener('click', () => {
    modal.style.display = 'block';
    setTimeout(() => {
        modal.classList.add('bounce-in');
    }, 10); // Delay to ensure modal shows first
});


// Open the modal with a slide effect
openModalButton.addEventListener('click', () => {
    modal.style.display = 'block';
    modal.classList.add('slide-in');
});

// Close the modal
closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
    modal.classList.remove('slide-in');
});

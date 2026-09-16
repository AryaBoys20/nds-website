// assets/js/main.js
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // ====== NAVBAR SCROLL EFFECT ======
    const navbar = document.querySelector('.navbar');
    let lastScroll = 0;
    let ticking = false;

    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                const currentScroll = window.pageYOffset;
                
                if (currentScroll > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                
                lastScroll = currentScroll;
                ticking = false;
            });
            ticking = true;
        }
    });

    // ====== SMOOTH SCROLL WITH OFFSET ======
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                // Close mobile menu
                const navbarCollapse = document.getElementById('navbarNav');
                if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                    const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse) {
                        bsCollapse.hide();
                    }
                }
                
                const offset = 80;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ====== NAVBAR ACTIVE STATE ======
    const navLinks = document.querySelectorAll('.navbar .nav-link:not(.dropdown-toggle)');
    const sections = document.querySelectorAll('section[id]');

    if (navLinks.length > 0 && sections.length > 0) {
        window.addEventListener('scroll', function() {
            let current = '';
            const scrollPosition = window.pageYOffset + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                const href = link.getAttribute('href');
                if (href === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    }

    // ====== BACK TO TOP BUTTON ======
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 400) {
                backToTopBtn.style.display = 'flex';
                backToTopBtn.style.opacity = '1';
            } else {
                backToTopBtn.style.display = 'none';
                backToTopBtn.style.opacity = '0';
            }
        });
    }

   

    // ====== SCROLL REVEAL ANIMATIONS ======
    const revealElements = document.querySelectorAll('.card-hover, .service-card, .contact-info-card, .img-hero, .img-about, .img-vision, .profile-img, .stat-number');

    if ('IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('animate-fade-up');
                        entry.target.style.opacity = '1';
                    }, index * 80);
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach(el => {
            el.style.opacity = '0';
            revealObserver.observe(el);
        });
    }

    // ====== COUNTER ANIMATION ======
    const statNumbers = document.querySelectorAll('.stat-number');
    if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const text = el.textContent;
                    const num = parseInt(text.replace(/[^0-9]/g, ''));
                    if (!isNaN(num) && num > 0) {
                        let current = 0;
                        const duration = 2500;
                        const steps = 50;
                        const increment = Math.ceil(num / steps);
                        const stepTime = duration / steps;
                        
                        let counter = 0;
                        const timer = setInterval(() => {
                            counter += increment;
                            if (counter >= num) {
                                el.textContent = text.replace(/[0-9]+/, num);
                                clearInterval(timer);
                            } else {
                                el.textContent = text.replace(/[0-9]+/, counter);
                            }
                        }, stepTime);
                    }
                    counterObserver.unobserve(el);
                }
            });
        }, { threshold: 0.5 });
        
        statNumbers.forEach(el => counterObserver.observe(el));
    }

    // ====== PARALLAX EFFECT ON HERO ======
    const hero = document.querySelector('.hero-gradient');
    if (hero) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroContent = hero.querySelector('.container');
            if (heroContent && scrolled < hero.offsetHeight) {
                const rate = scrolled * 0.2;
                heroContent.style.transform = `translateY(${rate}px)`;
                heroContent.style.opacity = 1 - (scrolled / hero.offsetHeight * 0.5);
            }
        }, { passive: true });
    }

    // ====== 3D TILT EFFECT ON CARDS ======
    const cards = document.querySelectorAll('.card-hover, .service-card');
    cards.forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 15;
            const rotateY = (centerX - x) / 15;
            
            this.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-12px)`;
            this.style.transition = 'none';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transition = 'all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55)';
            this.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });

    // ====== TYPEWRITER EFFECT ======
    const typewriterElement = document.querySelector('.typewriter');
    if (typewriterElement) {
        const texts = JSON.parse(typewriterElement.dataset.texts || '[]');
        if (texts.length > 0) {
            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            
            function type() {
                const currentText = texts[textIndex];
                if (isDeleting) {
                    typewriterElement.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    typewriterElement.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                }
                
                let speed = isDeleting ? 40 : 80;
                
                if (!isDeleting && charIndex === currentText.length) {
                    speed = 2000;
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % texts.length;
                    speed = 400;
                }
                
                setTimeout(type, speed);
            }
            
            type();
        }
    }

    // ====== PARTICLE EFFECT ======
    const heroSection = document.querySelector('.hero-gradient');
    if (heroSection) {
        for (let i = 0; i < 30; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.width = (Math.random() * 4 + 2) + 'px';
            particle.style.height = particle.style.width;
            particle.style.animationDuration = (Math.random() * 10 + 5) + 's';
            particle.style.animationDelay = (Math.random() * 5) + 's';
            heroSection.appendChild(particle);
        }
    }

    // ====== SMOOTH ENTRY ======
    console.log('%c🚀 NDS Digital - Transformasi Digital Partner', 'font-size: 22px; font-weight: bold; color: #3b9bd7;');
    console.log('%c💡 Inovasi untuk masa depan digital yang cerdas & terintegrasi', 'font-size: 14px; color: #0b2a4a;');
    console.log('%c✨ Website dengan animasi modern dan interaktivitas tinggi', 'font-size: 13px; color: #6c757d;');
});
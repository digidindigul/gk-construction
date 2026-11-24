/**
 * GK Construction - Custom Interactive JavaScript
 * Location: Dindigul, Tamil Nadu
 * Built With Precision
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Floating Navbar Scroll Effect (Condenses on Scroll)
    const floatingNavbar = document.getElementById('floatingNavbar');
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', function () {
        const scrollPos = window.scrollY;

        // Shrink & glow floating navbar
        if (floatingNavbar) {
            if (scrollPos > 30) {
                floatingNavbar.classList.add('scrolled');
            } else {
                floatingNavbar.classList.remove('scrolled');
            }
        }

        // Back to top button visibility
        if (backToTop) {
            if (scrollPos > 350) {
                backToTop.classList.add('visible');
            } else {
                backToTop.classList.remove('visible');
            }
        }
    });

    // 2. Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobileToggle');
    const mobileDropdown = document.getElementById('mobileDropdown');

    if (mobileToggle && mobileDropdown) {
        mobileToggle.addEventListener('click', function () {
            mobileToggle.classList.toggle('active');
            mobileDropdown.classList.toggle('open');
        });

        // Close when clicking outside
        document.addEventListener('click', function (e) {
            if (!mobileToggle.contains(e.target) && !mobileDropdown.contains(e.target)) {
                mobileToggle.classList.remove('active');
                mobileDropdown.classList.remove('open');
            }
        });

        // Close menu when clicking a navigation link
        const mobileLinks = mobileDropdown.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function () {
                mobileToggle.classList.remove('active');
                mobileDropdown.classList.remove('open');
            });
        });
    }

    // 3. Project Filter Tabs
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                projectCards.forEach(card => {
                    const category = card.getAttribute('data-category');
                    if (filterValue === 'all' || category === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // 4. Smooth Scroll for Anchor Links with Floating Navbar Offset
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                const navOffset = 90; // offset for floating navbar
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 5. Scroll Animations (Left In, Right In, Fade Up, Scale In)
    const animElements = document.querySelectorAll('.fade-in-left, .fade-in-right, .fade-in-up, .scale-in');

    if ('IntersectionObserver' in window && animElements.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -40px 0px',
            threshold: 0.12
        };

        const animationObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        animElements.forEach(el => animationObserver.observe(el));
    } else {
        // Fallback for browsers without IntersectionObserver
        animElements.forEach(el => el.classList.add('is-visible'));
    }
});

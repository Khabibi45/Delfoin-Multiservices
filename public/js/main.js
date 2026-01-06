/**
 * Main JavaScript - Scripts communs pour les sites générés
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // ========================================
    // SMOOTH SCROLL
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ========================================
    // HEADER SCROLL EFFECT
    // ========================================
    const header = document.querySelector('[class*="header"]');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }
    
    // ========================================
    // MOBILE MENU TOGGLE
    // ========================================
    const mobileToggle = document.querySelector('[class*="mobile-toggle"]');
    const nav = document.querySelector('[class*="__nav"]');
    
    if (mobileToggle && nav) {
        mobileToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
            mobileToggle.classList.toggle('active');
        });
    }
    
    // ========================================
    // INTERSECTION OBSERVER - ANIMATIONS
    // ========================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observer les éléments avec la classe 'animate-on-scroll'
    document.querySelectorAll('.animate-on-scroll, [class*="__card"], [class*="__item"]').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // Style pour les éléments visibles
    const style = document.createElement('style');
    style.textContent = `
        .visible {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    `;
    document.head.appendChild(style);
    
    // ========================================
    // FORM VALIDATION
    // ========================================
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation basique
            let isValid = true;
            const requiredFields = form.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            // Email validation
            const emailFields = form.querySelectorAll('[type="email"]');
            emailFields.forEach(field => {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (field.value && !emailRegex.test(field.value)) {
                    isValid = false;
                    field.classList.add('error');
                }
            });
            
            if (isValid) {
                // Afficher un message de succès
                const successMsg = document.createElement('div');
                successMsg.className = 'form-success';
                successMsg.textContent = 'Message envoyé avec succès !';
                successMsg.style.cssText = `
                    background: var(--color-success, #10B981);
                    color: white;
                    padding: 16px;
                    border-radius: var(--radius-medium, 8px);
                    margin-top: 16px;
                    text-align: center;
                `;
                form.appendChild(successMsg);
                
                // Reset form
                form.reset();
                
                // Remove message after 5s
                setTimeout(() => successMsg.remove(), 5000);
            }
        });
    });
    
    // ========================================
    // LAZY LOADING IMAGES
    // ========================================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    imageObserver.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // ========================================
    // ACCORDION
    // ========================================
    document.querySelectorAll('[class*="accordion"]').forEach(accordion => {
        const headers = accordion.querySelectorAll('[class*="accordion-header"], [class*="accordion__header"]');
        
        headers.forEach(header => {
            header.addEventListener('click', () => {
                const item = header.closest('[class*="accordion-item"], [class*="accordion__item"]');
                const isOpen = item.classList.contains('open') || item.classList.contains('active');
                
                // Close all items
                accordion.querySelectorAll('[class*="accordion-item"], [class*="accordion__item"]').forEach(i => {
                    i.classList.remove('open', 'active');
                });
                
                // Open clicked item if it wasn't open
                if (!isOpen) {
                    item.classList.add('open', 'active');
                }
            });
        });
    });
    
    // ========================================
    // TABS
    // ========================================
    document.querySelectorAll('[class*="tabs"]').forEach(tabContainer => {
        const buttons = tabContainer.querySelectorAll('[class*="tab-btn"], [class*="tabs__btn"]');
        const panels = tabContainer.querySelectorAll('[class*="tab-panel"], [class*="tabs__panel"]');
        
        buttons.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                // Update buttons
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Update panels
                panels.forEach(p => p.classList.remove('active'));
                if (panels[index]) {
                    panels[index].classList.add('active');
                }
            });
        });
    });
    
    // ========================================
    // BACK TO TOP BUTTON
    // ========================================
    const backToTop = document.createElement('button');
    backToTop.innerHTML = '↑';
    backToTop.className = 'back-to-top';
    backToTop.style.cssText = `
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: var(--color-primary, #000);
        color: var(--color-text-on-primary, #fff);
        border: none;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        font-size: 20px;
        box-shadow: var(--shadow-medium, 0 4px 12px rgba(0,0,0,0.15));
    `;
    document.body.appendChild(backToTop);
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            backToTop.style.opacity = '1';
            backToTop.style.visibility = 'visible';
        } else {
            backToTop.style.opacity = '0';
            backToTop.style.visibility = 'hidden';
        }
    });
    
    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
});

// ========================================
// UTILITY FUNCTIONS
// ========================================

/**
 * Debounce function
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Throttle function
 */
function throttle(func, limit) {
    let inThrottle;
    return function(...args) {
        if (!inThrottle) {
            func.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}


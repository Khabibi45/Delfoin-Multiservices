/**
 * Lightbox - Universal Image Preview
 * Auto-initializes on all images in the page
 * 
 * Features:
 * - Click any image to preview in fullscreen overlay
 * - Keyboard support (Escape to close, Arrow keys for navigation)
 * - Click outside or X button to close
 * - Smooth animations
 * - Works with any module automatically
 */

(function () {
    'use strict';

    // Configuration
    const CONFIG = {
        selector: 'img:not([data-no-lightbox])',
        animationDuration: 300,
        zIndex: 10000
    };

    // State
    let currentImages = [];
    let currentIndex = 0;
    let overlay = null;
    let isOpen = false;

    /**
     * Initialize lightbox on page load
     */
    function init() {
        createOverlay();
        attachEventListeners();
        console.log('[Lightbox] Initialized with', document.querySelectorAll(CONFIG.selector).length, 'images');
    }

    /**
     * Create the lightbox overlay element
     */
    function createOverlay() {
        overlay = document.createElement('div');
        overlay.id = 'lightbox-overlay';
        overlay.innerHTML = `
            <div class="lightbox-backdrop"></div>
            <button class="lightbox-close" aria-label="Fermer">&times;</button>
            <button class="lightbox-nav lightbox-prev" aria-label="Précédent">&#8249;</button>
            <button class="lightbox-nav lightbox-next" aria-label="Suivant">&#8250;</button>
            <div class="lightbox-content">
                <img class="lightbox-image" src="" alt="">
            </div>
            <div class="lightbox-counter"></div>
        `;

        // Inject styles
        const style = document.createElement('style');
        style.textContent = `
            #lightbox-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: ${CONFIG.zIndex};
                display: none;
                opacity: 0;
                transition: opacity ${CONFIG.animationDuration}ms ease;
            }
            #lightbox-overlay.active {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            #lightbox-overlay.visible {
                opacity: 1;
            }
            .lightbox-backdrop {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.92);
                cursor: pointer;
            }
            .lightbox-content {
                position: relative;
                max-width: 90vw;
                max-height: 90vh;
                z-index: 1;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .lightbox-image {
                max-width: 90vw;
                max-height: 85vh;
                object-fit: contain;
                border-radius: 8px;
                box-shadow: 0 25px 80px rgba(0, 0, 0, 0.5);
                transform: scale(0.9);
                transition: transform ${CONFIG.animationDuration}ms ease;
            }
            #lightbox-overlay.visible .lightbox-image {
                transform: scale(1);
            }
            .lightbox-close {
                position: absolute;
                top: 20px;
                right: 25px;
                width: 50px;
                height: 50px;
                background: rgba(255, 255, 255, 0.1);
                border: none;
                border-radius: 50%;
                color: white;
                font-size: 32px;
                cursor: pointer;
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s ease;
            }
            .lightbox-close:hover {
                background: rgba(255, 255, 255, 0.2);
                transform: scale(1.1);
            }
            .lightbox-nav {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 55px;
                height: 55px;
                background: rgba(255, 255, 255, 0.1);
                border: none;
                border-radius: 50%;
                color: white;
                font-size: 28px;
                cursor: pointer;
                z-index: 2;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: all 0.2s ease;
            }
            .lightbox-nav:hover {
                background: rgba(255, 255, 255, 0.25);
                transform: translateY(-50%) scale(1.1);
            }
            .lightbox-nav.hidden {
                display: none;
            }
            .lightbox-prev { left: 20px; }
            .lightbox-next { right: 20px; }
            .lightbox-counter {
                position: absolute;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                color: rgba(255, 255, 255, 0.7);
                font-size: 14px;
                font-family: system-ui, sans-serif;
                z-index: 2;
            }
            /* Make images clickable with subtle indicator */
            img:not([data-no-lightbox]) {
                cursor: zoom-in;
            }
        `;

        document.head.appendChild(style);
        document.body.appendChild(overlay);
    }

    /**
     * Attach event listeners
     */
    function attachEventListeners() {
        // Click on images
        document.addEventListener('click', function (e) {
            const img = e.target.closest(CONFIG.selector);
            if (img && !e.target.closest('#lightbox-overlay')) {
                e.preventDefault();
                openLightbox(img);
            }
        });

        // Close button
        overlay.querySelector('.lightbox-close').addEventListener('click', closeLightbox);

        // Backdrop click
        overlay.querySelector('.lightbox-backdrop').addEventListener('click', closeLightbox);

        // Navigation
        overlay.querySelector('.lightbox-prev').addEventListener('click', showPrev);
        overlay.querySelector('.lightbox-next').addEventListener('click', showNext);

        // Keyboard
        document.addEventListener('keydown', function (e) {
            if (!isOpen) return;

            switch (e.key) {
                case 'Escape':
                    closeLightbox();
                    break;
                case 'ArrowLeft':
                    showPrev();
                    break;
                case 'ArrowRight':
                    showNext();
                    break;
            }
        });
    }

    /**
     * Open lightbox with the clicked image
     */
    function openLightbox(clickedImg) {
        // Collect all images on the page
        currentImages = Array.from(document.querySelectorAll(CONFIG.selector));
        currentIndex = currentImages.indexOf(clickedImg);

        if (currentIndex === -1) {
            currentImages = [clickedImg];
            currentIndex = 0;
        }

        showImage(currentIndex);

        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';

        // Trigger animation
        requestAnimationFrame(() => {
            overlay.classList.add('visible');
        });

        isOpen = true;
    }

    /**
     * Close lightbox
     */
    function closeLightbox() {
        overlay.classList.remove('visible');
        document.body.style.overflow = '';

        setTimeout(() => {
            overlay.classList.remove('active');
        }, CONFIG.animationDuration);

        isOpen = false;
    }

    /**
     * Show image at index
     */
    function showImage(index) {
        const img = currentImages[index];
        const lightboxImg = overlay.querySelector('.lightbox-image');
        const counter = overlay.querySelector('.lightbox-counter');
        const prevBtn = overlay.querySelector('.lightbox-prev');
        const nextBtn = overlay.querySelector('.lightbox-next');

        // Use data-full-src if available, otherwise use src
        lightboxImg.src = img.dataset.fullSrc || img.src;
        lightboxImg.alt = img.alt || 'Image';

        // Update counter
        if (currentImages.length > 1) {
            counter.textContent = `${index + 1} / ${currentImages.length}`;
            counter.style.display = 'block';
            prevBtn.classList.toggle('hidden', index === 0);
            nextBtn.classList.toggle('hidden', index === currentImages.length - 1);
        } else {
            counter.style.display = 'none';
            prevBtn.classList.add('hidden');
            nextBtn.classList.add('hidden');
        }
    }

    /**
     * Show previous image
     */
    function showPrev() {
        if (currentIndex > 0) {
            currentIndex--;
            showImage(currentIndex);
        }
    }

    /**
     * Show next image
     */
    function showNext() {
        if (currentIndex < currentImages.length - 1) {
            currentIndex++;
            showImage(currentIndex);
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose public API
    window.Lightbox = {
        open: openLightbox,
        close: closeLightbox,
        refresh: function () {
            currentImages = Array.from(document.querySelectorAll(CONFIG.selector));
        }
    };

})();

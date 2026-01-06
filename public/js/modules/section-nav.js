/**
 * Section Navigation Behavior
 * - Sticky below header
 * - Auto-hide on inactivity (no scroll/mousemove)
 */

document.addEventListener('DOMContentLoaded', function () {
    const navContainer = document.querySelector('.section-nav-container');
    if (!navContainer) return;

    let inactivityTimer;
    const INACTIVITY_DELAY = 500; // 0.5 seconds

    function showNav() {
        navContainer.classList.remove('section-nav-hidden');
        resetTimer();
    }

    function hideNav() {
        // Only hide if we are scrolled down past the initial hero position
        // Identifying "initial position" is tricky if it's sticky.
        // But the user said "follow us every time", implying sticky.
        // And "disappear if no movement".

        // Let's assume we hide it even at the top if inactive? 
        // No, typically you only hide floating elements. 
        // If it's sitting in the flow at the top, hiding it looks weird (empty bar).

        // Let's check potential sticky state.
        // A simple heuristic: if window.scrollY > 300 (past hero typically), valid to hide.
        if (window.scrollY > 100) {
            navContainer.classList.add('section-nav-hidden');
        }
    }

    function resetTimer() {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(hideNav, INACTIVITY_DELAY);
    }

    // Event Listeners
    window.addEventListener('scroll', showNav, { passive: true });
    window.addEventListener('mousemove', showNav, { passive: true });

    // Keep visible if hovering the nav itself
    navContainer.addEventListener('mouseenter', () => {
        clearTimeout(inactivityTimer);
        navContainer.classList.remove('section-nav-hidden');
    });

    navContainer.addEventListener('mouseleave', resetTimer);

    // Initial State
    resetTimer();
});

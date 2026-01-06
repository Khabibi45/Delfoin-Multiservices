<?php

function render_section_nav($links)
{
    if (empty($links))
        return;
    ?>
    <style>
        /* Inline inclusion for simplicity if CSS file loading is delayed, 
                   but ideally this should be linked in head. 
                   We will trust the CSS file inclusion in head. */
    </style>
    <div class="section-nav-container">
        <ul class="section-nav">
            <?php foreach ($links as $link): ?>
                <li class="section-nav__item">
                    <a href="<?php echo htmlspecialchars($link['anchor']); ?>" class="section-nav__link">
                        <?php echo htmlspecialchars($link['text']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <script src="js/modules/section-nav.js"></script>
    <?php
}
?>
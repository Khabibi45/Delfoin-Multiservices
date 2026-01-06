<?php
/**
 * Module: portfolio-grid
 * Grille de portfolio créatif
 */

function render_portfolio_grid($data = [], $moduleId = '')
{
    $defaults = [
        'header' => [
            'title' => 'Mes Réalisations',
            'subtitle' => 'Une sélection de mes projets créatifs les plus récents et les plus marquants'
        ],
        'filters' => [
            ['label' => 'Tous', 'filter' => '*', 'active' => true],
            ['label' => 'Branding', 'filter' => 'branding', 'active' => false],
            ['label' => 'Web Design', 'filter' => 'web', 'active' => false],
            ['label' => 'UI/UX', 'filter' => 'ui', 'active' => false],
            ['label' => 'Photographie', 'filter' => 'photo', 'active' => false]
        ],
        'items' => [
            [
                'category' => 'Branding',
                'filter_category' => 'branding',
                'title' => 'Identité Maison de Luxe',
                'description' => "Création d'une identité visuelle complète pour une marque de luxe parisienne.",
                'image' => 'https://images.unsplash.com/photo-1561070791-2526d30994b5?w=800&h=1200&fit=crop',
                'link' => '#',
                'size' => 'tall'
            ],
            [
                'category' => 'Web Design',
                'filter_category' => 'web',
                'title' => 'E-commerce Fashion',
                'description' => "Refonte complète d'une boutique en ligne de mode.",
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop',
                'link' => '#',
                'size' => ''
            ],
            [
                'category' => 'UI/UX',
                'filter_category' => 'ui',
                'title' => 'Application Mobile Fitness',
                'description' => "Design d'interface pour une app de coaching sportif.",
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800&h=600&fit=crop',
                'link' => '#',
                'size' => ''
            ],
            [
                'category' => 'Photographie',
                'filter_category' => 'photo',
                'title' => 'Campagne Nature',
                'description' => "Direction artistique et photographie pour une campagne environnementale.",
                'image' => 'https://images.unsplash.com/photo-1493246507139-91e8fad9978e?w=1200&h=600&fit=crop',
                'link' => '#',
                'size' => 'wide'
            ],
            [
                'category' => 'Branding',
                'filter_category' => 'branding',
                'title' => 'Startup Tech',
                'description' => "Création d'identité pour une startup innovante.",
                'image' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?w=800&h=600&fit=crop',
                'link' => '#',
                'size' => ''
            ],
            [
                'category' => 'Web Design',
                'filter_category' => 'web',
                'title' => 'Portfolio Architecte',
                'description' => "Site vitrine minimaliste pour un cabinet d'architecture.",
                'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?w=800&h=600&fit=crop',
                'link' => '#',
                'size' => ''
            ]
        ],
        'cta' => [
            'text' => 'Vous avez un projet en tête ?',
            'button_text' => 'Discutons ensemble',
            'button_link' => '#contact'
        ]
    ];

    $config = array_merge($defaults, $data);
    ?>

    <section class="portfolio-grid" data-module="<?= $moduleId ?>">
        <div class="container">
            <header class="portfolio-header">
                <h2 class="portfolio-title" data-field="header.title"><?= htmlspecialchars($config['header']['title']) ?>
                </h2>
                <p class="portfolio-subtitle" data-field="header.subtitle">
                    <?= htmlspecialchars($config['header']['subtitle']) ?>
                </p>
            </header>

            <div class="portfolio-filters">
                <?php foreach ($config['filters'] as $index => $filter): ?>
                    <button class="filter-btn <?= $filter['active'] ? 'active' : '' ?>"
                        data-filter="<?= htmlspecialchars($filter['filter']) ?>">
                        <span data-field="filters.<?= $index ?>.label"><?= htmlspecialchars($filter['label']) ?></span>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="portfolio-masonry">
                <?php foreach ($config['items'] as $index => $item): ?>
                    <article class="portfolio-item <?= htmlspecialchars($item['size']) ?>"
                        data-category="<?= htmlspecialchars($item['filter_category']) ?>">

                        <?php if (isset($item['type']) && $item['type'] === 'video'): ?>
                            <div class="portfolio-media-container">
                                <video controls class="portfolio-video" style="width: 100%; height: auto; border-radius: 8px;">
                                    <source src="<?= htmlspecialchars($item['video_src']) ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php elseif (isset($item['type']) && $item['type'] === 'carousel'): ?>
                            <div class="portfolio-carousel-mini" id="carousel-<?= $index ?>">
                                <div class="portfolio-carousel-mini__track">
                                    <?php foreach ($item['images'] as $imgIndex => $imgSrc): ?>
                                        <img src="<?= htmlspecialchars($imgSrc) ?>"
                                            class="portfolio-carousel-mini__img <?= $imgIndex === 0 ? 'active' : '' ?>"
                                            alt="Slide <?= $imgIndex ?>">
                                    <?php endforeach; ?>
                                </div>
                                <div class="portfolio-carousel-mini__controls">
                                    <button class="portfolio-carousel-mini__btn prev"
                                        onclick="moveMiniCarousel(<?= $index ?>, -1)">&#10094;</button>
                                    <button class="portfolio-carousel-mini__btn next"
                                        onclick="moveMiniCarousel(<?= $index ?>, 1)">&#10095;</button>
                                </div>
                            </div>
                        <?php else: ?>
                            <img src="<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['title']) ?>"
                                class="portfolio-image" data-field="items.<?= $index ?>.image" data-type="image">
                        <?php endif; ?>

                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <span class="portfolio-category"
                                    data-field="items.<?= $index ?>.category"><?= htmlspecialchars($item['category']) ?></span>
                                <h3 class="portfolio-item-title" data-field="items.<?= $index ?>.title">
                                    <?= htmlspecialchars($item['title']) ?>
                                </h3>
                                <p class="portfolio-item-desc" data-field="items.<?= $index ?>.description">
                                    <?= htmlspecialchars($item['description']) ?>
                                </p>
                                <?php if (!empty($item['link']) && $item['link'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($item['link']) ?>" class="portfolio-link"
                                        data-link-field="items.<?= $index ?>.link">
                                        Voir le projet
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <button type="button" class="portfolio-preview-btn"
                                    onclick="event.stopPropagation(); this.closest('.portfolio-item').querySelector('img').click();">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" width="18" height="18">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Prévisualiser
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
                <div class="portfolio-empty-message" id="empty-message">
                    <h3>Bientôt disponible</h3>
                    <p>De nouveaux projets arrivent dans cette catégorie.</p>
                </div>
            </div>

            <?php if (!empty($config['cta']['text'])): ?>
                <div class="portfolio-cta">
                    <p class="portfolio-cta-text" data-field="cta.text"><?= htmlspecialchars($config['cta']['text']) ?></p>
                    <a href="<?= htmlspecialchars($config['cta']['button_link']) ?>" class="portfolio-cta-btn"
                        data-field="cta.button_text" data-link-field="cta.button_link">
                        <?= htmlspecialchars($config['cta']['button_text']) ?>
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Filtres
            const filterBtns = document.querySelectorAll('.filter-btn');
            const items = document.querySelectorAll('.portfolio-item');
            const emptyMessage = document.getElementById('empty-message');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filter = this.dataset.filter;
                    let visibleCount = 0;

                    items.forEach(item => {
                        if (filter === '*' || item.dataset.category === filter) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeIn 0.5s ease';
                            visibleCount++;
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    // Show/Hide empty message
                    if (visibleCount === 0) {
                        emptyMessage.style.display = 'block';
                        // Force grid to be block or flex to center message if using masonry grid
                        document.querySelector('.portfolio-masonry').style.display = 'block';
                    } else {
                        emptyMessage.style.display = 'none';
                        document.querySelector('.portfolio-masonry').style.display = 'grid';
                        
                        // Smart scroll: scroll to first visible item of this category
                        if (filter !== '*') {
                            const firstVisibleItem = document.querySelector(`.portfolio-item[data-category="${filter}"]`);
                            if (firstVisibleItem) {
                                setTimeout(() => {
                                    firstVisibleItem.scrollIntoView({ 
                                        behavior: 'smooth', 
                                        block: 'center' 
                                    });
                                }, 100);
                            }
                        }
                    }
                });
            });
        });
    </script>
    <script>
        function moveMiniCarousel(index, direction) {
            const carousel = document.getElementById('carousel-' + index);
            const images = carousel.querySelectorAll('.portfolio-carousel-mini__img');
            let activeIndex = 0;
            images.forEach((img, i) => { if (img.classList.contains('active')) activeIndex = i; });

            images[activeIndex].classList.remove('active');
            let newIndex = (activeIndex + direction + images.length) % images.length;
            images[newIndex].classList.add('active');
        }
    </script>
    <?php
}
?>
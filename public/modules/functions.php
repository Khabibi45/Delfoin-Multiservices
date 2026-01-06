<?php
/**
 * Module render functions
 */

function render_header_classic($data = [], $moduleId = '')
{
    $defaults = ['logo' => 'MonSite', 'logo_image' => '', 'nav_links' => [['text' => 'Accueil', 'url' => '#', 'active' => true], ['text' => 'Services', 'url' => '#services'], ['text' => 'À propos', 'url' => '#about'], ['text' => 'Contact', 'url' => '#contact']], 'cta_text' => 'Devis gratuit', 'cta_link' => '#contact', 'cta_image' => ''];
    $config = array_merge($defaults, $data);
    ?>
    <header class="header-classic" id="main-header" data-module="<?= $moduleId ?>">
        <div class="header-classic__container">
            <a href="#" class="header-classic__logo">
                <?php if (!empty($config['logo_image'])): ?>
                    <img src="<?= htmlspecialchars($config['logo_image']) ?>" alt="<?= htmlspecialchars($config['logo']) ?>"
                        style="max-height: 60px;" data-field="logo_image" data-type="image">
                <?php else: ?>
                    <span data-field="logo"><?= htmlspecialchars($config['logo']) ?></span>
                <?php endif; ?>
            </a>
            <nav class="header-classic__nav">
                <?php foreach ($config['nav_links'] as $index => $link): ?>
                    <a href="<?= htmlspecialchars($link['url']) ?>"
                        class="header-classic__nav-link <?= !empty($link['active']) ? 'header-classic__nav-link--active' : '' ?>"
                        data-field="nav_links.<?= $index ?>.text"
                        data-link-field="nav_links.<?= $index ?>.url"><?= htmlspecialchars($link['text']) ?></a>
                <?php endforeach; ?>
            </nav>
            <a href="<?= htmlspecialchars($config['cta_link']) ?>" class="header-classic__cta" data-link-field="cta_link">
                <?php if (!empty($config['cta_image'])): ?>
                    <img src="<?= htmlspecialchars($config['cta_image']) ?>" alt="" class="header-classic__cta-icon"
                        style="height: 20px; width: auto; margin-right: 8px; vertical-align: middle;" data-field="cta_image"
                        data-type="image">
                <?php endif; ?>
                <span data-field="cta_text"><?= htmlspecialchars($config['cta_text']) ?></span>
            </a>
            <button class="header-classic__mobile-toggle" aria-label="Menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
        </div>
    </header>
    <script>window.addEventListener('scroll', () => { document.getElementById('main-header').classList.toggle('header-classic--scrolled', window.scrollY > 50); });</script>
    <?php
}


/**
 * Module: hero-classic
 * Hero plein écran avec image de fond, overlay et CTA
 */

function render_hero_classic($data = [], $moduleId = '')
{
    $defaults = [
        'headline' => 'Bienvenue sur notre site',
        'subheadline' => 'Découvrez nos services exceptionnels et laissez-nous vous accompagner dans vos projets.',
        'cta_text' => 'Découvrir',
        'cta_link' => '#services',
        'background_image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920',
        'show_scroll_indicator' => true
    ];

    $config = array_merge($defaults, $data);
    ?>
    <section class="hero-classic" data-module="<?= $moduleId ?>">
        <div class="hero-classic__background">
            <img src="<?= htmlspecialchars($config['background_image']) ?>" alt="Hero background" loading="eager"
                data-field="background_image" data-type="image">
        </div>
        <div class="hero-classic__overlay"></div>

        <div class="hero-classic__content">
            <h1 class="hero-classic__title" data-field="headline"><?= $config['headline'] ?></h1>
            <p class="hero-classic__subtitle" data-field="subheadline"><?= htmlspecialchars($config['subheadline']) ?></p>
            <a href="<?= htmlspecialchars($config['cta_link']) ?>" class="hero-classic__cta" data-field="cta_text"
                data-link-field="cta_link">
                <?= htmlspecialchars($config['cta_text']) ?>
            </a>
        </div>

        <?php if ($config['show_scroll_indicator']): ?>
            <div class="hero-classic__scroll-indicator">
                <div class="hero-classic__scroll-mouse"></div>
                <span class="hero-classic__scroll-text">Scroll</span>
            </div>
        <?php endif; ?>
    </section>
    <?php
}


/**
 * Module: restaurant-chef
 * Présentation du chef du restaurant
 */

function render_restaurant_chef($data = [], $moduleId = '')
{
    $defaults = [
        'intro' => 'Notre Chef',
        'name' => 'Pierre Durand',
        'title' => 'Chef Exécutif · Maître Restaurateur',
        'image' => 'https://images.unsplash.com/photo-1577219491135-ce391730fb2c?w=600&h=750&fit=crop',
        'signature_dish' => 'Homard Bleu Breton',
        'bio_p1' => 'Passionné de gastronomie depuis son plus jeune âge, Pierre Durand a forgé son talent auprès des plus grands noms de la cuisine française. Après avoir fait ses armes chez Alain Ducasse et passé trois ans au Japon pour maîtriser les techniques de la cuisine kaiseki, il revient en France avec une vision unique.',
        'bio_p2' => 'Sa philosophie : sublimer les produits du terroir français avec des touches d\'inspiration internationale, tout en respectant les saisons et les producteurs locaux qui partagent sa passion de l\'excellence.',
        'quote' => 'La cuisine, c\'est l\'amour du produit et le respect de ceux qui le cultivent. Chaque assiette raconte une histoire, celle de nos terroirs et de nos rencontres.',
        'credentials' => [
            ['icon' => 'star', 'text' => '2 Étoiles Michelin'],
            ['icon' => 'badge', 'text' => 'Maître Restaurateur'],
            ['icon' => 'time', 'text' => '25 ans d\'expérience'],
            ['icon' => 'globe', 'text' => 'Formation internationale']
        ]
    ];

    $config = array_merge($defaults, $data);
    ?>

    <section class="restaurant-chef" data-module="<?= $moduleId ?>">
        <div class="container">
            <div class="chef-wrapper">
                <!-- Photo -->
                <div class="chef-image-container">
                    <div class="chef-image-frame">
                        <img src="<?= htmlspecialchars($config['image']) ?>"
                            alt="Chef <?= htmlspecialchars($config['name']) ?>" data-field="image" data-type="image">
                    </div>
                    <?php if (!empty($config['signature_dish'])): ?>
                        <div class="chef-signature-badge">
                            <span>Plat signature</span>
                            <strong data-field="signature_dish"><?= htmlspecialchars($config['signature_dish']) ?></strong>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Contenu -->
                <div class="chef-content">
                    <span class="chef-intro" data-field="intro"><?= htmlspecialchars($config['intro']) ?></span>
                    <h2 class="chef-name" data-field="name"><?= htmlspecialchars($config['name']) ?></h2>
                    <p class="chef-title" data-field="title"><?= htmlspecialchars($config['title']) ?></p>

                    <div class="chef-bio">
                        <?php if (!empty($config['bio_p1'])): ?>
                            <p data-field="bio_p1"><?= nl2br(htmlspecialchars($config['bio_p1'])) ?></p>
                        <?php endif; ?>
                        <?php if (!empty($config['bio_p2'])): ?>
                            <p data-field="bio_p2"><?= nl2br(htmlspecialchars($config['bio_p2'])) ?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Credentials -->
                    <?php if (!empty($config['credentials'])): ?>
                        <div class="chef-credentials">
                            <?php foreach ($config['credentials'] as $index => $cred): ?>
                                <div class="chef-credential">
                                    <?php if ($cred['icon'] === 'star'): ?>
                                        <svg fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" />
                                        </svg>
                                    <?php elseif ($cred['icon'] === 'badge'): ?>
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                    <?php elseif ($cred['icon'] === 'time'): ?>
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    <?php else: ?>
                                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    <?php endif; ?>
                                    <span data-field="credentials.<?= $index ?>.text"><?= htmlspecialchars($cred['text']) ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Citation -->
                    <?php if (!empty($config['quote'])): ?>
                        <blockquote class="chef-quote">
                            <p data-field="quote"><?= htmlspecialchars($config['quote']) ?></p>
                        </blockquote>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}


/**
 * Module: services-grid
 * Grille de services avec icônes
 */

function render_services_grid($data = [], $moduleId = '')
{
    $defaults = [
        'overtitle' => 'Nos services',
        'title' => 'Ce que nous faisons',
        'subtitle' => 'Des solutions sur mesure pour répondre à tous vos besoins.',
        'services' => [
            [
                'icon' => 'code',
                'title' => 'Développement Web',
                'description' => 'Sites web modernes et performants, adaptés à vos besoins.',
                'link' => '#'
            ],
            [
                'icon' => 'palette',
                'title' => 'Design UX/UI',
                'description' => 'Interfaces intuitives et esthétiques pour une expérience optimale.',
                'link' => '#'
            ],
            [
                'icon' => 'phone',
                'title' => 'Applications Mobile',
                'description' => 'Apps iOS et Android natives ou cross-platform.',
                'link' => '#'
            ],
            [
                'icon' => 'chart',
                'title' => 'Marketing Digital',
                'description' => 'Stratégies pour booster votre visibilité en ligne.',
                'link' => '#'
            ],
            [
                'icon' => 'cloud',
                'title' => 'Cloud & DevOps',
                'description' => 'Infrastructure scalable et déploiement automatisé.',
                'link' => '#'
            ],
            [
                'icon' => 'shield',
                'title' => 'Cybersécurité',
                'description' => 'Protection de vos données et systèmes informatiques.',
                'link' => '#'
            ]
        ]
    ];

    $config = array_merge($defaults, $data);

    $icons = [
        'code' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>',
        'palette' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="13.5" cy="6.5" r="2.5"></circle><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.2-.64-1.67-.08-.1-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9z"></path></svg>',
        'phone' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>',
        'chart' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>',
        'cloud' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg>',
        'shield' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>',
        'droplet' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>',
        'fire' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8.56 2.9A7 7 0 0 1 19 9a7 7 0 0 1-7 7H12v4"></path><path d="M5 9a7 7 0 0 1 7-7v4"></path></svg>',
        'wind' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"></path></svg>',
        'zap' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>',
    ];
    ?>
    <section class="services-grid" data-module="<?= $moduleId ?>">
        <div class="services-grid__header">
            <p class="services-grid__overtitle" data-field="overtitle"><?= htmlspecialchars($config['overtitle']) ?></p>
            <h2 class="services-grid__title" data-field="title"><?= htmlspecialchars($config['title']) ?></h2>
            <p class="services-grid__subtitle" data-field="subtitle"><?= htmlspecialchars($config['subtitle']) ?></p>
        </div>

        <div class="services-grid__grid">
            <?php foreach ($config['services'] as $index => $service): ?>
                <div class="services-grid__card">
                    <div class="services-grid__icon">
                        <?= $icons[$service['icon']] ?? $icons['code'] ?>
                    </div>
                    <h3 class="services-grid__card-title" data-field="services.<?= $index ?>.title">
                        <?= htmlspecialchars($service['title']) ?>
                    </h3>
                    <p class="services-grid__card-text" data-field="services.<?= $index ?>.description">
                        <?= htmlspecialchars($service['description']) ?>
                    </p>
                    <?php if (!empty($service['link'])): ?>
                        <a href="<?= htmlspecialchars($service['link']) ?>" class="services-grid__card-link"
                            data-link-field="services.<?= $index ?>.link">
                            En savoir plus
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
}


/**
 * Module: testimonials-carousel
 * Carousel de témoignages clients
 */

function render_testimonials_carousel($data = [], $moduleId = '')
{
    $defaults = [
        'title' => 'Ce que disent nos clients',
        'testimonials' => [
            [
                'quote' => 'Une équipe exceptionnelle qui a su comprendre nos besoins et les traduire en une solution parfaite. Je recommande vivement !',
                'author_name' => 'Marie Dupont',
                'author_role' => 'Directrice Marketing, TechCorp',
                'author_photo' => 'https://i.pravatar.cc/128?img=1'
            ],
            [
                'quote' => 'Professionnalisme, réactivité et créativité. Notre site web a dépassé toutes nos attentes.',
                'author_name' => 'Pierre Martin',
                'author_role' => 'CEO, StartupXYZ',
                'author_photo' => 'https://i.pravatar.cc/128?img=3'
            ],
            [
                'quote' => 'Un partenaire de confiance qui nous accompagne depuis 5 ans. Leur expertise est inestimable.',
                'author_name' => 'Sophie Bernard',
                'author_role' => 'Fondatrice, EcoStyle',
                'author_photo' => 'https://i.pravatar.cc/128?img=5'
            ]
        ],
        'autoplay' => true,
        'autoplay_speed' => 5000
    ];

    $config = array_merge($defaults, $data);
    $carouselId = 'testimonials-carousel-' . uniqid();
    ?>
    <section class="testimonials-carousel" id="<?= $carouselId ?>" data-module="<?= $moduleId ?>">
        <div class="testimonials-carousel__header">
            <h2 class="testimonials-carousel__title" data-field="title"><?= htmlspecialchars($config['title']) ?></h2>
        </div>

        <div class="testimonials-carousel__container">
            <div class="testimonials-carousel__track">
                <div class="testimonials-carousel__slides">
                    <?php foreach ($config['testimonials'] as $index => $testimonial): ?>
                        <div class="testimonials-carousel__slide">
                            <div class="testimonials-carousel__quote-mark">"</div>
                            <p class="testimonials-carousel__text" data-field="testimonials.<?= $index ?>.quote">
                                <?= htmlspecialchars($testimonial['quote']) ?>
                            </p>
                            <div class="testimonials-carousel__author">
                                <!-- Image removed as per user request -->

                                <div class="testimonials-carousel__author-info">
                                    <p class="testimonials-carousel__author-name"
                                        data-field="testimonials.<?= $index ?>.author_name">
                                        <?= $testimonial['author_name'] ?>
                                    </p>
                                    <p class="testimonials-carousel__author-role"
                                        data-field="testimonials.<?= $index ?>.author_role">
                                        <?= $testimonial['author_role'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="testimonials-carousel__nav testimonials-carousel__nav--prev">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 18l-6-6 6-6" />
                </svg>
            </button>
            <button class="testimonials-carousel__nav testimonials-carousel__nav--next">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                </svg>
            </button>

            <div class="testimonials-carousel__dots">
                <?php foreach ($config['testimonials'] as $index => $t): ?>
                    <button class="testimonials-carousel__dot <?= $index === 0 ? 'active' : '' ?>"
                        data-index="<?= $index ?>"></button>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        (function () {
            const carousel = document.getElementById('<?= $carouselId ?>');
            const slides = carousel.querySelector('.testimonials-carousel__slides');
            const dots = carousel.querySelectorAll('.testimonials-carousel__dot');
            const prevBtn = carousel.querySelector('.testimonials-carousel__nav--prev');
            const nextBtn = carousel.querySelector('.testimonials-carousel__nav--next');
            const totalSlides = dots.length;
            let current = 0;
            let autoplayInterval;

            function goToSlide(index) {
                current = (index + totalSlides) % totalSlides;
                slides.style.transform = `translateX(-${current * 100}%)`;
                dots.forEach((d, i) => d.classList.toggle('active', i === current));
            }

            prevBtn.addEventListener('click', () => goToSlide(current - 1));
            nextBtn.addEventListener('click', () => goToSlide(current + 1));
            dots.forEach(dot => dot.addEventListener('click', () => goToSlide(parseInt(dot.dataset.index))));

            <?php if ($config['autoplay']): ?>
                autoplayInterval = setInterval(() => goToSlide(current + 1), <?= $config['autoplay_speed'] ?>);
                carousel.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
                carousel.addEventListener('mouseleave', () => autoplayInterval = setInterval(() => goToSlide(current + 1), <?= $config['autoplay_speed'] ?>));
            <?php endif; ?>
        })();
    </script>
    <?php
}


function render_contact_minimal($data = [], $moduleId = '')
{
    $defaults = ['title' => 'Un projet en tête ?', 'email' => 'hello@exemple.fr', 'phone_number' => ''];
    $config = array_merge($defaults, $data);
    ?>
    <section class="contact-minimal" data-module="<?= $moduleId ?>">
        <h2 class="contact-minimal__title" data-field="title"><?= $config['title'] ?></h2>

        <div class="contact-minimal__info"
            style="display: flex; flex-direction: column; gap: 10px; align-items: center; margin-bottom: 2rem;">
            <div style="display: flex; align-items: center; gap: 12px; justify-content: center;">
                <a href="mailto:<?= htmlspecialchars($config['email']) ?>" class="contact-minimal__email"
                    style="color: inherit;" data-field="email"><?= htmlspecialchars($config['email']) ?></a>
                <button
                    onclick="navigator.clipboard.writeText('<?= htmlspecialchars($config['email']) ?>'); const btn = this; const originalHTML = btn.innerHTML; btn.innerHTML = '<svg width=\'20\' height=\'20\' viewBox=\'0 0 24 24\' fill=\'none\' stroke=\'currentColor\' stroke-width=\'2\'><polyline points=\'20 6 9 17 4 12\'></polyline></svg>'; setTimeout(() => btn.innerHTML = originalHTML, 2000);"
                    style="background: none; border: none; cursor: pointer; color: var(--color-text-secondary); padding: 8px; display: flex; align-items: center; transition: all 0.2s; border-radius: 4px;"
                    onmouseover="this.style.backgroundColor='rgba(0,0,0,0.05)'; this.style.color='var(--color-primary)'"
                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--color-text-secondary)'"
                    title="Copier l'email" aria-label="Copier l'email">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                    </svg>
                </button>
            </div>
            <?php if (!empty($config['phone_number'])): ?>
                <a href="tel:<?= htmlspecialchars($config['phone_number']) ?>" class="contact-minimal__phone"
                    style="font-size: 2rem; color: inherit; text-decoration: none; font-weight: 500;"
                    data-field="phone_number"><?= htmlspecialchars($config['phone_number']) ?></a>
            <?php endif; ?>
        </div>

        <div class="contact-minimal__socials">
            <a href="https://www.facebook.com/profile.php?id=61580486061726&locale=fr_FR" target="_blank"
                rel="noopener noreferrer" class="contact-minimal__social" aria-label="Facebook">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/delfoin.multiservices/" target="_blank" rel="noopener noreferrer"
                class="contact-minimal__social" aria-label="Instagram">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
            </a>
        </div>
    </section>
    <?php
}



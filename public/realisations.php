<?php
require_once 'modules/functions.php';
require_once 'modules/portfolio-grid.php';

// Header data
$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php'],
        ['text' => 'Réalisations', 'url' => 'realisations.php', 'active' => true]
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

// Hero data (removed as per user request)

// Portfolio data - CLIMATISATION FIRST, PLOMBERIE SECOND
$portfolio_data = [
    'header' => [
        'title' => 'Mes Réalisations',
        'subtitle' => 'Découvrez mes interventions en images et vidéos : plomberie, climatisation et plus encore.'
    ],
    'filters' => [
        ['label' => 'Tous', 'filter' => '*', 'active' => true],
        ['label' => 'Plomberie', 'filter' => 'plomberie', 'active' => false],
        ['label' => 'Climatisation', 'filter' => 'climatisation', 'active' => false],
        ['label' => 'Electricité', 'filter' => 'electricite', 'active' => false]
    ],
    'items' => [
        // Climatisation Data - FIRST
        [
            'category' => 'Climatisation',
            'filter_category' => 'climatisation',
            'title' => 'Clim Réversible',
            'description' => 'Une clim réversible chauffe et rafraîchit tout en consommant 3 fois moins d\'énergie qu\'un radiateur classique.',
            'type' => 'carousel',
            'images' => [
                'images/photos/Climatisation/Caroussel_1/clim_1.webp',
                'images/photos/Climatisation/Caroussel_1/clim_2.webp',
                'images/photos/Climatisation/Caroussel_1/clim_3.webp'
            ],
            'size' => ''
        ],
        [
            'category' => 'Climatisation',
            'filter_category' => 'climatisation',
            'title' => 'Clim Gainable',
            'description' => 'Une clim gainable fonctionne comme une climatisation classique, mais l\'unité intérieure est cachée et diffuse l\'air via un réseau de gaines.',
            'type' => 'carousel',
            'images' => [
                'images/photos/Climatisation/Caroussel_2/CLIM1.webp',
                'images/photos/Climatisation/Caroussel_2/CLIM2.webp',
                'images/photos/Climatisation/Caroussel_2/CLIM3.webp'
            ],
            'size' => ''
        ],
        [
            'category' => 'Climatisation',
            'filter_category' => 'climatisation',
            'title' => 'VMC Gainable',
            'description' => "Installation d'un système de VMC gainable dans une pâtisserie avec variateur pour évacuation des fumées.",
            'type' => 'carousel',
            'images' => [
                'images/photos/Climatisation/Caroussel_3/CLIMATISATION1.webp',
                'images/photos/Climatisation/Caroussel_3/CLIMATISATION2.webp',
                'images/photos/Climatisation/Caroussel_3/CLIMATISATION3.webp'
            ],
            'size' => 'wide'
        ],
        // Plomberie Data - SECOND
        [
            'category' => 'Plomberie',
            'filter_category' => 'plomberie',
            'title' => 'Création d\'un système de recuperation d\'eau',
            'description' => 'Création d\'un système de douche moderne.',
            'type' => 'video',
            'video_src' => 'videos/Douche_Infini.mp4',
            'size' => ''
        ],
        [
            'category' => 'Plomberie',
            'filter_category' => 'plomberie',
            'title' => 'Installation Sanitaires',
            'description' => 'Installation complète de sanitaires.',
            'type' => 'video',
            'video_src' => 'videos/Prestation_Wc.mp4',
            'size' => ''
        ],
        [
            'category' => 'Plomberie',
            'filter_category' => 'plomberie',
            'title' => 'WC Suspendu',
            'description' => "Pose avant/après d'un WC suspendu, on peut y voir l'installation du bati support avant fermeture en placoplatre ainsi que les finitions.",
            'type' => 'carousel',
            'images' => [
                'images/photos/Plomberie/Plomberie_1.webp',
                'images/photos/Plomberie/Plomberie_2.webp'
            ],
            'size' => 'wide'
        ],
        // Electricité Data - Coming Soon

    ],
    'cta' => [
        'text' => '',
        'button_text' => '',
        'button_link' => ''
    ]
];

$contact_data = [
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '+33 6 15 80 81 93'
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réalisations - Delfoin Multiservices</title>
    <meta name="description"
        content="Découvrez nos chantiers en photos et vidéos : plomberie, électricité, climatisation à Gaillac et environs.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/theme-variables.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/base.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/modules/header-classic.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/modules/hero-classic.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/modules/portfolio-grid.css?v=<?= time() ?>">
    <link rel="stylesheet" href="css/modules/contact-minimal.css?v=<?= time() ?>">
</head>

<body>

    <?php render_header_classic($header_data); ?>

    <main>
        <?php render_portfolio_grid($portfolio_data); ?>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
</body>

</html>
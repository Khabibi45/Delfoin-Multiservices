<?php
if (file_exists(__DIR__ . '/../application/admin-kit/bootstrap.php')) {
    require_once __DIR__ . '/../application/admin-kit/bootstrap.php';
}
require_once 'modules/functions.php';

// Dynamic Content Helpers
function get_module_content($key, $default)
{
    if (!class_exists('AdminKit\Db'))
        return $default;
    try {
        $pdo = AdminKit\Db::pdo();
        $stmt = $pdo->prepare("SELECT content_json FROM modules WHERE module_key = :k LIMIT 1");
        $stmt->execute([':k' => $key]);
        $row = $stmt->fetch();
        if ($row && !empty($row['content_json'])) {
            $json = json_decode($row['content_json'], true);
            if (json_last_error() === JSON_ERROR_NONE)
                return $json;
        }
    } catch (Exception $e) {
    }
    return $default;
}

// Module Configs
$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php', 'active' => true],
        ['text' => 'Réalisations', 'url' => 'realisations.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Climatisation & Air',
    'subheadline' => 'Installation et maintenance de systèmes de climatisation pour votre confort estival.',
    'cta_text' => 'Me contacter',
    'cta_link' => '#contact',
    'background_image' => 'images/photos/IMG_1717.jpeg',
    'show_scroll_indicator' => true
];

$presentation_data = [
    'intro' => 'Fraîcheur & Confort',
    'name' => 'Expertise Climatique',
    'title' => 'Installation & Entretien',
    'image' => 'images/photos/Oncle_Camion_Zoom.jpeg', // Reusing available image
    'signature_dish' => '',
    'bio_p1' => 'Ne subissez plus les fortes chaleurs. Nous vous proposons des solutions de climatisation adaptées à votre logement ou local commercial.',
    'bio_p2' => 'Systèmes monosplit, multisplit ou gainable, nous assurons l\'installation, la mise en service et l\'entretien réglementaire de vos équipements.',
    'quote' => '',
    'credentials' => []
];

$services_data = [
    'overtitle' => 'Nos Prestations',
    'title' => 'Génie Climatique',
    'subtitle' => 'Un air sain à la bonne température.',
    'services' => [
        [
            'icon' => 'wind',
            'title' => 'Installation CVC',
            'description' => 'Pose de climatisation réversible et systèmes de ventilation.',
            'link' => 'climatisation-installation.php'
        ],
        [
            'icon' => 'shield',
            'title' => 'Maintenance',
            'description' => 'Nettoyage des filtres, vérification du fluide et désinfection.',
            'link' => 'climatisation-maintenance.php'
        ],
        [
            'icon' => 'sun',
            'title' => 'Pompes à Chaleur',
            'description' => 'Divisez votre facture de chauffage par 3 en remplaçant vos convecteurs par une PAC réversible.',
            'link' => 'climatisation-pompe-a-chaleur.php'
        ]
    ]
];

$testimonials_data = [
    'title' => 'Avis Clients Climatisation',
    'testimonials' => [
        [
            'quote' => 'Installation d\'une climatisation réversible dans notre salon. Travail soigné et chantier propre.',
            'author_name' => 'Sarah B.',
            'author_role' => 'Particulier',
            'author_photo' => ''
        ],
        [
            'quote' => 'Contrat de maintenance respecté à la lettre. Plus de soucis d\'odeurs ou de bruit.',
            'author_name' => 'Boulangerie Le Pain Doré',
            'author_role' => 'Commerce',
            'author_photo' => ''
        ],
        [
            'quote' => 'Un grand merci pour le dépannage de notre PAC en pleine canicule. Réactivité exemplaire !',
            'author_name' => 'M. et Mme Robert',
            'author_role' => 'Retraités',
            'author_photo' => ''
        ]
    ]
];

$contact_data = [
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '06 12 34 56 78'
];

require_once 'modules/section-nav.php';
$section_nav_links = [
    ['text' => 'Présentation', 'anchor' => '#presentation'],
    ['text' => 'Services', 'anchor' => '#services'],
    ['text' => 'Avis', 'anchor' => '#testimonials'],
    ['text' => 'Contact', 'anchor' => '#contact']
];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climatisation - Delfoin Multiservices</title>
    <meta name="description"
        content="Spécialiste de la climatisation : Installation, Entretien et Dépannage de systèmes réversibles et pompes à chaleur air/air.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/theme-variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/modules/header-classic.css">
    <link rel="stylesheet" href="css/modules/hero-classic.css">
    <link rel="stylesheet" href="css/modules/restaurant-chef.css">
    <link rel="stylesheet" href="css/modules/services-grid.css">
    <link rel="stylesheet" href="css/modules/testimonials-carousel.css">
    <link rel="stylesheet" href="css/modules/testimonials-carousel.css">
    <link rel="stylesheet" href="css/modules/contact-minimal.css">
    <link rel="stylesheet" href="css/modules/section-nav.css">
    <style>
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;

            /* ... */

            /* CSS restored */
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out;
        }

        #page-loader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .loader-logo {
            width: 300px;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .loader-progress-container {
            width: 200px;
            height: 2px;
            background: #f0f0f0;
            border-radius: 2px;
            overflow: hidden;
        }

        .loader-progress-bar {
            width: 0%;
            height: 100%;
            background: var(--color-primary, #45B97C);
            transition: width 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <!-- Loader -->
    <div id="page-loader">
        <img src="images/logo/logo_complet-removebg-preview.png" alt="Delfoin Multiservices" class="loader-logo">
        <div class="loader-progress-container">
            <div class="loader-progress-bar" id="loader-bar"></div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const bar = document.getElementById('loader-bar');
            const loader = document.getElementById('page-loader');
            requestAnimationFrame(() => { bar.style.width = '100%'; });
            window.addEventListener('load', function () {
                setTimeout(() => {
                    loader.classList.add('hidden');
                    setTimeout(() => loader.remove(), 500);
                }, 800);
            });
        });
    </script>

    <?php render_header_classic($header_data); ?>

    <main>
        <?php render_hero_classic($hero_data); ?>

        <?php render_section_nav($section_nav_links); ?>

        <div id="presentation">
            <?php render_restaurant_chef($presentation_data); ?>
        </div>

        <div id="services">
            <?php render_services_grid($services_data); ?>
        </div>

        <div id="testimonials">
            <?php render_testimonials_carousel($testimonials_data); ?>
        </div>

        <div id="contact">
            <?php
            $contact_data = ['title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>', 'email' => 'Delfoin.multiservices@gmail.com', 'phone_number' => '+33 6 64 95 49 41'];
            render_contact_minimal($contact_data);
            ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
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
        ['text' => 'Electricité', 'url' => 'electricite.php', 'active' => true],
        ['text' => 'Climatisation', 'url' => 'climatisation.php'],
        ['text' => 'Réalisations', 'url' => 'realisations.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Expertise Électrique',
    'subheadline' => 'Installation, mise aux normes et dépannage de vos réseaux électriques.',
    'cta_text' => 'Mes Solutions',
    'cta_link' => '#contact',
    'background_image' => 'images/photos/IMG_1717.jpeg',
    'show_scroll_indicator' => true
];

$presentation_data = [
    'intro' => 'Sécurité & Normes',
    'name' => 'Électricité Générale',
    'title' => 'Fiabilité et Sécurité',
    'image' => 'images/photos/Oncle_Face.jpeg',
    'signature_dish' => '',
    'bio_p1' => 'Une installation électrique vétuste peut être dangereuse. J\'assure la mise en sécurité de votre habitation selon les normes NF C 15-100.',
    'bio_p2' => 'Je réalise également l\'installation de tableaux électriques, prises, éclairages et la rénovation complète de vos installations.',
    'quote' => '',
    'credentials' => []
];

$services_data = [
    'overtitle' => 'Mes Prestations',
    'title' => 'Services Électriques',
    'subtitle' => 'Des installations sûres et durables.',
    'services' => [
        [
            'icon' => 'zap',
            'title' => 'Installation Neuve',
            'description' => 'Création complète de réseaux électriques pour constructions neuves et extensions.',
            'link' => 'electricite-installation-neuve.php'
        ],
        [
            'icon' => 'shield',
            'title' => 'Mise aux Normes',
            'description' => 'Remplacement de tableaux et mise en sécurité des installations anciennes.',
            'link' => 'electricite-mise-aux-normes.php'
        ],
        [
            'icon' => 'cloud',
            'title' => 'Rénovation',
            'description' => 'Remplacement de prises, interrupteurs et remise à neuf de l\'installation.',
            'link' => 'electricite-renovation.php'
        ],
        [
            'icon' => 'code',
            'title' => 'Dépannage 7j/7',
            'description' => 'Intervention rapide pour coupures de courant et pannes électriques.',
            'link' => 'electricite-depannage.php'
        ]
    ]
];

$testimonials_data = [
    'title' => 'Avis Clients Électricité',
    'testimonials' => [
        [
            'quote' => 'Après une coupure générale en pleine soirée, Antoine est intervenu en moins d\'une heure. Top !',
            'author_name' => 'Lucas B.',
            'author_role' => 'Restaurateur',
            'author_photo' => ''
        ],
        [
            'quote' => 'Installation de prises de recharge pour voiture électrique. Travail impeccable et explication claire.',
            'author_name' => 'Julie M.',
            'author_role' => 'Particulier',
            'author_photo' => ''
        ],
        [
            'quote' => 'Refonte totale de l\'électricité de notre maison des années 70. On se sent enfin en sécurité.',
            'author_name' => 'Famille Girard',
            'author_role' => 'Rénovation',
            'author_photo' => ''
        ]
    ]
];

$contact_data = [
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '+33 6 64 95 49 41'
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
    <title>Électricité - Delfoin Multiservices</title>
    <meta name="description" content="Expert en électricité : Installation, mise aux normes, dépannage et rénovation.">
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
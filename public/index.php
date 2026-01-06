<?php
// Admin Kit Bootstrap - intercepts /admin and /api routes
if (file_exists(__DIR__ . '/../application/admin-kit/bootstrap.php')) {
    require_once __DIR__ . '/../application/admin-kit/bootstrap.php';
}

require_once 'modules/functions.php';

// Dynamic Content Helpers
function is_admin_session()
{
    if (!isset($_COOKIE['ADMIN_TOKEN']))
        return false;
    if (!class_exists('AdminKit\Jwt'))
        return false;
    try {
        $secret = getenv('JWT_SECRET');
        if (!$secret)
            return false;
        $payload = AdminKit\Jwt::verify($_COOKIE['ADMIN_TOKEN'], $secret);
        return !empty($payload);
    } catch (Exception $e) {
        return false;
    }
}

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
        error_log("[SiteError] DB Fetch Failed for {$key}: " . $e->getMessage());
    }
    return $default;
}

// Initialize Module Data

// Module: header-classic
$header_classic_data_default = array(
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php', 'active' => true],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php'],
        ['text' => 'Réalisations', 'url' => 'realisations.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
);
$header_classic_data = get_module_content('header-classic', $header_classic_data_default);

// Module: hero-classic
$hero_classic_data_default = array(
    'headline' => '<span style="color: #FFFFFF;">DELFOIN</span> <span style="color: #45B97C;">Multiservices</span>',
    'subheadline' => 'Plomberie, Electricité et Climatisation. Installation, rénovation et dépannage.',
    'cta_text' => 'Nos Services',
    'cta_link' => '#services',
    'background_image' => 'images/photos/IMG_1717.jpeg',
    'show_scroll_indicator' => true
);
$hero_classic_data = get_module_content('hero-classic', $hero_classic_data_default);

// Module: restaurant-chef (Used for Presentation)
$restaurant_chef_data_default = array(
    'intro' => 'À propos',
    'name' => 'Antoine Delfoin',
    'title' => 'Artisan Multidisciplinaire',
    'image' => 'images/photos/Oncle_Face.jpeg',
    'signature_dish' => '',
    'bio_p1' => 'Je m’appelle Antoine, artisan à la tête de Delfoin Multiservices.',
    'bio_p2' => 'Titulaire de diplômes en plomberie, électricité et génie climatique, j’interviens pour vos travaux d’installation, de rénovation, d’entretien et de dépannage, dans le strict respect des normes en vigueur.',
    'quote' => '', // Removed as requested
    'credentials' => [] // Cleared
);
$restaurant_chef_data = get_module_content('restaurant-chef', $restaurant_chef_data_default);

// Module: services-grid
$services_grid_data_default = array(
    'overtitle' => 'Nos Domaines',
    'title' => 'Ce que nous faisons',
    'subtitle' => 'Des solutions sur mesure pour répondre à tous vos besoins.',
    'services' => [
        [
            'icon' => 'droplet',
            'title' => 'Plomberie',
            'description' => 'Installation sanitaire, réparation de fuites, robinetterie et tuyauterie.',
            'link' => 'plomberie.php'
        ],
        [
            'icon' => 'zap',
            'title' => 'Electricité',
            'description' => 'Installation complète, mise aux normes, dépannage, rénovation électrique et domotique.',
            'link' => 'electricite.php'
        ],
        [
            'icon' => 'wind',
            'title' => 'Climatisation',
            'description' => 'Installation de climatiseurs, entretien et dépannage de systèmes thermiques.',
            'link' => 'climatisation.php'
        ]
    ]
);
$services_grid_data = get_module_content('services-grid', $services_grid_data_default);

// Module: testimonials-carousel
$testimonials_carousel_data_default = array(
    'title' => 'Ce que disent nos clients',
    'testimonials' => [
        [
            'quote' => 'Réponse rapide. Travail propre et soigné tarif correct . Je recommande.',
            'author_name' => '<a href="https://www.travaux.com/professionnel/delfoin-multiservices" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: underline;">Utilisateur Travaux.com</a>',
            'author_role' => 'Basé à Gaillac',
            'author_photo' => ''
        ],
        [
            'quote' => 'Très bon travail, sérieux, ponctuel, fiable et respectueux du lieu (pièce du chantier nettoyé par Antoine à la fin du chantier). Je recommande sans problème.',
            'author_name' => 'Betty D.',
            'author_role' => '<a href="https://www.allovoisins.com/p/delfoinmultiservices" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: underline;">Client AlloVoisins</a>',
            'author_photo' => ''
        ],
        [
            'quote' => 'Intervention pour un dépannage de plomberie. Très consciencieux et disponible.',
            'author_name' => 'Jean Marie C.',
            'author_role' => '<a href="https://www.allovoisins.com/p/delfoinmultiservices" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: underline;">Client AlloVoisins</a>',
            'author_photo' => ''
        ],
        [
            'quote' => 'Antoine est intervenu pour le remplacement de notre climatisation... Le modèle proposé par ses soins (réversible double splits) marche très bien. Rapide, ponctuel et efficace...',
            'author_name' => 'Luc R.',
            'author_role' => '<a href="https://www.allovoisins.com/p/delfoinmultiservices" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: underline;">Client AlloVoisins</a>',
            'author_photo' => ''
        ]
    ]
);
$testimonials_carousel_data = get_module_content('testimonials-carousel', $testimonials_carousel_data_default);

// Module: contact-minimal
$contact_minimal_data_default = array(
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '+33 6 15 80 81 93'
);

$contact_minimal_data = get_module_content('contact-minimal', $contact_minimal_data_default);

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
    <title>Delfoin Multiservices - Plomberie, Chauffage, Climatisation</title>
    <meta name="description"
        content="Antoine Delfoin, artisan expert en plomberie, chauffage et climatisation. Services d'installation, dépannage et entretien.">
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
    <link rel="stylesheet" href="css/modules/contact-minimal.css">
    <link rel="stylesheet" href="css/modules/section-nav.css">
    <style>
        /* Minimalist Loader */
        #page-loader {
            position: fixed;

            /* ... */

            /* CSS restored */
            top: 0;
            left: 0;
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
                }, 800); // 800ms delay to see the loader
            });
        });
    </script>



    <?php
    render_header_classic($header_classic_data);
    ?>

    <main>
        <?php render_hero_classic($hero_classic_data); ?>

        <?php render_section_nav($section_nav_links); ?>

        <div id="presentation">
            <?php render_restaurant_chef($restaurant_chef_data); ?>
        </div>

        <div id="services">
            <?php render_services_grid($services_grid_data); ?>
        </div>

        <div id="testimonials">
            <?php render_testimonials_carousel($testimonials_carousel_data); ?>
        </div>

        <div id="contact">
            <?php render_contact_minimal($contact_minimal_data); ?>
        </div>
    </main>

    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
</body>

</html>
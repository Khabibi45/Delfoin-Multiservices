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
    'intro' => 'À propos de nous',
    'name' => 'Antoine Delfoin',
    'title' => 'Plombier, Électricien & Frigoriste à Gaillac et environs',
    'image' => 'images/photos/Oncle_Face.jpeg',
    'signature_dish' => '',
    'bio_p1' => 'Je m’appelle Antoine, artisan passionné à la tête de Delfoin Multiservices. Installé à Gaillac dans le Tarn (81), j\'interviens pour tous vos travaux de plomberie, d\'électricité et de climatisation, que ce soit pour une construction neuve ou une rénovation.',
    'bio_p2' => 'Fort de plusieurs années d’expérience et titulaire de diplômes reconnus, je propose des services complets : dépannage d\'urgence, mise aux normes électriques, installation de pompe à chaleur ou rénovation de salle de bain. Mon engagement ? Un travail soigné, respectueux des normes en vigueur et une réactivité exemplaire pour mes clients d\'Albi, Rabastens, Lisle-sur-Tarn et environs.',
    'quote' => '',
    'credentials' => []
);
$restaurant_chef_data = get_module_content('restaurant-chef', $restaurant_chef_data_default);

// Module: services-grid
$services_grid_data_default = array(
    'overtitle' => 'Nos Domaines d\'Expertise',
    'title' => 'Nos prestations techniques',
    'subtitle' => 'Des solutions professionnelles pour votre confort thermique et sanitaire.',
    'services' => [
        [
            'icon' => 'droplet',
            'title' => 'Plomberie Sanitaire',
            'description' => 'Installation complète de sanitaires, création de salle de bain, recherche de fuite d\'eau, débouchage et dépannage plomberie rapide secteur Gaillac/Albi.',
            'link' => 'plomberie.php'
        ],
        [
            'icon' => 'zap',
            'title' => 'Électricité Générale',
            'description' => 'Mise aux normes (NFC 15-100), remplacement de tableau électrique, installation de prises, éclairage et dépannage de panne électrique 7j/7.',
            'link' => 'electricite.php'
        ],
        [
            'icon' => 'wind',
            'title' => 'Climatisation & Chauffage',
            'description' => 'Pose de climatisation réversible, pompe à chaleur air/air, entretien annuel et dépannage de vos systèmes de chauffage toutes marques.',
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

// Module: faq-accordion
$faq_data_default = array(
    'title' => 'Questions Fréquentes',
    'subtitle' => 'Tout savoir sur nos interventions plomberie, électricité et clim.',
    'items' => [
        [
            'question' => 'Intervenez-vous en urgence ?',
            'answer' => 'Oui, pour les pannes critiques (fuite d\'eau importante, panne électrique totale), nous intervenons 7j/7 dans le secteur de Gaillac et Albi.'
        ],
        [
            'question' => 'Quel est votre périmètre d\'intervention ?',
            'answer' => 'Nous nous déplaçons principalement sur Gaillac (81600), Albi, Rabastens, Lisle-sur-Tarn et dans un rayon de 30 km alentour.'
        ],
        [
            'question' => 'Vos travaux sont-ils couverts par une garantie ?',
            'answer' => 'Absolument. En tant qu\'artisan qualifié, toutes nos installations sont couvertes par une garantie décennale et responsabilité civile professionnelle.'
        ],
        [
            'question' => 'Comment obtenir un devis ?',
            'answer' => 'C\'est simple et gratuit. Contactez-nous par téléphone ou via le bouton de contact en bas de page pour une estimation rapide de votre projet.'
        ]
    ]
);
$faq_data = get_module_content('faq-accordion', $faq_data_default);

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
    <title>Delfoin Multiservices - Plombier, Électricien, Climatisation à Gaillac (81)</title>
    <meta name="description"
        content="Antoine Delfoin, artisan expert à Gaillac (81). Installation et dépannage plomberie, électricité, climatisation. Intervention rapide sur Albi et Tarn. Devis gratuit.">
    <link rel="canonical" href="https://delfoin-multiservices.fr/" />
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Delfoin Multiservices",
      "image": "https://delfoin-multiservices.fr/images/logo/logo_complet-removebg-preview.png",
      "telephone": "+33 6 15 80 81 93",
      "email": "Delfoin.multiservices@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Gaillac",
        "postalCode": "81600",
        "addressRegion": "Tarn",
        "addressCountry": "FR"
      },
      "url": "https://delfoin-multiservices.fr",
      "priceRange": "$$",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "08:00",
          "closes": "19:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "09:00",
          "closes": "12:00"
        }
      ]
    }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/theme-variables.css?v=2">
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/modules/header-classic.css?v=2">
    <link rel="stylesheet" href="css/modules/hero-classic.css?v=2">
    <link rel="stylesheet" href="css/modules/restaurant-chef.css?v=2">
    <link rel="stylesheet" href="css/modules/services-grid.css?v=2">
    <link rel="stylesheet" href="css/modules/testimonials-carousel.css?v=2">
    <link rel="stylesheet" href="css/modules/contact-minimal.css?v=2">
    <link rel="stylesheet" href="css/modules/section-nav.css?v=2">
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

        <div id="faq">
            <?php render_faq_accordion($faq_data); ?>
        </div>

        <div id="contact">
            <?php render_contact_minimal($contact_minimal_data); ?>
        </div>
    </main>

    <script src="js/main.js"></script>
    <script src="js/lightbox.js"></script>
</body>

</html>
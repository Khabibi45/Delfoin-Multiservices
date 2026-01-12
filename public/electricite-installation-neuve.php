<?php
require_once 'modules/functions.php';

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

// Hero data removed

$contact_data = [
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '+33 6 64 95 49 41'
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation Électrique Maison Neuve - Delfoin Multiservices</title>
    <meta name="description"
        content="Électricien pour maison neuve et extension. Respect de la norme NF C 15-100, passage Consuel, tableau électrique.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/theme-variables.css?v=2">
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/modules/header-classic.css?v=2">
    <link rel="stylesheet" href="css/modules/contact-minimal.css?v=2">
    <link rel="stylesheet" href="css/modules/project-detail.css?v=2">
</head>

<body>

    <?php render_header_classic($header_data); ?>

    <main class="project-detail">
        <div class="project-detail__container">
            <a href="electricite.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux services Électricité
            </a>

            <span class="project-detail__subtitle">Construction & Extension</span>
            <h1 class="project-detail__title">Le projet d'une vie</h1>

            <div class="project-detail__content">


                <p>
                    M. et Mme Leroy construisaient leur maison. Ils avaient les murs, le toit, mais pour l'électricité,
                    ils
                    étaient perdus.
                    "Combien de prises dans le salon ? Où mettre le tableau ? Et la norme RT2012 ?"
                    C'est là que j'interviens. Pas seulement comme poseur de câbles, mais comme conseiller.
                </p>

                <h2>Une conception intelligente</h2>
                <p>
                    J'ai pris les plans de la maison et imaginé leur vie dedans.
                    "Là, ce sera le coin TV, il faut prévoir des prises RJ45 pour internet. Ici, l'îlot de cuisine,
                    attention aux alimentations au sol."
                    L'électricité invisible, c'est celle qui est là exactement où on en a besoin.
                </p>

                <h2>La rigueur de la norme NF C 15-100</h2>
                <p>
                    L'installation électrique d'une maison neuve ne s'improvise pas. Section des câbles, calibrage des
                    disjoncteurs, circuits spécialisés (four, lave linge...)...
                    J'ai réalisé toute l'installation, du passage des gaines dans les cloisons jusqu'au câblage
                    minutieux du
                    tableau électrique.
                    Au moment du passage du Consuel (l'organisme qui valide la conformité pour le raccordement au
                    réseau),
                    c'était un sans-faute.
                    Aujourd'hui, la famille Leroy profite d'une installation sûre, évolutive et pensée pour leur
                    confort.
                </p>
            </div>
        </div>
    </main>

    <div id="contact">
        <?php render_contact_minimal($contact_data); ?>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
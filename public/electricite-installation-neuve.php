<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php', 'active' => true],
        ['text' => 'Climatisation', 'url' => 'climatisation.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Installation Électrique Neuve',
    'subheadline' => 'Conception et réalisation de réseaux électriques pour constructions et extensions.',
    'cta_text' => 'Devis Gratuit',
    'cta_link' => '#contact',
    'background_image' => 'https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?auto=format&fit=crop&q=80&w=1920',
    'show_scroll_indicator' => true
];

$contact_data = [
    'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
    'email' => 'Delfoin.multiservices@gmail.com',
    'phone_number' => '06 12 34 56 78'
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
    <link rel="stylesheet" href="css/theme-variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/modules/header-classic.css">
    <link rel="stylesheet" href="css/modules/hero-classic.css">
    <link rel="stylesheet" href="css/modules/contact-minimal.css">
    <style>
        .story-content {
            max-width: 800px;
            margin: 4rem auto;
            padding: 0 1.5rem;
            font-family: 'Inter', sans-serif;
            color: var(--color-text-primary);
            line-height: 1.8;
        }

        .story-content h2 {
            font-family: 'Montserrat', sans-serif;
            color: var(--color-secondary);
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .story-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
    </style>
</head>

<body>

    <?php render_header_classic($header_data); ?>

    <main>
        <?php render_hero_classic($hero_data); ?>

        <article class="story-content">
            <h2>Le projet d'une vie</h2>
            <p>
                M. et Mme Leroy construisaient leur maison. Ils avaient les murs, le toit, mais pour l'électricité, ils
                étaient perdus.
                "Combien de prises dans le salon ? Où mettre le tableau ? Et la norme RT2012 ?"
                C'est là que j'interviens. Pas seulement comme poseur de câbles, mais comme conseiller.
            </p>

            <h2>Une conception intelligente</h2>
            <p>
                Nous avons pris les plans de la maison et imaginé leur vie dedans.
                "Là, ce sera le coin TV, il faut prévoir des prises RJ45 pour internet. Ici, l'îlot de cuisine,
                attention aux alimentations au sol."
                L'électricité invisible, c'est celle qui est là exactement où on en a besoin.
            </p>

            <h2>La rigueur de la norme NF C 15-100</h2>
            <p>
                L'installation électrique d'une maison neuve ne s'improvise pas. Section des câbles, calibrage des
                disjoncteurs, circuits spécialisés (four, lave linge...)...
                J'ai réalisé toute l'installation, du passage des gaines dans les cloisons jusqu'au câblage minutieux du
                tableau électrique.
                Au moment du passage du Consuel (l'organisme qui valide la conformité pour le raccordement au réseau),
                c'était un sans-faute.
                Aujourd'hui, la famille Leroy profite d'une installation sûre, évolutive et pensée pour leur confort.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
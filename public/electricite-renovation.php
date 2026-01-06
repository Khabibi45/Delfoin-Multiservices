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
    'headline' => 'Rénovation Électrique',
    'subheadline' => 'Modernisez votre intérieur : éclairage, prises et confort.',
    'cta_text' => 'Mes Envies',
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
    <title>Rénovation Électrique - Delfoin Multiservices</title>
    <meta name="description"
        content="Ajout de prises, installation de spots LED, remplacement d'interrupteurs. Modernisez votre électricité.">
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
            <h2>La fin des multiprises</h2>
            <p>
                Sophie n'en pouvait plus. Dans son salon, c'était la guerre des câbles.
                Une seule prise derrière le canapé pour la box, la télé, la console, la lampe et le chargeur de
                téléphone.
                Résultat : une multiprise en cascade (très dangereux !) et des fils partout.
            </p>

            <h2>Repenser l'espace</h2>
            <p>
                La rénovation électrique, ce n'est pas que de la technique, c'est du confort.
                Pour Sophie, nous avons pratiqué des "saignées" discrètes dans les murs pour amener l'électricité là où
                elle en avait besoin.
                Nous avons ajouté des prises doubles avec ports USB intégrés près du canapé.
            </p>

            <h2>La lumière qui change tout</h2>
            <p>
                Nous en avons profité pour moderniser l'éclairage. Fini le vieux lustre central qui éblouit.
                J'ai installé des spots LED encastrés avec variateur d'intensité.
                Plein feu pour faire le ménage, lumière tamisée pour la soirée cinéma.
                Le résultat ? Un salon plus pur, plus sécurisé, et une ambiance transformée.
                Rénover son électricité, c'est redécouvrir sa maison.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php', 'active' => true],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Robinetterie',
    'subheadline' => 'Installation et remplacement de vos équipements sanitaires.',
    'cta_text' => 'Devis Gratuit',
    'cta_link' => '#contact',
    'background_image' => 'https://images.unsplash.com/photo-1584622050111-993a426fbf0a?auto=format&fit=crop&q=80&w=1920',
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
    <title>Installation Robinetterie & Mitigeurs - Delfoin Multiservices</title>
    <meta name="description"
        content="Remplacement de robinets, mitigeurs thermostatiques et colonnes de douche. Installation soignée et étanche.">
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
            <h2>Le goutte-à-goutte qui rend fou</h2>
            <p>
                Nous connaissons tous ce bruit. <em>Ploc. Ploc.</em> Ce vieux robinet de cuisine qui refuse de fermer
                complètement, peu importe la force avec laquelle on serre le joint.
                C'est pour ce genre de "petit" problème, qui devient vite horripilant (et coûteux en eau !), que je suis
                intervenu récemment chez M. Martin.
            </p>

            <h2>Moderniser pour économiser</h2>
            <p>
                Plutôt que de simplement changer un joint sur une robinetterie vieille de 15 ans, nous avons discuté des
                usages de M. Martin.
                Il se plaignait aussi de la difficulté à régler la température.
                Je lui ai conseillé l'installation d'un <strong>mitigeur moderne avec douchette</strong>.
            </p>
            <p>
                En moins d'une heure, l'intervention était bouclée. Démontage de l'ancien matériel grippé (le moment
                critique où l'expérience compte pour ne pas abîmer l'évier !),
                nettoyage des portées de joint, et installation du nouveau matériel.
            </p>

            <h2>Le confort au quotidien</h2>
            <p>
                Aujourd'hui, non seulement le bruit du goutte-à-goutte a disparu, mais la cuisine est devenue plus
                pratique.
                La robinetterie, c'est ce qu'on utilise le plus souvent dans une maison. Avoir un équipement fiable,
                souple et précis, ça change le quotidien.
            </p>
            <p>
                Que ce soit pour un simple remplacement standard, la pose d'une colonne de douche thermostatique ou
                l'installation de vannes d'arrêt pour sécuriser votre installation,
                je m'occupe de tout avec le souci du détail et de l'étanchéité parfaite.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
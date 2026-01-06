<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php', 'active' => true]
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Pompe à Chaleur Air/Air',
    'subheadline' => 'Divisez votre facture de chauffage par 3.',
    'cta_text' => 'Étude Gratuite',
    'cta_link' => '#contact',
    'background_image' => 'https://images.unsplash.com/photo-1617180456108-9df597711204?auto=format&fit=crop&q=80&w=1920',
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
    <title>Installation Pompe à Chaleur Air-Air - Delfoin Multiservices</title>
    <meta name="description"
        content="Chauffage économique et climatisation réversible. Installation de pompe à chaleur Air/Air performante.">
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
            <h2>Chauffer les oiseaux ? Non merci.</h2>
            <p>
                Paul chauffait sa maison des années 90 avec de vieux convecteurs électriques ("grille-pain").
                Résultat : une chaleur sèche désagréable et surtout, une facture d'électricité qui explosait chaque
                hiver.
                Il voulait changer pour quelque chose de plus efficace, sans installer de radiateurs à eau partout (trop
                de travaux).
            </p>

            <h2>La magie de la thermodynamique</h2>
            <p>
                Je lui ai expliqué le principe de la <strong>Pompe à Chaleur (PAC) Air/Air</strong>.
                C'est simple : l'appareil capte les calories gratuites présentes dans l'air extérieur (même quand il
                fait froid !) pour les restituer à l'intérieur.
                Pour 1kWh d'électricité consommé, la machine restitue 3 à 4kWh de chaleur. C'est imbattable.
            </p>

            <h2>Confort 4 Saisons</h2>
            <p>
                Nous avons installé une unité console dans le salon (qui ressemble à un radiateur moderne) et des splits
                dans les chambres.
                L'hiver suivant, Paul a divisé sa facture de chauffage par trois.
                Mais le vrai bonus, c'est l'été. Sa PAC est réversible. Quand la canicule frappe, il inverse le système
                et climatise sa maison.
                C'est un investissement rentabilisé en quelques années, pour un confort immédiat toute l'année.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
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
    'headline' => 'Installation de Climatisation',
    'subheadline' => 'Fraîcheur en été, chaleur douce en hiver. Systèmes réversibles.',
    'cta_text' => 'Devis Gratuit',
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
    <title>Installation Climatisation Réversible - Delfoin Multiservices</title>
    <meta name="description"
        content="Installateur clim agréé. Pose de monosplit, multisplit et gainable. Confort thermique toute l'année.">
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
            <h2>Dormir au frais, enfin</h2>
            <p>
                Mme Vian habite au dernier étage sous les toits. L'été dernier, c'était intenable. 30°C dans la chambre
                à minuit. Impossible de dormir.
                Elle m'a contacté en avril pour "ne plus jamais revivre ça".
                Son besoin : rafraîchir la pièce de vie et sa chambre, sans défigurer sa façade.
            </p>

            <h2>Le choix du bon matériel</h2>
            <p>
                Je lui ai proposé une installation <strong>multisplit</strong> : une seule unité extérieure (pose
                discrète sur le balcon sur silent-blocs pour éviter les vibrations) reliée à deux unités intérieures.
                Nous avons choisi des modèles silencieux (moins de 20dB, c'est comme un chuchotement) pour ne pas
                perturber son sommeil.
            </p>

            <h2>Installation et mise en service</h2>
            <p>
                En tant que professionnel agréé pour la manipulation des fluides frigorigènes, j'ai réalisé
                l'installation dans les règles de l'art.
                Tirage au vide, test d'étanchéité à l'azote, charge en gaz. C'est la garantie d'un système qui dure et
                qui consomme peu.
                Aujourd'hui, Mme Vian règle sa température idéale d'un clic sur la télécommande. Et bonus : en hiver, sa
                clim se transforme en chauffage ultra-économique !
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
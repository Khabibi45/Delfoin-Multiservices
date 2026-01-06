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
    'headline' => 'Entretien & Maintenance',
    'subheadline' => 'Garantissez la longévité et la qualité d\'air de votre climatisation.',
    'cta_text' => 'Réserver',
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
    <title>Entretien Climatisation et Nettoyage - Delfoin Multiservices</title>
    <meta name="description"
        content="Contrat de maintenance climatisation. Nettoyage filtres, désinfection, contrôle de fuite. Protégez votre santé.">
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
            <h2>Ça sent le moisi ?</h2>
            <p>
                Un boulanger du centre-ville m'a appelé parce que ses clients se plaignaient d'une odeur désagréable dès
                qu'il allumait la clim.
                En ouvrant le capot de l'unité intérieure, le verdict était clair : les filtres étaient colmatés par la
                poussière et la farine,
                et de la moisissure s'était développée dans le bac à condensats (là où s'écoule l'eau).
                Résultat : un air vicié pulsé directement sur les clients. Pas terrible pour le commerce.
            </p>

            <h2>Un nettoyage en profondeur</h2>
            <p>
                L'entretien d'une clim, ce n'est pas juste passer un coup de chiffon.
                J'ai procédé à un nettoyage complet : désinfection de l'échangeur thermique avec un produit bactéricide
                et fongicide professionnel,
                nettoyage des filtres et désobstruction de l'évacuation d'eau.
                J'ai également vérifié les pressions de gaz pour m'assurer que le système ne fuyait pas (c'est une
                obligation légale !).
            </p>

            <h2>Respirez mieux, consommez moins</h2>
            <p>
                Une clim encrassée, c'est comme courir avec un masque : elle force plus pour souffler l'air.
                Elle consomme donc jusqu'à 30% d'électricité en plus pour un résultat médiocre.
                Après mon passage, la boulangerie a retrouvé un air sain et frais.
                Un entretien annuel, c'est la clé de la longévité de votre appareil.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
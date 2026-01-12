<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php', 'active' => true],
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
    <title>Entretien Climatisation et Nettoyage - Delfoin Multiservices</title>
    <meta name="description"
        content="Contrat de maintenance climatisation. Nettoyage filtres, désinfection, contrôle de fuite. Protégez votre santé.">
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
            <a href="climatisation.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux services Climatisation
            </a>

            <span class="project-detail__subtitle">Entretien & Santé</span>
            <h1 class="project-detail__title">Ça sent le moisi ?</h1>

            <div class="project-detail__content">


                <p>
                    Un boulanger du centre-ville m'a appelé parce que ses clients se plaignaient d'une odeur désagréable
                    dès
                    qu'il allumait la clim.
                    En ouvrant le capot de l'unité intérieure, le verdict était clair : les filtres étaient colmatés par
                    la
                    poussière et la farine,
                    et de la moisissure s'était développée dans le bac à condensats (là où s'écoule l'eau).
                    Résultat : un air vicié pulsé directement sur les clients. Pas terrible pour le commerce.
                </p>

                <h2>Un nettoyage en profondeur</h2>
                <p>
                    L'entretien d'une clim, ce n'est pas juste passer un coup de chiffon.
                    J'ai procédé à un nettoyage complet : désinfection de l'échangeur thermique avec un produit
                    bactéricide
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
            </div>
        </div>
    </main>

    <div id="contact">
        <?php render_contact_minimal($contact_data); ?>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
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
    <title>Rénovation Électrique - Delfoin Multiservices</title>
    <meta name="description"
        content="Ajout de prises, installation de spots LED, remplacement d'interrupteurs. Modernisez votre électricité.">
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

            <span class="project-detail__subtitle">Confort & Modernité</span>
            <h1 class="project-detail__title">La fin des multiprises</h1>

            <div class="project-detail__content">


                <p>
                    Sophie n'en pouvait plus. Dans son salon, c'était la guerre des câbles.
                    Une seule prise derrière le canapé pour la box, la télé, la console, la lampe et le chargeur de
                    téléphone.
                    Résultat : une multiprise en cascade (très dangereux !) et des fils partout.
                </p>

                <h2>Repenser l'espace</h2>
                <p>
                    La rénovation électrique, ce n'est pas que de la technique, c'est du confort.
                    Pour Sophie, j'ai pratiqué des "saignées" discrètes dans les murs pour amener l'électricité là
                    où
                    elle en avait besoin.
                    J'ai ajouté des prises doubles avec ports USB intégrés près du canapé.
                </p>

                <h2>La lumière qui change tout</h2>
                <p>
                    J'en ai profité pour moderniser l'éclairage. Fini le vieux lustre central qui éblouit.
                    J'ai installé des spots LED encastrés avec variateur d'intensité.
                    Plein feu pour faire le ménage, lumière tamisée pour la soirée cinéma.
                    Le résultat ? Un salon plus pur, plus sécurisé, et une ambiance transformée.
                    Rénover son électricité, c'est redécouvrir sa maison.
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
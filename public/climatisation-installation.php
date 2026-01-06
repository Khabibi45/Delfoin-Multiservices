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

            <span class="project-detail__subtitle">Confort Thermique</span>
            <h1 class="project-detail__title">Dormir au frais, enfin</h1>

            <div class="project-detail__content">


                <p>
                    Mme Vian habite au dernier étage sous les toits. L'été dernier, c'était intenable. 30°C dans la
                    chambre
                    à minuit. Impossible de dormir.
                    Elle m'a contacté en avril pour "ne plus jamais revivre ça".
                    Son besoin : rafraîchir la pièce de vie et sa chambre, sans défigurer sa façade.
                </p>

                <h2>Le choix du bon matériel</h2>
                <p>
                    Je lui ai proposé une installation <strong>multisplit</strong> : une seule unité extérieure (pose
                    discrète sur le balcon sur silent-blocs pour éviter les vibrations) reliée à deux unités
                    intérieures.
                    Nous avons choisi des modèles silencieux (moins de 20dB, c'est comme un chuchotement) pour ne pas
                    perturber son sommeil.
                </p>

                <h2>Installation et mise en service</h2>
                <p>
                    En tant que professionnel agréé pour la manipulation des fluides frigorigènes, j'ai réalisé
                    l'installation dans les règles de l'art.
                    Tirage au vide, test d'étanchéité à l'azote, charge en gaz. C'est la garantie d'un système qui dure
                    et
                    qui consomme peu.
                    Aujourd'hui, Mme Vian règle sa température idéale d'un clic sur la télécommande. Et bonus : en
                    hiver, sa
                    clim se transforme en chauffage ultra-économique !
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
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
    <title>Installation Pompe à Chaleur Air-Air - Delfoin Multiservices</title>
    <meta name="description"
        content="Chauffage économique et climatisation réversible. Installation de pompe à chaleur Air/Air performante.">
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

            <span class="project-detail__subtitle">Economies & Ecologie</span>
            <h1 class="project-detail__title">Chauffer les oiseaux ? Non merci.</h1>

            <div class="project-detail__content">


                <p>
                    Paul chauffait sa maison des années 90 avec de vieux convecteurs électriques ("grille-pain").
                    Résultat : une chaleur sèche désagréable et surtout, une facture d'électricité qui explosait chaque
                    hiver.
                    Il voulait changer pour quelque chose de plus efficace, sans installer de radiateurs à eau partout
                    (trop
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
                    J'ai installé une unité console dans le salon (qui ressemble à un radiateur moderne) et des
                    splits
                    dans les chambres.
                    L'hiver suivant, Paul a divisé sa facture de chauffage par trois.
                    Mais le vrai bonus, c'est l'été. Sa PAC est réversible. Quand la canicule frappe, il inverse le
                    système
                    et climatise sa maison.
                    C'est un investissement rentabilisé en quelques années, pour un confort immédiat toute l'année.
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
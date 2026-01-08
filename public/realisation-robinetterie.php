<?php
require_once 'modules/functions.php';

// Header Configuration
$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
        ['text' => 'Climatisation', 'url' => 'climatisation.php'],
        ['text' => 'Réalisations', 'url' => 'realisations.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le goutte-à-goutte qui rend fou - Delfoin Multiservices</title>
    <meta name="description"
        content="Découvrez comment nous avons résolu un problème de robinetterie persistant à Gaillac. Rénovation plomberie et installation mitigeur.">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/theme-variables.css?v=2">
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/modules/header-classic.css?v=2">
    <link rel="stylesheet" href="css/modules/contact-minimal.css?v=2">
    <!-- Exclusive Project Style -->
    <link rel="stylesheet" href="css/modules/project-detail.css?v=2">
</head>

<body>

    <?php render_header_classic($header_data); ?>

    <main class="project-detail">
        <div class="project-detail__container">
            <a href="realisations.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux réalisations
            </a>

            <span class="project-detail__subtitle">Plomberie & Rénovation</span>
            <h1 class="project-detail__title">Le goutte-à-goutte qui rend fou</h1>

            <div class="project-detail__content">
                <p>Nous connaissons tous ce bruit. Ploc. Ploc. Ce vieux robinet de cuisine qui refuse de fermer
                    complètement, peu importe la force avec laquelle on serre le joint. C'est pour ce genre de "petit"
                    problème, qui devient vite horripilant (et coûteux en eau !), que je suis intervenu récemment chez
                    M. Martin.</p>

                <h2>Moderniser pour économiser</h2>
                <p>Plutôt que de simplement changer un joint sur une robinetterie vieille de 15 ans, nous avons discuté
                    des usages de M. Martin. Il se plaignait aussi de la difficulté à régler la température. Je lui ai
                    conseillé l'installation d'un mitigeur moderne avec douchette.</p>

                <p>En moins d'une heure, l'intervention était bouclée. Démontage de l'ancien matériel grippé (le moment
                    critique où l'expérience compte pour ne pas abîmer l'évier !), nettoyage des portées de joint, et
                    installation du nouveau matériel.</p>

                <h2>Le confort au quotidien</h2>
                <p>Aujourd'hui, non seulement le bruit du goutte-à-goutte a disparu, mais la cuisine est devenue plus
                    pratique. La robinetterie, c'est ce qu'on utilise le plus souvent dans une maison. Avoir un
                    équipement fiable, souple et précis, ça change le quotidien.</p>

                <p>Que ce soit pour un simple remplacement standard, la pose d'une colonne de douche thermostatique ou
                    l'installation de vannes d'arrêt pour sécuriser votre installation, je m'occupe de tout avec le
                    souci du détail et de l'étanchéité parfaite.</p>
            </div>
        </div>
    </main>

    <?php
    $contact_minimal_data = [
        'title' => 'Un projet similaire ?',
        'subtitle' => 'Contactez-moi pour un devis gratuit.',
        'email' => 'Delfoin.multiservices@gmail.com',
        'phone' => '+33 6 64 95 49 41'
    ];
    render_contact_minimal($contact_minimal_data);
    ?>

</body>

</html>
<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php', 'active' => true],
        ['text' => 'Electricité', 'url' => 'electricite.php'],
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
    'phone_number' => '06 12 34 56 78'
];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création et Rénovation Salle de Bain - Delfoin Multiservices</title>
    <meta name="description"
        content="Rénovation complète de salle de bain : douche italienne, baignoire, meubles vasque. Conception et réalisation sur mesure.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/theme-variables.css?v=2">
    <link rel="stylesheet" href="css/base.css?v=2">
    <link rel="stylesheet" href="css/modules/header-classic.css?v=2">
    <link rel="stylesheet" href="css/modules/contact-minimal.css?v=2">
    <link rel="stylesheet" href="css/modules/project-detail.css?v=2">
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
        </head>

        <body>

            <?php render_header_classic($header_data); ?>

            <main class="project-detail">
                <div class="project-detail__container">
                    <a href="plomberie.php" class="project-detail__back">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 12H5M12 19l-7-7 7-7" />
                        </svg>
                        Retour aux services Plomberie
                    </a>

                    <span class="project-detail__subtitle">Création & Aménagement</span>
                    <h1 class="project-detail__title">Votre Salle de Bain Clé en Main</h1>

                    <div class="project-detail__content">
                        <h2>Du rêve à la réalité</h2>
                        <p>
                            La famille Petit avait en tête cette salle de bain "comme dans les magazines" depuis des
                            années.
                            Ils voulaient remplacer leur vieille baignoire sabot, peu pratique et glissante, par une
                            grande douche à
                            l'italienne.
                            Mais ils avaient peur des travaux : poussière, délais, et surtout, la coordination entre
                            plombier,
                            carreleur et électricien.
                        </p>

                        <h2>Un interlocuteur unique pour tout gérer</h2>
                        <p>
                            L'avantage avec <strong>Delfoin Multiservices</strong>, c'est que je gère l'ensemble du
                            chantier.
                            Pas besoin d'attendre que l'électricien passe pour que le plombier puisse avancer.
                            Nous avons conçu ensemble le plan : déplacement des arrivées d'eau, création d'une niche
                            carrelée dans
                            la douche, pose d'un meuble double vasque suspendu.
                        </p>

                        <h2>Le souci du détail</h2>
                        <p>
                            Une belle salle de bain, ça se joue dans les finitions. L'alignement des joints de
                            carrelage,
                            l'étanchéité parfaite sous la douche (primordial !),
                            l'éclairage d'ambiance bien positionné.
                            Après deux semaines de travaux intensifs, la famille Petit a découvert son nouvel espace
                            bien-être.
                            Leur réaction ? "C'est encore mieux que ce qu'on imaginait". C'est pour ces moments-là que
                            je fais ce
                            métier.
                        </p>
                        <p>
                            Vous avez un projet ? Discutons-en. Je vous apporterai mes conseils techniques pour
                            optimiser l'espace
                            et le budget.
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
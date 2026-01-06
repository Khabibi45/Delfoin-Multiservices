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
    'headline' => 'Rénovation Salle de Bain',
    'subheadline' => 'Création de votre espace bien-être clé en main.',
    'cta_text' => 'Mon Projet',
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
    <title>Création et Rénovation Salle de Bain - Delfoin Multiservices</title>
    <meta name="description"
        content="Rénovation complète de salle de bain : douche italienne, baignoire, meubles vasque. Conception et réalisation sur mesure.">
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
            <h2>Du rêve à la réalité</h2>
            <p>
                La famille Petit avait en tête cette salle de bain "comme dans les magazines" depuis des années.
                Ils voulaient remplacer leur vieille baignoire sabot, peu pratique et glissante, par une grande douche à
                l'italienne.
                Mais ils avaient peur des travaux : poussière, délais, et surtout, la coordination entre plombier,
                carreleur et électricien.
            </p>

            <h2>Un interlocuteur unique pour tout gérer</h2>
            <p>
                L'avantage avec <strong>Delfoin Multiservices</strong>, c'est que je gère l'ensemble du chantier.
                Pas besoin d'attendre que l'électricien passe pour que le plombier puisse avancer.
                Nous avons conçu ensemble le plan : déplacement des arrivées d'eau, création d'une niche carrelée dans
                la douche, pose d'un meuble double vasque suspendu.
            </p>

            <h2>Le souci du détail</h2>
            <p>
                Une belle salle de bain, ça se joue dans les finitions. L'alignement des joints de carrelage,
                l'étanchéité parfaite sous la douche (primordial !),
                l'éclairage d'ambiance bien positionné.
                Après deux semaines de travaux intensifs, la famille Petit a découvert son nouvel espace bien-être.
                Leur réaction ? "C'est encore mieux que ce qu'on imaginait". C'est pour ces moments-là que je fais ce
                métier.
            </p>
            <p>
                Vous avez un projet ? Discutons-en. Je vous apporterai mes conseils techniques pour optimiser l'espace
                et le budget.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
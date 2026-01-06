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
    'headline' => 'Chauffe-eau & Cumulus',
    'subheadline' => 'Installation, remplacement et détartrage de vos ballons d\'eau chaude.',
    'cta_text' => 'Panne d\'Eau Chaude ?',
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
    <title>Installation et Détartrage Chauffe-eau - Delfoin Multiservices</title>
    <meta name="description"
        content="Plus d'eau chaude ? Remplacement de cumulus, chauffe-eau thermodynamique et détartrage. Intervention rapide.">
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
            <h2>La douche froide du matin</h2>
            <p>
                C'est la hantise de tout le monde en hiver. Vous ouvrez le robinet pour prendre votre douche, et...
                l'eau reste glacée.
                Le chauffe-eau, cet appareil qu'on oublie souvent dans un placard, vient de lâcher.
                Quand on m'appelle pour ça, je sais qu'il faut agir vite. Une famille sans eau chaude, c'est la crise
                assurée.
            </p>

            <h2>Réparer ou remplacer ?</h2>
            <p>
                Mon premier réflexe n'est pas forcément de tout changer. Parfois, c'est juste le thermostat qui s'est
                mis en sécurité ou la résistance qui est entartrée.
                Le <strong>détartrage</strong> est d'ailleurs une opération essentielle que je recommande tous les 2-3
                ans pour prolonger la vie de votre ballon et réduire votre facture d'électricité.
                Imaginez une bouilloire pleine de calcaire : elle met deux fois plus de temps à chauffer. C'est pareil
                pour votre cumulus !
            </p>

            <h2>L'installation aux normes</h2>
            <p>
                Si le remplacement est inévitable (cuve percée par la rouille par exemple), je vous propose des modèles
                adaptés à votre consommation réelle.
                Il ne sert à rien d'avoir un ballon de 300L si vous êtes deux !
                Je m'assure aussi que le groupe de sécurité est neuf et que l'installation électrique est conforme.
                En quelques heures, l'eau chaude est de retour, et la tranquillité aussi.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
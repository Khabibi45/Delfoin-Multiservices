<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php', 'active' => true],
        ['text' => 'Climatisation', 'url' => 'climatisation.php']
    ],
    'cta_text' => 'Contact',
    'cta_link' => '#contact'
];

$hero_data = [
    'headline' => 'Mise aux Normes Électrique',
    'subheadline' => 'Sécurisez votre habitation et protégez vos proches.',
    'cta_text' => 'Diagnostic',
    'cta_link' => '#contact',
    'background_image' => 'https://images.unsplash.com/photo-1555963966-b7ae5404b6ed?auto=format&fit=crop&q=80&w=1920',
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
    <title>Mise aux Normes Électrique - Delfoin Multiservices</title>
    <meta name="description"
        content="Rénovation électrique et mise en sécurité. Remplacement de tableau, mise à la terre, diagnostic électrique.">
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
            <h2>Le danger invisible</h2>
            <p>
                J'ai récemment visité un appartement ancien. Le propriétaire, Julien, venait d'acheter.
                En ouvrant le vieux placard à balais, j'ai trouvé ce qu'on appelle un "tableau à fusibles porcelaine".
                Des fils gainés de tissu, pas de terre dans la cuisine... C'était un cocktail parfait pour un départ
                d'incendie ou une électrocution.
            </p>

            <h2>Mise en sécurité vs Mise aux normes</h2>
            <p>
                Julien avait peur de devoir casser tous ses murs. Je l'ai rassuré : on peut souvent effectuer une
                <strong>mise en sécurité</strong> sans tout refaire.
                La priorité : installer un tableau électrique moderne avec des interrupteurs différentiels 30mA.
                Pourquoi ? Parce que c'est ce dispositif qui coupe le courant instantanément si vous touchez un fil
                dénudé ou si votre grille-pain a un défaut.
                C'est l'ange gardien de votre installation.
            </p>

            <h2>Un chantier rapide et propre</h2>
            <p>
                En deux jours, j'ai remplacé le tableau, tiré des fils de terre apparents mais discrets par moulures
                pour la cuisine et la salle de bain, et remplacé les prises vétustes.
                L'appartement n'est peut-être pas "neuf", mais il est désormais 100% sûr pour Julien et sa famille.
                Ne jouez pas avec la sécurité électrique. Si votre installation a plus de 25 ans, un diagnostic
                s'impose.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
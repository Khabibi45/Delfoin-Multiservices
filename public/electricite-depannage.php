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
    'headline' => 'Dépannage Électrique 7j/7',
    'subheadline' => 'Intervention rapide pour panne de courant, court-circuit et urgences.',
    'cta_text' => 'SOS Électricité',
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
    <title>Dépannage Électricien Urgence - Delfoin Multiservices</title>
    <meta name="description"
        content="Plus de courant ? Disjoncteur qui saute ? Dépannage électrique rapide et sécurisé. Recherche de panne.">
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
            <h2>Le noir total</h2>
            <p>
                Samedi soir, 20h. Vous recevez des amis, le four tourne, et soudain... plus rien.
                Le disjoncteur général a sauté. Vous essayez de le réenclencher, il saute a nouveau. La panique monte.
                C'est pour ce genre de situation stressante que je me rends disponible.
            </p>

            <h2>Sherlock Holmes du tableau électrique</h2>
            <p>
                Rechercher une panne électrique, c'est une enquête. Ce n'est pas le hasard qui fait sauter les plombs,
                c'est une sécurité qui se déclenche.
                Il faut isoler les circuits un par un. Tester la continuité.
                Ce soir-là, chez mes clients, le coupable n'était pas le four, mais une prise extérieure qui avait pris
                l'eau suite à un orage, créant un défaut d'isolement.
            </p>

            <h2>Rétablir et sécuriser</h2>
            <p>
                Une fois la panne identifiée, la priorité est de rétablir le courant dans la maison en isolant
                uniquement le circuit défectueux.
                La soirée a pu reprendre. Je suis repassé le lundi pour remplacer la prise étanche défectueuse.
                En cas de panne, ne forcez jamais un disjoncteur à rester enclenché. S'il saute, c'est qu'il vous
                protège. Appelez un pro.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
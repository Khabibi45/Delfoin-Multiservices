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
    'headline' => 'Débouchage de Canalisations',
    'subheadline' => 'Intervention rapide pour WC, éviers et évacuations bouchées.',
    'cta_text' => 'SOS Débouchage',
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
    <title>Débouchage WC et Canalisations - Delfoin Multiservices</title>
    <meta name="description"
        content="Débouchage professionnel de vos canalisations, éviers et toilettes. Intervention efficace pour rétablir l'écoulement.">
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
            <h2>La panique du dimanche soir</h2>
            <p>
                Il n'y a jamais de bon moment pour avoir des toilettes bouchées, mais c'est souvent quand on reçoit des
                invités que ça arrive.
                C'est l'histoire d'un appel en urgence que j'ai reçu récemment. L'eau montait dangereusement, et les
                "remèdes de grand-mère" (eau bouillante, ventouse, produits chimiques...)
                ne faisaient qu'aggraver la situation.
            </p>

            <h2>L'intervention professionnelle</h2>
            <p>
                Le débouchage, ce n'est pas juste "pousser le bouchon". C'est comprendre pourquoi il s'est formé pour
                éviter que ça ne recommence.
                Objets tombés par accident, accumulation de calcaire, racines dans les tuyaux extérieurs ?
            </p>
            <p>
                Grâce à mon furet professionnel électrique et, si nécessaire, à l'inspection vidéo, je ne me contente
                pas de déboucher : je nettoie la canalisation.
                Dans le cas de mes clients ce dimanche-là, c'était un amas compact de lingettes (attention, même
                "biodégradables", elles sont l'ennemi n°1 de vos tuyaux !).
            </p>

            <h2>Retrouver une maison saine</h2>
            <p>
                Une heure après mon arrivée, tout s'écoulait parfaitement. Plus d'odeurs, plus de stress.
                Je suis reparti en leur donnant quelques conseils d'entretien simples pour éviter la récidive.
                Si l'eau stagne dans votre douche ou votre évier, n'attendez pas le blocage complet, appelez-moi !
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
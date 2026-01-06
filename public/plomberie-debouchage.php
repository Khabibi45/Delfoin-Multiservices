<?php
require_once 'modules/functions.php';

// Header Configuration
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
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Débouchage WC et Canalisations - Delfoin Multiservices</title>
    <meta name="description"
        content="Débouchage professionnel de vos canalisations, éviers et toilettes. Intervention efficace pour rétablir l'écoulement.">
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
            <a href="plomberie.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux services Plomberie
            </a>

            <span class="project-detail__subtitle">Débouchage & Maintenance</span>
            <h1 class="project-detail__title">La panique du dimanche soir</h1>

            <div class="project-detail__content">
                <p>Il n'y a jamais de bon moment pour avoir des toilettes bouchées, mais c'est souvent quand on reçoit
                    des invités que ça arrive. C'est l'histoire d'un appel en urgence que j'ai reçu récemment. L'eau
                    montait dangereusement, et les "remèdes de grand-mère" (eau bouillante, ventouse, produits
                    chimiques...) ne faisaient qu'aggraver la situation.</p>

                <h2>L'intervention professionnelle</h2>
                <p>Le débouchage, ce n'est pas juste "pousser le bouchon". C'est comprendre pourquoi il s'est formé pour
                    éviter que ça ne recommence. Objets tombés par accident, accumulation de calcaire, racines dans les
                    tuyaux extérieurs ?</p>

                <p>Grâce à mon furet professionnel électrique et, si nécessaire, à l'inspection vidéo, je ne me contente
                    pas de déboucher : je nettoie la canalisation. Dans le cas de mes clients ce dimanche-là, c'était un
                    amas compact de lingettes (attention, même "biodégradables", elles sont l'ennemi n°1 de vos tuyaux
                    !).</p>

                <h2>Retrouver une maison saine</h2>
                <p>Une heure après mon arrivée, tout s'écoulait parfaitement. Plus d'odeurs, plus de stress. Je suis
                    reparti en leur donnant quelques conseils d'entretien simples pour éviter la récidive. Si l'eau
                    stagne dans votre douche ou votre évier, n'attendez pas le blocage complet, appelez-moi !</p>
            </div>
        </div>
    </main>

    <?php
    $contact_data = [
        'title' => 'un projet, une idée, <span style="color: #3AAA6D;">une urgence... ?</span>',
        'email' => 'Delfoin.multiservices@gmail.com',
        'phone' => '+33 6 15 80 81 93'
    ];
    render_contact_minimal($contact_data);
    ?>

</body>

</html>
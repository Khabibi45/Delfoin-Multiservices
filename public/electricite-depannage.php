<?php
require_once 'modules/functions.php';

$header_data = [
    'logo' => '',
    'logo_image' => 'images/logo/logo_medium-removebg-preview.png',
    'nav_links' => [
        ['text' => 'Accueil', 'url' => 'index.php'],
        ['text' => 'Plomberie', 'url' => 'plomberie.php'],
        ['text' => 'Electricité', 'url' => 'electricite.php', 'active' => true],
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
    <title>Dépannage Électricien Urgence - Delfoin Multiservices</title>
    <meta name="description"
        content="Plus de courant ? Disjoncteur qui saute ? Dépannage électrique rapide et sécurisé. Recherche de panne.">
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
            <a href="electricite.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux services Électricité
            </a>

            <span class="project-detail__subtitle">Urgences & Pannes</span>
            <h1 class="project-detail__title">Le noir total</h1>

            <div class="project-detail__content">


                <h2>Le noir total</h2>
                <p>
                    Samedi soir, 20h. Vous recevez des amis, le four tourne, et soudain... plus rien.
                    Le disjoncteur général a sauté. Vous essayez de le réenclencher, il saute a nouveau. La panique
                    monte.
                    C'est pour ce genre de situation stressante que je me rends disponible.
                </p>

                <h2>Sherlock Holmes du tableau électrique</h2>
                <p>
                    Rechercher une panne électrique, c'est une enquête. Ce n'est pas le hasard qui fait sauter les
                    plombs,
                    c'est une sécurité qui se déclenche.
                    Il faut isoler les circuits un par un. Tester la continuité.
                    Ce soir-là, chez mes clients, le coupable n'était pas le four, mais une prise extérieure qui avait
                    pris
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
            </div>
        </div>
    </main>

    <div id="contact">
        <?php render_contact_minimal($contact_data); ?>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
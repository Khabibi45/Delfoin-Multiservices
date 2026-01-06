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
    <title>Mise aux Normes Électrique - Delfoin Multiservices</title>
    <meta name="description"
        content="Rénovation électrique et mise en sécurité. Remplacement de tableau, mise à la terre, diagnostic électrique.">
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

            <span class="project-detail__subtitle">Sécurité & Conformité</span>
            <h1 class="project-detail__title">Le danger invisible</h1>

            <div class="project-detail__content">


                <p>
                    J'ai récemment visité un appartement ancien. Le propriétaire, Julien, venait d'acheter.
                    En ouvrant le vieux placard à balais, j'ai trouvé ce qu'on appelle un "tableau à fusibles
                    porcelaine".
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
            </div>
        </div>
    </main>

    <div id="contact">
        <?php render_contact_minimal($contact_data); ?>
    </div>
    <script src="js/main.js"></script>
</body>

</html>
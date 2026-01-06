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
    <title>Recherche de Fuite Non Destructive - Delfoin Multiservices</title>
    <meta name="description"
        content="Détection de fuite d'eau par caméra thermique et écoute électro-acoustique. Intervention rapide et ciblée pour limiter les dégâts.">
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
            <a href="plomberie.php" class="project-detail__back">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7" />
                </svg>
                Retour aux services Plomberie
            </a>

            <span class="project-detail__subtitle">Détection & Réparation</span>
            <h1 class="project-detail__title">Recherche de Fuite Non Destructive</h1>

            <div class="project-detail__content">
                <h2>L'angoisse de la tache au plafond</h2>
                <p>
                    C'est souvent comme ça que ça commence. Mme Dubois, une cliente résidant à proximité, m'a appelé un
                    lundi matin, inquiète.
                    Elle avait remarqué une tache d'humidité grandissante sur son plafond du rez-de-chaussée, mais
                    impossible de savoir d'où venait l'eau.
                    À l'étage, la salle de bain semblait pourtant parfaitement sèche.
                </p>

                <h2>L'approche "chirurgicale" plutôt que le marteau-piqueur</h2>
                <p>
                    Autrefois, on aurait peut-être dû casser le carrelage ou ouvrir le plafond "au hasard" pour trouver
                    le
                    tuyau responsable.
                    Mais chez <strong>Delfoin Multiservices</strong>, je privilégie la <strong>recherche de fuite non
                        destructive</strong>.
                </p>
                <p>
                    Arrivé sur place, j'ai sorti ma caméra thermique. En quelques minutes, l'image infrarouge a révélé
                    une
                    différence de température suspecte,
                    traçant le cheminement de l'eau invisible à l'œil nu. Ce n'était pas la douche, mais une micro-fuite
                    sur
                    une alimentation encastrée derrière le lavabo.
                </p>

                <h2>Une réparation ciblée et propre</h2>
                <p>
                    Le diagnostic étant précis, j'ai pu intervenir uniquement sur le carreau concerné.
                    Ce qui aurait pu être un chantier de rénovation complet s'est transformé en une réparation
                    chirurgicale
                    d'une heure.
                    Le résultat ? Une fuite stoppée net, des dégâts immobiliers évités, et une cliente soulagée de ne
                    pas
                    avoir à refaire toute sa salle de bain.
                </p>

                <h2>Pourquoi faire appel à un spécialiste de la détection ?</h2>
                <ul>
                    <li><strong>Économie :</strong> On évite de casser ce qui n'a pas besoin de l'être.</li>
                    <li><strong>Rapidité :</strong> Le diagnostic est posé rapidement grâce aux outils modernes.</li>
                    <li><strong>Sérénité :</strong> Vous savez exactement quel est le problème et comment le résoudre.
                    </li>
                </ul>
                <p>
                    Si vous suspectez une fuite (surconsommation d'eau, traces d'humidité, compteur qui tourne),
                    n'attendez
                    pas que les dégâts soient irréversibles.
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
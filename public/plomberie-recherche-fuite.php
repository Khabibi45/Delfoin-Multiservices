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
    'headline' => 'Recherche de Fuite',
    'subheadline' => 'Détection précise et réparation sans casse inutile.',
    'cta_text' => 'Urgence Fuite',
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
    <title>Recherche de Fuite Non Destructive - Delfoin Multiservices</title>
    <meta name="description"
        content="Détection de fuite d'eau par caméra thermique et écoute électro-acoustique. Intervention rapide et ciblée pour limiter les dégâts.">
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
            /* Using the blue from theme */
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .story-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .story-content ul {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }

        .story-content li {
            margin-bottom: 0.5rem;
        }
    </style>
</head>

<body>

    <?php render_header_classic($header_data); ?>

    <main>
        <?php render_hero_classic($hero_data); ?>

        <article class="story-content">
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
                Autrefois, on aurait peut-être dû casser le carrelage ou ouvrir le plafond "au hasard" pour trouver le
                tuyau responsable.
                Mais chez <strong>Delfoin Multiservices</strong>, je privilégie la <strong>recherche de fuite non
                    destructive</strong>.
            </p>
            <p>
                Arrivé sur place, j'ai sorti ma caméra thermique. En quelques minutes, l'image infrarouge a révélé une
                différence de température suspecte,
                traçant le cheminement de l'eau invisible à l'œil nu. Ce n'était pas la douche, mais une micro-fuite sur
                une alimentation encastrée derrière le lavabo.
            </p>

            <h2>Une réparation ciblée et propre</h2>
            <p>
                Le diagnostic étant précis, j'ai pu intervenir uniquement sur le carreau concerné.
                Ce qui aurait pu être un chantier de rénovation complet s'est transformé en une réparation chirurgicale
                d'une heure.
                Le résultat ? Une fuite stoppée net, des dégâts immobiliers évités, et une cliente soulagée de ne pas
                avoir à refaire toute sa salle de bain.
            </p>

            <h2>Pourquoi faire appel à un spécialiste de la détection ?</h2>
            <ul>
                <li><strong>Économie :</strong> On évite de casser ce qui n'a pas besoin de l'être.</li>
                <li><strong>Rapidité :</strong> Le diagnostic est posé rapidement grâce aux outils modernes.</li>
                <li><strong>Sérénité :</strong> Vous savez exactement quel est le problème et comment le résoudre.</li>
            </ul>
            <p>
                Si vous suspectez une fuite (surconsommation d'eau, traces d'humidité, compteur qui tourne), n'attendez
                pas que les dégâts soient irréversibles.
            </p>
        </article>

        <div id="contact">
            <?php render_contact_minimal($contact_data); ?>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>

</html>
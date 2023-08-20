<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/icones/favicon.png">
    <link rel="stylesheet" href="style.css?<?= filemtime('style.css')?>">
    <title>Saddek touati</title>
    
</head>
<body>

<div>
<div>
    This is a work in progress :)
    <span>
        in this page, some links might not work properly
    </span>
</div>


<nav id="top">
    <ul>
        <li>
            <a href="https://www.linkedin.com/in/saddek-touati-010603173/">LinkedIn</a>
        </li>
        <li>
            <a href="https://github.com/sadektouati">Github</a>
        </li>
    </ul>
    <ul>
        <li>
        <a href="#top">Accueil</a>
        </li>
        <li>
            <a href="#me">Moi</a>
        </li>
        <li>
            <a href="#work">Travaux</a>
        </li>
        <li>
            <a href="#contact">Contact</a> 
        </li>
    </ul>
</nav>

<header>
    <h1>
        Touati Saddek | Full stack developer
    </h1>
    <span>
        I have an eye on UI/UX | sometimes on security too :)
    </span>
</header>


<section id="me">

    <div>
        <h3>Me!</h3>
        <p>
            Je suis un développeur web passionné, doté de solides connaissances dans le domaine du web. J'apprends rapidement et je suis attentif aux détails.
            </p>
            <label class="_readMore">lire plus...</label>
            <p>
            Je possède une expertise technique solide en HTML, CSS et JavaScript, ainsi qu'une compréhension approfondie des principes fondamentaux de la conception web et de l'architecture MVC. Je suis capable de créer des interfaces utilisateur attrayantes et des expériences utilisateur exceptionnelles.
            </p>
            <p>
            De plus, je suis en mesure de comprendre rapidement les défis techniques et de trouver des solutions efficaces pour les résoudre. Je suis capable de décomposer des problèmes complexes en tâches plus petites et de les résoudre de manière méthodique.
            </p>
            <p>
            Ma curiosité et mon désir d'apprendre sont forts. Je suis toujours prêt à explorer de nouvelles idées et à adopter de nouvelles technologies pour améliorer mes compétences.
            </p>
            <p>
            Je suis également à l'aise dans la collaboration avec des designers, des spécialistes du marketing et d'autres développeurs afin d'atteindre des objectifs communs.
            </p>
            <p>
            En ce qui concerne mon travail, je suis autonome et capable de travailler de manière indépendante pour atteindre les objectifs fixés et respecter les délais.
            </p>
            <p>
            Je suis ouvert aux commentaires constructifs et aux améliorations. Je suis prêt à ajuster mon approche en fonction des besoins changeants du projet.
        </p>
    </div>

    <div>
        <h3>PHP</h3>
        <p>
            Je suis spécialisé dans le développement PHP avec le framework Laravel. Avec une solide expérience dans la création de sites web dynamiques et interactifs, je suis constamment à la recherche de nouvelles façons de repousser les limites de la technologie.
        </p>
    </div>

    <div>
        <h3>SQL</h3>
        <p>
            Mon expertise s'étend aux bases de données MySQL et PostgreSQL, me permettant de gérer efficacement les données et de créer des applications robustes. Ma connaissance approfondie de SQL me permet d'optimiser les performances des requêtes et d'assurer une gestion efficace des données.
        </p>
    </div>

    <div>
        <h3>CSS/ESNext</h3>
        <p>
            En ce qui concerne le front-end, je suis compétent en CSS et JavaScript, chose qui me permet de travailler avec tous les framework, j'ai développé une expertise particulière en Vue.js, un framework JavaScript progressif qui offre une expérience utilisateur fluide et réactive.
        </p>
    </div>

    <div>
        <h3>UX/UI</h3>
        <p>
            En tant que développeur web, je comprends l'importance de l'interface utilisateur (UI) et de l'expérience utilisateur (UX). Je m'efforce de créer des interfaces intuitives, esthétiques et conviviales pour offrir aux utilisateurs une expérience agréable et engageante.
        </p>
    </div>

    <div>
        <h3>Invitation</h3>
        <p>
            Je suis toujours à l'affût des dernières tendances et technologies de l'industrie, ce qui me permet de rester à jour et de proposer des solutions modernes et innovantes à mes clients.
        </p>
        <label class="_readMore">lire plus...</label>
        <p>
            Explorez mon portfolio pour découvrir les projets sur lesquels j'ai travaillé et pour en savoir plus sur mes compétences et mes réalisations. N'hésitez pas à me contacter si vous avez des questions ou si vous souhaitez discuter de votre prochain projet. Je serai ravi de collaborer avec vous pour concrétiser votre vision.
        </p>
    </div>

</section>

<?php include('school-projects.php'); ?>

    <ul class="scrollable">
        <li><a href="https://nextpixel.dz">nextpixel.dz</a></li>
        <li><a href="https://locadz.site/">https://locadz.site/</a></li>
        <li><a href="https://corsoceram.com">corsoceram.com</a></li>
        <li><a href="https://tijelabine.com">tijelabine.com</a></li>
        <li><a href="https://stampe.saddektouati.site/">stampe.site</a></li>
        <li><a href="http://wajedli.saddektouati.site">wajedli.site</a></li>
    </ul>

<main id="work">

    <?php foreach ($schoolProjects as $subcategory => $value) { ?>
        <section>
            <h2><?= $subcategory ?> <sub>@school</sub></h2>
            <?php foreach ($value as $title => $works) { ?>
                <article>
                    <h3>
                        <sup><?= count($works) ?> projet<?= count($works)>1?'s':'' ?> dans</sup>
                        <?= $title ?>
                    </h3>
                    <div class="scrollable">
                        <?php foreach ($works as $work) { ?>
                            <div>
                                <picture>
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="">
                                </picture>
                                <footer>
                                <?php
                            if(is_array($work['title'])){ ?>
                                <span>
                                 <?= $work['title'][0]?> :
                                <?php
                                foreach (['zonning', 'wireframe', 'maquette'] as $w) { ?>
                                   <a href="<?= $work['link'] ?>/<?= $w ?>" target="_blank"><?= $w ?></a>
                                <?php } ?>
                                </span>
                                <?php
                                }else{ ?>
                                <a href="<?= $work['link'] ?>" target="_blank"><?= $work['title'] ?></a>
                                <?php } ?>
                                <h4>
                                    <?= implode(', ', $work['tech']) ?>
                                </h4>
                            <a <?= empty($work['github']) ? '' : ' href="' . $work['github'] . '"' ?> target="_blank" class="github <?= empty($work['github']) ? 'no-github' : '' ?>">
                                    voir sur github
                            </a>
                                </footer>
                            </div>
                        <?php } ?>
                    </div>
                </article>
            <?php } ?>
        </section>
    <?php } ?>
    
</main>

<footer id="contact">
    <div>
        <header>
            Vous avez un mandat!
        </header>
        <p>
            ecrivez-moi @ mon <a href="mailto:saddektouati2016@gmail.com">courriel</a>
        </p>
    </div>
</footer>

</div>
</body>
<script>
        document.querySelectorAll('._readMore').forEach(element => {
            element.addEventListener('click', (evnt)=>{
                evnt.target.remove();
            })
        });
</script>
</html>
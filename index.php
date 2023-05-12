<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Saddek touati</title>
</head>
<body>
<div>
    this is a work in progress :)
    <span>
        in this page, some links might not work properly
    </span>
</div>
<h1>Touati Saddek | Full stack developer | with an eye on UI/UX | and some security :)</h1>
<?php include('school-projects.php'); ?>
    <main>
    <h2>School</h2>
    <?php foreach ($schoolProjects as $subcategory => $value) { ?>
        <section>
            <h3><?= $subcategory ?></h3>
            <?php foreach ($value as $title => $works) { ?>
                <article>
                    <h4><?= $title ?></h4>
                    <div>
                        <?php foreach ($works as $work) { ?>
                            <div>
                                <?= $work[2]??"this is an explanation" ?>
                                <a href="<?= $work[0] ?>" target="_blank"><?= $work[1] ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </article>
            <?php } ?>
        </section>
    <?php } ?>
    
</main>
</body>
</html>
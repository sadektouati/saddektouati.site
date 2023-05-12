<!DOCTYPE html>
<htm>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saddek touati</title>
</head>
<body>

<h1>Touati Saddek | Full stack developer | with an eye on UI/UX | and some security :)</h1>
<?php include('school-projects.php'); ?>
    <article>
    <h2>School</h2>
    <?php foreach ($schoolProjects as $subcategory => $value) { ?>
        <section>
            <h3><?= $subcategory ?></h3>
            <?php foreach ($value as $title => $works) { ?>
                <div>
                    <h4><?= $title ?></h4>
                    <?php foreach ($works as $work) { ?>
                        <div>
                            <?= $work[2]??"this is an explanation" ?>
                            <a href="<?= $work[0] ?>" target="_blank"><?= $work[1] ?></a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </section>
    <?php } ?>
    
</article>
</body>
</html>
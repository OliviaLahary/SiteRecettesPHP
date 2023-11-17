<?php
session_start(); //$_SESSION 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <!-- Navigation -->
    <?php include_once('header.php'); ?>

    <!-- Inclusion du formulaire de connexion -->
    <?php include_once('login.php'); ?>

    <!-- Fin du formulaire de connexion -->
        <h1>Site de Recettes !</h1>

        <?php foreach(get_recipes($recipes, $limit) as $recipe) : ?>
            <article>
                <h3><?php echo($recipe['title']); ?></h3>
                <div><?php echo($recipe['recipe']); ?></div>
                <i><?php echo(display_author($recipe['author'], $users)); ?></i>
            </article>
        <?php endforeach ?>
    </div>

    <?php include_once('footer.php'); ?>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
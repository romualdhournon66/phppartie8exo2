<?php
session_start();
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 8 exercice 2</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <div align="center">
                        <h1 align="center">PHP Partie 8 exercice 2</h1>
                        <h3 align="center"></h3>
                        <p class="text">Ton prénom est : <?= $_SESSION['lastname']; ?></p>
                        <p class="text">Ton nom est : <?= $_SESSION['firstname']; ?></p>
                        <p class="text">Et ton age est : <?= $_SESSION['age']; ?> ans</p>
                    </div>
                </div>
            </div>
            <div align="center">
                <a href="index.php">Retour à la page index</a>
            </div>
        </div>
    </body>
</html>
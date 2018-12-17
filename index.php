<?php
session_start();
// Mes variables de session ci-dessous
$_SESSION['lastname'] = 'Romuald';
$_SESSION['firstname'] = 'Hournon';
$_SESSION['age'] = 45;
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
                        <p class="text">Exercice 2</p>
                        <p class="text">Sur la page index, faire un liens vers une autre page. 
                            Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.</p> 
                        <p class="text">Ces variables auront été définies directement dans le code.
                            Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
                    </div>
                </div>
            </div>
            <div align="center">
                <a href="infos.php">Lien vers l'autre page</a>
            </div>
        </div>
    </body>
</html>
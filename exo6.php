<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 6 </h2>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?building=12&room=101</p>

<a href="exo6.php?building=12&room=101">exo6</a>

<p> <?php 
        if(isset($_GET['building']) && isset($_GET['room'])){
            echo 'La réunion est dans le batiment ' . $_GET['building'] . ' en salle ' . $_GET['room'];
        } else {
            echo 'le lieu de la réunion n\'est pas defini';
        }
?> </p>

</body>
</html>
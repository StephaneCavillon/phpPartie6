<?php
$weekNumber;

if(isset($_GET['week'])){
    $weekNumber = 'le numéro de la semaine est ' . $_GET['week'];
} else {
    $weekNumber = 'le numéro de semaine n\'est pas défini';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 5 </h2>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>

<a href="exo5.php?week=12">exo5</a>

<p> <?= $weekNumber?> </p>

</body>
</html>
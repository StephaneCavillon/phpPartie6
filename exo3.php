
<?php
$parameter;

if(!empty($_GET['startDate']) && isset($_GET['endDate'])){
    $parameter = 'startDate = ' . $_GET['startDate'] .' et ' . 'endDate = ' . $_GET['endDate'];
} else {
    $parameter = 'les dates ne sont pas là !';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
    <h2>Exercice 3 </h2>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>

     <a href="exo3.php?startDate=2/05/2016&endDate=27/11/2016">exo3</a>

    <p> <?= $parameter ?></p>

</body>
</html>
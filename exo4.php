
<?php
$language;
$server; 

if(isset($_GET['language']) && isset($_GET['server'])){
    $language = $_GET['language'];
    $server = $_GET['server'];
} else {
    $parameter = 'les paramètres ne sont pas là !';
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
<h2>Exercice 4 </h2>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP</p>

<a href="exo4.php?language=PHP&server=LAMP">exo4</a>

<p> 
    <?php
        if(isset($_GET['language']) && isset($_GET['server'])){
            echo 'le language est ' . $language = $_GET['language'] .' et le serveur est ' . $server = $_GET['server'] . '.';
        } else {
            echo 'les paramètres ne sont pas là !';
        }
    ?>
 </p>

</body>
</html>
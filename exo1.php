<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Exercice 1 </h2>

<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>

<a href="exo1.php?lastname=Nemare&firstname=Jean">lien</a>

<div>
<?php
if(isset($_GET['lastname']) && isset($_GET['firstname'])){
    echo 'Bonjour' . $_GET['firstname'] . $_GET['lastname'];
}else{
    echo 'Les paramètres ne sont pas là !';
}

?>
</div>


</body>
</html>
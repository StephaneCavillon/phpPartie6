<?php
$phrase;

if(!empty($_GET['lastname']) && !empty($_GET['firstname'] && !empty($_GET['age']))){
    $phrase = 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' et tu as '. $_GET['age'] . ' ans.';
}else{
    $phrase = 'Les paramètres ne sont pas là !';
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

        <h2>Exercice 2 </h2>
        <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare firstname=Jean</p>

        <a href="exo2.php?lastname=Nemare&firstname=Jean&age=32">exo2</a>

        <p><?= $phrase?></p>


    </body>
</html>
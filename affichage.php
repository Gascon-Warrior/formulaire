<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php var_dump($_POST) ?>
Merci <?= $_POST['prenom'] . ' '. $_POST['nom']?> de nous avoir contacté à propos de <?= $_POST['sujet']?>.

Un de nos conseillers vous contactera soit à l’adresse <?= $_POST['courriel']?> ou par téléphone au <?= $_POST['telephone']?> dans les plus brefs délais pour traiter votre demande :<br> 
<br>
<?= $_POST['message']?>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>

<body>
    <form action="affichage.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="courriel">Adress mail :</label>
            <input type="email" id="courriel" name="courriel">
        </div>
        <div>
            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone">
        </div>
        <div>           
            <option value="">Choisissez un sujet dans la liste</option>
            <select name="sujet" id="sujet">
                <option value="Je ne sais pas">Je ne sais pas</option>
                <option value="Renseignements">Renseignements</option>
                <option value="Jeux vidéos">Jeux vidéos</option>
                <option value="Dev">Dev</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>

</html>
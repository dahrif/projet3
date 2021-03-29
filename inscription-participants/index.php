<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>
    <form action="affichage.php" tarpost="_blank" method="post" >
        <label for="" >Nom</label>
        <input name="nom" type="text" required><br>
        <label for="" >Prénom</label>
        <input name="prenom" type="text" required><br>
        <label for="" >Email</label>
        <input name="email" type="email" required><br>
        <label for="" >Telephone</label>
        <input name="telephone" type="text"required><br>
        <button type="submit" name="valider">Enregistrer</button>
    </form>
</body>
</html>
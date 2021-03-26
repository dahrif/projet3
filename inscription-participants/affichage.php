<?php
 // Traitement

 // Initialisation du session
 session_start();

 // Initialisation du tableau des participants
 $nom = [];
 $prenom = [];
 $email = [];
 $telephone = [];
 $liste_participants = [];


// Trouver ou créer le tableau dans Session
  if( isset( $_SESSION['nom'] ) ) {
    $nom =  $_SESSION['nom'] ;
 }else {
    $_SESSION['nom'] =  $nom;
 }

 if( isset( $_SESSION['prenom'] ) ) {
    $prenom =  $_SESSION['prenom'] ;
 }else {
    $_SESSION['prenom'] =  $prenom;
 }

if( isset( $_SESSION['email'] ) ) {
    $email =  $_SESSION['email'] ;
 }else {
    $_SESSION['email'] =  $email;
 }

 if( isset( $_SESSION['telephone'] ) ) {
    $numero =  $_SESSION['telephone'] ;
 }else {
    $_SESSION['telephone'] =  $telephone;
 }

 // Ajouter le nom du nom dans le tableau
 $nom = $_POST["nom"] ;
 $prenom = $_POST["prenom"] ;
 $email = $_POST["email"] ;
 $telephone = $_POST["telephone"] ;


 // Enregistrer le tableau dans la session
 $_SESSION['nom'] =  $nom;
 $_SESSION['prenom'] =  $prenom;
 $_SESSION['email'] =  $email;
 $_SESSION['telephone'] =  $telephone;


 $_SESSION['liste_participants'] =  $liste_participants;

 $liste_participants[] = [$_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["telephone"] ];



?>



<!-- Affichage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table,
td {
    border: 1px solid #333;
}


</style>
</head>
<body>
<h1>Liste des participants</h1>

<table>
   
   <tr>
       <th>Nom</th>
       <th>prenom</th>
       <th>email</th>
       <th>telephone</th>
   </tr>
    <?php
        foreach ($liste_participants as $value) { 
        ?>
       
        <tr>
            <td><?php echo $_POST['nom'] ?></td>
            <td><?php echo $_POST['prenom'] ?></td>
            <td><?php echo $_POST['email'] ?></td>
            <td><?php echo $_POST['telephone'] ?></td>
        </tr>
  

        <?php
        }
        
    ?>
    </table>
    
    


</ul>
</body>
</html>
<?php
//initialisation du session
session_start();

//initialisation de tableau des participants
// $list_participants2=[];

 // Trouver ou créer le tableau dans Session
 //nom
 if( isset( $_SESSION['liste_nomS'] ) ) {
    $liste_nom =  $_SESSION['liste_nomS'] ;
 }elseif(isset($liste_nom)) {
   $_SESSION['liste_nomS'] =  $liste_nom;
 }
//prenom
if( isset( $_SESSION['liste_prenomS'] ) ) {
    $liste_prenom =  $_SESSION['liste_prenomS'] ;
 }elseif(isset($liste_prenom)) {
   $_SESSION['liste_prenomS'] =  $liste_prenom;
 }


 //Email
if( isset( $_SESSION['liste_emailS'] ) ) {
   $liste_email =  $_SESSION['liste_emailS'] ;
}elseif(isset($liste_email)) {
  $_SESSION['liste_emailS'] =  $liste_email;
}

  //Telephone
if( isset( $_SESSION['liste_teleS'] ) ) {
    $liste_tele =  $_SESSION['liste_teleS'] ;
 }elseif(isset($liste_tele)) {
   $_SESSION['liste_teleS'] =  $liste_tele;
 }


  // Ajouter le nom et email dans le tableau
  if (isset($_POST["nom"])||isset($_POST["prenom"])||isset($_POST["tele"])||isset($_POST["email"])) {
    $liste_nom[] = $_POST["nom"];
    $liste_prenom[] = $_POST["prenom"];
    $liste_email[] = $_POST["email"];
    $liste_tele[] = $_POST["tele"];

  }


  // Enregistrer le tableau dans la session
  if (isset($liste_nom)&&isset($liste_prenom)&&isset($liste_tele)&&isset($liste_email) ){
    $_SESSION['liste_nomS'] =  $liste_nom;
    $_SESSION['liste_prenomS'] =  $liste_prenom;
    $_SESSION['liste_emailS'] =  $liste_email;
    $_SESSION['liste_teleS'] =  $liste_tele;
   
  }


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage</title>
    <link rel='stylesheet' href='style2.css'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<div class="container">

<h2>List des participants : </h2>

<table class="table table-bordered table-fluid">
<thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                
            </tr>
            </thead>
            <tbody>

        <?php 

          for ($i=0; $i <sizeof($liste_nom); $i++){     
        
            echo "<tr>";
            echo "<td>".$liste_nom[$i]."</td>";
            echo "<td>".$liste_prenom[$i]."</td>";
            echo "<td>".$liste_email[$i]."</td>";
            echo "<td>".$liste_tele[$i]."</td>";
            echo "<tr>";

        }
      

    ?>  
<tbody>
    </table>
    <button type="button" class="btn btn-primary" onclick="window.print()">Imprimer</button>

    <button type="button" class="btn btn-primary" onclick="window.close()">Fermer</button>

    <button type='submit' class="btn btn-danger" value="Supprimer la session" name="supprimer_sess" onclick="<?php if(isset($_POST['supprimer_sess'])) session_destroy();?>">Supprimer</button>

</body>

</html>

<?php
    
 ?>
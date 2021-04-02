<?php
//initialisation du session
session_start();

//initialisation de tableau des participants
$liste_participants1=[];

 // Trouver ou créer le tableau dans Session
 if( isset( $_SESSION['liste_participants1'] ) ) {
    $liste_participants1 =  $_SESSION['liste_participants1'] ;
 }else {
    $_SESSION['liste_participants1'] =  $liste_participants1;
 }

  // Ajouter le nom du nom dans le tableau
  $liste_participants1[] = $_GET["nom"];

  // Enregistrer le tableau dans la session
$_SESSION['liste_participants1'] =  $liste_participants1;

?>




<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
 Formulaire v2
</title>
</head>
<body>

<h1>la listes des participants</h1>
<?php
        foreach ($liste_participants1 as $value) { 
            echo $value . "<br>"
        ?>
        
        <?php
        }
    ?> 
</body>

</html>
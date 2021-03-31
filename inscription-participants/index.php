<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<section class="get-in-touch">
   <h1 class="title">INSCRIPTION</h1>
   <form class="contact-form row" action="affichage.php" target="_blank" method="POST">
      <div class="form-field col-lg-6">
         <input name="nom" id="nom" class="input-text js-input" type="text" required>
         <label class="label" for="nom">Nom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="prenom" id="prenom" class="input-text js-input" type="text" required>
         <label class="label" for="prenom">Prénom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="email" id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
       <div class="form-field col-lg-6 ">
         <input name="tele" id="tele" class="input-text js-input" type="text" required>
         <label class="label" for="tele">Téléphone</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>
</section>
</body>
</html>
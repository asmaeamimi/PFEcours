<!DOCTYPE html>
<html>
<head>
    <title> Bievenue sur votre compte Asmae</title>
    <link href="stylesheets/styleperso.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
      <!------ Include the above in your HEAD tag ---------->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


      
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->  

      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Bootstrap  -->
      <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">

      <!-- Theme Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">

      <!-- Colors -->
      <link rel="stylesheet" type="text/css" href="stylesheets/colors/color3.css" id="color3">

      <!-- Animation Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
       <link rel="stylesheet" type="text/css" href="stylesheets/Styleperso.css">

      <!-- Animation headline Style -->
      <link rel="stylesheet" type="text/css" href="stylesheets/headline.css">

      <!-- REVOLUTION LAYERS STYLES -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

      <!-- Favicon and touch icons  -->
      <link href="icon/apple-touch-icon-48-precomposed.png" rel="icon" sizes="48x48">
      <link href="icon/apple-touch-icon-32-precomposed.png" rel="icon">
      <link href="icon/favicon.png" rel="icon">

      <link href="https://fonts.googleapis.com/css?family=Montserrat:400i|Pacifico|Parisienne|Sacramento" rel="stylesheet">

      <!--[if lt IE 9]>
          <script src="javascript/html5shiv.js"></script>
          <script src="javascript/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
</head>
<body>
<div class="form-style-10">
<?php


include("database.php");

// pour l'identifiant client
if (isset($_SESSION['id']) && !isset($_SESSION['id_pf']) && !isset($_SESSION['id_admi']) ) {
$identifiant = $_SESSION['id'];
}

echo"Bievenue sur votre espace Asmae";


if(isset($_POST['profile']) && ($_SESSION['id']))
{
  header('Location: profile.php?Client='.$identifiant.'');
}



if(isset($_POST['chercher']))
{
  if (isset($_SESSION['id']))
   {
      header('Location: cours.php?Client='.$identifiant.'');
   }
   else echo "<p style='text-align:center;color:orange;'>Le panier est autorisé sauf aux clients, Merci. </p>";

}

if(isset($_POST['afficher']))
{
  if (isset($_SESSION['id']))
   {
      header('Location: afficheModule.php?id='.$identifiant.'');
   }
  

}


?>
<form action="" method="POST">

<a href='deconnecter.php'> Se Déconnecter </a>
</form>



  <div class="container-fluid" style="background-image: url(logo/eco.png);">
    <div class="container">
      <div class="row">
        <div class='jumbotron jumbotron-fluid'>
        <h1 class='display-4 text-center' id="titlemtd">Accéder aux pages de site </h1>

        <div class="col-md-12" style="height:100px;">
          <img src="logo/banner.jpg" /> 
        </div>
        
</div>


       
         
          <div class="col-md-12">
          <div class="jumbotron " id="tr1" style="text-align: center;margin-top: 35px;">
            <h1 style="font-family:'Parisienne'"> Afficher Modules</h1>
            <p > Voir les modules 
            <p style="text-align:center;margin-top: 40px"><a class="btn btn-warning btn-md" href="afficheModule.php" role="button">Afficher</a></p>
          </div>
          </div>
           <div class="col-md-12">
          <div class="jumbotron " id="tr1" style="text-align: center;margin-top: 35px;">
            <h1 style="font-family:'Parisienne'">Chercher Cours</h1>
            <p > vous derigez vers la page de professeur avec ces cours 
            <p style="text-align:center;margin-top: 40px"><a class="btn btn-success btn-md" href="cours.php" role="button">Chercher</a></p>
          </div>
          </div>

           <div class="col-md-12">
          <div class="jumbotron " id="tr1" style="text-align: center;margin-top: 35px;">
            <h1 style="font-family:'Parisienne'">Réclamer</h1>
            <p > Faire une reclamation
            <p style="text-align:center;margin-top: 40px"><a class="btn btn-info btn-md" href="reclamation.php" role="button">Reclamer</a></p>
          </div>
          </div>
           <div class="col-md-12">
          <div class="jumbotron " id="tr1" style="text-align: center;margin-top: 35px;">
            <h1 style="font-family:'Parisienne'">Editer mon profile</h1>
            <p > Modifier ou ajouter des informations sur le profile 
            <p style="text-align:center;margin-top: 40px"><a class="btn btn-info btn-md" href="profile.php" role="button">Mon profile</a></p>
          </div>
          </div>
<!--
          <div class="col-md-6 ">
          <div class="jumbotron" id="tr2" style="text-align: center;margin-top:35px;">
            <h1 style="font-family: 'Parisienne'">La méthode panier</h1>
            <p> Accéder au panier pour chosir votre achat manuellement </p>

            <p style="text-align:center;margin-top: 40px"><a class="btn btn-info btn-md" href="monpanier.php" role="button">à partir de panier des produits </a></p>
          </div>
          -->

          </div>
        </div>

      </div>
    </div>
<!--
    <script> 
        $(document).ready(function()
        {
            $('#tr1').hover(function()
              {
                 $(this).css("background-color", "yellow").css("color","orange");
                 $('#titlemtd').text("votre méthode de transaction est classique");
              }, function()
              {
                $(this).css("background-color", "#eceeef").css("color","#646a7c");
                  $('#titlemtd').text(" Choisir votre méthode de transaction  ");
       });
    });

$(document).ready(function(){
  $('#tr2').hover(function(){
    $(this).css("background-color", "#5bc0de").css("color","white");
    $('#titlemtd').text("votre méthode de transaction est le panier");
    }, function(){
    $(this).css("background-color", "#eceeef").css("color","#646a7c");
     $('#titlemtd').text(" Choisir votre méthode de transaction  ");
  });
});
    </script>

  -->

</div>
</body>
</html>
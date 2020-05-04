 
<?php
//including the database connection file
require 'connexion.php';

 
//getting id of the data from url
$id = $_GET['id_etudiant'];
 
//deleting the row from table
$sql = "DELETE FROM etudiants WHERE id_etudiant=:id";
$query = $con->prepare($sql);
$query->execute(array(':id' => $id));
 
//redirecting to the display page (index.php in our case)
header("Location:Etudiant.php");
?> 
<?php
//including the database connection file
require 'connexion.php';

 
//getting id of the data from url
$id = $_GET['id_filiere'];
 
//deleting the row from table
$sql = "DELETE FROM filiere WHERE id_filiere=:id";
$query = $con->prepare($sql);
$query->execute(array(':id' => $id));
 
//redirecting to the display page (index.php in our case)
header("Location:filière.php");
?>
<?php
//including the database connection file
require 'connexion.php';

 
//getting id of the data from url
$id = $_GET['id_prof'];
 
//deleting the row from table
$sql = "DELETE FROM professeur WHERE id_prof=:id";
$query = $con->prepare($sql);
$query->execute(array(':id' => $id));
 
//redirecting to the display page (index.php in our case)
header("Location:Professeur.php");
?>
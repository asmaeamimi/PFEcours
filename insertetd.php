<!DOCTYPE html>
<html>
<head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 </head>

<?php 
$con=mysqli_connect('localhost','root','','basecour');

 if(isset($_POST['insert']))
{     
    

     $nom = $_POST['nom'];
     $date_naiss = $_POST['date_naiss'];
     $telephone = $_POST['telephone'];
    // $email = $_POST['email'];
     $adresse = $_POST['adresse'];
     $prenom = $_POST['prenom'];
     $ville = $_POST['ville'];
     $CNE = $_POST['CNE'];
     $CNI = $_POST['CNI'];
     $CV = file_get_contents($_FILES['myfile']['tmp_name']);
    //$password = $_POST['password'];
     $email = mysqli_real_escape_string($con, $_POST["email"]);  
           $pass = mysqli_real_escape_string($con, $_POST["password"]);  
           $password =  password_hash($pass, PASSWORD_DEFAULT);  
$query = "INSERT INTO etudiants (nom, date_naiss,telephone,email,adresse,prenom,ville,CNE,CNI,CV,password) VALUES('$nom', '$date_naiss','$telephone','$email','$adresse','$prenom','$ville','$CNE','$CNI','$CV','$password')";  
           if(mysqli_query($con, $query))  
           {  
                //echo '<script>alert("Registration Done")</script>';
                header('location:Etudiant.php')  ;
           }  }
?>
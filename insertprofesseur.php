 
 
<?php 

 include 'connexion.php';
 if(isset($_POST['insert']))
{    
      $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
     
     $nom = $_POST['nom'];
     $date_naiss = $_POST['date_naiss'];
     $telephone = $_POST['telephone'];
     $email = $_POST['email'];
     $adresse = $_POST['adresse'];
     $prenom = $_POST['prenom'];
     $ville = $_POST['ville'];
     $CIN = $_POST['CIN']; 
     $CV = file_get_contents($_FILES['myfile']['tmp_name']);
     
    
     $grade = $_POST['grade'];
     $site = $_POST['site'];
     $ordre = $_POST['ordre'];
     $code_travail = $_POST['code_travail'];
     $arr = array(":nom" => $nom ,":date_naiss"=>$date_naiss,":telephone"=>$telephone,":email"=>$email,":adresse"=>$adresse,":prenom"=>$prenom,":ville"=>$ville,":CIN"=>$CIN,":CV"=>$CV,":password"=>$passwordHash,":grade"=>$grade,":site"=>$site,":ordre"=>$ordre,":code_travail"=>$code_travail);
     $sql = "INSERT INTO professeur (nom,date_naiss,telephone,email,adresse,prenom,ville,CIN,CV,password,grade ,site ,ordre , code_travail )
     VALUES (:nom,:date_naiss,:telephone,:email,:adresse,:prenom,:ville,:CIN,:CV,:password,:grade,:site,:ordre,:code_travail)";
     $res = $con->prepare($sql);
     //$res=bindParam($CV);

     $res->execute($arr);
     if ($res==1) {
          header('location:Professeur.php');     }
   
}
?> 
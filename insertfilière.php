 

<?php
 include 'connexion.php';
 if(isset($_POST['ajouter']))
{     
    

     $libellé = $_POST['libellé'];
     $coordinateur = $_POST['coordinateur'];
     $objectif = $_POST['objectif'];
     $prerequis = $_POST['prerequis'];
     $descriptif = $_POST['descriptif'];
      
     $arr = array("libellé" => $libellé ,"coordinateur"=>$coordinateur,"objectif"=>$objectif,"prerequis"=>$prerequis,"descriptif"=>$descriptif );
     $sql = "INSERT INTO filiere (libellé,coordinateur,objectif,prerequis,descriptif  )
     VALUES ('".$libellé."','".$coordinateur."','".$objectif."','".$prerequis."','".$descriptif."')";
     $res = $con->prepare($sql);
     
$res->execute($arr);
         if ($res) {
             
              header('location:filière.php');
     
         }
     
   
}
?>


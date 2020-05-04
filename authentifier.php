 <?php 

 $con=mysqli_connect('localhost','root','','basecour');


 if(isset($_POST['valider']))
{

          
           $email = mysqli_real_escape_string($con, $_POST["email"]);  
           $password = mysqli_real_escape_string($con, $_POST["password"]);  
          // $password = password_hash('ayoub123', PASSWORD_DEFAULT);  
          
           
           $query = "SELECT * FROM etudiants WHERE email = '$email' and password='$password'";  
           $result = mysqli_query($con, $query);  
           $data  = $result->fetch_assoc();
           if(mysqli_num_rows($result) > 0)  
           {  
            if(password_verify($password,$data['password'])){
            echo "connecte";
           }
            header('location:authentification.php');
           
   } else{echo"mot de passe incorrect";}
         }
 ?>  

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta charset="UTF-8">
    
    <script type="text/javascript">
      (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
      
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 60px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 0px;
        }
        .table {
    margin: 0 auto;
    width: 80%;
}


    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
  
                           
     
                    <?php
                     
                    include 'blog.php';
                 include 'connexion.php';
                 echo" <div class='form-group'>
    <label for='exampleFormControlInput'>Search</label>
    <input type='search' class='form-control light-table-filter' data-table='order-table' id='exampleFormControlInput1' placeholder='Filter'>
  </div>";
$stat=$con->prepare('select * from filiere');
$stat->execute();
  
                           echo "<table class='table table-striped table-hover'> 
                                ";
                                echo " <thead>"; 
                                  echo " <tr>"; 

                                      
                                       echo " <th>Libellé</th> ";
                                       echo " <th>Coordinateur</th> ";
                                      echo "  <th>Objectif</th> ";
                                       echo " <th>Prerequis</th>"; 
                                       echo " <th>Descriptif</th> ";
                                       

                                       echo " <th>Action</th> ";
                                   echo " </tr> ";
                               echo "  </thead> ";
                                 echo "<tbody> ";
                               while ($data = $stat->fetch()){
                                       echo " <tr> "; 
                                       echo "<td>".$data['libellé']."  </td>  ";
                                      echo "  <td>".$data['coordinateur']." </td>  ";
                                       

                                       echo " <td>".$data['objectif']." </td>  ";
                                        echo "<td>".$data['prerequis']." </td>  ";
                                       echo " <td>".$data['descriptif']."</td>  ";
                                         
                                      echo "<td><a href=\"delete.php?id_filiere=$data[id_filiere]\" onClick=\"return confirm('vous êtes sur?')\"><i class='material-icons'>&#xe872;</i></a></td>";              
                                   echo "</tr>";   
                               
        }
                              echo " </tbody> ";                            
                           echo "</table>";
                            
 ?>
                    
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div style=" margin:auto; top: 0 %; padding-left:800px;">

<i class="material-icons" style="font-size:48px;color:red;"class="btn btn-primary" data-toggle="modal" data-target="#myModal">person_add</i> 
</div>
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Ajouter une filière</h1>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
         
             
 <form    action="insertfilière.php" method="POST"   >
                 
               
                <input type="text" name="libellé" class="form-control" placeholder="libellé" required="" autofocus="">
         <input type="text" name="coordinateur" class="form-control" placeholder="coordinateur" required autofocus="">
                <input type="text" name="objectif" class="form-control" placeholder="objectif" required autofocus="">
                <input type="text" name="prerequis" class="form-control" placeholder="prerequis" required autofocus="">
                <input type="text" name="descriptif" class="form-control" placeholder="descriptif" required autofocus="">
               
 
<div class="input-group">
  <button class="btn btn-md btn-block submit" name="ajouter" type="submit"><i class="fas fa-user-plus"></i> Ajouter</button>
</div>

            </form>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>   
</body>
</html>


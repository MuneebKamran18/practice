<?php 


$serverAddress="localhost";
$userName="root";
$password="";
$dataBaseName="muneeb_kamran";

$con = new mysqli($serverAddress,$userName,$password,$dataBaseName);

$sql = "SELECT * FROM  `students_data_a` ";

$result = $con->query($sql);


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>


    
  <h1 class="display-1">Muneeb Kamran</h1>
  <table class="table table-primary table-striped">
  
  <tr>
    <th>Name</th>
    <th>Father Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Roll#</th>
    <th>Gender</th>
    <th>Age</th>
  </tr>

  <?php
   
   if ($result-> num_rows > 0){

    while( $row = $result-> fetch_assoc()
    ){
        // echo $row ['name'];
        // echo $row ['father_name'];
        // echo $row ['age'];
        // echo $row ['email'];
        // echo '<br>';
    
        echo '<tr>';
        echo '<td>'.$row ['name'].'</td>';
        echo '<td>'.$row ['father_name'].'</td>';
        echo '<td>'.$row ['phone_number'].'</td>';
        echo '<td>'.$row ['email'].'</td>';
        echo '<td>'.$row ['roll_no'].'</td>';
        echo '<td>'.$row ['gender'].'</td>';
        echo '<td>'.$row ['age'].'</td>';
        echo '</tr>';

    }
    
    }else{
        echo 'No Data Available';
    }
    
  
  ?>

  
  </table>
  
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>






<?php 


$serverAddress="localhost";
$userName="root";
$password="";
$dataBaseName="muneeb_kamran";

$con = new mysqli($serverAddress,$userName,$password,$dataBaseName);

$sql = "SELECT * FROM  `students_data_a` ";

$result = $con->query($sql);
if ($result-> num_rows > 0){

while( $row = $result-> fetch_assoc()
){
    echo $row ['name'];
    echo $row ['father_name'];
    echo $row ['age'];
    echo $row ['email'];
    echo '<br>';

}

}else{
    echo 'No Data Available';
}


?>
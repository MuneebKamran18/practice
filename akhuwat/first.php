<?php


// $name="Muneeb Kamran Sharif";

// echo $name;
 
$serverAddress ='localhost'; 

// Jis server pr data base pari ho uska address server address hota h

$userName ='root'; 

// kisi bhi variable ka by default path root aye ga or password wala hamesha empty rhy ga

$password ='';
$dataBaseName ='muneeb_kamran';

$con = new mysqli( $serverAddress,$userName,$password,$dataBaseName );

$sql = "UPDATE students_data SET `age` = 22 WHERE id=2";

 
if( $con->query($sql) ==TRUE){

    echo "Password Updated!!! Congrats";
}

$sql1 ="INSERT INTO students_data ( `name`, `father_name`, `cnic`, `phone_number`, `email`, `roll_no`, `gender`, `age`) VALUES ('Saba','Ikram','3232421413213','032003123131','sab@gmail.com','231321','Female','20')";

if( $con->query($sql1) ==TRUE){

    echo "Row Added!!! Congrats";
}
$sql2 ="DELETE FROM students_data WHERE id=3";

if( $con->query($sql2) ==TRUE){

    echo "Row Deleted!!! Congrats";
}
 
?>
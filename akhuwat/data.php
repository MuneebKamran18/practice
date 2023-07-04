<?php
$serverAddress='localhost';
$userName='root';
$password='';
$dataBaseName='muneeb_kamran';

$con= new mysqli($serverAddress,$userName,$password,$dataBaseName);

if(isset($_POST['name'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_number'];
    $roll_no= $_POST['roll_no'];
    $gender = $_POST['gender'];
    $father_name = $_POST['father_name'];
    
    
    $sql="INSERT INTO `students_data_a` (`name`,`father_name`,`age`,`phone_number`,`email`,`gender`,`roll_no`) VALUES
    ('$name','$father_name','$age','$email','$phone_no','$roll_no','$gender')";
    
    
    
    if( $con->query($sql) ==TRUE ){
    	echo '<h1>Data Inserted</h1>';
    }else{
    	echo 'something Went wrong';
    }
    

}





?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>

    <div class="container-fluid px-1 py-5 mx-auto  ">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 class="display-1"  >Sign Up</h3>
            <p class="blue-text">Just answer a few questions<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4"></h5>
                
                <!-- form ki do attributes hoti hain aik method or dusra action 
                method ki do types hain post jo secure method h or dusra GeT inko hamesha capital ma likhen gay 
                or action ma hum simply php ka path btana h -->

                <form class="form-card" method="POST" action="data.php">

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="name" placeholder="Enter your name" onblur="validate(1)"> </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Father Name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="father_name" placeholder="Enter your father name" onblur="validate(1)"> </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Age<span class="text-danger"> *</span></label> <input type="text" id="lname" name="age" placeholder="Enter your age" > </div>   
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="phone_number" placeholder="03XX-XXXXXXX" > </div>

                    </div>
                    <div class="row justify-content-between text-left">

                  
                    
                        <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="job" name="email" placeholder="Enter Email Address" onblur="validate(5)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Gender<span class="text-danger"> *</span></label> <input type="text" id="job" name="gender" placeholder="" onblur="validate(5)"> </div>
                    
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Roll#<span class="text-danger"> *</span></label> <input type="number" id="job" name="roll_no" placeholder="" onblur="validate(5)"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Sign Up</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>


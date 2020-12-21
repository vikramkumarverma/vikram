<?php
 $insert = false;
 if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($server,$username,$password);

  if(!$con){
      die("connection to this database failed due to".mysqli_connect_error());
  }
 // echo "success connecting to the db";
     
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $age = $_POST['age'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $desc = $_POST['desc'];


 $sql ="INSERT INTO`start trip`. `hello` (`name`, `gender`, `age`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$gender', '$age', '$email', '$phone', '$desc', current_timestamp());
 ";
 //echo $sql;

 if($con->query($sql)==true){
     //echo "successfully inserted";
     $insert = true;

 }
 else{
     echo "ERROR: $sql <br> $con->error";
 }

 $con->close();

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welome to travel form.</title>
    <link rel="stylesheet" href="styleprojecttrip.css">
</head>
<body>
    <img  class="bg" src="projectimage.jpeg" alt="NITdelhi">
    <div class="container">
        <h3>welcome to NITdelhi US trip form</h3>
        <p>Enter your details to confirm your participation in the trip.</p>
        <?php

        if($insert == true){
        echo "<p class ='submitmsg'> thanks for submitting your form.</p>";
        }



        ?>
        <form action="index.php" method="POST">
           
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
             <button class="btn">Submit</button>


        </form>
    </div>

</body>
</html>



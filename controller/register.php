<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        .container{
            border: 2px solid white;
            /* margin-top: 30px; */
        }
    </style>
</head>
<body>
    <div class="container">


<?php
 include '../db/connect.php';
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobilenumber=$_POST['mobilenumber'];
  $role=$_POST['role'];

  $comb ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
  $pass=str_shuffle($comb);
  $password=substr($pass,0,6);
  echo "<h3 style='text-align:center; margin-top:50px; '>Successfully Registered</h3>";
  echo "<h4> </h4>";?>
  <div class="card" style="width: 25rem; margin-left:370px; margin-top:50px; background-color:aquamarine">
  <div class="card-body">
    <h5 class="card-title">Password</h5>
    <h6 class="card-subtitle mb-2 text-muted">Your Password is:</h6>
    <h3 class="card-text" style="color: orange;"><?php echo $password; ?></h3>
    <h4>Click Here the Login Button</h4>
    <button class="btn btn-primary"><a a href="../controller/login.html" style="color: white; text-decoration:none;">Login</a></button>
  </div>
</div>

<?php

  $sql="insert into customer_table (name,email,mobilenumber) values('$name','$email','$mobilenumber')";
//    echo"<hr>";
   if(mysqli_query($con,$sql)){
    //    echo"record inserted successfully";
   }else{
       echo"<h2>Error</h2> <br>". $sql. "<br>". mysqli_error($con);
   }

   $sql_login="insert into login(email,password,role) values('$email', '$password','$role')";
//    echo"<hr>";
   if(mysqli_query($con,$sql_login)){
    //    echo"record inserted successfully";
   }else{
       echo"<h2>Error</h2> <br>". $sql_login. "<br>". mysqli_error($con);
   } 
   

?>
</div>
</body>
</html>
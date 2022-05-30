<?php
  include '../db/connect.php';

  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobilenumber=$_POST['mobilenumber'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirmpassword'];
  $sql="insert into customer_table(name,email,mobilenumber,password,confirmpassword) values('$name','$email','$mobilenumber','$password','$confirmpassword')";

  if($result=mysqli_query($con,$sql)){
      echo "Inserted successfully";  
      header('location:./customer_table.php');
    }else{
      echo "Not inserted" . mysqli_error($con);
    }

?>
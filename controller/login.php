<?php session_start();
  include '../db/connect.php';
  $email=$_POST['email'];
  $password=$_POST['password'];
  $dbrole=[''];
  $dbpassword=[''];
  $sql="select * from login where email= '$email'";

  if($result=mysqli_query($con,$sql)){
      echo "sorry";
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)){
              $email=$row['email'];
              $dbpassword=$row['password'];
              $dbrole=$row['role'];
          }
          if($password==$dbpassword){
              echo "welcome to login page";
              $_SESSION['email']=$email;
              $_SESSION['role']=$dbrole;
              
              header('location:index.php');
          }else{
              echo "sorry";
              session_destroy();
          }if($_SESSION['role']=='A'){
              
              header('location:../index.php');
        }else{
            header('location:./user_dashboard.php');
        }
      }else{
          echo"not validate";
      }
  }else{
      echo "hii sorry";
  }
 

?>
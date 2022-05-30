<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <style>
        .navbar{
            width: 100%;
            position: relative;
            background-color: lightcoral;
            /* height: 1300px; */
        }
        .container{
            border: 2px solid sandybrown;
            margin-top: -10px;
            width: 50%;
            position: relative;
            /* left: 30%; */
        }
        
    </style>
</head>
<body>
  
<div class="container-fluid">
<div class="nav" >
          <nav class="navbar navbar-expand-lg navbar-light">
          <img src="../images/logo.jpg" width="50" height="50" style="margin-left: 10px;" alt="">
  <a class="" href="./index.php"  style="margin-left: 15px; color:white; text-decoration:none;">eNoah Shopping</a>
  <li class="nav-item">
        <a class="nav-link" href="./controller/customer_table.php"><i class="fa fa-phone" style="font-size:26px"></i>9629514069</a>
      </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./user_dashboard.php" style=" padding-left: 650px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./viewcart.php">View Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
          </div>
    <!-- </div> -->

    <!-- navbar end -->
<?php
include '../db/connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$cardname=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$expmonth=$_POST['expmonth'];
$expyear=$_POST['expyear'];
$cvv=$_POST['cvv'];

$transaction ="1234567890";
  $tran=str_shuffle($transaction);
  $transaction_id=substr($tran,0,8);?>
  <h1 style="text-align: center;">Ordered Successfully</h1>
  <div class="card" style="width: 25rem; margin-left:430px; margin-top:50px; background-color:aqua">
  <div class="card-body">
    <h5 class="card-title">Ordered</h5>
    <h6 class="card-subtitle mb-2 text-muted">Your Transaction Id:</h6>
    <h3 class="card-text" style="color: orange;"><?php echo $transaction_id; ?></h3>
    <h4>Click Here the Home Button<br>Continue Your Shopping</h4>
    <button class="btn btn-primary"><a a href="./user_dashboard.php" style="color: white; text-decoration:none;">Home</a></button>
  </div>
</div>
<h1 style="text-align: center;">...!ThankYou!...</h1>
<?php
//   echo "<button><a href='../controller/product_table.php'>Home</a></button>";
 $sql="insert into order_table(name,email,address,city,state,pincode,transaction_id) values('$name','$email','$address','$city','$state','$pincode','$transaction_id')";
 if(mysqli_query($con,$sql)){
    echo"";
}else{
    echo"<h2>Error</h2> <br>". $sql. "<br>". mysqli_error($con);
}
?>
</div>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <style>
        .navbar{
            width: 100%;
           
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
     <!-- navbar -->
          <div class="nav">
          <nav class="navbar navbar-expand-lg navbar-light">
          <img src="./images/logo.jpg" width="50" height="50" style="margin-left: 10px;" alt="">
  <a class="" href="./index.php"  style="margin-left: 15px; color:white; text-decoration:none;">eNoah Shopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php" style=" padding-left: 700px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/customer_table.php">Customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/product_table.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/cart_table.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/order_table.php">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
          </div>
    </div>

    <!-- Navbar end -->
    <?php session_start();
    if(isset($_SESSION['email'])){
    ?>
    <!-- Card -->
    <div class="card" style="width: 18rem; margin-top:30px; margin-left:20px; background-color:lightcyan;">
  <div class="card-body">
  <i class='fas fa-user-friends' style='font-size:36px'></i>
    <h5 class="card-title">Customers</h5>
    <h6 class="card-subtitle mb-2 text-muted">Total Number Of Customers</h6>
    <?php 
    
             include './db/connect.php';
             $sql="select count(*) as total from customer_table";
             if($result=mysqli_query($con,$sql)){
             if($row=mysqli_fetch_assoc($result)){
             echo "<h4 style='color: blue;' class='card-text'>".$row['total']."</h4>";
      }
  }


?>
  </div>
</div>

<div class="card" style="width: 18rem; margin-top:-120px; margin-left:325px; background-color:lightgreen">
  <div class="card-body">
  <i class="fa fa-industry" style="font-size:36px"></i>
    <h5 class="card-title">Products</h5>
    <h6 class="card-subtitle mb-2 text-muted">Total Number Of Products</h6>
    <?php 
             include './db/connect.php';
             $sql="select count(*) as total from product_table";
             if($result=mysqli_query($con,$sql)){
             if($row=mysqli_fetch_assoc($result)){
             echo "<h4 style='color: blue;' class='card-text'>".$row['total']."</h4>";
      }
  }


?>

  
  </div>
</div>

<div class="card" style="width: 18rem; margin-top:-120px; margin-left:625px; background-color:lightgray">
  <div class="card-body">
  <i class="fa fa-shopping-cart" style="font-size:36px"></i>
    <h5 class="card-title">Orders</h5>
    <h6 class="card-subtitle mb-2 text-muted">Total Number Of Orders</h6>
    <?php 
             include './db/connect.php';
             $sql="select count(*) as total from order_table";
             if($result=mysqli_query($con,$sql)){
             if($row=mysqli_fetch_assoc($result)){
             echo "<h4 style='color: blue;' class='card-text'>".$row['total']."</h4>";
      }
  }


?>
  </div>
</div>

<div class="card" style="width: 18rem; margin-top:-120px; margin-left:925px; background-color:lightblue">
  <div class="card-body">
  <i class='fas fa-shipping-fast' style='font-size:36px'></i>
    <h5 class="card-title">Delivery</h5>
    <h6 class="card-subtitle mb-2 text-muted">Total Number Of Delivery</h6>
    <?php 
             include './db/connect.php';
             $sql="select count(*) as total from delivery_table";
             if($result=mysqli_query($con,$sql)){
             if($row=mysqli_fetch_assoc($result)){
             echo "<h4 style='color: blue;' class='card-text'>".$row['total']."</h4>";
      }
  }
    

?>
  </div>
</div>
<!-- card end -->
</body>
</html><?php }else{
         echo "Login to see details";
         echo "<a href='./controller/login.html'>Login Here</a>";
         echo "</body>";
         echo "</html>";
}




?>
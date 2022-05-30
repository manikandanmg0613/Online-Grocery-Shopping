<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar{
            width: 100%;
           
            background-color: lightcoral;
        }
        
    </style>

</head>
<body>
    <div class="container-fluid">
    <div class="nav">
          <nav class="navbar navbar-expand-lg navbar-light">
          <img src="../images/logo.jpg" width="50" height="50" style="margin-left: 10px;" alt="">
  <a class="" href="./index.php"  style="margin-left: 15px; color:white; text-decoration:none;">eNoah Shopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php" style=" padding-left: 700px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./customer_table.php">Customers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./product_table.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./cart_table.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
          </div>
    <!-- </div> -->
        <div class="btn">
               <button class="btn btn-dark" style="margin-top:10px;"><a href="./add_product.php" style="color: white;"><i class="fa fa-plus-circle"> Add Products</a></i></button>
        </div>
        <div class="header">
          <h2 style="text-align: center;">Products Details</h2>
        </div>
        <?php session_start();
    if(isset($_SESSION['email'])){
      // echo "welcome :".  $_SESSION['email'];
    ?>
           <?php
              include '../db/connect.php';

              $sql="select * from product_table";
              if($result=mysqli_query($con,$sql)){
                  if(mysqli_num_rows($result)){
                      echo "<table class='table table-bordered text-center'>";
                      echo "<thead>";
                      echo "<tr>";
                      echo "<th>Product Id</th>";
                      echo "<th>Category Id</th>";
                      echo "<th>Product Name</th>";
                      echo "<th>Product Cost</th>";
                      echo "<th>Description</th>";
                      // echo "<th>Image</th>";
                      echo "<th>Action</th>";
                      echo "</tr>";
                      echo "</thead>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tbody>";
                        echo "<tr>";
                        $product_id=$row['product_id'];
                        echo "<td>".$row['product_id']."</td>";
                        echo "<td>".$row['category_id']."</td>";
                        echo "<td>".$row['product_name']."</td>";
                        echo "<td>".$row['cost']."</td>";
                        echo "<td>".$row['description']."</td>";
                        // echo "<td style='background-color: skyblue;'><a href='./product_view.php?id=".$product_id."' ><i class='fa fa-eye' style='color: white;'></i></a></td>";
                        echo "<td style='background-color: blue;'><a href='./product_update.php?id=".$product_id."' style='color: white;'><i class='fa fa-edit'></i></a></td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }  
                    echo "</table>";
                  }
              }


          ?>
    </div>
</body>
</html><?php }else{
         echo "Login to see details";
         echo "<a href='./login.html'>Login Here</a>";
         echo "</body>";
         echo "</html>";
}
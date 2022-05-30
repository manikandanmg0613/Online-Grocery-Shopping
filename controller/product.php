<?php
  include '../db/connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Products</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <a class="nav-link" href="./user_dashboard.php" style=" padding-left: 600px;">Home</a>
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
          <h1>Products</h1>
          <?php    
            $sql="select * from product_table";
            $res=$con->query($sql);
            if($res->num_rows>0){
                while($row=$res->fetch_assoc())
                { 
                    echo '<div class=" text-center">
                    <img src="../images/'.$row['image'].'" style="width:400px;"  alt="" class="img-responsive">
                    <p><strong><a href="">'.$row['product_name'].'</a></strong></p>
                    <h4 class="text-danger">Rs.'.$row['cost'].'</h4>
                    <p><a href="view.php?id='.$row['product_id'].'" class="btn btn-success">View Details</a></p>
                    
                    
                    </div>';
                }
            }
          ?>
    </div>
</body>
</html>
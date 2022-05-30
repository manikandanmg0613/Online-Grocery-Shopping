<?php
 session_start();
//  print_r($_SESSION["cart"]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
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
        <div class="row">
       <button class="btn btn-danger" style="width: 10%;margin-left:20px;margin-top:20px;"><a href="../controller/view.php" style="color: white; text-decoration:none; ">Go Back</a></button>
       <button class="btn btn-primary" style="width: 10%; margin-left:20px; margin-top:20px;"><a href="../controller/user_dashboard.php" style="color: white; text-decoration:none">Home</a></button>
       <form  action="./order.php" method="post">   
       <table class="table table bordered text-center">
              <tr>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Total</th>
                  <th>Delete</th>
              </tr>
          <?php 
        //   delete
            if(isset($_GET['del'])){
               foreach($_SESSION["cart"] as $key=>$values){
                   if($values["product_id"]==$_GET["del"]){
                       unset($_SESSION["cart"][$key]);
                   }
               }
            }  ?>
            <?php
            // delete end
            
             ?>
             <?php
             if(!empty($_SESSION["cart"])){
                 $total=0;
                 foreach($_SESSION["cart"]  as $key=>$values){
                     $amount=$values['quantity']*$values["cost"];
                     $total+=$amount;
                     echo "
                     <tr>
                     <td>{$values["product_name"]}</td>
                     <td>{$values["quantity"]}</td>
                     <td>{$values["cost"]}</td>
                     <td>{$amount}</td>
                     <td><a href='viewcart.php?del={$values["product_id"]}'><i class='fa fa-trash'></i></a></td>
                     </tr>";
                 }
                 echo "<tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>Total Amount</td>
                     <td>{$total}</td>
                 </tr>";
             }else{
                echo "<script>alert('Please Select the products!...');</script>";
                header('location:./product.php');
             }

              ?>
          </table>
        </div>
        <button class="btn btn-success" style="margin-left: 1000px;"> Order Now</button>
    </div>
    </form>
</body>
</html>

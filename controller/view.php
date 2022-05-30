<?php session_start();
  include '../db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a class="nav-link" href="./user_dashboard.php" style=" padding-left: 700px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./viewcart.php">view Cart</a>
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
              <h1>Add to cart</h1>
              <div class="col-md-4">
              <?php
                  if(isset($_POST["addcart"])){
                    if(isset($_SESSION["cart"])){
                      $product_id_array=array_column($_SESSION["cart"],"product_id");
                      if(!in_array($_GET["id"],$product_id_array)){
                          $index=count($_SESSION["cart"]);
                          $item=array(
                            'product_id'=>$_GET['id'],
                            'product_name'=>$_POST['product_name'],
                            'cost'=>$_POST['cost'],
                            'quantity' =>$_POST['quantity']
                        );
                        $_SESSION["cart"][$index]=$item;
                        echo "<script>alert('Product Added!...');</script>";
                        header('location:./viewcart.php');

                      }else{
                          echo "<script>alert('Already Added!...')</script>";
                          
                      }
                    }else{
                        $item=array(
                            'product_id'=>$_GET['id'],
                            'product_name'=>$_POST['product_name'],
                            'cost'=>$_POST['cost'],
                            'quantity' =>$_POST['quantity']
                        );
                        $_SESSION["cart"][0]=$item;
                        echo "<script>alert('Product Added!...');</script>";
                        header('location:./viewcart.php');
                    }
                  }



                if(isset($_GET['id'])){
                     $sql="select * from product_table where product_id={$_GET['id']}";
                     $res=$con->query($sql);
                     if($res->num_rows>0)
                     {
                         $row=$res->fetch_assoc();
                         echo "
                         <form action='{$_SERVER["REQUEST_URI"]}' method='post'>
                         <table class='table table-bordered'><tr><td colspan='2'><img src='../images/{$row['image']}' style='width:400px;''></td></tr>
                                <tr><td>Product Name</td><td><strong>{$row['product_name']}</strong></td></tr>
                                <tr><td>Product Description</td><td>{$row['description']}</td></tr>
                                <tr><td>Product Cost</td><td><strong>Rs.{$row['cost']}</strong></td></tr>
                                <tr><td>Quantity</td><td>
                                <input type='number' class='form-control' name='quantity' value='0' required>
                                <input type='hidden'   class='form-control' name='product_name' value='{$row["product_name"]}'>
                                <input type='hidden'  class='form-control' name='cost'  value='{$row["cost"]}'>
                                </td></tr>
                                <tr><td></td><td><input type='submit' name='addcart' class='btn btn-success' value='Add Cart'></td></tr>
                                </table>
                                </form>";
                     }else{
                        header('location:product.php');
                     }
                }else{
                    header('location:product.php');
                }

?>
</div>
          </div>
    </div> 
</body>
</html>
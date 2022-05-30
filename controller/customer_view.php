<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
  <a class="" href="./index.php"  style="margin-left: 15px; color:white; text-decoration:none;">MaGa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php" style=" padding-left: 800px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./controller/customer_table.php">Customers</a>
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
               <button class="btn btn-dark" style="margin-top:10px;"><a href="./customer_table.php" style="color: white;"><i class="fa fa-plus-circle"> Go Back</a></i></button>
        </div>
        <div class="header">
          <h2 style="text-align: center;">Customer Details</h2>
        </div>
           <?php
              include '../db/connect.php';
              $customer_id=$_GET['id'];
              $sql="select * from customer_table where customer_id=$customer_id";
              if($result=mysqli_query($con,$sql)){
                  if(mysqli_num_rows($result)){
                      echo "<table class='table table-bordered text-center'>";
                      echo "<thead>";
                      echo "<tr>";
                      echo "<th>Customer Id</th>";
                      echo "<th>Customer Name</th>";
                      echo "<th>Email</th>";
                      echo "<th>Mobile Number</th>";
                      echo "<th>Creation Date</th>";
                      echo "</tr>";
                      echo "</thead>";
                    while($row=mysqli_fetch_assoc($result)){
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$row['customer_id']."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row['mobilenumber']."</td>";
                        // echo "<td>".$row['creationData']."</td>";
                        echo "</tr>";
                        echo "</tbody>";
                    }  
                    echo "</table>";
                  }
              }


          ?>
    </div>
</body>
</html>
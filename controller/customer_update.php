<?php 
include '../db/connect.php';
$customer_id=$_GET['id'];
$sql="select * from customer_table where customer_id=$customer_id";


if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
       $name=$row['name'];
       $email=$row['email'];
       $mobilenumber=$row['mobilenumber'];
      }else{
        echo "no data in database";
    }
}else{
  $e=mysqli_error($con);
  $str="\n".$name."has an error while Updating ".$e."on ".$date;
  $fp=fopen("../logs/error.txt","a");
  fwrite($fp,$str);
  fclose($fp);
    echo "Records Not Updating <br>" . mysqli_error($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        .container-fluid{
            border: 1px solid black;
            width: 40%;
            margin-top: 30px;
        }
        .row input{
           width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        
        <div class="header">
               <h2 style="text-align: center;">Add Customers</h2>
        </div>
          <form action="./customer_update1.php" method="get">
              <div class="row">
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" class="form-control" name="name" value=<?php echo $name;   ?>>
                    </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value=<?php echo $email;   ?>>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" class="form-control" name="mobilenumber" value=<?php echo $mobilenumber; ?>>
                </div>
              </div>
              <input type="hidden" name="cust" value=<?=$customer_id ?>>
              <div class="btn">
                  <button class="btn btn-danger"><a href="./customer_table.php" style="color: white; text-decoration: none;">Back</a></button>
                  <button class="btn btn-primary">Update</button>
              </div>
          </form>
    </div>
      </div>
</body>
</html>
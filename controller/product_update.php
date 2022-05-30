<?php 
include '../db/connect.php';
$product_id=$_GET['id'];
$sql="select * from product_table where product_id=$product_id";


if($result=mysqli_query($con,$sql)){
    if($row=mysqli_fetch_array($result)){
       $category_id=$row['category_id'];
       $product_name=$row['product_name'];
       $cost=$row['cost'];
      }else{
        echo "no data in database";
    }
}else{
  $e=mysqli_error($con);
  $str="\n".$category_id."has an error while Updating ".$e."on ".$date;
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
    <title>Add Products</title>
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
               <h2 style="text-align: center;">Add Products</h2>
        </div>
          <form action="./insert_product.php" method="post">
              <div class="row">
                    <div class="form-group">
                        <label>Category Id</label>
                        <select class="form-control" name="category_id">
                            <option><?php echo $category_id;  ?></option>
                      </select>
                    </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Product Name</label>
                    <select class="form-control" name="product_name">
                            <option><?php echo $product_name;  ?></option>
                      </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Product Cost</label>
                    <input type="text" name="cost" class="form-control" value=<?php echo $cost;  ?>>
                </div>
              </div>
              <input type="hidden" name="product_id" value=<?=$product_id ?>>
              <div class="btn">
                  <button class="btn btn-danger"><a href="" style="color: white; text-decoration: none;">Back</a></button>
                  <button class="btn btn-primary">Create Product</button>
              </div>
          </form>
    </div>
</body>
</html>
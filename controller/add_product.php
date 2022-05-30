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
            box-shadow: 0px 0px 10px gray;
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
                            <option></option>
                        <?php
                        include '../db/connect.php';
                        $sql="select category_id,category_name from category_table";
                        if($res=mysqli_query($con,$sql)){
                        if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_array($res)){
                             $name=$row['category_id'];
                        echo "<option >".$name."</option>";
                 }
             }
             }
               ?>
                      </select>
                    </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Product Cost</label>
                    <input type="text" name="cost" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
              </div>
              <div class="btn">
                  <button class="btn btn-danger"><a href="./product_table.php" style="color: white; text-decoration: none;">Back</a></button>
                  <button class="btn btn-primary">Create Product</button>
              </div>
          </form>
    </div>
</body>
</html>
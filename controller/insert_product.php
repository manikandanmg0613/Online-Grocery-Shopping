<?php
  include '../db/connect.php';
  $category_id=$_POST['category_id'];
  $product_name=$_POST['product_name'];
  $cost=$_POST['cost'];
  $description=$_POST['description'];
  $image=$_POST['image'];
  $sql="insert into product_table(category_id,product_name,cost,description,image) values($category_id,'$product_name',$cost,'$description','$image')";

  if($result=mysqli_query($con,$sql)){
      echo "Inserted successfully";  
      header('location:./product_table.php');
    }else{
      echo "Not inserted" . mysqli_error($con);
    }

?>
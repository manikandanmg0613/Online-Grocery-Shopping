<?php 
include './db/connect.php';
$product_id=$_GET['product_id'];

$category_id=$_GET['category_id'];
$product_name=$_GET['product_name'];
$cost=$_GET['cost'];


$sql="update product_table set category_id=$category_id,product_name='$product_name',cost=$cost where product_id='$product_id'";
if($result=mysqli_query($con,$sql)){
    echo "updated ";
    header('location:./product_table.php');
}else{
    echo "sorry" . mysqli_error($con);
}

mysqli_close($con);
?>

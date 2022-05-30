<?php 
include '../db/connect.php';
$customer_id=$_GET['cust'];
echo $customer_id;
$name=$_GET['name'];
$email=$_GET['email'];
$mobilenumber=$_GET['mobilenumber'];

$sql="update customer_table set name='$name',email='$email',mobilenumber='$mobilenumber' where customer_id= $customer_id";
echo $sql;
if($result=mysqli_query($con,$sql)){
    echo "updated ";
    header('location:./customer_table.php');
}else{
    echo "sorry <br>" . mysqli_error($con);
}

mysqli_close($con);
?>

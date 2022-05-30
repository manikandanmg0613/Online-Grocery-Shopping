<?php
include '../db/connect.php';

$potato=$_POST['potato'];
$tomato=$_POST['tomato'];
$carrot=$_POST['carrot'];
$cauliflower=$_POST['cauliflower'];
echo $potato;
echo "<hr>";
echo $tomato;
echo "<hr>";
echo $carrot;
echo "<hr>";
echo $cauliflower;
echo "<hr>" ;
$sql="select cost from product_table";
if($result=mysqli_query($con,$sql)){
  if(mysqli_num_rows($result)){
      while($row=mysqli_fetch_assoc($result)){
            $cost=$row['cost'];
      }if($total_amount=$potato*$cost){
         echo $total_amount;
      }elseif($total_amount=$tomato*$cost)
      echo $total_amount;
  }elseif($total_amount=$carrot*$cost){
      echo $total_amount;
  }elseif($total_amount=$cauliflower*$cost){
      echo $total_amount;
  }
}




?>
<button><a href="./order.html">order Now</a></button>
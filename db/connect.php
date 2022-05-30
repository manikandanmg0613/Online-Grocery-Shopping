<?php
  $con=mysqli_connect('localhost',
                     'root',
                     'mani1314',
                     'grocerydb');
  if($con==false){
      echo "error in connection" . mysqli_connect_error();
  }                  
?>
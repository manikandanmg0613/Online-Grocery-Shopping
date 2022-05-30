<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <a class="nav-link" href="./user_dashboard.php" style=" padding-left: 600px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./product.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./viewcart.php">View Cart</a>
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

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/1624848.jpg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/g111.jpeg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/go1.jpg" class="d-block w-100" style="height: 500px;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
    </div><br>
  <!-- carousel end -->
  <form action="./user_add_cart.php" method="post">
 <div class="image" style="background-color: lightblue; height:100%;">
     <h2 style="margin-left: 20px;">Vegetables</h2>
     <div class="btn">
          <button class="btn btn-success" style="margin-left: 1100px;"><a href="./product.php" style="color: white; text-decoration:none;">Buy Now</a></button>
          
     </div>
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/potato.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Potato</h5>
    <p class="card-text">Potato Imported 1 kg<br> M.R.P: ₹ 40.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="potato">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-378px; margin-left:320px">
  <img src="../images/tomato.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tomato</h5>
    <p class="card-text">Tomato Imported 1 kg<br> M.R.P: ₹ 30.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="tomato">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-375px; margin-left:620px">
  <img src="../images/carrot.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Carrot</h5>
    <p class="card-text">Carrot Imported 1 kg<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="carrot"><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- cauliflower -->
<div class="card" style="width: 18rem; margin-top:-375px; margin-left:920px">
  <img src="../images/cauliflower.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cauliflower</h5>
    <p class="card-text">Cauliflower Imported 1 <br> M.R.P: ₹ 10.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="cauliflower"><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<hr>
<!-- first row end -->
<div class="image" style="background-color: lightblue; height:1000px;">
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/Cabbage.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cabbage</h5>
    <p class="card-text">Cabbage Imported 1 <br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-348px; margin-left:320px">
  <img src="../images/capsicum.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Capsicum</h5>
    <p class="card-text">Capsicum Imported 1 kg<br> M.R.P: ₹ 30.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-340px; margin-left:620px">
  <img src="../images/bitter gourd.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bitter Gourd</h5>
    <p class="card-text">Bitter Gourd Imported 1 kg<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- cauliflower -->
<div class="card" style="width: 18rem; margin-top:-375px; margin-left:920px">
  <img src="../images/green_chilli.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Green Chilli</h5>
    <p class="card-text">Green Chilli Imported 1 kg<br> M.R.P: ₹ 10.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<hr>
<!-- second row end -->
<div class="image" style="background-color: lightblue; height:1000px;">
     <h2 style="margin-left: 20px;">Fruits</h2>
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Apple</h5>
    <p class="card-text">Apple Imported 1 kg<br> M.R.P: ₹ 110.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-318px; margin-left:320px">
  <img src="../images/oranges.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Orange</h5>
    <p class="card-text">Orange Imported 1 kg<br> M.R.P: ₹ 90.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-340px; margin-left:620px">
  <img src="../images/pineapple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pine Apple</h5>
    <p class="card-text">Pine Apple Imported 1<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- Custard Apple -->
<div class="card" style="width: 18rem; margin-top:-350px; margin-left:920px">
  <img src="../images/custard_apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Custard Apple</h5>
    <p class="card-text">Custard Apple Imported 1 kg<br> M.R.P: ₹ 40.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<br>
<hr>

<!-- three row  -->
<div class="image" style="background-color: lightblue; height:1000px;">
     <h2 style="margin-left: 20px;">Snacks</h2>
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/Ragi-murukku.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Ragi Murukku</h5>
    <p class="card-text">Ragi Murukku Imported 1 packets<br> M.R.P: ₹ 40.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-445px; margin-left:320px">
  <img src="../images/puffed rice.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Puffed Rice</h5>
    <p class="card-text">Puffed Rice Imported 1 kg<br> M.R.P: ₹ 15.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-310px; margin-left:620px">
  <img src="../images/rava ladoo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rava Ladoo</h5>
    <p class="card-text">Rava Ladoo Imported 1 kg<br> M.R.P: ₹ 30.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- cauliflower -->
<div class="card" style="width: 18rem; margin-top:-310px; margin-left:920px">
  <img src="../images/Peanut_Butter_Cake_.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Peanut Butter Cake</h5>
    <p class="card-text">Peanut Butter Cake Imported 1 <br> M.R.P: ₹ 40.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<br><br>
<hr>


<!-- fifth row -->
<div class="image" style="background-color: lightblue; height:1000px;">
     <h2 style="margin-left: 20px;">Grocery</h2>
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/oil.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Saffola Gold Refined Cooking Oil</h5>
    <p class="card-text">Ragi Murukku Imported 1 packets<br> M.R.P: ₹ 90.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-468px; margin-left:320px">
  <img src="../images/egg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Eggs</h5>
    <p class="card-text">Eggs Imported 3<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-318px; margin-left:620px">
  <img src="../images/Chilli Chicken Masala.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chilli Chicken Masala</h5>
    <p class="card-text">Chilli Chicken Masala Imported 1 packets<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- cauliflower -->
<div class="card" style="width: 18rem; margin-top:-450px; margin-left:920px">
  <img src="../images/tata-salt-.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tata Salt</h5>
    <p class="card-text">Tata Salt Imported 1 packets<br> M.R.P: ₹ 20.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<br><br>
<hr>
<!-- six row --> 
<div class="image" style="background-color: lightblue; height:1000px;">
     <h2 style="margin-left: 20px;">Stationery</h2>
  <div class="card" style="width: 18rem;  margin-top:30px; margin-left:20px">
  <img src="../images/pen.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Blue Ink Pen</h5>
    <p class="card-text">Blue Ink Pen pack of 1<br> M.R.P: ₹ 50.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- Tomato -->
<div class="card" style="width: 18rem; margin-top:-415px; margin-left:320px">
  <img src="../images/box.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Geomentry Box</h5>
    <p class="card-text">Geomentry Box pack of 1<br> M.R.P: ₹ 60.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
  </div>
</div>
<!-- carrot -->
<div class="card" style="width: 18rem; margin-top:-445px; margin-left:620px">
  <img src="../images/note.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Note</h5>
    <p class="card-text">Note pack of 1<br> M.R.P: ₹ 30.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name="">
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
</div>
</div>
<!-- cauliflower -->
<div class="card" style="width: 18rem; margin-top:-447px; margin-left:920px">
  <img src="../images/color.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Color Pencil</h5>
    <p class="card-text">Color Pencil pack of 12 pencils<br> M.R.P: ₹ 50.00</p>
    <input type="number" style="width: 75%;" placeholder="Quantity" value='0' name=""><br><br>
    <!-- <a href="#" class="btn btn-primary">Add Cart</a> -->
    
</div>
</div>
<br><br>
<hr>
<div class="container-fluid" style="background-color: lightblue;">
    <div class="map" >
        <h2>Map</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31330.74448066674!2d76.96348957031299!3d11.012866748317219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d11.0003342!2d76.9729472!4m5!1s0x3ba859ccc3ce0285%3A0x6e515dba637919f5!2sBigbasket%20-%20Small%20Hub%2C%20Vijay%20plaza%2C%20G11%2C%20Kamaraj%20Nagar%2C%20MG%20Rd%2C%20Avarampalayam%2C%20Coimbatore%2C%20Tamil%20Nadu%20641006!3m2!1d11.024976299999999!2d76.9855475!5e0!3m2!1sen!2sin!4v1653465908779!5m2!1sen!2sin" width="1220" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>
<!-- get in touch -->
<div class="container-fluid" style="background-image: url('../images/Contact Us.jpg');" >
<h1 style="text-align: center;">Get In Touch</h1>
<div class="container" >
    
<div class="row">
    <div class="form-group">
<label>Name</label>
<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
</div>
</div>
<div class="row">
    <div class="form-group">
<label>Email Id</label>
<input type="email" class="form-control" name="email" placeholder="Enter Your Email">
</div>
</div>
<div class="row">
    <div class="form-group">
<label>Phone Number</label>
<input type="tel" class="form-control" name="phonenumber" placeholder="Enter Your Phone Number">
</div>
</div>

<div class="row">
    <div class="form-group">
<label>Message</label>
<input type="text" class="form-control" style="height:100px;" name="phonenumber" placeholder="">
</div>
</div>
<div class="btn">
    <button class="btn btn-primary">Sent Message</button>

</div>
</div>
</div>
</form>
</div>
</div>
</body>
</html>
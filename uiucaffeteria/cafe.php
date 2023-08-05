<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UIU CAFE</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="style.css" />
  <script src="main.js"> </script>
</head>


<body>
echo '<body style="background-color:orange">';
<!-- Navbar start -->

<nav class="navbar navbar-expand-md   navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="cafe.php">UIU CAFE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="cafe.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Navbar end -->



  
<div class="mt-5">

<div class="container">
   <div class="row justify-content-center text-center">
    <div class="col  mt-2 ">
      <h1>UIU Cafeteria</h1>
      <h5>Please do not order food on official off day.</h5>
    </div>
   </div>
   <div class="row justify-content-center text-center ml-5">
     <div class="col-md-6 col-lg-6 col-sm-12 mt-2  ">
     <div class="card" style="width: 18rem;">
           <img class="card-img-top" src="image/khans.jpg"alt="pic">
         <div class="card-body">
            <h5 class="card-title">Khans kitchen</h5>
            <p class="card-text">Fresh Food</p>
            <a href="khansproduct.php" class="btn btn-primary">Menus</a> 
         </div>
      </div>
     </div>
   <div class="col-md-6 col-lg-6 col-sm-12 mt-2">
      <div class="card" style="width: 18rem;">
           <img class="card-img-top" src="image/olimpiya.jpg"alt="pic">
         <div class="card-body">
         <h5 class="card-title">Olympia Cafe</h5>
            <h5 class="card-title"></h5>
            <p class="card-text">Healthy Food</p>
            <a href="#" class="btn btn-primary">Menus</a> 
         </div>
      </div>


   </div>
  </div>
</div>

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
</body>

</html>
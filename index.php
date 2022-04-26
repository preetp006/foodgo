<?php include('server.php');
//if user not logged in
/*if (empty($_SESSION['username'])) {
    header('location: login.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Ordering Website  </title>
<!--linking css-->
<link rel="stylesheet" href="css/style.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="back">
    <div class="content"> 
        <?php if (isset($_SESSION['success'])): ?> 
            <div class="error success">
                <h3>
                    <?php echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                
                </h3>

            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']?> </strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">Logout</a></p>
            <?php endif ?>
    </div>
    <!--Vavbar section-->
    <section class="navbar">
        <div class="container1">
<div class="logo">
    <img src="images/Capture.PNG" alt="Restaurant logo" class="img-responsives">
</div>
<div class="menu text-right">
    <ul>
        <li>
            <a href="login.php">          Login/Register</a>
        </li>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="about.php">About</a>
        </li>
        <!--<li>
            <a href="#">Foods</a>
        </li>-->
        <li>
            <a href="suggesr.php">Feedback/Suggestion</a>
        </li>
    </ul>

</div>
    <div class="clearfix"></div>
</div>
    </section>

    <section class="food-search text-center">
        <div class="container">

<form action="search.php" method="GET">
    <input type="search" placeholder="Search restaurant here" name="search">
    <input type="submit" name="submit" value="Search" class="btn btn-primary">
</form>

</div>
    </section>

    <section class="categories">
        <div class="container">
            <h2 class="text-center"> Explore Restaurants</h2>

            <a href="search.php"> 
            <div class="box-3 float-container">
                <img src="images/R.jpg" alt="Pizza"class="img-responsive5">
                <h3 class="float-text text-white">Dawat Hotel</h3>
            </div>
        </a>
            
           <a href="search.php"> <div class="box-3 float-container14">
                <img src="images/pip.jpg" alt="momo"class="img-responsive3">
                <h3  class="float-text text-white">Chef Biryani Restaurant</h3>
            </div>
        </a>
            
            <a href="pincode.php"><div class="box-3 float-container">
                <img src="images/R65.jpg" alt="burger"class="img-responsive">
                <h3 class="float-text text-white">Taste of India</h3>
            </div>
        </a><br><br><br>
</div>
    </section>

    <section class="food-menu">
        <div class="container">
<h2 class="text-center"> Highlights</h2>
<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/service.png" alt="Chicken" class="img-responsive2">
       </div>
       <div class="food-menu-desc">
         <h3>Good customer support</h3>
         <p class="food-price"></p>
         <p class="food-desc">
             For any queries contact us at: foodgo@gmail.com
          </p>
          <br>
         
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/man.png" alt="Chicken" class="img-responsive2">
       
       </div>
       <div class="food-menu-desc">
         <h3>Guaranteed delivery</h3>
         <p class="food-price"></p>
         <p class="food-desc">
            We will try our best to get the food to you.
          </p>
          <br>
         
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/discount.gif" alt="Chicken Hawain burger" class="img-responsive2">
       </div>
       <div class="food-menu-desc">
         <h3>Discount</h3>
         <p class="food-price"></p>
         <p class="food-desc">
             Get heavy discount on your first order and free delivery. Use code: FIRSTFLY
          </p>
          <br>
         
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/bag.gif" alt="Chicken Hawain momo" class="img-responsive2">
       </div>
       <div class="food-menu-desc">
         <h3>No Contact Delivery</h3>
         <p class="food-price"></p>
         <p class="food-desc">
             Safe and hygienic meals
          </p>
          <br>
         
       </div>     
</div> 
</section>

    <section class="social">
        <div class="container text-center">
<ul>
    <li> <a href="#"><img src="https://img.icons8.com/fluency/48/000000/facebook-new.png"/></a></li>
    <li> <a href="#"><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/></a></li>
    <li> <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></a></li>
</ul>    
        
        </div>   
    
<!-- </div> -->
    </section>

    <!--footer section-->
    <section class="footer">
        <div class="container text-center">
<p> Thank You. Visit again. Designed by <a href="www.google.com">group 22</a></p>
</div>
    </section>

</body>
</html>
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
<body>
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
    <img src="images/Capture.PNG" alt="Restaurant logo" class="img-responsive">
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
            <h2 class="text-center"> Explore Foods</h2>

            <a href="#"> 
            <div class="box-3 float-container">
                <img src="images/7.jpeg" alt="Pizza"class="img-responsive">
                <h3 class="float-text text-white">Pizza</h3>
            </div>
        </a>
            
           <a href="#"> <div class="box-3 float-container">
                <img src="images/6.jpeg" alt="momo"class="img-responsive">
                <h3  class="float-text text-white">Momos</h3>
            </div>
        </a>
            
            <a href="#"><div class="box-3 float-container">
                <img src="images/2.jpeg" alt="burger"class="img-responsive">
                <h3 class="float-text text-white">Burger</h3>
            </div>
        </a>
</div>
    </section>

    <section class="food-menu">
        <div class="container">
<h2 class="text-center"> Order here</h2>
<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/5.jpeg" alt="Chicken" class="img-responsive">
       </div>
       <div class="food-menu-desc">
         <h4>PIZZA</h4>
         <p class="food-price">Rs. 149</p>
         <p class="food-desc">
             Made with Italian sauce,chicken, and organic vegetables.
          </p>
          <br>
         <a href="#" class="btn btn-primary">Order Now</a>
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/5.jpeg" alt="Chicken" class="img-responsive">
       </div>
       <div class="food-menu-desc">
         <h4>CHICKEN PIZZA</h4>
         <p class="food-price">Rs. 249</p>
         <p class="food-desc">
             Made with Italian sauce,chicken, and organic vegetables.
          </p>
          <br>
         <a href="#" class="btn btn-primary">Order Now</a>
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/3.jpeg" alt="Chicken Hawain burger" class="img-responsive">
       </div>
       <div class="food-menu-desc">
         <h4>BURGER</h4>
         <p class="food-price">Rs. 149</p>
         <p class="food-desc">
             Made with Italian sauce,chicken, and organic vegetables.
          </p>
          <br>
         <a href="#" class="btn btn-primary">Order Now</a>
       </div>     
</div> 

<div class="food-menu-box">
       <div class="food-menu-img">
       <img src="images/4.jpeg" alt="Chicken Hawain momo" class="img-responsive">
       </div>
       <div class="food-menu-desc">
         <h4>MOMO</h4>
         <p class="food-price">Rs. 99</p>
         <p class="food-desc">
             Made with Italian sauce,chicken, and organic vegetables.
          </p>
          <br>
         <a href="#" class="btn btn-primary">Order Now</a>
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
      
    
</div>
    </section>

    <!--footer section-->
    <section class="footer">
        <div class="container text-center">
<p> Thank You. Visit again. Designed by <a href="www.google.com">group 22</a></p>
</div>
    </section>

</body>
</html>
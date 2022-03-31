<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <a href="index.php"> <title>PrimeSpot</title></a>

    <!-- Bootstrap CDN -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0"></p>
        <div class="font-rale font-size-14">
            <a href="login_form.php" class="px-3 border-right border-left text-dark">Login</a>
            <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
            
        </div>
    </div>
    

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">PrimeSpot</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class=" m-auto font-rubik">
              
        
            <div class="dropdown">
                    <a class="dropbtn" href="index.php"><i class="fas fa-home"></i> Home</a> 
                    </div>
                &nbsp;&nbsp; &nbsp;&nbsp;
                <div class="dropdown">
  <div class="dropbtn">Electronics</div>
  <div class="dropdown-content">
    <a href="laptopctg.php">Laptop & computer</a>
    <a href="tvsub.php">T.V.</a>
    <a href="mobilesub.php">Mobile</a>
  </div>
</div>
               
             &nbsp;&nbsp;  &nbsp;&nbsp; 
             <div class="dropdown">
  <div class="dropbtn">Fashion</div>
  <div class="dropdown-content">
    <a href="menfashionctg.php">Men's Fashion</a>
    <a href="womenfashionctg.php">Women's Fashion</a>
    <a href="kidfashionctg.php">Kid's Fashion</a>
  </div>
</div>  
              &nbsp;&nbsp; &nbsp;&nbsp;
              <div class="dropdown">
  <div class="dropbtn">Furniture</div>
  <div class="dropdown-content">
    <a href="homesub.php">Home Collection</a>
    <a href="officesub.php">Office Collection</a>
    <a href="decoresub.php">Decor  Collection</a>
  </div>
</div>  
               
                 &nbsp;&nbsp;   &nbsp;&nbsp;
                 <div class="dropdown">
  <div class="dropbtn">Grocery</div>
  <div class="dropdown-content">
    <a href="snaksctg.php">Snacks & Beverages</a>
    <a href="packagedctg.php">Packaged Food</a>
    <a href="babycarectg.php">Personal Baby Care</a>
    <a href="householdctg.php">Household Care</a>

  </div>
</div>  

&nbsp;&nbsp; 
                <li class="dropdown">
                    <a class="dropbtn" href="aboutus.php">About Us <i class="fas fa-user"   font-size: 16px;></i></a>
                </li>
            </ul>
            
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
<style>
  .dropdown {
  position: relative;
  display: inline-block;
  
}
.dropbtn {
 
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 50px;
  box-shadow: 0px 0px 0px 0px rgba(0,0,0,0);
  z-index: 20;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: lightblue;}
</style>
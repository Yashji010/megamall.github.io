
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto&display=swap" rel="stylesheet">
   <!-- Alertify JS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>


<?php
include"function/userfunctions.php";
?>


<div class="sticky-top">
<nav class="navbar navbar-expand-sm" style="background-color: orange;">
  <div class="container-fluid">
    <a class="navbar-brand text-white ms-3" href="index.php" style="font-family: 'Pacifico', cursive;">MegaMall</a>
    <div class="container-fluid">
    <a class="navbar-text mx-2" style="text-decoration: none;" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
    <?php
          if (isset($_SESSION['auth'])) {
            // code...
            ?>
              <a class="navbar-text" style="text-decoration: none;" href="" data-bs-toggle="dropdown">
               Hello <?= $_SESSION['auth_user']['name']; ?>
             </a>
           
            <?php
          }
          else
          {
            ?>
            
              <a class="navbar-text mx-2" style="text-decoration: none;" href="signup.php">Signup</a>
            
              <a class="navbar-text mx-2" style="text-decoration: none;" href="login.php">Login</a>
            
            <?php
          }
        ?>
        </div>
        <div class="container-fluid">
            <form class="float-end" style="width: 100%;" action="">
            <div class="input-group">
              <input type="text" name="search" placeholder="So, what are you wishing for today?" class="form-control input-lg" id="search" autocomplete="off">
                <span class="input-group-text btn btn-danger" type="submit">SEARCH</span>  
            </div>
          </form>
       </div> 
    
  </div>
</nav>


<?php
include"navbar.php";
?>	

</div>
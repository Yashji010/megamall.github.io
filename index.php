
<?php
$page='main';
?>
<?php
include"includes/header.php";
?>

        <?php
	  if(isset($_SESSION['message']))
	  {
	  ?>
	<div class="alert alert-dark alert-dismissible fade show" role="alert">
	   <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
		<strong>Warning!</strong> <?= $_SESSION['message']; ?> 
	</div>
	<?php
	  unset($_SESSION['message']);
	}
        ?>

		 <!-- Carousel -->

	 <div id="demo" class="carousel slide" data-bs-ride="carousel">

		 <!-- Indicators/dots  -->
	    <div class="carousel-indicators">
		<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
		<button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
	    </div>

	          <!-- The slideshow/carousel  -->
	    <div class="carousel-inner">
	        <div class="carousel-item active">
		   <img src="assets/css/img/image11.jpg" alt="Los Angeles" class="d-block w-100 img-fluid" height="350vh">
                </div>
	        <div class="carousel-item">
		   <img src="assets/css/img/image12.png" alt="Chicago" class="d-block w-100 img-fluid" height="350vh">
	        </div>
	        <div class="carousel-item">
		  <img src="assets/css/img/image13.jpg" alt="New York" class="d-block w-100 img-fluid" height="350vh">
		 </div>
		 <div class="carousel-item">
		   <img src="assets/css/img/image10.jpg" alt="tv" class="d-block w-100 img-fluid" height="350vh">
		 </div>
		<div class="carousel-item">
		   <img src="assets/css/img/image14.jpg" alt="tv" class="d-block w-100 img-fluid" height="350vh">
	        </div>
	    </div>

	  <!-- Left and right controls/icons  -->
	 <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
	 <span class="carousel-control-prev-icon"></span>
	</button>
	 <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
	 <span class="carousel-control-next-icon"></span>
         </button>
								  
      </div>



<div class="container mt-5">
	<div class="row">
		<div class="col-md-4 mt-2">
			  <div style="background-color: orange; color: black; text-align: center; border-radius: 20%;" class="p-3">
			  	<h4 class="h4">Our Latest Mobiles</h4>
			  </div>   
        <div class="row">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/mobile1.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/mobile2.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/mobile3.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/mobile4.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div style="background-color: orange; color: black; text-align: center; border-radius: 20%;" class="p-3">
			  	<a href="mobile.php" style="text-decoration: none; color: black;"><h4 class="h4">Shop Now</h4></a>
			  </div> 
		</div>
		<div class="col-md-4 mt-2">
			<div style="background-color: orange; color: black; text-align: center; border-radius: 20%;" class="p-3">
			  	<h4>Our Latest Laptops</h4>
			  </div>   
        <div class="row mt-5">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/laptop/laptop14.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/laptop/laptop15.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div class="row mt-5">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/laptop/laptop16.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/laptop/laptop17.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div style="background-color: orange; color: black; text-align: center; border-radius: 20%;" class="p-3">
			  	<a href="laptop.php" style="text-decoration: none; color: black;"><h4 class="h4">Shop Now</h4></a>
			  </div> 
		</div>
		<div class="col-md-4 mt-2">
			<div style="background-color: orange; color: black; text-align: center; border-radius: 20%;" class="p-3">
			  	<h4 class="h4">Our Latest LCD</h4>
			  </div>   
        <div class="row mt-4">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/tv1.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/tv2.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div class="row mt-5">
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/tv3.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        	<div class="col-md-6">
        		<a href=""><img src="assets/css/img/tv4.jpg" class="img-fluid" alt="Mobiles"></a>
        	</div>
        </div>
        <div style="background-color: orange; color: Black; text-align: center; border-radius: 20%;" class="p-3">
			  	<a href="" style="text-decoration: none; color: black;"><h4 class="h4">Shop Now</h4></a>
			  </div> 
		</div>
	</div>
</div>

<div class="mt-3">
	<a href=""><img src="assets/css/img/image9.jpg" class="img-fluid" width="100%" height="20%" alt="banner"></a>


		<style>

			.parallax {
					 
				 background-image: url('assets/css/img/image19.jpg');
				 height: 100vh; 

			 /* Create the parallax scrolling effect */
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
						}
		 </style>
		<div style="height: 100px; width: 100%; background: white"></div>

		<div class="parallax img-fluid"></div>

		<div style="height: 100px; width: 100%; background: white"></div>

</div>

<div class="py-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
	         <h1>Trending Laptops</h1>
	         <hr>
	          <div class="row">
	          	<div class="owl-carousel">
					<?php
	                 $trndingProducts = getAllTrendingLaptop();
	                 if (mysqli_num_rows($trndingProducts) > 0) {

	                 	foreach ($trndingProducts as $item) {
	                 		// code...
	                 		?>
	                 		
	                 			<div class="item p-5">
	                               		<a href="product_view.php?product=<?= $item['slug']; ?> && category_name=Laptop">
	                               		<img src="uploads/<?= $item['image']; ?>" class="img-fluid mb-4">
	                               	   </a>
	                               	   <a href="product_view.php?product=<?= $item['name']; ?> && category_name=Laptop" style="text-decoration: none; color: black;">
	                               		<h4><?= $item['slug']; ?><br><br><span class="fw-bold text-primary fs-2">Rs.<?= $item['selling_price']; ?></span></h4>
	                               	   </a>
	                               	   <p style="color: orange;">Free Delivery by MegaMall</p>
	                               </div>
	                 		
	                 		<?php
	                 	}
	                 }
					?>
			   </div>
			</div>
		    </div>
		</div>
	</div>
</diV>
<div class="py-2">
    <div class="container">
		<div class="row">
			<div class="col-md-12">
	         <h1>Trending Mobiles</h1>
	         <hr>
	         <div class="row">
	         	<div class="owl-carousel">
					<?php
	                 $trndingProducts = getAllTrendingMobile();
	                 if (mysqli_num_rows($trndingProducts) > 0) {

	                 	foreach ($trndingProducts as $item) {
	                 		// code...
	                 		?>
	                 		
	                 			<div class="p-5 item">
	                               		<a href="product_view.php?product=<?= $item['slug']; ?> && category_name=Mobile">
	                               		<img src="uploads/<?= $item['image']; ?>" class="img-fluid mb-4">
	                               	   </a>
	                               	   <a href="product_view.php?product=<?= $item['name']; ?> && category_name=Mobile" style="text-decoration: none; color: black;">
	                               		<h4><?= $item['slug']; ?><br><br><span class="fw-bold text-primary fs-2">Rs.<?= $item['selling_price']; ?></span></h4>
	                               	   </a>
	                               	   <p style="color: orange;">Free Delivery by MegaMall</p>
	                               </div>
	                 		
	                 		<?php
	                 	}
	                 }
					?>
			   </div>
			 </div>
		    </div>
		</div>
	</div>
</div>

<?php
include"includes/footer.php";
?>

<script>
	$(document).ready(function() {
       $('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
		})
	});
</script>
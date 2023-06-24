
<?php

include"includes/header.php";
?>


		<div class="py-3 bg-dark">
			<div class="container">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
					<a href="cart.php" class="text-white" style="text-decoration: none;">Cart /</a>
					<a href="checkout.php" class="text-white" style="text-decoration: none;">Checkout</a>
				</h6>
			</div>
		</div>


<?php
  if (isset($_SESSION['auth'])) {
       // code...
    ?>	

<div class="container">
	<form action="function/placeorder.php" method="post">
	<div class="row border shadow-lg p-5 mt-5">
		<div class="col-md-7">
			<?php
        $userID = $_SESSION['auth_user']['user_id'];
        $data_query = "SELECT * FROM user WHERE id = '$userID'";
        $data_query_run = $conn->query($data_query);

        if ($data_query_run->num_rows > 0) {
          while($data = $data_query_run->fetch_assoc()) {

			?>
			<h3>Basic Details</h3>
      <hr>
      <div class="row">
      	<div class="col-md-6 mb-3">
      		<label class="fw-bold"></label>
      		<input type="text" name="name" value="<?= $data['name'] ?>" placeholder="Enter your Full name" class="form-control" required>
      	</div>
      	<div class="col-md-6 mb-3">
      		<label class="fw-bold">Email</label>
      		<input type="email" name="email" value="<?= $data['email'] ?>" placeholder="Enter your email" class="form-control" required>
      	</div>
      	<div class="col-md-6 mb-3">
      		<label class="fw-bold">Phone</label>
      		<input type="number" name="phone" value="<?= $data['phone'] ?>" class="form-control" placeholder="Enter your Phone number" required>
      	</div>
      	<div class="col-md-6 mb-3">
      		<label class="fw-bold">Pincode</label>
      		<input type="number" name="pincode" class="form-control" placeholder="Enter your Pincode" required>
      	</div>
      	<div class="col-md-12 mb-3">
      		<label class="fw-bold">Address</label>
      		<textarea name="address" class="form-control" placeholder="Enter your Address" rows="5" required></textarea>
      	</div>
      	<p class="text-danger">Note: Above All Fields are required</p>
      </div>
      <?php
        }
        }
      ?>
    </div>
    <div class="col-md-5">
    	<h3>Order Details</h3>
    	<hr>
			    <?php
              $items = getCartItems();
              $totalPrice = 0;
              foreach ($items as $citem) {
              	// code...
              	?>
                  
                  	<div class="row align-items-center">
                  		<div class="col-md-2">
                  			<img src="uploads/<?= $citem['image'] ?>" alt="image" width="60px">
                  		</div>
                  		<div class="col-md-5">
                  			<label><?= $citem['name'] ?></label>
                  		</div>
                  		<div class="col-md-3">
                  			<label>Rs.<?= $citem['selling_price'] ?></label>
                  		</div>
                  		<div class="col-md-2">
                  			<label>x <?= $citem['prod_qty'] ?></label>
                  		</div>	
                  	</div>
                 

              	<?php
              	$totalPrice += $citem['selling_price'] * $citem['prod_qty'];
              }
			?>
			<hr>
			<input type="hidden" value="COD" name="payment_mode">
			<h4>Total Price : <span class="float-end fw-bold">Rs.<?= $totalPrice ?></span></h4>
			<button type="submit" name="placeOrderBtn" class="btn btn-dark mt-2 w-100">Confirm and Place order | COD</button>
		</div>
	</div>
</form>
</div>

<?php
}
else{
	header('Location: ../index.php');
}

?>


<?php
include"includes/footer.php";
?>


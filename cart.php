
<div id="mycart">
<?php

include"includes/header.php";
?>


		<div class="py-3 bg-dark">
			<div class="container">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
					<a href="#" class="text-white" style="text-decoration: none;">Cart /</a>
				</h6>
			</div>
		</div>


<?php
  if (isset($_SESSION['auth'])) {
       // code...
    ?>	

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-dark py-3">
					<span class="text-white fs-2">Cart Items</span>
					<span class="float-end"><a href="my-orders.php" class="btn btn-outline-primary"><i class="fa fa-box"></i> My Orders</a></span>
				</div>
				<div class="card-body p-5">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive-sm">
								<table class="table table-striped table-hover">
									<thead class="table-dark">
										<tr>
											<th>Product</th>
											<th>Product Name</th>
											<th>Qunatity</th>
											<th>Price</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<?php
				              $items = getCartItems();

				              if (mysqli_num_rows($items) > 0) {
				              	// code...

				              foreach ($items as $citem) {
				              	// code...
				              	?>

				              	
					              	<tr>
					              		<td>
					              			<a href="product_view.php?product=<?= $citem['slug'] ?> && category_name=<?= $citem['cgname'] ?>" style="text-decoration: none;">
					              			<img src="uploads/<?= $citem['image'] ?>" alt="<?= $citem['name'] ?>" width="120px" class="img-fluid">
					              			</a>
					              		</td>
					              		<td class="align-middle">
					              			<a href="product_view.php?product=<?= $citem['slug'] ?> && category_name=<?= $citem['cgname'] ?>" style="text-decoration: none;">
					              				<span class="fw-bold"> <?= $citem['slug'] ?></span>
					              			</a>
					              		</td>
					              		<td class="align-middle">
					              			<div class="input-group" style="width: 100px;">
		                  						<input type="hidden" class="prodID" value="<?= $citem['prod_id'] ?>">
				                          <button class="input-group-text decrement-btn updateQty">-</button>
				                          <input type="text" class="form-control input-qty text-center bg-white" value="<?= $citem['prod_qty'] ?>" disabled>
				                          <button class="input-group-text increment-btn updateQty">+</button>
				                      </div>
					              		</td>
					              		<td class="align-middle">
					              			Rs.<?= $citem['selling_price'] ?>
					              		</td>
					              		<td class="align-middle">
					              			<button class="btn btn-danger deleteItem" value="<?= $citem['cid'] ?>"><i class="fa fa-trash me-2"></i> Delete</button>
					              		</td>
					              		
					              	</tr>
				                
				              	<?php
	                      }
			                	?>
									</tbody>
								</table>
							</div>	
						</div>
					</div>

           <hr>  

		      <a href="checkout.php" class="btn btn-outline-primary float-end">Proceed to checkout</a>
        <?php
         
          }
          else
          {
          	?>
          	<div class="card card-body shadow text-center">
          		<h4 class="py-3">Your cart is Empty</h4>
          		<a href="index.php" class="btn btn-danger">Continue Shopping</a>
          	</div>
          	<?php
          }
        ?>
				</div>
			</div>
			
		</div>
	</div>
</div>

<?php
}
else{
	?>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<img src="assets/css/img/cart1.svg" class="img-fluid" alt="No data">
			</div>
			<div class="col-md-6 p-5 text-center" style="background-color: orange; border-radius: 50%;">
				<h2>Your Cart is empty</h2>
				<a href="login.php" class="btn btn-dark mt-2">Sign in your account</a><br>
				<a href="signup.php" class="btn btn-primary mt-2">Sign up Now</a><br><br><br>
				<a class="navbar-brand text-white h1" href="index.php" style="font-family: 'Pacifico', cursive; font-size: 200%;">MegaMall</a>
			</div>
		</div>
	</div>
	
	<?php
}

?>

<?php
include"includes/footer.php";
?>
</div>

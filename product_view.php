<?php

include"includes/header.php";

if (isset($_GET['product']))
{
	$category_name = $_GET['category_name'];
	$product_slug = $_GET['product'];
	$product_data = getSlugActive("products",$product_slug);
	$product = mysqli_fetch_array($product_data);

	if ($product) {
		$pid = $product['id'];
	?>
	
		    
		<div class="py-3 bg-dark">
			<div class="container-fluid px-5">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
               <a href="products.php?category=<?php echo "$category_name"; ?>" class="text-white" style="text-decoration: none;"><?php echo "$category_name"; ?> /</a>
				 <?= $product['slug']; ?></h6>
			</div>
		</div>

		<div class="py-3">
			<div class="container-fluid px-5">
				<div class="row">
					<div class="col-md-12">
						<h1><?= $product['slug']; ?></h1>
						<hr>
						<div class="row">
							<?php
                               $products = getProdByProduct($pid);

                               if (mysqli_num_rows($products) > 0) {
                               	foreach ($products as $item) {
                            ?>
                                
                               <p></p>
                               <div class="container product_data">
                               	<div class="row">
                               		<div class="col-lg-5">
                               			<img src="uploads/<?= $item['image']; ?>" class="img-fluid">
                               		</div>
                               		<div class="col-lg-7">
                               			<h4><?= $item['small_description']; ?></h4><br>
                               			<div class="row">
                               				<div class="col-md-6">
                               					<h3 class="text-success fw-bold">Rs.<?= $item['selling_price']; ?></h3>
                               				</div>
                               				<div class="col-md-6">
                               					<h5>Rs.<s><?= $item['original_price']; ?></s></h5>
                               				</div>
                               			</div>
                               			<div class="row mt-4">
                               				<div class="col-md-12">
                               					<label class="form-label">Select Quantity : </label>
                               					<div class="input-group mb-3" style="width: 130px;">
                               						<button class="input-group-text decrement-btn">-</button>
                               						<input type="text" class="form-control input-qty text-center bg-white" value="1" disabled>
                               						<button class="input-group-text increment-btn">+</button>
                               					</div>
                               				</div>
                               			</div>
                               			<div class="row mt-4">
                               				<div class="col-md-6">
                               					<button class="btn btn-primary px-4 addToCartBtn mb-3" value="<?= $item['id']; ?>"><i class="fa fa-shopping-cart me-2"></i> Add to Cart</button>
                               				</div>
                               				<div class="col-md-6">
                               					<button class="btn btn-danger px-4"><i class="fa fa-heart me-2 mb-3"></i>  Add to Whislist</button>
                               				</div>
                               			</div>
                               			<hr>
                               			<div class="col-md-12">
                               				<h5>Product Description :</h5>
                               				<p><?= $item['description']; ?></p>
                               			</div>
                               		</div>
                               	</div>
                               </div>

                            <?php   		
                               	}
                               }
                               else
                               {
                               	echo "No data available";
                               }
							?>
						</div>
					</div>
					<div class="col-md-12">
						<?php
							if ($category_name = "Mobile") {
								// code...
								 $products = getProdByProduct($pid);

                               if (mysqli_num_rows($products) > 0) {
                               	foreach ($products as $item) {
						?>
						<div class="table-responsive-md text-center mt-5">
							<table class="table table-dark table-hover">
								<thead>
									<tr>
										<th colspan="11">Product Specifications</th>
									</tr>
									<tr>
										<th>RAM</th>
										<th>Built in Storage (ROM)</th>
										<th>Operating System</th>
										<th>Front Camera</th>
										<th>Rear Camera</th>
										<th>Screen Size</th>
										<th>Screen Type</th>
										<th>Battery</th>
										<th>Charger</th>
										<th>Warrenty</th>
										<th>Item Weight</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?= $item['RAM']; ?> GB</td>
										<td><?= $item['storage']; ?> GB</td>
										<td><?= $item['OS']; ?></td>
										<td><?= $item['front_camera']; ?> MP</td>
										<td><?= $item['rear_camera']; ?></td>
										<td><?= $item['screen_size']; ?> cm</td>
										<td><?= $item['screen_type']; ?></td>
										<td><?= $item['battery']; ?> mAh</td>
										<td><?= $item['charger']; ?> W</td>
										<td><?= $item['warrenty']; ?></td>
										<td><?= $item['item_weight']; ?> gm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<?php
						 	}
                     }
                     else
                     {
                     	echo "No data available";
                     }
				    	}
				    	else{
				    		echo "Please Select Category";
				    	}
						?>
					</div>
				</div>
			</div>
		</div>

	<?php	
	}
	else
	{
		echo "Something went wrong";
	}
    
}
else
{
	echo "Something went wrong";
}

include"includes/footer.php";

?>

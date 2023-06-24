
<?php

include"includes/header.php";
?>


		<div class="py-3 bg-dark">
			<div class="container">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
					<a href="my-orders.php" class="text-white" style="text-decoration: none;">My orders /</a>
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
				<div class="card-header bg-dark">
					<span class=" text-white fs-2">Orders</span> <a href="cart.php" class="btn btn-danger float-end"><i class="fa fa-reply"></i>Back</a>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive-sm">
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tracking No.</th>
											<th>Price</th>
											<th>Date</th>
											<th>View Product</th>
										</tr>
									</thead>
									<tbody>
										<?php
					             $orders = getOrders();

					             if (mysqli_num_rows($orders) > 0) {
					             	// code...
					             	foreach ($orders as $item) {
					             		// code...
					             		?>
					             		<tr>
					             			<td class="align-middle"><?= $item['id']; ?></td>
					             			<td class="align-middle"><?= $item['tracking_no']; ?></td>
					             			<td class="align-middle">Rs.<?= $item['total_price']; ?></td>
					             			<td class="align-middle"><?= $item['created_at']; ?></td>
					             			<td class="align-middle">
					             				<a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-success">View Details</a>
					             			</td>
					             		</tr>
					             		<?php
					             	}
					             }
					             else
					             {?>
					                 <tr>
					                 	<td colspan="5">No Orders yet</td>
					                 </tr>
					             	<?php
					             }

										?>
									</tbody>
								</table>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
}
else{
	echo '<script>

             alert("Please Login");
             window.location.replace("index.php");

      </script>';
}

?>

<?php
include"includes/footer.php";
?>


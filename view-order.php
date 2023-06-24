
<?php

include"includes/header.php";
?>


		<div class="py-3 bg-dark">
			<div class="container">
				<h6 class="text-white"><a href="index.php" class="text-white" style="text-decoration: none;"> Home /</a>
					<a href="my-orders.php" class="text-white" style="text-decoration: none;">My orders /</a>
					<a href="#" class="text-white" style="text-decoration: none;">View order </a>
				</h6>
			</div>
		</div>


<?php
  if (isset($_SESSION['auth'])) {
       // code...
  	if (isset($_GET['t'])) {
  		// code...
  		$tracking_no = $_GET['t'];

  		$orderData = checkTrackingNoValid($tracking_no);

  		if (mysqli_num_rows($orderData) < 0) {
  			// code...
  		?>
           <h1 class="mt-5 text-centre">Something went Wrong</h1>
  		<?php
  		die();
  		}
  	}
  	else
  	{
   		?>
           <h1 class="mt-5 text-centre">Something went Wrong</h1>
  		<?php
  		die();
  	}

  	$data = mysqli_fetch_array($orderData);
    ?>	

<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-dark">
					<span class=" text-white fs-2">View Order</span> <a href="my-orders.php" class="btn btn-danger float-end"><i class="fa fa-reply"></i>Back</a>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<h4>Delivery Details</h4>
							<hr>
							<div class="row">
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Name</label>
									<div class="border p-1">
										<?= $data['name']; ?>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Email</label>
									<div class="border p-1">
										<?= $data['email']; ?>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Phone</label>
									<div class="border p-1">
										<?= $data['phone']; ?>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Tracking Number</label>
									<div class="border p-1">
										<?= $data['tracking_no']; ?>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Address</label>
									<div class="border p-1">
										<?= $data['address']; ?>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<label class="fw-bold">Pincode</label>
									<div class="border p-1">
										<?= $data['pincode']; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h4>Order Details</h4>
							<hr>
							<table class="table">
								<thead>
									<tr>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
									</tr>
								</thead>
								<tbody>
									<?php
                                     $userID = $_SESSION['auth_user']['user_id'];

                                     $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p WHERE o.user_id='$userID' AND oi.order_id=o.id AND p.id=oi.prod_id AND o.tracking_no='$tracking_no' ";
                                     $order_query_run = mysqli_query($conn,$order_query);

                                     if (mysqli_num_rows($order_query_run) > 0) {
                                     	// code...
                                     	foreach ($order_query_run as $items) {
                                     		// code...
                                     		?>
                                     		<tr>
                                     			<td class="align-middle">
                                     				<img src="uploads/<?= $items['image'];  ?>" width="50px" height="50px" alt="<?= $items['name']; ?>">
                                     				<?= $items['name']; ?>
                                     			</td>
                                     			<td class="align-middle">
                                     				Rs.<?= $items['price'];  ?>
                                     			</td>
                                     			<td class="align-middle">
                                     				<?= $items['orderqty'];  ?>
                                     			</td>
                                     		</tr>
                                     		<?php
                                     	}
                                     }
									?>
								</tbody>
							</table>
							<hr>
							<h5>Total Price : <span class="float-end fw-bold">Rs.<?= $data['total_price']; ?></span></h5>
							<hr>
                            
                            <label class="fw-bold">Payment Mode</label>
							<div class="border p-1 mb-3">
								<?= $data['payment_mode']; ?>
							</div>
							<label class="fw-bold">Status</label>
							<div class="border p-1 mb-3">
								
								<?php
								if ($data['status'] == 0) {
									// code...
									echo "Under Process";
								}
								elseif ($data['status'] == 1) {
									// code...
									echo "Completed";
								}
								elseif ($data['status'] == 2) {
									// code...
									echo "Cancelled";
								}
								 

								  ?>
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
	header('Location: index.php');
}

?>

<?php
include"includes/footer.php";
?>


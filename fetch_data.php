<?php

include"config/dbcon.php";

if (isset($_POST['action'])) {
	// code...

	$query = "SELECT p.*, c.name as cname, m.* FROM products p, categories c, mobile m WHERE p.status = '0' AND c.id=p.category_id AND p.id=m.product_id ";


	if (isset($_POST['cid'])) {
		// code...
		$query .= "AND p.category_id = '".$_POST['cid']."' ";
	}
	if (isset($_POST['minimum_price'], $_POST['maximum_price']) && !empty($_POST['minimum_price']) && !empty($_POST['maximum_price'])) {
		// code...
		$query .= "AND p.selling_price BETWEEN '".$_POST['minimum_price']."' AND '".$_POST['maximum_price']."' ";
	}
	if (isset($_POST['brand'])) {
		// code...
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "AND p.name IN('".$brand_filter."')";
	}
	if (isset($_POST['ram'])) {
		// code...
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "AND m.RAM IN('".$ram_filter."')";
	}
	if (isset($_POST['rom'])) {
		// code...
		$rom_filter = implode("','", $_POST["rom"]);
		$query .= "AND m.storage IN('".$rom_filter."')";
	}

	global $conn;
	$query_run = mysqli_query($conn,$query);
	$output = '';
	if (mysqli_num_rows($query_run) > 0) {
		// code...
		foreach ($query_run as $item) {
			// code...
			?>
			            <div class="col-md-4 border p-5">
			                <a href="product_view.php?product=<?= $item['slug']; ?> && category_name=<?= $item['cname']; ?>">
			                <img src="uploads/<?= $item['image']; ?>" class="img-fluid mb-4">
			                </a>              	   
			                <a href="product_view.php?product=<?= $item['slug']; ?> && category_name=<?= $item['cname']; ?>" style="text-decoration: none;">              
			                <h4><?= $item['small_description']; ?><br><br><span class="fw-bold text-primary fs-2">Rs.<?= $item['selling_price']; ?></span><span class="mx-5 fs-6 text-danger">Rs.<s><?= $item['original_price']; ?></s></span> </h4>
			                </a>               	   
			                <p style="color: orange;">Free Delivery by MegaMall</p>
			            </div>
			            <?php
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;

}
?>
<?php
session_start();
include"../config/dbcon.php";

if (isset($_SESSION['auth'])) {
	// code...
	if (isset($_POST['placeOrderBtn'])) {
		// code...
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$payment_mode = mysqli_real_escape_string($conn, $_POST['payment_mode']);
		$payment_id = mysqli_real_escape_string($conn, $_POST['payment_id']);

		if ($name == "" || $email == "" || $phone == "" || $pincode == "" || $address == "") {
			// code...
			$_SESSION['message'] = "All Fields are mandatary";
			header('Location: ../checkout.php');
			exit(0);
		}
        else
        {
          $userID = $_SESSION['auth_user']['user_id'];
          $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price FROM carts c, products p WHERE c.prod_id=p.id AND c.user_id='$userID' ORDER BY c.id DESC ";
	      $query_run = mysqli_query($conn, $query);
          

          $totalPrice = 0;
          foreach ($query_run as $citem) {
          	// code...
          	$totalPrice += $citem['selling_price'] * $citem['prod_qty'];
          }
          $tracking_no = "megamall".rand(1111,9999).substr($phone,2);

          $insert_query = "INSERT INTO `orders`(`tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`) VALUES ('$tracking_no','$userID','$name','$email','$phone','$address','$pincode','$totalPrice','$payment_mode','$payment_id')";
          $insert_query_run = mysqli_query($conn, $insert_query);

          if ($insert_query_run) {
          	// code...

          	$order_id = mysqli_insert_id($conn);
          	foreach ($query_run as $citem) {
          		// code...
          		$prod_id = $citem['prod_id'];
          		$prod_qty = $citem['prod_qty'];
          		$price = $citem['selling_price'];

          		$insert_items_query = "INSERT INTO `order_items`(`order_id`, `prod_id`, `qty`, `price`) VALUES ('$order_id','$prod_id','$prod_qty','$price')";
          		$insert_items_query_run = mysqli_query($conn, $insert_items_query);

          		$product_query = "SELECT * FROM products WHERE id='$prod_id' LIMIT 1";
          		$product_query_run = mysqli_query($conn, $product_query);

          		$product_data = mysqli_fetch_array($product_query_run);
          		$current_qty = $product_data['qty'];

          		$new_qty = $current_qty - $prod_qty;

          		$update_query = "UPDATE products SET qty='$new_qty' WHERE id='$prod_id'";
          		$update_query_run = mysqli_query($conn, $update_query);

          	}

          	$deleteCartQuery = "DELETE FROM carts WHERE user_id='$userID' ";
          	$deleteCartQuery_run = mysqli_query($conn, $deleteCartQuery);

          	$_SESSION['message'] = "Order Placed Successfully";
          	header('Location: ../my-orders.php');
          	die();
          	
          }
        }
	}
}
?>
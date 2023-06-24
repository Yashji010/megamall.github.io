<?php

include"config/dbcon.php";
session_start();

function getAllActive($table)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE status='0' ";
	return $query_run = mysqli_query($conn, $query);
}

function getAllTrendingMobile()
{
	global $conn;
	$query = "SELECT * FROM products WHERE trending='1' AND category_id='3' ";
	return $query_run = mysqli_query($conn, $query);
}	

function getAllTrendingLaptop()
{
	global $conn;
	$query = "SELECT * FROM products WHERE trending='1' AND category_id='5' ";
	return $query_run = mysqli_query($conn, $query);
}	

function getSlugActive($table, $slug)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE slug='$slug' AND status='0' LIMIT 1 ";
	return $query_run = mysqli_query($conn, $query);
}



function getIDActive($table, $id)
{
	global $conn;
	$query = "SELECT * FROM $table WHERE id='$id' AND status='0' ";
	return $query_run = mysqli_query($conn, $query);
}

function getCartItems()
{
	global $conn;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.slug, p.image, p.selling_price, cg.id as cgid, cg.name as cgname FROM carts c, products p, categories cg WHERE c.prod_id=p.id AND p.category_id=cg.id AND c.user_id='$userID' ORDER BY c.id DESC ";
	return $query_run = mysqli_query($conn, $query);
}

// function getCategoryName()
// {
// 	global $conn;
// 	$userID = $_SESSION['auth_user']['user_id'];
// 	$query = "SELECT c.id as cid, c.prod_id, p.id as pid,  p.category_id, cg.id as cgid, cg.name FROM carts c, products p, categories cg WHERE c.prod_id=p.id AND p.category_id=cg.id AND c.user_id='$userID' ORDER BY c.id DESC ";
// 	return $query_run = mysqli_query($conn, $query);
// }

function getOrders()
{
	global $conn;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT * FROM orders WHERE user_id='$userID' ORDER BY id DESC ";
	return $query_run = mysqli_query($conn,$query);
}

function getProdByCategory($category_id)
{
	global $conn;
	$query = "SELECT * FROM products WHERE category_id = '$category_id' AND status='0' ";
	return $query_run = mysqli_query($conn, $query);
}

function getUniqueProdByCategory($category_id)
{
	global $conn;
	$query = "SELECT DISTINCT(name) FROM products WHERE category_id = '$category_id' AND status='0' ORDER BY id DESC ";
	return $query_run = mysqli_query($conn, $query);
}

function getProdByProduct($product_id)
{
	global $conn;
	$query = "SELECT p.*, m.* FROM products p, mobile m WHERE p.id = '$product_id' AND p.status='0' AND m.product_id='$product_id' ";
	return $query_run = mysqli_query($conn, $query);
}

function checkTrackingNoValid($trackingNo)
{
	global $conn;
	$userID = $_SESSION['auth_user']['user_id'];
	$query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' AND user_id='$userID' ";
	return $query_run = mysqli_query($conn, $query);
}



function redirect($url, $message)
{
	$_SESSION['message'] = $message;
	header('Location: '.$url);
	exit();
}


?>
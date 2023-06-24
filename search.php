<?php

include"config/dbcon.php";

$request = mysqli_real_escape_string($conn, $_POST['query']);

$query = "SELECT * FROM products WHERE slug LIKE '%".$request."%' ";

$result = mysqli_query($conn, $query);

$data = array();

if (mysqli_num_rows($result) > 0) {
	// code...
	while ($row = mysqli_fetch_assoc($result)) {
		// code...
		$data[] = $row["slug"];
	}
	echo json_encode($data);
}

?>
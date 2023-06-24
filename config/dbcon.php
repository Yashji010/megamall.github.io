<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "megamall";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
	echo "not connected";
}
else{
	//echo "connected";
}

?>
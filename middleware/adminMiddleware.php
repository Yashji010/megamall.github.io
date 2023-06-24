<?php

include"../function/myfunctions.php";

if (isset($_SESSION['auth'])) {
	// code...
	if ($_SESSION['role_as'] != 1) {
		// code...
		redirect("../index.php", "You are not authorized to access this Page");
	}
}
else
{
	redirect("../login.php", "Login to continue");
}

?>
<?php

session_start();
include"../config/dbcon.php";

if (isset($_POST['submit'])) {
	
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$phone = mysqli_real_escape_string($conn,$_POST['number']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

	//Check if email is already registered
	$check_email_query = "SELECT email FROM user WHERE email='$email' ";
	$check_email_query_run = mysqli_query($conn, $check_email_query);

	if (mysqli_num_rows($check_email_query_run) > 0) {
		// code...
		$_SESSION['message'] = "Email Already registered";
			header('Location: ../signup.php');
	}
	else
	{

		if ($password == $cpassword) {
			// Insert user data...
			$insert_query = "INSERT INTO `user`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$password')";
			$insert_query_run = mysqli_query($conn, $insert_query);

			if ($insert_query_run) {
				// code...
				$_SESSION['message'] = "Signup Successfully";
				header('Location: ../login.php');
			}
			else
			{
				$_SESSION['message'] = "Something went wrong";
				header('Location: ../signup.php');
			}
		}
		else
		{
			$_SESSION['message'] = "Passwords do not match";
			header('Location: ../signup.php');
		}
    }
}
elseif (isset($_POST['login_btn'])) {
	// code...
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$login_query = "SELECT * FROM user WHERE email='$email' and password='$password'";
	$login_query_run = mysqli_query($conn, $login_query);

	if (mysqli_num_rows($login_query_run) > 0) {
		// code...

		$_SESSION['auth'] = true;

		$userdata = mysqli_fetch_array($login_query_run);
		$userid = $userdata['id'];
		$username = $userdata['name'];
		$useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

		$_SESSION['auth_user'] = [
		   'user_id' => $userid,
          'name' => $username,
          'email' => $useremail
		];

		$_SESSION['role_as'] = $role_as;

		if ($role_as == 1) {
			// code...
			$_SESSION['message'] = "Welcome to Dashboard";
		    header('Location: ../admin/index.php');
		}
		else
		{
           $_SESSION['message'] = "Logged in Successfully";
		   header('Location: ../index.php');
		}
		
	}
	else
	{
		$_SESSION['message'] = "Invalid Credentials";
		header('Location: ../login.php');
	}

}

?>
<?php
session_start();

if (isset($_SESSION['auth'])) {
	// code...
	$_SESSION['message'] = "You are already logged In";
	header('Location: index.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: orange;">

	
<?php
if(isset($_SESSION['message']))
{
?>
<div class="alert alert-dark alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning!</strong> <?= $_SESSION['message']; ?> 
</div>
<?php
unset($_SESSION['message']);
}
?>

<div class="text-center">
	<p class="h1 text-white mt-5" style="font-family: cursive;">MegaMall</p>
</div>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-6 bg-white p-5 shadow-lg mx-2">
		 	<h1>Login Here</h1>
					<form method="post" action="function/authcode.php">
						<div class="mb-3 mt-3">
								<label for="email" class="form-label">Email</label>
								<input type="text" name="email" class="form-control" required>
				    </div>
				    <div class="mb-3">
								<label for="password" class="form-label">Password</label>
								<input type="password" name="password" class="form-control " required>
						</div>
						<center><button type="submit" class="btn btn-success text-center bg-white text-success" name="login_btn">Login</button><br>
					</form>
					<a href="signup.php" class="btn btn-danger text-center bg-white text-danger mt-3">Not have an acount? Sign up</a></center>
		</div>
	</div>
</div>

  <div class="text-center mt-2">
  	<a href="index.php" class="h1"><i class="fa-solid fa-house text-white"></i></a>
  </div>


</body>
</html>


 
 


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
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background-color: orange;">

<div class="alert alert-danger alert-dismissible" style="display: none;" id="wrong">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Warning!</strong> Please enter number first.
</div>

<div class="alert alert-success alert-dismissible" style="display: none;" id="complete">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <strong>Success!</strong> Sign Up Success, Please login for go to Home page.
</div>

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

 
  <div class="mt-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 bg-white p-5 shadow-lg mx-2">
				 <h1>Sign Up Form</h1>
		<br>
		<form action="function/authcode.php" method="post">
			<div id="box1">
				<label class="form-label" for="number">Enter Mobile number</label>
				<input type="tel" name="number" class="form-control border border-bottom border-primary border-3" required id="phone" maxlength="10">
				<br><br>
				<p>By continuing you agree to YKG Garments's <span class="text-primary">Terms of Use</span> and <span class="text-primary">Privacy Policy</span>.</p>

						<button id="hide" type="button" class="btn text-white text-center w-100" style="background-color: orangered;">Continue</button>
				<a href="login.php" class="btn text-center text-primary w-100 shadow mt-4">Existing User? Log in</a>
			</div>

			<div id="box2">
			<label class="form-label" for="name">Name</label>
			<input type="text" name="name" class="form-control" required>
			<br>
			<label class="form-label" for="email">Email</label>
			<input type="email" name="email" class="form-control" required>
			<br>
			<label class="form-label" for="password">Password</label>
			<input type="password" name="password" class="form-control" required>
			<br>
			<label class="form-label" for="email">Confirm Password</label>
			<input type="password" name="cpassword" class="form-control" required>
			<br>
			<button class="btn text-center text-white w-100" style="background-color: orangered;" name="submit" type="submit">Sign In</button>
			</div>

		</form>
			</div>
		</div>
	</div>
  </div>

  <div class="text-center mt-2">
  	<a href="index.php" class="h1"><i class="fa-solid fa-house text-white"></i></a>
  </div>


<script src="assets/js/script.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>


</body>
</html>



<script>
	$(document).ready(function(){
	   $("#box2").hide();
   $("#hide").click(function(){
        
        
        	if (!$("#phone").val()) {
        		$("#wrong").show();
        	} else{
        		$("#box2").show("slow");
	         $("#box1").hide();

        	}
        
	  
	   });
	 
	});

	</script>

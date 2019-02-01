<?php
require("dbConfig.php");
if (isset($_SESSION['email'])) {
    header('location:product.php');
}
?>
<!DOCTYPE html>
<html>
    	<head>
        	<title>SIGN UP PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<link href="signupcss.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	</head>
    	<body>
        	<?php include 'no_login_navbar.php' ?>
        	<div class="container" style="margin-top:57px;">
	  		<form action="signup_script.php" method="POST">
				<div class="panel panel-primary">
					<div class="pannel-heading">
						<div class="text-warming">
		            			<h2><b>SIGN-UP</b></h2>
						</div>
					</div>
					<div class="panel-body">
		            		<div class="form-group">
		                			<label for="name">Name:</label>
		                			<input type="text" class="form-control" placeholder="Enter Full Name" name="name" pattern="[a-zA-Z][a-zA-Z ]*" required="true">
		            		</div>
		            		<div class="form-group">
		                			<label for="email">Email:</label>
		                			<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
		            		</div>
		            		<div class="form-group">
		                			<label for="pwd">Password:</label>
							<p>Length more that 8<br>Atleast one capital letter,one small letter and one digit.</p>
		                			<input type="password" class="form-control" placeholder="Enter Password" name="pwd" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required="true">
		            		</div>
		            		<div class="form-group">
		                			<label for="contact">Contact:</label>
		                			<input type="number" class="form-control" placeholder="Enter Contact Number" name="contact" maxlength="10" size="10" pattern="/^(\+\d{1,3}[- ]?)?\d{10}$/" required="true">
		            		</div>
		            		<div class="form-group">
		                			<label for="city">City:</label>
		                			<input type="text" class="form-control" placeholder="Enter City" name="city">
		            		</div>
		            		<div class="form-group">
		                			<label for="address">Address:</label>
		                			<input type="text" class="form-control" id="text" placeholder="Enter Address" name="address">
		            		</div>
					</div>
					<div class="panel-footer">
		            		<button type="submit" name="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
        	</div>
        	<?php include 'footer.php'?>
    	</body>
</html>

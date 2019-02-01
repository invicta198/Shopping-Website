<?php
require("dbConfig.php");
if (isset($_SESSION['email'])) {
    header('location:products.php');
}
?>
<!DOCTYPE html>
<html>
    	head>
        	<title>LOGIN PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        	<link href="logincss.css" rel="stylesheet" type="text/css"/>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script type="text/jquery" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	</head>
    	<body>
        	<?php include 'no_login_navbar.php' ?>
        	<div class="container" style="margin-top: 180px;">
            	<div class="panel panel-primary">
                		<div class="panel-heading">
                    		<div class="text-warming">
                        		<p>Login To Make Purchase</p>
                    		</div>
                		</div>
				<form action="login_script.php" method="POST">
	                		<div class="panel-body">
	                    		<div class="form-group">
	                        		<label for="email">Email:</label>
	                        		<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required = "true">
	                    		</div>
	                    		<div class="form-group">
	                        		<label for="pwd">Password:</label>
	                        		<input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd" required = "true">
	                    		</div>
	                    		<div class="checkbox">
	                        		<label>
	                            		<input type="checkbox" name="remember">Remember me</label>
	                    		</div>
	                    		<button type="submit" class="btn btn-default">Submit</button>
	                		</div>
				</form>
                		<div class="panel-footer">Don't have an account?<a href="signup.php"> Register</a></div>
            	</div>
		</div>
        	<!--<?php include 'footer.php' ?>-->
    	</body>
</html>
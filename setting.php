<?php
require("dbConfig.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<html>
    	<head>
        	<title>SETTINGS PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        	<link href="settingcss.css" rel="stylesheet" type="text/css"/>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/jquery" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	</head>
    	<body>
        	<?php include 'login_navbar.php' ?>
        	<div class="container" style="margin-top:90px;">
            	<h2><b>CHANGE PASSWORD</b></h2>
            	<div class="form-group">
                		<label for="pwd">Password:</label>
                		<input type="password" class="form-control" id="pwd" placeholder="Enter Old Password" name="pwd" required = "true">
            	</div>
            	<div class="form-group">
                		<label for="newpwd1">New Password:</label>
                		<input type="password" class="form-control" id="newpwd1" placeholder="Enter New Password" name="newpwd1" required = "true">
            	</div>
			<div class="form-group">
				<label for="newpwd2">New Password:</label>
                        <input type="password" class="form-control" id="newpwd2"  placeholder="Re-type New Password" name="newpwd2" required = "true">
                  </div>
            	<button type="submit" class="btn btn-default">Change</button>
        	</div>
        	<?php include 'footer.php' ?>
    	</body>
</html>
<?php
include("dbConfig.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
$user_id=$_SESSION['user_id'];
$item_ids_string=$_GET['itemsid'];
$query="UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>
<html>
    	<head>
        	<title>SUCCESS PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
       	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        	<link href="successcss.css" rel="stylesheet" type="text/css"/>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script type="text/jquery" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	</head>
    	<body>
        	<?php include 'login_navbar.php' ?>
        	<div class="container" style="margin-top: 100px;">
            	<div class="jumbotron">
                		<p>Your order is confirmed. Thank you for shopping with us.<a href="product.php">Click here</a> to purchase any other item.</p>
            	</div>
        	</div>
        	<?php include'footer.php'?>
    </body>
</html>

<?php
require("dbConfig.php");
?>
<html>
    	<head>
      	<title>HOME PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width" initial-scale="1.0">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        	<link href="secondcss.css" rel="stylesheet" type="text/css"/>
    	</head>
    	<body>
      	<?php 
		if (isset($_SESSION['email'])) {
    			include 'login_navbar.php';
		}
		else {
			include 'no_login_navbar.php';
		}?>
        	<div class="container-fluid" style="margin-top: 51px;">
            	<div class="row background">
                	<center>
                  	<div class="content">
                        	<h1>We Sell Lifestyle</h1>
                        	<h2>Flat 40% OFF on premium brands</h2>
                        	<a href="product.php" class="btn button">Shop Now</a>
                    	</div>
                	</center>                
            	</div>
        	</div>
        	<div class="container">
            	<div class="row">
                		<div class="col-md-3 threeimages">
                    		<a href="product.php#cams"><img src="camera.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>CAMERAS</h3>
                        		<p>Choose among the best available in the world.</p>
                    		</div>
                		</div>
                		<div class="col-md-3 threeimages">
                    		<a href="product.php#watches"><img src="watch.jpg" class="img-responsive img-thumbnail" alt="watch"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>WATCHES</h3>
                        		<p>Original watches from the best brands.</p>
                    		</div>
                		</div>
                		<div class="col-md-3 threeimages">
                    		<a href="product.php#shirts"><img src="shirt.jpg" class="img-responsive img-thumbnail" alt="shirt"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHIRTS</h3>
                        		<p>Our exquisite collection of shirts.</p>
                    		</div>
                		</div>
		    		<div class="col-md-3 threeimages">
                    		<a href="product.php#shoes"><img src="shoe5.jpg" class="img-responsive img-thumbnail" alt="shoe"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHOES</h3>
                        		<p>Our exquisite collection of shoes.</p>
                    		</div>	
                		</div>
            	</div>
        	</div>
        	<?php include 'footer.php' ?>
    	</body>
</html>

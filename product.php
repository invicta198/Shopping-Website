<?php
require("dbConfig.php");
?>
<!DOCTYPE html>
<html>
    	<head>
        	<title>PRODUCT PAGE</title>
        	<meta charset="UTF-8">
        	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        	<link href="productcss.css" rel="stylesheet" type="text/css"/>
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script type="text/jquery" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    	</head>
    	<body>
        	<?php
		include 'check_if_added_to_cart.php'; 
		if (isset($_SESSION['email'])) {
    			include 'login_navbar.php';
		}
		else {
			include 'no_login_navbar.php';
		}?>
        	<div class="container" style="margin-top: 51px;">
            	<div class="jumbotron">
                		<h1>Welcome to our Lifestyle Store!</h1>
                		<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            	</div>
        	</div>
        	<div class="container">
            	<div id="cams" class="row" style="padding:10px; padding-top:0;">
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="camera2.jpg" class="img-responsive img-thumbnail pos" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>CANON EOS</h3>
                        		<p>Rs.36,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="camera3.jpg" class="img-responsive img-thumbnail pos" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>NIKON EOS</h3>
                        		<p>Rs.40,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="camera4.jpg" class="img-responsive img-thumbnail pos" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SONY DSLR</h3>
                        		<p>Rs.45,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="camera5.jpg" class="img-responsive img-thumbnail pos" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>OYLMPUS DSLR</h3>
                        		<p>Rs.50,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>                
            	</div>
            	<div id="watches" class="row" style="padding:10px;">
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="watch2.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>TITAN MODEL #301</h3>
                        		<p>Rs.13,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="watch3.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>TITAN MODEL #201</h3>
                        		<p>Rs.3,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="watch4.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>HMT MILAN</h3>
                        		<p>Rs.8,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="watch5.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>FABER LUBA #111</h3>
                        		<p>Rs.18,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
            	</div>
            	<div id="shirts" class="row" style="padding:10px;">
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shirt3.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>H&W</h3>
                        		<p>Rs.800.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shirt4.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>LUIS PHILL</h3>
                        		<p>Rs.1,000.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shirt5.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>JON ZOK</h3>
                        		<p>Rs.1,500.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shirt6.jpg" class="img-responsive img-thumbnail" alt="camera"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>JHALSANI</h3>
                        		<p>Rs.1,300.00</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
            	</div>
            	<div id="shoes" class="row" style="padding: 10px;">
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shoe1.jpg" class="img-responsive img-thumbnail" alt="shoe"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHOE</h3>
                        		<p>Choose among the best available in the world.</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=13" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shoe2.jpg" class="img-responsive img-thumbnail" alt="shoe"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHOE</h3>
                        		<p>Choose among the best available in the world.</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=14" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shoe3.jpg" class="img-responsive img-thumbnail" alt="shoe"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHOE</h3>
                        		<p>Choose among the best available in the world.</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=15" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
                		<div class="col-md-3" style="border-style:groove;padding:5px;">
                    		<a href="#"><img src="shoe4.jpg" class="img-responsive img-thumbnail" alt="shoe"></a>
                    		<div class="caption" style="text-align: center">
                        		<h3>SHOE</h3>
                        		<p>Choose among the best available in the world.</p>
                        		<?php if (!isset($_SESSION['email'])){?>
                                		<p><a href="login.php" role="button" class="btn btn-primary">Buy Now</a></p>
                                		<?php
                            		} 
						else{?>
                              		<a href="cart_add.php?id=16" name="add" value="add" class="btn btn-primary">Add to cart</a>
                              		<?php                                	
                            		}
                            		?>
                    		</div>
                		</div>
            	</div>
        	</div>
        	<? php include 'footer.php' ?>
	</body>
</html>

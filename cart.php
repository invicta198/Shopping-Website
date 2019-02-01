<?php
require("dbConfig.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?>
<html>
    <head>
        <title>CART PAGE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link href="cartcss.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script type="text/jquery" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'login_navbar.php'?>
        <div class="container" style="margin-top: 180px;">
            <table class="table table-bordered">
                <?php
                  $sum=0;
			$par="";
                  $user_id=$_SESSION['user_id'];
                  $query="SELECT items.id AS id,items.price AS Price,items.name AS Name FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                  $result=mysqli_query($con, $query)or die($mysqli_error($con));
                  if(mysqli_num_rows($result)>=1){
                      ?>
                      <thead>
                          <tr>
                              <th>Item Number</th>
                              <th>Item Name</th>
                              <th>Price</th>
                              <th></th>
                          </tr>
                      </thead>
                      <tbody>
	                    <?php
	                    while($row=mysqli_fetch_array($result)) 
				  {
	                        $sum+=$row["Price"];
	                        $par.=$row["id"] . ", ";
	                        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'>Remove</a></td></tr>";
	                    }
	                    $par=rtrim($par,", ");
	                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $par . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
	                    ?>
                      </tbody>
                      <?php
                  } 
			else {
                      echo "Add items to the cart first!";
                  }
                  ?>
            </table>
        </div>
        <!--<?php include 'footer.php' ?>-->
    </body>
</html>

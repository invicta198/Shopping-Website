<?php
require("dbConfig.php");
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$password=$_POST['pwd'];
$password=mysqli_real_escape_string($con,$password);
$password=MD5($password);
$query="SELECT id,email FROM user WHERE email='" . $email . "' AND password='" . $password . "'";
$result=mysqli_query($con, $query)or die($mysqli_error($con));
$num=mysqli_num_rows($result);
if ($num==0) {
  	print '<script type="text/javascript">'; 
	print 'alert("Please enter correct E-mail id and Password")'; 
	print '</script>';
  //$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  //header('location: login.php?error=' . $error);
} 
else {  
  $row=mysqli_fetch_array($result);
  $_SESSION['email']=$row['email'];
  $_SESSION['user_id']=$row['id'];
  header('location:product.php');
}
<?php
include('dbConfig.php');
$name=$_POST['name'];
$name=mysqli_real_escape_string($con,$name);
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$password=$_POST['pwd'];
$password=mysqli_real_escape_string($con,$password);
$password=MD5($password);
$contact=$_POST['contact'];
$contact=mysqli_real_escape_string($con,$contact);
$city=$_POST['city'];
$city=mysqli_real_escape_string($con,$city);
$address=$_POST['address'];
$address=mysqli_real_escape_string($con,$address);

$regex_name="/^([a-zA-Z' ]+)$/";
$regex_email="/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
$regex_contact="/^(\+\d{1,3}[- ]?)?\d{10}$/";

$query="SELECT * FROM user WHERE email='$email'";
$result=mysqli_query($con, $query);
if(mysqli_num_rows($result)>0) 
{
	print '<script type="text/javascript">'; 
	print 'alert("The email address '. $_POST['email'].' is already registered")'; 
	print '</script>';
	//$m="<span class='red'>Email Already Exists</span>";
	//header('location:signup.php?m2='.$m);
	//$message="Email Already Exists";
} 
else if(!preg_match($regex_name,$name)) 
{
	print '<script type="text/javascript">'; 
	print 'alert("Name '.$name.' is not valid")'; 
	print '</script>';
	//$m="<span class='red'>Not a valid Name</span>";
	//header('location:signup.php?m1='.$m);
} 
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
//else if(!preg_match($regex_email,$email)) 
{
	print '<script type="text/javascript">'; 
	print 'alert("The email address '.$email.' is not valid")'; 
	print '</script>';
	//$m="<span class='red'>Not a valid Email</span>";
	//header('location: signup.php?m2='.$m);
}
else if (!preg_match($regex_contact,$contact)) 
{
	print '<script type="text/javascript">'; 
	print 'alert("The contact '.$contact.' is not valid")'; 
	print '</script>';
	//$m="<span class='red'>Not a valid phone number</span>";
	//header('location:signup.php?m4='.$m);
}
else 
{
	$query="INSERT INTO user(name,email,password,contact,city,address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	$user_id=mysqli_insert_id($con);
	$_SESSION['email']=$email;
	$_SESSION['user_id']=$user_id;
	header('location:product.php');
}
?>
<?php
require("dbConfig.php");
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
$old_pass=$_POST['pwd'];
$old_pass=mysqli_real_escape_string($con,$old_pass);
$old_pass=MD5($old_pass);
$new_pass1=$_POST['newpwd1'];
$new_pass1=mysqli_real_escape_string($con,$new_pass1);
$new_pass1=MD5($new_pass1);
$new_pass2=$_POST['newpwd2'];
$new_pass2=mysqli_real_escape_string($con,$new_pass2);
$new_pass2=MD5($new_pass2);
$query="SELECT email,password FROM user WHERE email ='" . $_SESSION['email'] . "'";
$result=mysqli_query($con, $query)or die($mysqli_error($con));
$row=mysqli_fetch_array($result);
$temp=$row['password'];
if ($new_pass1!=$new_pass2) {
    	print '<script type="text/javascript">'; 
	print 'alert("The two passwords don\'t match")'; 
	print '</script>';
    //header('location: settings.php?error=The two passwords don\'t match');
} 
else {
    if ($old_pass==$temp) {
        $query="UPDATE  user SET password = '" . $new_pass1 . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        print '<script type="text/javascript">'; 
	  print 'alert("Password Updated")'; 
	  print '</script>';
	  //header('location: settings.php?error=Password Updated');
    } 
    else{
        print '<script type="text/javascript">'; 
	  print 'alert("Wrong Old Password")'; 
	  print '</script>';
	//header('location: settings.php?error=Wrong Old Password');
    }
}
?>
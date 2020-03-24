<?php

session_start();

// Create connection
$conn = mysqli_connect("localhost", "root", "ekramhossain" , "userregistration");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$name = $_POST['username'];
$password = $_POST['password'];


$s="select * from admin where username= '$name' && password = '$password'";
$result= mysqli_query($conn,$s);
$num= mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['username'] = $name;
	header("location:adminIndex.php");
}

else{
	header("location:adminlogin.php");
}





?>
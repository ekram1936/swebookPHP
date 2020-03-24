<?php
session_start();


// Create connection
$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$name = $_POST['username'];
$password = $_POST['password'];


$s="select * from usertable where username= '$name' && password = '$password'";
$result= mysqli_query($conn,$s);
$num= mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['username'] = $name;
	header("location:home.php");
}

else{
	header("location:index.php");
}





?>
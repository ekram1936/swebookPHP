<?php
session_start();

// Create connection
$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$reg="insert into usertable (username,email,password) values ('$name' , '$email' , '$password')";
$sql=mysqli_query($conn,$reg);
header("location:login.php");




?>
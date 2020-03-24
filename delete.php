<?php
ob_start();
$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
if(isset($_GET['bookdelete'])){
	$id= ($_GET['bookdelete']);
	mysqli_query($conn,"
		DELETE  FROM bookinfo WHERE bookid='$id'
		");
	header('location:managebook.php');
	ob_flush();
}
?>

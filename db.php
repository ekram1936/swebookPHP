<?php


$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>
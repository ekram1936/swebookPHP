<?php


$conn = mysqli_connect("localhost", "root", "ekramhossain" , "userregistration");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
 $file = 'swebookPHP\c.pdf';
 $filename = 'C:\apache\htdocs\c.pdf';
 header('Content-type:application.pdf');
 header('Content-Disposition: inline; filename"' . $filename .'"');
 header('Content-Transfer-Encoding: binary');
 header('Accept-Ranges: bytes');
 @readfile($file);
?>
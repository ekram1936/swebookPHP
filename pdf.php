<?php


$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
 $file = 'htdocs\c.pdf';
 $filename = 'C:\apache\htdocs\c.pdf';
 header('Content-type:application.pdf');
 header('Content-Disposition: inline; filename"' . $filename .'"');
 header('Content-Transfer-Encoding: binary');
 header('Accept-Ranges: bytes');
 @readfile($file);
?>
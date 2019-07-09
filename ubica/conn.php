<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","Directorio_Tracklog");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>
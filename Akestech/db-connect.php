<?php
if ($_SERVER['PHP_SELF']!='GET') {
	//header('location:select.php');
}
$host='localhost';
$user='root';
$pass='';
$db_name='akestech';

$conn=mysqli_connect($host,$user,$pass,$db_name);
if (!$conn) {
	die(error_log($conn));
}





?>
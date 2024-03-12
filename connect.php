<?php
	$con;
	function connect(){
	global $con;
	$server="localhost";
	$username="root";
	$password="";
	$database="pca1";

	$con=mysqli_connect($server,$username,$password,$database);
	// if ($conn) {
	// 	echo "Establish";
	// }
	// else{
	// 	die("error".mysqli_connect_error());
	// }
 }
 connect()
?>
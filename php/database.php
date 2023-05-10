<?php
	$url="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($url,$username,$password,"krishi");
	if(!$conn){
		die('Could not connect MySQL:' .mysql_error());
	}
?>
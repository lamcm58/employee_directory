<?php 
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "employee_directory";
	$link = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($link,"UTF8");
?>
<?php 
	session_start();
	include "config.php";
	include "model/model.php";
	include "controller/controller.php";

	//logout
	if (isset($_GET["act"])) {
		if ($_GET["act"]=="logout"){
			unset($_SESSION["logged"]);
			header("location:index.php");
		}
	}
	//get controller
	$controller = "";
	$c = "";
	if (isset($_GET["controller"])) {
		$c = $_GET["controller"];
		$controller = "controller/controller_".$c.".php";
	}

	//--------------
	if (isset($_SESSION["logged"])) {
		include "view/view_layout.php";
	}
	else{
		// include "view/view_login.php";
		include "controller/controller_login.php";
	}
?>
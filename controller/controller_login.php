<?php 
	class controller_login extends controller{
		public function __construct(){
			parent::__construct();
			if ($_SERVER["REQUEST_METHOD"]=="POST") {
				$c_username = $_POST["username"];
				$c_password = $_POST["password"];
				$c_password = md5($c_password);
				$arr = $this->model->fetch_one("select c_username, c_password from tbl_user where c_username='$c_username' and c_password='$c_password'");
				if ($arr["c_username"]==$c_username && $arr["c_password"]==$c_password) {
					$_SESSION["logged"] = true;
					header("location:index.php");
				}
			}
			// load view
			include "view/view_login.php";
		}
	}
	new controller_login();
?>
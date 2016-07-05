<?php 
	class controller_add_user extends controller{
		public function __construct(){
			parent::__construct();
			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'add':
						$form_control = "index.php?controller=add_user&act=do_add";
						include "view/view_add_user.php";
						break;
					case 'do_add':
						$c_username = $_POST["c_username"];
						$c_password = md5($_POST["c_password"]);
						$this->model->query("insert into tbl_user (c_username,c_password) values ('$c_username','$c_password')");
						header("location:index.php?controller=user");
						break;
				}
			}
		}
	}
	new controller_add_user();
?>
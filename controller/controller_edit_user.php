<?php 
	class controller_edit_user extends controller{
		public function __construct(){
			parent::__construct();
			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'edit':
						$id = $_GET["id"];
						$form_control = "index.php?controller=edit_user&act=do_edit&id=$id";
						$arr = $this->model->fetch_one("select * from tbl_user where pk_user_id = $id");
						include "view/view_edit_user.php";
						break;
					case 'do_edit':
						$id = $_GET["id"];
						$c_username = $_POST["c_username"];
						$c_password = $_POST["c_password"];
						$this->model->query("update tbl_user set c_username='$c_username' where pk_user_id = $id");
						if (empty($c_password)==false) {
							$c_password = md5($c_password);
							$this->model->query("update tbl_user set c_password='$c_password' where pk_user_id = $id");
						}
						header("location:index.php?controller=user");
						break;
				}
			}
		}
	}
	new controller_edit_user();
?>
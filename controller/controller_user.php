<?php 
	class controller_user extends controller{
		public function __construct(){
			parent::__construct();

			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
			}
			switch ($act) {
				case 'delete':
					$id = $_GET["id"];
					$this->model->fetch("delete from tbl_user where pk_user_id = $id");
					header("location:index.php?controller=user");
					break;
			}

			//-------------------
			//phan trang
			$page = 0;
			$record_per_page = 4;
			$total_page = $this->model->fetch_count("select pk_user_id from tbl_user");
			$total_page = ceil($total_page/$record_per_page);
			if (isset($_GET["p"])) {
				$page = $_GET["p"];
			}
			if ($page <= 0) {
				$page = 1;
			}
			$from = ($page-1)*$record_per_page;
			//-------------------
			$arr = $this->model->fetch("select * from tbl_user limit $from,$record_per_page");
			if (file_exists("view/view_user.php")) {
				include "view/view_user.php";
			}
		}
	}
	new controller_user();
?>
<?php 
	class controller_employee extends controller{
		function __construct(){
			parent:: __construct();
			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
			}
			switch ($act) {
				case 'delete':
					$id = $_GET["id"];
					//lay duong dan anh
					$arr = $this->model->fetch_one("select c_image from tbl_employee where pk_em_id = $id");
					$c_image = $arr["c_image"];
					//thuc hien xoa anh
					if (empty($c_image) == false) {
					 	unlink($c_image);
					}
					$this->model->fetch("delete from tbl_employee where pk_em_id = $id");
					header("location:index.php?controller=employee");
					break;
			}

			//-------------------
			//phan trang
			$page = 0;
			$record_per_page = 4;
			$total_page = $this->model->fetch_count("select pk_em_id from tbl_employee");
			$total_page = ceil($total_page/$record_per_page);
			if (isset($_GET["p"])) {
				$page = $_GET["p"];
			}
			if ($page <= 0) {
				$page = 1;
			}
			$from = ($page-1)*$record_per_page;
			//-------------------

			$arr = $this->model->fetch("select * from tbl_employee limit $from,$record_per_page");

			if (file_exists("view/view_employee.php")) {
				include "view/view_employee.php";
			}
		}
	}
	new controller_employee();
?>
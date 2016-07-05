<?php 
	class controller_department extends controller{
		function __construct(){
			parent:: __construct();
			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
			}
			switch ($act) {
				case 'delete':
					$id = $_GET["id"];
					$this->model->fetch("delete from tbl_department where pk_depart_id = $id");
					header("location:index.php?controller=department");
					break;
			}

			//-------------------
			//phan trang
			$page = 0;
			$record_per_page = 4;
			$total_page = $this->model->fetch_count("select pk_depart_id from tbl_department");
			$total_page = ceil($total_page/$record_per_page);
			if (isset($_GET["p"])) {
				$page = $_GET["p"];
			}
			if ($page <= 0) {
				$page = 1;
			}
			$from = ($page-1)*$record_per_page;
			//-------------------

			$arr = $this->model->fetch("select * from tbl_department limit $from,$record_per_page");

			if (file_exists("view/view_department.php")) {
				include "view/view_department.php";
			}
		}
	}
	new controller_department();
?>
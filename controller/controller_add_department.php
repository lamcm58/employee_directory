<?php 
	class controller_add_department extends controller{
		function __construct(){
			parent:: __construct();

			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'add':
						$form_control = "index.php?controller=add_department&act=do_add";
						include "view/view_add_department.php";
						break;
					case 'do_add':
						$c_name = $_POST["c_name"];
						$c_office_phone = $_POST["c_office_phone"];
						$fk_em_id = $_POST["fk_em_id"];
						//insert ban ghi
						$this->model->query("insert into tbl_department (c_name,c_office_phone,fk_em_id) values('$c_name','$c_office_phone','$fk_em_id')");
						header("location:index.php?controller=department");
						break;
				}
			}
		}
	}
	new controller_add_department();
?>
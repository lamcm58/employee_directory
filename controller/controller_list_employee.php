<?php 
	class controller_list_employee extends controller{	
		function __construct(){
			parent::__construct();

			$id = $_GET["id"];
			$arr = $this->model->fetch("select * from tbl_employee where fk_depart_id = $id");

			if (file_exists("view/view_list_employee.php")) {
				include "view/view_list_employee.php";
			}
		}
	}
	new controller_list_employee();
?>
<?php 
	class controller_edit_department extends controller{
		function __construct(){
			parent:: __construct();
			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'edit':
						$id = $_GET["id"];
						$form_control = "index.php?controller=edit_department&act=do_edit&id=$id";
						$arr = $this->model->fetch_one("select * from tbl_department where pk_depart_id = $id");
						include "view/view_edit_department.php";
						break;
					case 'do_edit':
						$pk_depart_id = $_GET["id"];
						$c_name = $_POST["c_name"];
						$c_office_phone = $_POST["c_office_phone"];
						$fk_em_id = $_POST["fk_em_id"];
						//update ban ghi
						$this->model->query("update tbl_department set c_name='$c_name',c_office_phone='$c_office_phone',fk_em_id='$fk_em_id' where pk_depart_id=$pk_depart_id");
						header("location:index.php?controller=department");
						break;
				}
			}
		}
	}
	new controller_edit_department();
?>
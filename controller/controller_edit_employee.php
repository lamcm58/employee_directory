<?php 
	class controller_edit_employee extends controller{	
		function __construct(){
			parent::__construct();

			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'edit':
						$id = $_GET["id"];
						$form_control = "index.php?controller=edit_employee&act=do_edit&id=$id";
						$arr = $this->model->fetch_one("select * from tbl_employee where pk_em_id = $id");
						include "view/view_edit_employee.php";
						break;
					case 'do_edit':
						$pk_em_id = $_GET["id"];
						$c_name = $_POST["c_name"];
						$fk_depart_id = $_POST["fk_depart_id"];
						$c_job_title = $_POST["c_job_title"];
						$c_cell_phone = $_POST["c_cell_phone"];
						$c_email = $_POST["c_email"];
						$c_image = "";
						//upload anh
						if (!empty($_FILES["c_image"]["tmp_name"])) {
							$c_image = "public/upload/".time().$_FILES["c_image"]["name"];
							//thuc hien upload anh
							move_uploaded_file($_FILES["c_image"]["tmp_name"], "public/upload/".time().$_FILES["c_image"]["name"]);
						}
						//update ban ghi
						$this->model->query("update tbl_employee set c_name='$c_name', c_image='$c_image', c_job_title='$c_job_title', c_cell_phone='$c_cell_phone', c_email='$c_email', fk_depart_id='$fk_depart_id' where pk_em_id = $pk_em_id");
						header("location:index.php?controller=employee");
						break;
				}
			}
		}
	}
	new controller_edit_employee();
?>
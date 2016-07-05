<?php 
	class controller_add_employee extends controller{	
		function __construct(){
			parent:: __construct();

			$act = "";
			if (isset($_GET["act"])) {
				$act = $_GET["act"];
				switch ($act) {
					case 'add':
						$form_control = "index.php?controller=add_employee&act=do_add";
						include "view/view_add_employee.php";
						break;
					case 'do_add':
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
						//insert ban ghi
						$this->model->query("insert into tbl_employee (c_name,c_image,c_job_title,c_cell_phone,c_email,fk_depart_id) values('$c_name','$c_image','$c_job_title','$c_cell_phone','$c_email','$fk_depart_id')");
						header("location:index.php?controller=employee");
						break;
				}
			}
		}
	}
	new controller_add_employee();
?>
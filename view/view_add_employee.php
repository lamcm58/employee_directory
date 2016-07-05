<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add Employee</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control; ?>" enctype="multipart/form-data">
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" name="c_name" class="form-control" required placeholder="Employee name">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Avatar</div>
				<div class="col-md-10">
					<input type="file" name="c_image">
					<?php 
					if (isset($arr["c_image"])) {
						if (!empty($arr["c_image"])) {
							
					?>
					<div style="margin-top: 5px;">
						<img src="<?php echo $arr["c_image"]; ?>" style="width: 100px;">
					</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Job Title</div>
				<div class="col-md-10">
					<input type="text" name="c_job_title" class="form-control" required placeholder="Job title">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Cell Phone</div>
				<div class="col-md-10">
					<input type="text" name="c_cell_phone" class="form-control" required placeholder="Cell phone">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" name="c_email" class="form-control" required placeholder="Email">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Department</div>
				<div class="col-md-10">
					<select name="fk_depart_id">
					<?php
						$list_department = $this->model->fetch("select * from tbl_department");
						foreach ($list_department as $rows_department){
							$selected = "";
							if ($rows_department["fk_depart_id"] == $arr["pk_depart_id"]) {
								$selected = "selected";
							}
					?>
						<option <?php echo $selected; ?> value="<?php echo $rows_department["fk_depart_id"]; ?>"><?php echo $rows_department["c_name"]; ?></option>
					<?php } ?>
					</select>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="btn" class="btn btn-success" value="Add">
					<a class="btn btn-default" href="index.php?controller=employee" role="button">Cancel</a>
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
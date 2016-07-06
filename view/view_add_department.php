<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Edit Department</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control; ?>" enctype="multipart/form-data">
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Name</div>
				<div class="col-md-10">
					<input type="text" name="c_name" class="form-control" required placeholder="Department name">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Office Phone</div>
				<div class="col-md-10">
					<input type="text" name="c_office_phone" class="form-control" required placeholder="Office phone">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-2">Manager</div>
				<div class="col-md-10">
					<select name="fk_em_id">
					<?php
						$list_manager = $this->model->fetch("select * from tbl_employee");
						foreach ($list_manager as $rows_manager){
							$selected = "";
							if ($rows_manager["pk_em_id"] == $arr["fk_em_id"]) {
								$selected = "selected";
							}
					?>
						<option <?php echo $selected; ?> value="<?php echo $rows_manager["pk_em_id"]; ?>"><?php echo $rows_manager["c_name"]; ?></option>
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
					<a class="btn btn-default" href="index.php?controller=department" role="button">Cancel</a>
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
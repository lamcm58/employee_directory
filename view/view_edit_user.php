<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Edit user</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control; ?>">
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3">Username</div>
				<div class="col-md-9">
					<input type="text" name="c_username" class="form-control" required value="<?php echo isset($arr["c_username"])?$arr["c_username"]:""; ?>">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3">Password</div>
				<div class="col-md-9">
					<input type="password" name="c_password" class="form-control">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
					<input type="reset" name="btn" class="btn btn-default" value="Reset">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
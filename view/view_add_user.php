<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Add user</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_control; ?>">
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3">Username</div>
				<div class="col-md-9">
					<input type="text" name="c_username" class="form-control" required placeholder="User name">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3">Password</div>
				<div class="col-md-9">
					<input type="password" name="c_password" class="form-control" placeholder="Password">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin: 5px">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
					<a class="btn btn-default" href="index.php?controller=user" role="button">Cancel</a>
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
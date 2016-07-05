<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top: 100px">
	<div class="row">
		<div class="col-md-4 col-xs-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Login
				</div>
				<div class="panel-body">
					<form action="" method="post">
						<div class="row" style="margin-top: 5px; margin-bottom: 5px">
							<div class="col-md-3">Username</div>
							<div class="col-md-9"><input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
						</div>
						<div class="row" style="margin-top: 5px; margin-bottom: 5px">
							<div class="col-md-3">Password</div>
							<div class="col-md-9"><input type="password" class="form-control" placeholder="Password" name="password" required>
							</div>
						</div>
						<div class="row" style="margin-bottom: 5px; margin-top: 5px">
							<div class="col-md-3"></div>
							<div class="col-md-9">
							<input class="btn btn-primary" type="submit" value="Login">
							<input class="btn btn-primary" type="reset" value="Reset">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Directory</title>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Employee Directory</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- <li class="active"><a href="index.php"><i class="fa fa-home" style="font-size:20px;">&nbsp;</i>Home</a></li> -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bar-chart" style="font-size:20px;">&nbsp;</i>Department<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?controller=department"><span class="glyphicon glyphicon-th-list"></span>&nbsp;List Department</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="index.php?controller=add_department&act=add"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Department</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cube" style="font-size:20px;">&nbsp;</i>Emlpoyee<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?controller=employee"><span class="glyphicon glyphicon-th-list"></span>&nbsp;List Employee</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="index.php?controller=add_employee&act=add"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Employee</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" style="font-size: 20px">&nbsp;</i>User<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="index.php?controller=user"><span class="glyphicon glyphicon-th-list"></span>&nbsp;List User</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="index.php?controller=add_user&act=add"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add User</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user" style="font-size: 17px;"></span>&nbsp;Admin</a></li>
              <li><a href="index.php?act=logout"><span class="glyphicon glyphicon-log-out" style="font-size: 17px;"></span>&nbsp;Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    <div class="container" style="margin-top: 100px;">
    	<?php 
    		if (file_exists($controller)) {
    			include $controller;
    		}
    	?>
    </div>
<script src="public/js/jquery-1.12.2.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });
 
</script>
</body>
</html>
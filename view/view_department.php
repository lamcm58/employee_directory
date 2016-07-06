<style type="text/css" media="screen">
	table th{
		text-align: center;
	}
	table{
		text-align: center;
	}
</style>

<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">
			List Department
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 50px;">STT</th>
					<th style="width: 170px;">Name</th>
					<th style="width: 150px;">Office Phone</th>
					<th style="width: 170px;">Manager</th>
					<th style="width: 150px;">View Employees</th>
					<th style="width: 80px;">Edit</th>
					<th style="width: 80px;">Delete</th>
				</tr>
				<?php 
					$stt = 0;
					foreach ($arr as $rows) {
						$stt++;
				?>
				<tr>
					<td><?php echo $stt ;?></td>
					<td><?php echo $rows["c_name"];?></td>
					<td><?php echo $rows["c_office_phone"];?></td>
					<td>
						<?php 
							$employee = $this->model->fetch_one("select * from tbl_employee where pk_em_id = ".$rows["fk_em_id"]);
							echo $employee["c_name"];
						?>
					</td>
					<td>
						<a href="index.php?controller=list_employee&id=<?php echo $rows["pk_depart_id"];?>" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View</a>
					</td>
					<td>
						<a href="index.php?controller=edit_department&act=edit&id=<?php echo $rows["pk_depart_id"];?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
					</td>
					<td>
						<a href="index.php?controller=department&act=delete&id=<?php echo $rows["pk_depart_id"];?>" onclick="return window.confirm('Are you sure?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
					</td>
				</tr>
				<?php }; ?>
			</table>
			<ul class="pagination">
			<?php
				for($i=1; $i<=$total_page; $i++)
				{
			?>
				<li><a href="index.php?controller=department&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php } ?>	
			</ul>
		</div>
	</div>
</div>
<style type="text/css" media="screen">
	table th{
		text-align: center;
	}
	table{
		text-align: center;
	}
</style>

<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			List Employee
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 50px;">STT</th>
					<th>Avatar</th>
					<th style="width: 170px;">Name</th>
					<th style="width: 100px;px;">Job Title</th>
					<th style="width: 150px;">Cell Phone</th>
					<th style="width: 170px;">Email</th>
					<th style="width: 150px;">Department</th>
					<th style="width: 80px;">Edit</th>
					<th style="width: 80px;">Delete</th>
				</tr>
				<?php 
					$stt = 0;
					foreach ($arr as $rows) {
						$stt++;
				?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td>
					<?php 
						if ($rows["c_image"]!="") {
							# code...
					?>
					<img src="<?php echo $rows["c_image"]; ?>" class="img-circle" style="width: 80px; height:80px;">
					<?php }; ?>
					</td>
					<td><?php echo $rows["c_name"];?></td>
					<td><?php echo $rows["c_job_title"];?></td>
					<td><?php echo $rows["c_cell_phone"];?></td>
					<td><?php echo $rows["c_email"];?></td>
					<td>
						<?php 
							$department = $this->model->fetch_one("select * from tbl_department where fk_depart_id = ".$rows["fk_depart_id"]);
							echo $department["c_name"];
						?>
					</td>
					<td>
						<a href="index.php?controller=edit_employee&act=edit&id=<?php echo $rows["pk_em_id"];?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
					</td>
					<td>
						<a href="index.php?controller=employee&act=delete&id=<?php echo $rows["pk_em_id"];?>" onclick="return window.confirm('Are you sure?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
					</td>
				</tr>
				<?php }; ?>
			</table>
			<ul class="pagination">
			<?php
				for($i=1; $i<=$total_page; $i++)
				{
			?>
				<li><a href="index.php?controller=employee&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php } ?>	
			</ul>
		</div>
	</div>
</div>
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
			List Employee
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 50px;">STT</th>
					<th style="width: 100px;">Avatar</th>
					<th style="width: 170px;">Name</th>
					<th style="width: 150px;">Cell Phone</th>
					<th style="width: 170px;">Email</th>
				</tr>
				<?php 
					$stt = 0;
					foreach ($arr as $rows) {
						$stt++;
				?>
				<tr>
					<td><?php echo $stt ;?></td>
					<td>
					<?php 
						if ($rows["c_image"]!="") {
							# code...
					?>
					<img src="<?php echo $rows["c_image"]; ?>" class="img-circle" style="width: 80px; height:80px;">
					<?php }; ?>
					</td>
					<td><?php echo $rows["c_name"];?></td>
					<td><?php echo $rows["c_cell_phone"];?></td>
					<td><?php echo $rows["c_email"];?></td>
				</tr>
				<?php }; ?>
			</table>
			<!-- <ul class="pagination">
			<?php
				for($i=1; $i<=$total_page; $i++)
				{
			?>
				<li><a href="index.php?controller=department&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php } ?>	
			</ul> -->
			<a class="btn btn-default" href="index.php?controller=department" role="button">Back</a>
		</div>
	</div>
</div>
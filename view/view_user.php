<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">
			List User
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 50px;">STT</th>
					<th>User Name</th>
					<th style="width: 100px;">Edit</th>
					<th style="width: 100px;">Delete</th>
				</tr>
				<?php
					$stt = 0;
					foreach ($arr as $rows) {
						$stt++;
				?>
				<tr>
					<td style="text-align: center;"><?php echo $stt; ?></td>
					<td><?php echo $rows["c_username"]; ?></td>
					<td>
						<a href="index.php?controller=edit_user&act=edit&id=<?php echo $rows["pk_user_id"]; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Edit</a>
					</td>
					<td>
						<a href="index.php?controller=user&act=delete&id=<?php echo $rows["pk_user_id"];?>" onclick="return window.confirm('Are you sure?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<ul class="pagination">
			<?php
				for($i=1; $i<=$total_page; $i++)
				{
			?>
				<li><a href="index.php?controller=user&p=<?php echo $i;?>"><?php echo $i; ?></a></li>
			<?php } ?>	
			</ul>
		</div>
	</div>
</div>
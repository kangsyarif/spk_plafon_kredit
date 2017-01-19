	<?php
		include "koneksi.php";
		$sql	= "select * from tbl_bobot";
		$qry	= mysql_query($sql);
		$data	= mysql_fetch_object($qry);
	?>
	<div class="row">
		<div class="col-md-12 text-left">
			<h4>Data Bobot</h4>
			<br/>
			<table width="100%" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Karakter</th>
						<th>Kemampuan</th>
						<th>Jaminan</th>
						<th>Modal</th>
						<th>Ekonomi</th>
						<th width="50px">Aksi</th>
					</tr>
				</thead>
				<tbody> 
					<tr>
						<td><?php echo $data->k1; ?></td>
						<td><?php echo $data->k2; ?></td>
						<td><?php echo $data->k3; ?></td>
						<td><?php echo $data->k4; ?></td>
						<td><?php echo $data->k5; ?></td>
						<td class="text-center">
							<a href="index.php?p=bobot-edit" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
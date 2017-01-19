	<?php
		include "koneksi.php";
		$sql	= "select * from tbl_bobot";
		$qry	= mysql_query($sql);
		$data	= mysql_fetch_object($qry);
		
		
		if(isset($_POST['Update'])){ //Jika ditekan tombol Update maka:
			$datak1	= $_POST['k1'];
			$datak2	= $_POST['k2'];
			$datak3	= $_POST['k3'];
			$datak4	= $_POST['k4'];
			$datak5	= $_POST['k5'];

			$query = mysql_query("update tbl_bobot set k1='$datak1', k2='$datak2', k3='$datak3', k4='$datak4', k5='$datak5' WHERE id_bobot='1'");
			if($query){
				header ('location:index.php?p=bobot'); //jika data berhasil ditambahkan, maka diarahkan ke link tsb
			}else{
				echo "Gagal update data";
				echo mysql_error();
			}
		}
	?>
	<div class="row">
		<div class="col-md-12 text-left">
			<h4>Update Data Bobot</h4>
			<br>
			<form method="post" action="">
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
							<td><input type="text" name="k1" value="<?php echo $data->k1; ?>" class="form-control" required></td>
							<td><input type="text" name="k2" value="<?php echo $data->k2; ?>" class="form-control" required></td>
							<td><input type="text" name="k3" value="<?php echo $data->k3; ?>" class="form-control" required></td>
							<td><input type="text" name="k4" value="<?php echo $data->k4; ?>" class="form-control" required></td>
							<td><input type="text" name="k5" value="<?php echo $data->k5; ?>" class="form-control" required></td>
							<td class="text-center">
								<button type="submit" class="btn btn-primary" name="Update">Update</button>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
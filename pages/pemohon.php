	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Pemohon</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='index.php?p=pemohonInput'" class="btn btn-primary">Tambah Data</button>
		</div>
		
		<div class="col-md-12 text-left">
			<br>
			<table width="100%" class="table table-striped table-bordered" id="tabeldata">
				<thead>
					<tr>
						<th width="30px">No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody> 
					<?php
						include "koneksi.php";
						$no			= 1;
						$sqlPemohon	= "select * from tbl_pemohon";
						$qryPemohon	= mysql_query($sqlPemohon);
						while($dataPemohon = mysql_fetch_object($qryPemohon)){
							$no++;
							echo "
								<tr>
									<td>$no</td>
									<td>$dataPemohon->nik</td>
									<td>$dataPemohon->nama</td>
									<td>$dataPemohon->tempat_lahir</td>
									<td>$dataPemohon->tanggal_lahir</td>
									<td>$dataPemohon->alamat</td>
									<td class='text-center'>
										<a href='index.php?p=pemohonDetail&&nik=$dataPemohon->nik' class='btn btn-info'><span class='glyphicon glyphicon-search' aria-hidden='true'></span></a>
										<a href='index.php?p=pemohon&&action=update&&nik=$dataPemohon->nik' class='btn btn-warning'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
										<a href='index.php?p=pr_hapusPemohon&&nik=$dataPemohon->nik' onclick='return confirm('Yakin ingin menghapus data')' class='btn btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
									</td>
								</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
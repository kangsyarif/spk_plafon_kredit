	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Hasil</h4>
		</div>
	</div>
	<br/>
	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
		<thead>
			<tr>
				<th width="30px">No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Karakter</th>
				<th>Kemampuan</th>
				<th>Jaminan</th>
				<th>Modal</th>
				<th>Ekonomi</th>
				<th>Nilai</th>
				<th>Plafon kredit</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody> 
			<tr>
				<form method="POST" role="form" enctype="multipart/form-data" action="index.php?page=hasil&&action=hitung">
					<td>1
						<input type="hidden" name="w1" value="1">
						<input type="hidden" name="w2" value="10">
						<input type="hidden" name="w3" value="7.5">
						<input type="hidden" name="w4" value="5">
						<input type="hidden" name="w5" value="2.5">				
					</td>
					<td>
						3309030709110002					
						<input type="hidden" name="nik" value="3309030709110002">
					</td>
					<td>
						Ani					
						<input type="hidden" name="nama" value="Ani">
					</td>
					<td align="center">
						Cukup Baik<br>(5)					
						<input type="hidden" name="k1" value="5">
						<input type="hidden" name="k1max" value="10">
					</td>
					<td align="center">
						Tidak Mampu<br>(1)					
						<input type="hidden" name="k2" value="1">
						<input type="hidden" name="k2max" value="10">
					</td>
					<td align="center">
						Sertifikat 2<br>(8)					
						<input type="hidden" name="k3" value="8">
						<input type="hidden" name="k3max" value="8">
					</td>
					<td align="center">
						Cukup<br>(5)					
						<input type="hidden" name="k4" value="5">
						<input type="hidden" name="k4max" value="5">
					</td>
					<td align="center">
						Cukup Baik<br>(5)					
						<input type="hidden" name="k5" value="5">
						<input type="hidden" name="k5max" value="10">
					</td>
					<td align="center">0</td>
					<td align="right"></td>
					<td class="text-center">
						<button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
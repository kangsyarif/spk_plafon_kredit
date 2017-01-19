	<?php
		include "koneksi.php";	
		
		if(isset($_POST['Simpan'])){
			$d_nokk       		= $_POST["no_kk"];
			$d_nik           	= $_POST["nik"];
			$d_nama           	= $_POST["nama"];
			$d_tempat_lahir     = $_POST["tempat_lahir"];
			$d_tanggal_lahir    = $_POST["tanggal_lahir"];
			$d_jenis_kelamin    = $_POST["jenis_kelamin"];
			$d_alamat     		= $_POST["alamat"];
			$d_agama           	= $_POST["agama"];
			$d_status_perkawinan= $_POST["status_perkawinan"];
			$d_pendidikan       = $_POST["pendidikan"];
			$d_pekerjaan        = $_POST["pekerjaan"];
			$d_nama_ibu         = $_POST["nama_ibu"];
			
			$d_k1           	= $_POST["k1"];
			$d_k2  				= $_POST["k2"];
			$d_k3         		= $_POST["k3"];
			$d_k4         		= $_POST["k4"];
			$d_k5       		= $_POST["k5"];

			mysql_query("INSERT INTO tbl_pemohon(nomor_kk, nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, id_agama, id_perkawinan, id_pendidikan, id_pekerjaan, nama_ibu) VALUES ('$d_nokk','$d_nik','$d_nama','$d_tempat_lahir','$d_tanggal_lahir','$d_jenis_kelamin','$d_alamat','$d_agama','$d_status_perkawinan','$d_pendidikan','$d_pekerjaan','$d_nama_ibu')");
			mysql_query("INSERT INTO tbl_hasil(nik, nama, k1, k2, k3, k4, k5, value, plafon) VALUES ('$d_nik','$d_nama','$d_k1','$d_k2','$d_k3','$d_k4','$d_k5','0','')");
			header ('location:index.php?p=pemohon');
		}
	?>
	<div class="row">
		<div class="col-lg-12">
			<h4>Tambah Pemohon</h4>
			<ol class="breadcrumb">
				<li><a href="">Dashboard</a></li>
				<li class="active">Pemohon / Tambah Pemohon</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<form method="post" action="pr_simpanPemohon.php">
				<table class="table-responsive table">
					<tbody>
						<tr>
							<td><b>NIK</b></td>
							<td style="width:1px">:</td>
							<td>
								<input type="text" required  name="nik" class="form-control" >
							</td>
						</tr>
						<tr>
							<td><b>No. KK</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="no_kk" class="form-control" >
							</td>
						</tr>
						<tr>
							<td style="width: 200px;"><b>Nama Lengkap</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="nama" class="form-control" >
							</td>
						</tr>
						<tr>
							<td><b>Tempat Lahir</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="tempat_lahir" class="form-control" >
							</td>
						</tr>
						<tr>
							<td><b>Tanggal Lahir</b></td>
							<td>:</td>
							<td>
								<input type="date" required  name="tanggal_lahir" class="form-control" >
							</td>
						</tr>
						<tr>
							<td><b>Jenis Kelamin</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="jenis_kelamin">
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>								
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Alamat</b></td>
							<td>:</td>
							<td><input type="text" required  name="alamat" class="form-control" ></td>
						</tr>
						<tr>
							<td><b>Agama</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="agama">
									<?php
										$sqlAgama	= "select * from tbl_agama ORDER BY agama ASC";
										$qryAgama	= mysql_query($sqlAgama);
										while($dataAgama = mysql_fetch_object($qryAgama)){
											echo "<option value=$dataAgama->id_agama>$dataAgama->agama</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Status Perkawinan</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="status_perkawinan">
									<?php
										$sqlPerkawinan	= "select * from tbl_perkawinan ORDER BY status_perkawinan ASC";
										$qryPerkawinan	= mysql_query($sqlPerkawinan);
										while($dataPerkawinan = mysql_fetch_object($qryPerkawinan)){
											echo "<option value=$dataPerkawinan->id_perkawinan>$dataPerkawinan->status_perkawinan</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Pendidikan</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="pendidikan">
									<?php
										$sqlPendidikan	= "select * from tbl_pendidikan ORDER BY pendidikan ASC";
										$qryPendidikan	= mysql_query($sqlPendidikan);
										while($dataPendidikan = mysql_fetch_object($qryPendidikan)){
											echo "<option value=$dataPendidikan->id_pendidikan>$dataPendidikan->pendidikan</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Pekerjaan</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="pekerjaan">
									<?php
										$sqlPekerjaan	= "select * from tbl_pekerjaan ORDER BY pekerjaan ASC";
										$qryPekerjaan	= mysql_query($sqlPekerjaan);
										while($dataPekerjaan = mysql_fetch_object($qryPekerjaan)){
											echo "<option value=$dataPekerjaan->id_pekerjaan>$dataPekerjaan->pekerjaan</option>";
										}
									?>
								</select>
							</td>
						</tr>					
						<tr>
							<td><b>Nama Ibu</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="nama_ibu" class="form-control" >
							</td>
						</tr>
						<tr>
							<td colspan="3"><h5>Kriteria Permohonan</h5></td>
						</tr>					
						<tr>
							<td><b>Karakter</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="k1">
									<?php
										$sqlKarakter	= "select * from tbl_karakter ORDER BY karakter ASC";
										$qryKarakter	= mysql_query($sqlKarakter);
										while($dataKarakter = mysql_fetch_object($qryKarakter)){
											echo "<option value=$dataKarakter->value>$dataKarakter->karakter</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Kemampuan</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="k2">
									<?php
										$sqlKemampuan	= "select * from tbl_kemampuan ORDER BY kemampuan ASC";
										$qryKemampuan	= mysql_query($sqlKemampuan);
										while($dataKemampuan = mysql_fetch_object($qryKemampuan)){
											echo "<option value=$dataKemampuan->value>$dataKemampuan->kemampuan</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Jaminan</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="k3">
									<?php
										$sqlJaminan		= "select * from tbl_jaminan ORDER BY jaminan ASC";
										$qryJaminan		= mysql_query($sqlJaminan);
										while($dataJaminan = mysql_fetch_object($qryJaminan)){
											echo "<option value=$dataJaminan->value>$dataJaminan->jaminan - $dataJaminan->keterangan</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Modal</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="k4">
									<?php
										$sqlModal	= "select * from tbl_modal ORDER BY modal ASC";
										$qryModal	= mysql_query($sqlModal);
										while($dataModal = mysql_fetch_object($qryModal)){
											echo "<option value=$dataModal->value>$dataModal->modal</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Ekonomi</b></td>
							<td>:</td>
							<td>
								<select class="form-control"  name="k5">
									<?php
										$sqlEkonomi	= "select * from tbl_ekonomi ORDER BY ekonomi ASC";
										$qryEkonomi	= mysql_query($sqlEkonomi);
										while($dataEkonomi = mysql_fetch_object($qryEkonomi)){
											echo "<option value=$dataEkonomi->value>$dataEkonomi->ekonomi</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td align="right">
								<button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
								<a class="btn btn-warning" href="?p=pemohon">Tampilkan Semua Pemohon</a> </td>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
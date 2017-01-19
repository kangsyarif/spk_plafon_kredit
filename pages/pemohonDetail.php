	<?php
		include "koneksi.php";
		$dataNIK	= $_GET['nik'];
		$sqlPemohon	= "select * from tbl_pemohon WHERE nik=$dataNIK";
		$qryPemohon	= mysql_query($sqlPemohon);
		$dataPemohon = mysql_fetch_object($qryPemohon);
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
								<input type="text" required  name="nik" class="form-control" value="<?php echo $dataPemohon->nik;?>" disabled>
							</td>
						</tr>
						<tr>
							<td><b>No. KK</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="no_kk" class="form-control" value="<?php echo $dataPemohon->nomor_kk;?>" disabled >
							</td>
						</tr>
						<tr>
							<td style="width: 200px;"><b>Nama Lengkap</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="nama" class="form-control" value="<?php echo $dataPemohon->nama;?>" disabled >
							</td>
						</tr>
						<tr>
							<td><b>Tempat Lahir</b></td>
							<td>:</td>
							<td>
								<input type="text" required  name="tempat_lahir" class="form-control" value="<?php echo $dataPemohon->tempat_lahir;?>" disabled >
							</td>
						</tr>
						<tr>
							<td><b>Tanggal Lahir</b></td>
							<td>:</td>
							<td>
								<input type="date" required  name="tanggal_lahir" class="form-control" value="<?php echo $dataPemohon->tanggal_lahir;?>" disabled >
							</td>
						</tr>
						<tr>
							<td><b>Jenis Kelamin</b></td>
							<td>:</td>
							<td>
								<select class="form-control" disabled  name="jenis_kelamin">
									<?php 
										$dataJKel = $dataPemohon->jenis_kelamin;
										if($dataJKel=='L'){
											$l = "selected";
											$p = "";
										}else{
											$l = "";
											$p = "selected";
										}
									?>	
									<option value="L" <?php echo $l;?>>Laki-Laki</option>
									<option value="P" <?php echo $p;?>>Perempuan</option>				
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Alamat</b></td>
							<td>:</td>
							<td><input type="text" required  name="alamat" class="form-control" value="<?php echo $dataPemohon->alamat;?>" disabled ></td>
						</tr>
						<tr>
							<td><b>Agama</b></td>
							<td>:</td>
							<td>
								<select class="form-control" disabled  name="agama">
									<?php
										$dAgama		= $dataPemohon->id_agama;
										$sqlAgama	= "select * from tbl_agama";
										$qryAgama	= mysql_query($sqlAgama);
										while($dataAgama = mysql_fetch_object($qryAgama)){
											if($dataAgama->id_Agama == $dAgama){
												echo "<option value=$dataAgama->id_agama $pilih selected>$dataAgama->agama</option>";
											}else{	
												echo "<option value=$dataAgama->id_agama $pilih>$dataAgama->agama</option>";
											}											
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Status Perkawinan</b></td>
							<td>:</td>
							<td>
								<select class="form-control" disabled  name="status_perkawinan">
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
								<select class="form-control" disabled  name="pendidikan">
									<?php
										$dPendidikan	= $dataPemohon->id_pendidikan;
										$sqlPendidikan	= "select * from tbl_pendidikan";
										$qryPendidikan	= mysql_query($sqlPendidikan);
										while($dataPendidikan = mysql_fetch_object($qryPendidikan)){
											if($dataPendidikan->id_Pendidikan == $dPendidikan){
												echo "<option value=$dataPendidikan->id_pendidikan $pilih selected>$dataPendidikan->pendidikan</option>";
											}else{	
												echo "<option value=$dataPendidikan->id_pendidikan $pilih>$dataPendidikan->pendidikan</option>";
											}											
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Pekerjaan</b></td>
							<td>:</td>
							<td>
								<select class="form-control" disabled  name="pekerjaan">
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
								<input type="text" required  name="nama_ibu" class="form-control" value="<?php echo $dataPemohon->nama_ibu;?>" disabled >
							</td>
						</tr>
						<tr>
							<td colspan="3"><h5>Kriteria Permohonan</h5></td>
						</tr>					
						<tr>
							<td><b>Karakter</b></td>
							<td>:</td>
							<td>
								<select class="form-control" disabled  name="k1">
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
								<select class="form-control" disabled  name="k2">
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
								<select class="form-control" disabled  name="k3">
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
								<select class="form-control" disabled  name="k4">
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
								<select class="form-control" disabled  name="k5">
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
								<button type="submit" class="btn btn-primary">Edit</button>
								<a class="btn btn-warning" href="?p=pemohon">Tampilkan Semua Pemohon</a> </td>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
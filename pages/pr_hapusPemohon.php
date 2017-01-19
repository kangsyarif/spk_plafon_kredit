<?php
	include"koneksi.php";

	$dataNIK = $_GET['nik'];

	$queryPemohon 	= mysql_query("delete from tbl_pemohon WHERE nik=$dataNIK");
	$queryHasil 	= mysql_query("delete from tbl_hasil WHERE nik=$dataNIK");
	if($queryPemohon && $queryHasil){
		header ('location:index.php?p=pemohon');
	}else{
		echo "Gagal hapus data";
		echo mysql_error();
	}
?>

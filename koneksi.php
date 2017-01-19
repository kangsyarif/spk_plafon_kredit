<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbnm = "db_plafon_kredit";
	mysql_connect ($host, $user, $pass);
	mysql_select_db ($dbnm);
	$konek = mysqli_connect($host,$user,$pass,$dbnm);
?>

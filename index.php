<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plafon Kredit | BPR Guna Daya</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">BPR Guna Daya</a>
		</div>

		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
                    <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="index.php?p=bobot"><i class="fa fa-fw fa-book"></i> Data Bobot</a>
                </li>
                <li>
                    <a href="index.php?p=pemohon"><i class="fa fa-fw fa-th-large"></i> Data Pemohon</a>
                </li>
				<li>
                    <a href="index.php?p=hasil"><i class="fa fa-fw fa-th-large"></i> Data Hasil</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="profil.php">Syarif Hidayatulloh</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?page=user">Manejer Pengguna</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="index.php?page=login&&action=logout">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
  
<div class="container">
	<?php
		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/home.php');
		}
	?>

	<div class="row">
		<div class="col-lg-12">	
			<ol class="breadcrumb">
				<footer class="text-center">&copy; Syarif H & Madiyono & Slamet M - 2016</footer>
			</ol>
		</div>
	</div>
</div>

<script src="assets/js/jquery-3.1.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script>
  	$(document).ready(function() {
   		$('#tabeldata').DataTable();
	});
</script>
</body>
</html>
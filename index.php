<?php
session_start();
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi Posyandu</title>

<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="js/datatables.min.css">
<link href="css/style.css" rel="stylesheet">
<link href="js/jquery-ui.min.css">
</head>

<body>
<div class="container" style="margin-top: 20px;">
	<div class="row">

		<div class="col-md-12">
			<header>
				<img width='100%' src="image/header.jpg">
				<nav id="willFixed" class="navbar navbar-default navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="navbar-collapse collapse navbar-scrollers">
						<ul class="nav navbar-nav">
					    	<?php if(empty($_SESSION["nama_admin"])) :
					    		include 'listHeaderNotLogin.php';
					    	?>
						</ul>
					    <?php else : ?>
					    <ul class="nav navbar-nav">
					    	<?php include 'list_header.php';
					    endif ?>
						</ul>
					</div>
				</nav>
			</header>
		</div>

	</div>  <!-- end of row index.php -->

	<?php include 'content.php';?>

	<div class="row" >
		<div class="col-md-12">
			<footer class="well">
				<p style="color: #8BC34A;">Sistem Informasi Posyandu Desa Mangunjaya</p>
			</footer>
		</div>
	
	</div> <!-- end of row -->
</div> <!-- end of container -->


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/sweetalert.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
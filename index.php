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
<style type="text/css">
	ul.ui-autocomplete {
    	list-style: none;
	}

	.ui-autocomplete {
		background-color: rgba(255, 255, 255, 0.9);
		z-index: 99999;
		width: 30px;
		box-shadow: 0 0 3px -2px #000, 0 6px 6px -6px #000;
	}

	.ui-menu .ui-menu-item > * {
		padding: 2px;
	}
</style>

</head>

<body>
<div class="container" style="margin-top: 20px;">
	<div class="row">

		<div class="col-md-12">
			<header>
				<img width='100%' src="image/header.jpg">
				<nav class="navbar navbar-default navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
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
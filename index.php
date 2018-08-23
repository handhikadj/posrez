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
    <script type="text/javascript">

        $(function() {
        	$("#id_anaktimbang").val("B0");

        	$("#id_anaktimbang").on("keydown", function(e){
        		if (e.keyCode == 13 || e.keyCode == 9) {

            		var id = $("#id_anaktimbang").val();                

	                $.ajax({
	                    url: 'proses-ajax.php',
	                    data: "id="+id ,
	                	success: function (data) {
		                	console.log(data)
		                    var json = data;
		                    obj = JSON.parse(json);
		                    $('#nama_anak').val(obj.nama_anak);
		                    $('#tanggal_lahir').val(obj.tanggal_lahir);
		                    $('#jenis_kelamin').val(obj.jenis_kelamin);
		                }
	                });
        		}
        	});

        	$( "#id_anaktimbang" ).autocomplete({
            	source: function( request, response ) {

            		var idanak = $("#id_anaktimbang").val()
            		$.ajax( {
            			url: "autocomplete_ajax.php?id_anak=" + idanak,
            			type: "GET",
            			dataType: "JSON",
            			success: function( data ) {
            				response( $.map (data, function( item ) {
            					return { 
            						label: item.id_anak, 
            						value: item.id_anak,
            					}
            				}));
            			},
            			error: function() {
            				alert('Terjadi Error');
            			}
            		});
            	},
            });

        	$('.dropdown-submenu a.test').on("click", function(e){
        		$(this).next('ul').toggle();
        		e.stopPropagation();
        		e.preventDefault();
        	});

        	$('#table_anak, #table_imunisasi, #table_perbalita, #table_kematian, #table_penimbangan, #table_vitamin')
        	.DataTable({
        		language: {
					"sProcessing":   "<i class='fas fa-spinner fa-spin fa-5x'></i>",
					"sLengthMenu":   "Tampilkan _MENU_ entri",
					"sZeroRecords":  "Tidak ditemukan data yang sesuai",
					"sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
					"sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
					"sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
					"sInfoPostFix":  "",
					"sSearch":       "Cari:",
					"sUrl":          "",
					"oPaginate": {
						"sFirst":    "Pertama",
						"sPrevious": 'Sebelumnya',
						"sNext":     'Selanjutnya',
						"sLast":     "Terakhir"
					}
				}
        	});

        	$('[data-toggle="tooltip"]').tooltip();

        });

    </script>
</body>
</html>
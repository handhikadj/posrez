$(function() {

	$("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").val("B0");

	$('[data-toggle="tooltip"]').tooltip();

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

	$("#id_anaktimbang").on("keydown", function(e){
		if (e.keyCode == 13 || e.keyCode == 9) {

			var id = $("#id_anaktimbang").val();                

			$.ajax({
				url: 'proses-ajax.php',
				data: "id="+id ,
				dataType: "JSON",
				success: function (data) {
					$('#nama_anak').val(data.nama_anak)
					$('#tanggal_lahir').val(data.tanggal_lahir)
					$('#jenis_kelamin').val(data.jenis_kelamin)
				}
			});
		}
	});        	

	$("#id_anaktimbang1, #id_anaktimbang2").on("keydown", function(e){
		if (e.keyCode == 13 || e.keyCode == 9) {

			var id = $("#id_anaktimbang1, #id_anaktimbang2").val();                

			$.ajax({
				url: 'proses-ajax.php',
				data: "id="+id ,
				dataType: "JSON",
				success: function (data) {
					if (data.stat == 1) {
						swal({ 
							title: "Anak ini sudah meninggal",
							icon: "info",
							timer: 1000
						})
						$('#nama_anak').val('')
						$('#tanggal_lahir').val('')
						$('#jenis_kelamin').val('')
						$('#submit_penimbangan').prop('disabled', true)
					} 
					else {
						$('#nama_anak').val(data.nama_anak)
						$('#tanggal_lahir').val(data.tanggal_lahir)
						$('#jenis_kelamin').val(data.jenis_kelamin)
						$('#submit_penimbangan').prop('disabled', false)
					}
				}
			});
		}
	});

	$("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").autocomplete({
		source: function( request, response ) {

			var idanak = $("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").val()
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

});
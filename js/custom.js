$(window).on('load', function(){
	$("#form-immune").hide();
	$("#hide-form-immune").hide();
	$(".form_in_tdimmune").hide()
})

$(function() {

	$("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").val("B0");

	$('[data-toggle="tooltip"]').tooltip();

	$('#table_anak, #table_imunisasi, #table_perbalita, #table_kematian, #table_penimbangan, #table_vitamin, #table_lihat_immune')
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

			var id = $("#id_anaktimbang1, #id_anaktimbang2").val()  

			$.ajax({
				url: 'proses-ajax.php',
				data: "id="+id ,
				dataType: "JSON",
				success: function (data) {
					if (!data) $("#id_anaktimbang1, #id_anaktimbang2").val('B0')
					if (data.stat == 1) {
						swal({ 
							title: "Anak ini sudah meninggal. Silahkan memilih anak yang lain",
							icon: "info",
							timer: 1500
						})
						$("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").val("B0");
						$('#nama_anak').val('')
						$('#tanggal_lahir').val('')
						$('#jenis_kelamin').val('')
						$('#submit_penimbangan').prop('disabled', true)
					} else {
						$('#nama_anak').val(data.nama_anak)
						$('#tanggal_lahir').val(data.tanggal_lahir)
						$('#jenis_kelamin').val(data.jenis_kelamin)
						$('#submit_penimbangan').prop('disabled', false)
					}
				},
			});
		}
	});

	$("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").autocomplete({
		source: function( request, response ) {

			var idanak = $("#id_anaktimbang, #id_anaktimbang1, #id_anaktimbang2").val()
			$.ajax({
				url: "autocomplete_ajax.php?id_anak=" + idanak,
				type: "GET",
				dataType: "JSON",
				success: function( data ) {
					response( $.map (data, function( item ) {
						if (item.id_anak) {
							return {
								label: item.id_anak,
								value: item.id_anak,
							}
						}
						return "Data tidak ada"
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

	$(window).scroll(function(){
		if ($(this).scrollTop() > 225) $("#navbar.navbar-scrollers").addClass('fixed');
		else $("#navbar.navbar-scrollers").removeClass('fixed')
	})

	$("#show-form-immune").click(function(e){
		$("#form-immune").show("slow");
		$(this).delay(250).hide(350)
		$("#hide-form-immune").show(450);
		$("#input_durate").focus()
	})

	$("#hide-form-immune").click(function(e){
		$("#form-immune").hide("slow");
		$(this).delay(700).hide(450)
		$("#show-form-immune").delay(710).show(200);
	})

	$(".for_imune_patch").click(function(){
		var id_imunisasi = $(this).attr("rel")
		$.ajax({
			url: "../content/ajax_modal_imunisasi.php?id_imunisasi=" + id_imunisasi,
			type: "GET",
			dataType: "JSON",
			success: function(response) {
				console.log(response.data.jenis_imunisasi)
				$("#patchimmune-in-modal").val(response.data.jenis_imunisasi)
			},
			error: function() {
				alert('Terjadi Error');
			}
		});
	})

	$("#form-patch-immune").submit(function(e){
		e.preventDefault()

		var id_imunisasi = $(".for_imune_patch").attr("rel"),
			update_immune = $(this).serialize()
		$.ajax({
			url: "../content/ajax_update_imunisasi.php?id_imunisasi=" + id_imunisasi,
			type: "POST",
			data: update_immune,
			dataType: "JSON",
			success: function(response) {
				alert(response.message)
				location.reload()
			},
			error: function() {
				alert('Terjadi Error');
			}
		});

	})
}); // end of document ready



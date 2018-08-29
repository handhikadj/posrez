<?php

include '../config/koneksi.php';

$module = $_GET['module'];
$act = $_GET['act'];

if ($module == 'imunisasi' AND $act == 'input'){
	mysqli_query($db, "INSERT INTO imunisasi (jenis_imunisasi) 
				VALUES( '$_POST[input_immune]')");
								   
	echo "<script language='javascript'>alert('Data Berhasil Disimpan');
	document.location='../?module=imunisasi';
	</script>";
} elseif ($module == 'imunisasi' AND $act == 'delete') {
	mysqli_query($db, "DELETE FROM imunisasi WHERE id_imunisasi='$_GET[id]'");
								   
	echo "<script language='javascript'>alert('Data Berhasil dihapus');
	document.location='../?module=imunisasi';
	</script>";
}
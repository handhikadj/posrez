<?php
include '../config/koneksi.php';

$module = $_GET['module'];
$act = $_GET['act'];
$id = isset($_GET['id']) ? $_GET['id'] : '' ;
$input_immune = isset($_POST['input_immune']) ? strtoupper($_POST['input_immune']) : '' ;

if ($module == 'imunisasi' AND $act == 'input'){
	mysqli_query($db, "INSERT INTO imunisasi (jenis_imunisasi) 
		VALUES( '$input_immune')");
	
	echo "<script language='javascript'>alert('Data Berhasil Disimpan');
	document.location='../?module=imunisasi';
	</script>";
} elseif ($module == 'imunisasi' AND $act == 'delete') {
	mysqli_query($db, "DELETE FROM imunisasi WHERE id_imunisasi='$id'");
	
	echo "<script language='javascript'>alert('Data Berhasil dihapus');
	document.location='../?module=imunisasi';
	</script>";
}
<?php

include '../config/koneksi.php';

$module = $_GET['module'];
$act = $_GET['act'];
$id = isset($_GET['id']) ? $_GET['id'] : '' ;
$input_vitamin = isset($_POST['input_vitamin']) ? strtoupper($_POST['input_vitamin']) : '' ;

if ($module == 'vitamin' AND $act == 'input'){
	mysqli_query($db, "INSERT INTO vitamin (jenis_vitamin) 
				VALUES('$input_vitamin')");
								   
	echo "<script language='javascript'>alert('Data Berhasil Disimpan');
	document.location='../?module=vitamin';
	</script>";
} elseif ($module == 'vitamin' AND $act == 'delete') {
	mysqli_query($db, "DELETE FROM vitamin WHERE id_vitamin='$id'");
								   
	echo "<script language='javascript'>alert('Data Berhasil dihapus');
	document.location='../?module=vitamin';
	</script>";
}
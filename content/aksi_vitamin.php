<?php

include '../config/koneksi.php';

$module = $_GET['module'];
$act = $_GET['act'];

if ($module == 'vitamin' AND $act == 'input'){
	mysqli_query($db, "INSERT INTO vitamin (jenis_vitamin) 
				VALUES( '$_POST[input_vitamin]')");
								   
	echo "<script language='javascript'>alert('Data Berhasil Disimpan');
	document.location='../?module=vitamin';
	</script>";
} elseif ($module == 'vitamin' AND $act == 'delete') {
	mysqli_query($db, "DELETE FROM vitamin WHERE id_vitamin='$_GET[id]'");
								   
	echo "<script language='javascript'>alert('Data Berhasil dihapus');
	document.location='../?module=vitamin';
	</script>";
}
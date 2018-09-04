<?php
header('Content-Type: application/json');
require_once $_SERVER['DOCUMENT_ROOT'].'/config/koneksi.php';

$id_imunisasi = $_GET['id_imunisasi'];
$jenis_immune = strtoupper($_POST['jenis_immune']);

$query = "UPDATE imunisasi SET jenis_imunisasi='$jenis_immune' WHERE id_imunisasi='$id_imunisasi' ";
$result = mysqli_query($db, $query);

if ($result) {
	$data = [
		"message" => "Berhasil Mengupdate Jenis Imunisasi",
		"success" => "true"
	];
} else {
	$data = [
		"message" => "Gagal Mengupdate Jenis Imunisasi",
		"success" => "false"
	];
}

echo json_encode($data);
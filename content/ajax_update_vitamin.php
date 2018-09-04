<?php
header('Content-Type: application/json');
require_once $_SERVER['DOCUMENT_ROOT'].'/config/koneksi.php';

$id_vitamin = $_GET['id_vitamin'];
$jenis_vitamin = strtoupper($_POST['jenis_vitamin']);

$query = "UPDATE vitamin SET jenis_vitamin='$jenis_vitamin' WHERE id_vitamin='$id_vitamin' ";
$result = mysqli_query($db, $query);

if ($result) {
	$data = [
		"message" => "Berhasil Mengupdate Jenis Vitamin",
		"success" => "true"
	];
} else {
	$data = [
		"message" => "Gagal Mengupdate Jenis Vitamin",
		"success" => "false"
	];
}

echo json_encode($data);
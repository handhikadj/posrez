<?php
header('Content-Type: application/json');
require_once $_SERVER['DOCUMENT_ROOT'].'/config/koneksi.php';

$id_imunisasi = $_GET['id_imunisasi'];

$query = "SELECT id_imunisasi, jenis_imunisasi FROM imunisasi WHERE id_imunisasi='$id_imunisasi'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

if ($result) {
	$data = [
		"data" => $row,
		"success" => "true"
	];
} else $data = ["success" => "false"];

echo json_encode($data);
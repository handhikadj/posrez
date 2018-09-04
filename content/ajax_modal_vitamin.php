<?php
header('Content-Type: application/json');
require_once $_SERVER['DOCUMENT_ROOT'].'/config/koneksi.php';

$id_vitamin = $_GET['id_vitamin'];

$query = "SELECT jenis_vitamin FROM vitamin WHERE id_vitamin='$id_vitamin'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

if ($result) {
	$data = [
		"data" => $row,
		"success" => "true"
	];
} else $data = ["success" => "false"];

echo json_encode($data);
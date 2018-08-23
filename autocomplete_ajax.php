<?php 
header('Content-Type: application/json');

include 'config/koneksi.php';
$id_anak = $_GET['id_anak'];
$query = mysqli_query($db, "select id_anak from anak where id_anak LIKE '%$id_anak%' ");
// $query = mysqli_query($db, "select id_anak from anak");
$ketemu = mysqli_num_rows($query) > 0;

$data = [];

if ($ketemu) {
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row;
	}
} else {
		$data['message'] = "Data tidak ada";
}

echo json_encode($data);


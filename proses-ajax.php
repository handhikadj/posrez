<?php
include 'config/koneksi.php';

$nim = $_GET['id'];
$query = "SELECT a.id_anak,
		a.nama_anak,
		a.jenis_kelamin,
		a.tanggal_lahir,
		b.stat
		FROM anak a
		LEFT JOIN kematian b ON a.id_anak=b.id_anak
		WHERE a.id_anak='$nim'";
$result = mysqli_query($db, $query);
$mahasiswa = mysqli_fetch_assoc($result);
echo json_encode($mahasiswa);


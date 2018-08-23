<?php
include 'config/koneksi.php';
$nim = $_GET['id'];
$query = mysqli_query($db, "select * from anak where id_anak='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama_anak'      =>  $mahasiswa['nama_anak'],
            'tanggal_lahir'   =>  $mahasiswa['tanggal_lahir'],
            'jenis_kelamin'    =>  $mahasiswa['jenis_kelamin']);
echo json_encode($data);


<?php
include "config/koneksi.php";
$pass=$_POST['password'];
$username = $_POST['nama_admin'];

$login=mysqli_query($db, "SELECT * FROM admin
			WHERE nama_admin='".mysqli_real_escape_string($db, $username)."' AND password='$pass'");
$cocok=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

	if ($cocok > 0){
		session_start();
		$_SESSION["nama_admin"]     = $r["nama_admin"];
		$_SESSION["password"]     = $r["password"];
		
		
		echo "<script>window.alert('Login Anda Sukses !');
					window.location='index.php?module=home'</script>";
	}else{
		echo "<script>window.alert('Username atau Password anda salah.');
					window.location='index.php'</script>";
	}
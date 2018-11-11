<?php  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dbnm = "posyandu";  

$db = mysqli_connect($host, $user, $pass, $dbnm);

$db ?? mysqli_error($db);

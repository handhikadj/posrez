<?php  
$host = "localhost";  
$user = "root";  
$pass = "";  
$dbnm = "posyandu";  

$db = mysqli_connect($host, $user, $pass, $dbnm);

if($db) true;
else mysqli_error();



// $conn = mysql_connect($host, $user, $pass);  
// if($conn){  
//  $connect = mysql_select_db($dbnm);  
//  if(!$connect){  
//   die("Database tidak dapat dibuka");  
//  }  
// }else{  
//  die("Server MySql tidak terhubung");   
// }  

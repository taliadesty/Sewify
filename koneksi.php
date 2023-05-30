<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tb_konveksi';

$conn = mysqli_connect($host, $user, $pass, $db);
mysqli_select_db($conn, $db);

?>
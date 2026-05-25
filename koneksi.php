<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database =  'db_registrasi_sistem';

$conn=mysqli_connect($host, $username, $password, $database);

if(!$conn){
  die("koneksi gagal: " . mysqli_connect_error());
}
?>
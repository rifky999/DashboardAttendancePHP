<?php

include 'koneksi.php';

$username = $_POST['user'];
$password = $_POST['pass'];

$stmt = $conn->prepare("SELECT * FROM user WHERE username='$username'  AND password='$password'");

$stmt->execute();
$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_OBJ);
if($count)
{
session_start();
$_SESSION['kode']=$data->kode_team; // Storing user session value
  echo "<script type='text/javascript'>alert('Login Berhasil');</script>";
  echo "<meta http-equiv='refresh' content='1;URL=../pendaftaran.php'>";
}
else
{
  echo "<script type='text/javascript'>alert('Username Password salah');</script>";
  echo "<meta http-equiv='refresh' content='1;URL=../login/index.html'>";
}


 ?>

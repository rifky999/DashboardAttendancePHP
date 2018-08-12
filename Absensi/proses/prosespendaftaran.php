<?php

include 'koneksi.php';

$Nama = $_POST['nama'];
$Username = $_POST['user'];
$Password = $_POST['pass'];
$Alamat = $_POST['alamat'];
$No = $_POST['no'];
$Email = $_POST['email'];
$Materi = $_POST['materi'];



    $sql = "INSERT INTO pengajar values ('','$Nama','$Username','$Password','$Alamat','$No','$Email','$Materi')";

    if($pdo->exec($sql)){
      echo "<script>alert('Pendaftaran Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='1; URL=../index.php'>";
    }
    else {
      echo "<script>alert('Pendaftaran Gagal')</script>";
        echo "<meta http-equiv='refresh' content='1; URL=../login.html'>";
    }
 ?>

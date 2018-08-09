<?php
include 'koneksi.php';

$sql = "DELETE FROM penyisihan WHERE deletee='1'";
$conn->exec($sql);


$sql = "DELETE FROM perempat WHERE deletee='1'";
$conn->exec($sql);

$sql = "DELETE FROM semi WHERE deletee='1'";
$conn->exec($sql);

$sql = "DELETE FROM final WHERE deletee='1'";
$conn->exec($sql);


$sql = "UPDATE cek SET cec='0' WHERE cec='1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem2'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem3'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem4'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem5'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem6'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem7'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'perem8'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'sm1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'sm2'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'sm3'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'sm4'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'f1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'f2'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'f3'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'f4'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'j1'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'j2'";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE pertandingan SET namaT = ' ' WHERE kd_per = 'j3'";
$stmt = $conn->prepare($sql);
$stmt->execute();

session_start();
session_destroy();


echo "<meta http-equiv='refresh' content='0;URL=../services2.php'>";
 ?>

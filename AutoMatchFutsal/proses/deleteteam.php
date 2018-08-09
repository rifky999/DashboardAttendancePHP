<?php
include 'koneksi.php';
session_start();
$admin = $_SESSION['kode'];
if ($admin) {
  $kdteam = $_POST['hapus'];

  $sql = "DELETE FROM team WHERE kd_team='$kdteam'";
  $conn->exec($sql);

  echo "<script type='text/javascript'>alert('Delete Team Berhasil ');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=../listpemain.php'>";
}
else {
  echo "<script type='text/javascript'>alert('Login Admin Terlebih Dahulu');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=../login/index.html'>";
}


?>

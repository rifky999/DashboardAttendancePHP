<?php
include 'koneksi.php';
$stmt = $conn->query("SELECT * FROM team");
$stmt->execute();
$count=$stmt->rowCount();
if ($count>=16) {

  echo "<script type='text/javascript'>alert('Pendaftar Sudah Lebih 16');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=../pendaftaran.php'>";

}
elseif ($count>=15) {
  $stmt = $conn->query("SELECT * FROM cek");
  $cek;
  while ($row = $stmt->fetch()) {
    $cek = $row['cec'];
    }
    if ($cek==1) {
      $sql = "UPDATE cek SET coc='1' WHERE coc='0'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
      echo "<script type='text/javascript'>alert('Pendaftar Ke-16');</script>";
      $namat = $_POST['namaT'];
      $namak = $_POST['namaK'];
      $anggota1 = $_POST['anggota1'];
      $anggota2 = $_POST['anggota2'];
      $anggota3 = $_POST['anggota3'];
      $anggota4 = $_POST['anggota4'];
      $anggota5 = $_POST['anggota5'];
      $anggota6 = $_POST['anggota6'];
      $anggota7 = $_POST['anggota7'];
      $anggota8 = $_POST['anggota8'];
      $anggota9 = $_POST['anggota9'];

      if ($Berhasil == 1) {

      $sql = "INSERT INTO team VALUES ('','$namat','$namak','$anggota1','$anggota2','$anggota3','$anggota4','$anggota5','$anggota6','$anggota7','$anggota8','$anggota9')";
      $conn->exec($sql);
      $_SESSION['cook'] = 1;
        echo "<script type='text/javascript'>alert('Pendaftaran Berhasil');</script>";
      echo "<meta http-equiv='refresh' content='1;URL=../pendaftaran.php'>";
      }
    }
    else
    {
      echo "<script type='text/javascript'>alert('Input Jadwal Terlebih Dahulu Untuk Menginput Team Ke-16');</script>";
      echo "<meta http-equiv='refresh' content='0;URL=../pendaftaran.php'>";
    }
}
else {

  // code.
$namat = $_POST['namaT'];
$namak = $_POST['namaK'];
$anggota1 = $_POST['anggota1'];
$anggota2 = $_POST['anggota2'];
$anggota3 = $_POST['anggota3'];
$anggota4 = $_POST['anggota4'];
$anggota5 = $_POST['anggota5'];
$anggota6 = $_POST['anggota6'];
$anggota7 = $_POST['anggota7'];
$anggota8 = $_POST['anggota8'];
$anggota9 = $_POST['anggota9'];

if ($Berhasil == 1) {

$sql = "INSERT INTO team VALUES ('','$namat','$namak','$anggota1','$anggota2','$anggota3','$anggota4','$anggota5','$anggota6','$anggota7','$anggota8','$anggota9')";
$conn->exec($sql);
  echo "<script type='text/javascript'>alert('Pendaftaran Berhasil');</script>";
echo "<meta http-equiv='refresh' content='1;URL=../pendaftaran.php'>";
}

}
 ?>

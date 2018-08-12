<?php
include 'koneksi.php';
$username = $_POST['user'];
$password = $_POST['pass'];
$action   = $_POST['status'];

if ($action == "P") {

  $cek = $pdo->prepare("SELECT * FROM pengajar WHERE username = :username and password = :passcode");
  $cek->execute(array(
                  ':username' => $username,
                  ':passcode' => $password
                  ));
  $row = $cek->fetch(PDO::FETCH_ASSOC);

  if (empty($row['username'])) {
    echo "<script>alert('Login Gagal $username $password')</script>";
  }
  else {
    session_start();
    $_SESSION['idpnjr']      = $row['id_pengajar'];
    $_SESSION['namapnjr']    = $row['nama_pnjr'];
    $_SESSION['userpnjr']    = $row['username'];
    $_SESSION['passpnjr']    = $row['password'];
    $_SESSION['alamatpnjr']  = $row['alamat_pnjr'];
    $_SESSION['nopnjr']      = $row['no_telp'];
    $_SESSION['emailpnjr']   = $row['email_pnjr'];
    $_SESSION['materipnjr']  = $row['materi_pnjr'];

    $cek = $row['nama_pnjr'];
    echo "<script>alert('Login Pelajar Berhasil $cek')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../index.php'>";
  }

}
elseif ($action == "S") {
  $cek=$pdo->prepare("select * from siswa where username = '$username' and password = '$password'");
  $cek->execute();
  $row = $cek->fetch(PDO::FETCH_ASSOC);
  if ($row[0]) {
    echo "<script>alert('Login Pelajar Berhasil')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../index.php'>";
  }
  else {
    echo "<script>alert('Login Gagal')</script>";
    echo "<meta http-equiv='refresh' content='1; URL=../login.html'>";
  }
}
else{
  echo "<script>alert('Pilih Status Pengajar/Pelajar')</script>";
  echo "<meta http-equiv='refresh' content='0; URL=../login.html'>";
}
//echo "<meta http-equiv='refresh' content='0; URL=../login.html'>";
 ?>

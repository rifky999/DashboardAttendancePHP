<div style="color:white;">
<?php
include 'koneksi.php';

$action = $_GET['action'];

if ($action == 'insert') {

    $Pengajar = $_POST['pengajar'];
    $Pembahasan = $_POST['pembahasan'];
    $Tgl = $_POST['tgl'];
    $end = $_POST['end'];

    for ($i=0; $i <= $end; $i++) {
      $Siswa = $_POST["cekid$i"];
      $absen = $_POST["$i"];
      if (!empty($Siswa)) {
        $sql = null;
        if($absen == "Hadir"){
          $sql = "INSERT INTO absensi values ('','$Pengajar','$Siswa','$absen','$Pembahasan','$Tgl')";
        }
        else {
          $sql = "INSERT INTO absensi values ('','$Pengajar','$Siswa','Tidak Hadir','$Pembahasan','$Tgl')";
        }

        $pdo->exec($sql);



      }
    }
    $sql = "INSERT INTO pertemuan values ('','$Pengajar','$Tgl','$Pembahasan')";
    $pdo->exec($sql);
    echo "<script>alert('Absen Berhasil')</script>";
    echo "<meta http-equiv='refresh' content='0; URL=../index.php'>";

}
elseif ($action == 'edit') {

  $Pengajar = $_POST['pengajar'];
  $Pembahasan = $_POST['pembahasan'];
  $Tgl = $_POST['tgl'];
  $end = $_POST['end'];

  for ($i=0; $i <= $end; $i++) {
    $Siswa = $_POST["cekid$i"];
    $Idabsn = $_POST["idabsn$i"];
    $absen = $_POST["$i"];
    if (!empty($Siswa)) {
      $sql = null;
      if($absen == "Hadir"){
        $sql = "UPDATE absensi SET absen = 'Hadir'
                WHERE id_absen='$Idabsn'";
                $stmt= $pdo->prepare($sql);
      }
      else {
        $sql = "UPDATE absensi SET absen = 'Tidak Hadir'
                WHERE id_absen='$Idabsn'";
                $stmt= $pdo->prepare($sql);
      }

      $stmt->execute();



    }
    //  $sql = "UPDATE user SET confirm='1' WHERE username='$user'";
  }
  echo "<script>alert('Edit Berhasil')</script>";
  echo "<meta http-equiv='refresh' content='0; URL=../index.php'>";
}
elseif ($action == 'del'){
  $sql = "DELETE FROM siswa WHERE id_siswa=$Id";

if ($pdo->exec($sql)) {echo "<meta http-equiv='refresh' content='0; URL=../datasiswa.php'>";};
}
else {
echo "<meta http-equiv='refresh' content='0; URL=../datasiswa.php'>";
}

 ?>
 </div>

<div class="" style="color:white">


<?php
include 'koneksi.php';
$end = $_POST["end"];

for ($i=0; $i <= $end; $i++) {
  $Siswa = $_POST["cekid$i"];
  if (!empty($Siswa)) {
    $N1 = $_POST["n1$i"];
    $N2 = $_POST["n2$i"];
    $Total = ($N1 + $N2)/2;
    $sql = "UPDATE siswa SET Nilai1='$N1',Nilai2='$N2', TotalNilai='$Total'
            WHERE id_siswa='$Siswa'";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();

  }
}
        echo "<meta http-equiv='refresh' content='0; URL=../datanilai.php'>";

 ?>
</div>

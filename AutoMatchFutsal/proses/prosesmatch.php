
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body bgcolor="black">

  </body>
  </html>

<?php
session_start();
$admin = $_SESSION['kode'];

if ($admin) {
  include 'koneksi.php';

  if ($_POST['p1']) {
    $P1 = $_POST['p1'];

    $sql = "UPDATE pertandingan SET namaT = '$P1'  WHERE kd_per = 'perem1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }
  elseif ($_POST['p2']) {
    $P2 = $_POST['p2'];
    $sql = "UPDATE pertandingan SET namaT = '$P2' WHERE kd_per = 'perem2'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p3']) {
    $P3 = $_POST['p3'];
    $sql = "UPDATE pertandingan SET namaT = '$P3' WHERE kd_per = 'perem3'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p4']) {
    $P4 = $_POST['p4'];
    $sql = "UPDATE pertandingan SET namaT = '$P4' WHERE kd_per = 'perem4'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p5']) {
    $P5 = $_POST['p5'];
    $sql = "UPDATE pertandingan SET namaT = '$P5' WHERE kd_per = 'perem5'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p6']) {
    $P6 = $_POST['p6'];
    $sql = "UPDATE pertandingan SET namaT = '$P6' WHERE kd_per = 'perem6'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p7']) {
    $P7 = $_POST['p7'];
    $sql = "UPDATE pertandingan SET namaT = '$P7' WHERE kd_per = 'perem7'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['p8']) {
    $P8 = $_POST['p8'];
    $sql = "UPDATE pertandingan SET namaT = '$P8' WHERE kd_per = 'perem8'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }
  elseif ($_POST['s1']) {
    $s1 = $_POST['s1'];
    $sql = "UPDATE pertandingan SET namaT = '$s1' WHERE kd_per = 'sm1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
    $_SESSION['s1'] = $s1;
  }

  elseif ($_POST['s2']) {
    $s2 = $_POST['s2'];
    $sql = "UPDATE pertandingan SET namaT = '$s2' WHERE kd_per = 'sm2'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
    $_SESSION['s2'] = $s2;
  }

  elseif ($_POST['s3']) {
    $s3 = $_POST['s3'];
    $sql = "UPDATE pertandingan SET namaT = '$s3' WHERE kd_per = 'sm3'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
    $_SESSION['s3'] = $s3;
  }

  elseif ($_POST['s4']) {
    $s4 = $_POST['s4'];
    $sql = "UPDATE pertandingan SET namaT = '$s4' WHERE kd_per = 'sm4'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";
    $_SESSION['s4'] = $s4;
  }

  elseif ($_POST['f1']) {
    $f1 = $_POST['f1'];
    $s1 = $_SESSION['s1'];
    $s2 = $_SESSION['s2'];
    if ($f1=$s1){
      $f1 = $s1;
      $f3 = $s2;
    }
    elseif($f1=$s2){
      $f1 = $s2;
      $f3 = $s1;
    }
    $sql = "UPDATE pertandingan SET namaT = '$f1' WHERE kd_per = 'f1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE pertandingan SET namaT = '$f3' WHERE kd_per = 'f3'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['f2']) {
    $f1 = $_POST['f2'];
    $s3 = $_SESSION['s3'];
    $s4 = $_SESSION['s4'];
    if ($f1=$s3){
      $f2 = $s3;
      $f4 = $s4;
    }
    elseif($f1=$s4){
      $f2 = $s4;
      $f4 = $s3;
    }
    $sql = "UPDATE pertandingan SET namaT = '$f2' WHERE kd_per = 'f2'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE pertandingan SET namaT = '$f4' WHERE kd_per = 'f4'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }


  elseif ($_POST['J1'] & $_POST['J1']) {
    $J1 = $_POST['J1'];
    $J2 = $_POST['J2'];
    $sql = "UPDATE pertandingan SET namaT = '$J1' WHERE kd_per = 'j1'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $sql = "UPDATE pertandingan SET namaT = '$J2' WHERE kd_per = 'j2'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }

  elseif ($_POST['J3']) {
    $J3 = $_POST['J3'];
    $sql = "UPDATE pertandingan SET namaT = '$J3' WHERE kd_per = 'j3'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo $stmt->rowCount() . " records UPDATED successfully";

  }





  echo "<script type='text/javascript'>alert('Match Berhasil diupdate ');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=../services.php'>";


}
else {
  echo "<script type='text/javascript'>alert('Login Admin Terlebih Dahulu');</script>";
  echo "<meta http-equiv='refresh' content='0;URL=../login/index.php'>";
}


 ?>

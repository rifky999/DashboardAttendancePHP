<?php
include 'koneksi.php';
session_start();
  $admin = $_SESSION['kode'];
  if ($admin) {

    $P12 = $_POST['P-1-2'];
    $PJ112 = $_POST['P-J1-1-2'];
    $PJ212 = $_POST['P-J2-1-2'];

    $P34 = $_POST['P-3-4'];
    $PJ134 = $_POST['P-J1-3-4'];
    $PJ234 = $_POST['P-J2-3-4'];

    $P56 = $_POST['P-5-6'];
    $PJ156 = $_POST['P-J1-5-6'];
    $PJ256 = $_POST['P-J2-5-6'];

    $P78 = $_POST['P-7-8'];
    $PJ178 = $_POST['P-J1-7-8'];
    $PJ278 = $_POST['P-J2-7-8'];

    $P910 = $_POST['P-9-10'];
    $PJ1910 = $_POST['P-J1-9-10'];
    $PJ2910 = $_POST['P-J2-9-10'];

    $P1112 = $_POST['P-11-12'];
    $PJ11112 = $_POST['P-J1-11-12'];
    $PJ21112 = $_POST['P-J2-11-12'];

    $P1314 = $_POST['P-13-14'];
    $PJ11314 = $_POST['P-J1-13-14'];
    $PJ21314 = $_POST['P-J2-13-14'];

    $P1516 = $_POST['P-15-16'];
    $PJ11516 = $_POST['P-J1-15-16'];
    $PJ21516 = $_POST['P-J2-15-16'];
    /*
      PERDELAPAN
    */
    $P812 = $_POST['P8-1-2'];
    $P8J112 = $_POST['P8-J1-1-2'];
    $P8J212 = $_POST['P8-J2-1-2'];

    $P834 = $_POST['P8-3-4'];
    $P8J134 = $_POST['P8-J1-3-4'];
    $P8J234 = $_POST['P8-J2-3-4'];

    $P856 = $_POST['P8-5-6'];
    $P8J156 = $_POST['P8-J1-5-6'];
    $P8J256 = $_POST['P8-J2-5-6'];

    $P878 = $_POST['P8-7-8'];
    $P8J178 = $_POST['P8-J1-7-8'];
    $P8J278 = $_POST['P8-J2-7-8'];

    /*
      PEREMPAT
    */
    $P412 = $_POST['P4-1-2'];
    $P4J112 = $_POST['P4-J1-1-2'];
    $P4J212 = $_POST['P4-J2-1-2'];

    $P434 = $_POST['P4-3-4'];
    $P4J134 = $_POST['P4-J1-3-4'];
    $P4J234 = $_POST['P4-J2-3-4'];

    /*
      SEMIFINAL
    */

    $SM12 = $_POST['SM-1-2'];
    $SMJ112 = $_POST['SM-J1-1-2'];
    $SMJ212 = $_POST['SM-J2-1-2'];
    /*
      FINAL
    */
    $F1 = $_POST['F-1'];
    $FJ1 = $_POST['F1-J'];

    $F2 = $_POST['F-2'];
    $FJ2 = $_POST['F2-J'];

  if ($Berhasil == 1) {

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P12','$PJ112','$PJ212','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P34','$PJ134','$PJ234','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P56','$PJ156','$PJ256','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P78','$PJ178','$PJ278','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P910','$PJ1910','$PJ2910','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P1112','$PJ11112','$PJ21112','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P1314','$PJ11314','$PJ21314','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO penyisihan
        VALUES ('','$P1516','$PJ11516','$PJ21516','1')";
    $conn->exec($sql);


    $sql = "INSERT INTO perempat
        VALUES ('','$P412','$P4J112','$P4J212','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO perempat
        VALUES ('','$P434','$P4J134','$P4J234','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO semi
        VALUES ('','$SM12','$SMJ112','$SMJ212','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO final
        VALUES ('','$F1','$FJ1','1')";
    $conn->exec($sql);

    $sql = "INSERT INTO final
        VALUES ('','$F2','$FJ2','1')";
    $conn->exec($sql);

    $sql = "UPDATE cek SET cec='1' WHERE cec='0'";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      echo "<script type='text/javascript'>alert('Jadwal Berhasil Terinput');</script>";
    echo "<meta http-equiv='refresh' content='1;URL=../services2.php'>";

  }


  }
  else {
    echo "<script type='text/javascript'>alert('Login Admin Terlebih Dahulu');</script>";
    echo "<meta http-equiv='refresh' content='0;URL=../login/index.html'>";
  }





?>

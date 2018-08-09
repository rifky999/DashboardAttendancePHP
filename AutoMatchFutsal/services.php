<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Liga Futsall</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include 'proses/koneksi.php';
    $cek = 0;
    $stmt = $conn->query("SELECT * FROM cek");
    while ($row = $stmt->fetch()) {
if ($row['cec'] or $row['coc'] ) {
  $cek = $row['cec'];
  $cok = $row['coc'];
}

}


    if ($cek!=1) {
      echo "<script type='text/javascript'>alert('Jadwal Belum Terinput');</script>";
      echo "<meta http-equiv='refresh' content='0;URL=services2.php'>";
    }
    elseif ($cok!=1) {
      echo "<script type='text/javascript'>alert('Belum ada 16 team yang siap');</script>";
      echo "<meta http-equiv='refresh' content='0;URL=pendaftaran.php'>";  // code...
    }
    else{
      $cek;

    }

    $i=1;
    $stmt = $conn->query("SELECT * FROM penyisihan");
    while ($row = $stmt->fetch()) {

      if ($i==1) {
        $P12 = $row['tanggal'];
        $PJ112 = $row['jam1'] ;
        $PJ212 = $row['jam2'];
      }
      elseif ($i==2) {
        $P34 = $row['tanggal'] ;
        $PJ134 = $row['jam1'] ;
        $PJ234 = $row['jam2'] ;
      }
      elseif ($i==3) {
        $P56 = $row['tanggal'] ;
        $PJ156 = $row['jam1'] ;
        $PJ256 = $row['jam2'] ;
      }
      elseif ($i==4) {
        $P78 = $row['tanggal'] ;
        $PJ178 = $row['jam1'] ;
        $PJ278 = $row['jam2'] ;
      }
      elseif ($i==5) {
        $P910 = $row['tanggal'] ;
        $PJ1910 = $row['jam1'] ;
        $PJ2910 = $row['jam2'] ;
      }
      elseif ($i==6) {
        $P1112 = $row['tanggal'] ;
        $PJ11112 = $row['jam1'] ;
        $PJ21112 = $row['jam2'] ;
      }
      elseif ($i==7) {
        $P1314 = $row['tanggal'] ;
        $PJ11314 = $row['jam1'] ;
        $PJ21314 = $row['jam2'] ;
      }
      elseif ($i==8) {
        $P1516 = $row['tanggal'] ;
        $PJ11516 = $row['jam1'] ;
        $PJ21516 = $row['jam2'] ;
      }

      $i = $i+1;
}
$i=1;

$stmt = $conn->query("SELECT * FROM perempat");
while ($row = $stmt->fetch()) {

  switch ($i) {
    case 1:
    $P412 = $row['tanggal'];
    $P4J112 = $row['jam1'] ;
    $P4J212 = $row['jam2'];
      break;

    case 2:
    $P434 = $row['tanggal'] ;
    $P4J134 = $row['jam1'] ;
    $P4J234 = $row['jam2'] ;
      break;

    default:
      // code...
      break;
  }
  $i++;
}


$stmt = $conn->query("SELECT * FROM semi");
while ($row = $stmt->fetch()) {
    $SM12 = $row['tanggal'];
    $SMJ112 = $row['jam1'] ;
    $SMJ212 = $row['jam2'];
}
$i=1;
$stmt = $conn->query("SELECT * FROM final");
while ($row = $stmt->fetch()) {

  switch ($i) {
    case 1:
    $F1 = $row['tanggal'];
    $FJ1 = $row['jam1'] ;
      break;

    case 2:
    $F2 = $row['tanggal'];
    $FJ2 = $row['jam1'] ;
      break;

    default:
      // code...
      break;
  }
  $i++;
}


     ?>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="pendaftaran.php">Liga Futsall Kampus</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services2.php">Input Jadwal Pertandingan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Bagan Pertandingan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listpemain.php">List Team</a>
            </li>

              <li class='nav-item'>
                <a class='nav-link' href='proses/logout.php'>Logout</a>
              </li>


          </ul>
        </div>
      </div>
    </nav>
    <?php
    $stmt = $conn->query("SELECT * FROM team");
    $namateam = [];
    $i = 0;
    while ($row = $stmt->fetch()) {
          $namateam[$i] = $row['nama_team'];
          $i++;
      }

    ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
      <?php
      session_start();
$cook = $_SESSION['cook'];
if ($cook = 1) {

  $_SESSION['T1']=$namateam[0];
  $_SESSION['T2']=$namateam[1];
  $_SESSION['T3']=$namateam[2];
  $_SESSION['T4']=$namateam[3];
  $_SESSION['T5']=$namateam[4];
  $_SESSION['T6']=$namateam[5];
  $_SESSION['T7']=$namateam[6];
  $_SESSION['T8']=$namateam[7];
  $_SESSION['T9']=$namateam[8];
  $_SESSION['T10']=$namateam[9];
  $_SESSION['T11']=$namateam[10];
  $_SESSION['T12']=$namateam[11];
  $_SESSION['T13']=$namateam[12];
  $_SESSION['T14']=$namateam[13];
  $_SESSION['T15']=$namateam[14];
  $_SESSION['T16']=$namateam[15];
  $_SESSION['cook'] = 0;

}



        function acak($team) {
          shuffle($team);
          return $team;
        }

        if (isset($_GET['acak'])) {
          $team=acak($namateam);


          $_SESSION['T1']=$team[0];
          $_SESSION['T2']=$team[1];
          $_SESSION['T3']=$team[2];
          $_SESSION['T4']=$team[3];
          $_SESSION['T5']=$team[4];
          $_SESSION['T6']=$team[5];
          $_SESSION['T7']=$team[6];
          $_SESSION['T8']=$team[7];
          $_SESSION['T9']=$team[8];
          $_SESSION['T10']=$team[9];
          $_SESSION['T11']=$team[10];
          $_SESSION['T12']=$team[11];
          $_SESSION['T13']=$team[12];
          $_SESSION['T14']=$team[13];
          $_SESSION['T15']=$team[14];
          $_SESSION['T16']=$team[15];

        }
          $T1=$_SESSION['T1'];
          $T2=$_SESSION['T2'];
          $T3=$_SESSION['T3'];
          $T4=$_SESSION['T4'];
          $T5=$_SESSION['T5'];
          $T6=$_SESSION['T6'];
          $T7=$_SESSION['T7'];
          $T8=$_SESSION['T8'];
          $T9=$_SESSION['T9'];
          $T10=$_SESSION['T10'];
          $T11=$_SESSION['T11'];
          $T12=$_SESSION['T12'];
          $T13=$_SESSION['T13'];
          $T14=$_SESSION['T14'];
          $T15=$_SESSION['T15'];
          $T16=$_SESSION['T16'];


      ?>
<hr>
<a href='services.php?acak=true'><button type="submit" name="button" >Acak Bagan</button></a>

        </div>
      </div>
      <h1 class="mt-4 mb-3">
        <small>Penyisihan</small>
      </h1>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-1<br><?php echo $P12; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $T1; ?> VS <?php echo $T2; ?></p>
              <center>Jam : <?php echo $PJ112; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p1" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $T3; ?> VS <?php echo $T4; ?></p>
              <center>Jam : <?php echo $PJ212; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p2" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-2<br><?php echo $P34; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $T5; ?> VS <?php echo $T6; ?></p>
              <center>Jam : <?php echo $PJ134; ?></center>
            <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p3" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $T7; ?> VS <?php echo $T8; ?></p>
              <center>Jam : <?php echo $PJ234; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p4" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-3<br><?php echo $P56; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $T9; ?> VS <?php echo $T10; ?></p>
              <center>Jam : <?php echo $PJ156; ?></center>
                <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p5" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $T11; ?> VS <?php echo $T12; ?></p>
              <center>Jam : <?php echo $PJ256; ?></center>
                <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p6" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-4<br><?php echo $P78; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $T13; ?> VS <?php echo $T4; ?></p>
              <center>Jam : <?php echo $PJ178; ?></center>
                <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p7" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $T15; ?> VS <?php echo $T16; ?></p>
              <center>Jam : <?php echo $PJ278; ?></center>
                <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="p8" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>
      </div>


      <?php

      $match = [];

      $i = 1;
      $stmt = $conn->query("SELECT * FROM pertandingan");
      while ($row = $stmt->fetch()) {
            $match[$i] = $row['namaT'];
            $i++;
        }
       ?>
      <!-- /.row -->

      <h2 class="mt-4 mb-3">
        <small>Perempat Final </small>
      </h2>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-1<br><?php echo $P412; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $match[1]; ?> VS <?php echo $match[2]; ?></p>
              <center>Jam : <?php echo $P4J112; ?></center>
                <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="s1" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $match[3]; ?> VS <?php echo $match[4]; ?></p>
              <center>Jam : <?php echo $P4J212; ?></center>
            <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="s2" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-2<br><?php echo $P434; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $match[5]; ?> VS <?php echo $match[6]; ?></p>
              <center>Jam : <?php echo $P4J134; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="s3" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $match[7]; ?> VS <?php echo $match[8]; ?></p>
              <center>Jam : <?php echo $P4J234; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="s4" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>
      </div>

      <h2 class="mt-4 mb-3">
        <small>Semi Final</small>
      </h2>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Hari Ke-1<br><?php echo $SM12; ?></center></h5>
            <div class="card-body">
              <p class="card-text"><?php echo $match[9]; ?> VS <?php echo $match[10]; ?></p>
              <center>Jam : <?php echo $SMJ112; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="f1" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
            <hr>
            <div class="card-body">
              <p class="card-text"><?php echo $match[11]; ?> VS <?php echo $match[12]; ?></p>
              <center>Jam : <?php echo $SMJ212; ?></center>
              <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="f2" value=""> <button type="submit" name="button" class="buttonPem">PEMENANG</button> </form>
            </div>
          </div>
        </div>
      </div>

      <h2 class="mt-4 mb-3">
        <small>Final</small>
      </h2>
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Perebutan Juara 1 & 2<br><?php echo $F1; ?></center></h5>
            <div class="card-body">
              <center>Jam : <?php echo $FJ1; ?></center>
              <p class="card-text"><?php echo $match[13]; ?> VS <?php echo $match[14]; ?></p>
              <form method="post" action="proses/prosesmatch.php">
                <center>
                <input class="Pemenang" type="text" name="J1" value="Juara 1">
                <input class="Pemenang" type="text" name="J2" value="Juara 2">
                <hr>
                <button type="submit" name="button" class="buttonPem">SUBMIT</button> </form>
              </center>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Perebutan Juara 3<br><?php echo $F2; ?></center></h5>
            <div class="card-body">
              <center>Jam : <?php echo $FJ2; ?></center>
              <p class="card-text"><?php echo $match[15]; ?> VS <?php echo $match[16]; ?></p>
      <form method="post" action="proses/prosesmatch.php"><input class="Pemenang" type="text" name="J3" value="Juara 3"> <button type="submit" name="button" class="buttonPem">SUBMIT</button> </form>
            </div>

          </div>
        </div>
        <div class="col-lg-6">
          <div class="alert alert-success" role="alert"><center>Congratulation<br>
            Juara 1 Team <?php echo $match[17]; ?> <br>
            Juara 2 Team <?php echo $match[18]; ?> <br>
            Juara 3 Team <?php echo $match[19]; ?> <br>
            </center></div>
        </div>
      </div>
      <center>
        <a href="proses/delete.php"><button class="buttonDaf" type="submit" class="btn btn-primary">Pertandingan Selesai</button></a>
      </center>
        <!-- /.container -->
    <hr>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Liga Futasall Kampus</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

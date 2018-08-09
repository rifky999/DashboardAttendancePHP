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
    $i=1;
    $stmt = $conn->query("SELECT * FROM team");

    $i = 1;
    while ($row = $stmt->fetch()) {
      $pemain[$i][1] = $row['anggota1'];
      $pemain[$i][2] = $row['anggota2'];
      $pemain[$i][3] = $row['anggota3'];
      $pemain[$i][4] = $row['anggota4'];
      $pemain[$i][5] = $row['anggota5'];
      $pemain[$i][6] = $row['anggota6'];
      $pemain[$i][7] = $row['anggota7'];
      $pemain[$i][8] = $row['anggota8'];
      $pemain[$i][9] = $row['anggota9'];
      $pemain[$i]['kd'] = $row['kd_team'];
      $pemain[$i]['nm'] = $row['nama_team'];
      $pemain[$i]['kapten'] = $row['nama_kapten'];
      $i++;
    }
  $i++;



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
            <li class="nav-item ">
              <a class="nav-link" href="services.php">Bagan Pertandingan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="listpemain.php">List Team</a>
            </li>

              <li class='nav-item'>
                <a class='nav-link' href='proses/logout.php'>List Team</a>
              </li>
    
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <small>List Pemain</small>
      </h1>
      <div class="row">
        <?php
        $stmt = $conn->query("SELECT * FROM team");
        while ($row = $stmt->fetch()) {


        ?>
        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center><?php echo $row['nama_team']; ?></center></h5>
            <div class="card-body">
              <p class="card-text">Kapten : <?php echo $row['nama_kapten']; ?> </p>
              <center><?php echo $row['anggota1']; ?><br>
                <?php echo $row['anggota2']; ?><br>
                <?php echo $row['anggota3']; ?><br>
                <?php echo $row['anggota4']; ?><br>
                <?php echo $row['anggota5']; ?><br>
                <?php echo $row['anggota6']; ?><br>
                <?php echo $row['anggota7']; ?><br>
                <?php echo $row['anggota8']; ?><br>
                <?php echo $row['anggota9']; ?><br>

                <hr>
              <form method="post" action="proses/deleteteam.php"><input class="Pemenang" type="hidden" name="hapus" value="<?php echo $row['kd_team']; ?>"> <button type="submit" name="button" class="buttonPem">HAPUS</button> </form>
            </center>
              </div>
            <hr>

          </div>
        </div>
  <?php } ?>
      </div>

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

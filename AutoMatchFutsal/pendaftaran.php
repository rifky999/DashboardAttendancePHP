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

    /*include 'proses/koneksiJadwal.php';
    $stmt = $conn->query("SELECT * FROM cek");
    while ($row = $stmt->fetch()) {
      $cek = $row['cec'];
    }
    if ($cek==1) {
      $cek;
    }
    else{
      echo "<meta http-equiv='refresh' content='0;URL=services2.php'>";

    }
*/


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
            <li class="nav-item active">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="services2.php">Input Jadwal Pertandingan</a>
            </li>
            <li class="nav-item ">
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

    <!-- Page Content -->
    <div class="container">
      <form  action="proses/inputpendaftaran.php" method="post">


      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
      <small>Pendaftaran Team</small>
      </h1>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Nama Team</label>
            <input name="namaT" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Nama Kapten Team</label>
            <input name="namaK" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <center>  <h6>Nama Anggota Team </h6> </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 1</label>
            <input name="anggota1" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 2</label>
            <input name="anggota2"  type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 3</label>
            <input name="anggota3" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 4</label>
            <input name="anggota4" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 5</label>
            <input name="anggota5" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 6</label>
            <input name="anggota6" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 7</label>
            <input name="anggota7" type="text" name="P-J1-1-2" class="form-control"   required="required" >
          </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 offset-md-2">
          <div class="form-group">
          <div class="box">
            <label >Anggota 8</label>
            <input name="anggota8" type="text" name="P-J1-1-2" class="form-control"   required="required" >
            <input type="hidden" name="kode_team" class="form-control"   required="required" value="<?php echo $kode; ?>" >
          </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-2">
            <div class="form-group">
            <div class="box">
              <label >Anggota 9</label>
              <input name="anggota9" type="text" name="P-J1-1-2" class="form-control"   required="required" >
            </div>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-8 offset-md-2">
      <button class="buttonDaf" type="submit" class="btn btn-primary">Daftar</button>
      </div>
    </div>
        </form>
    </div>
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

<?php
session_start();
include 'proses/koneksi.php';
if (empty($_SESSION['idpnjr'])) {
  echo "<meta http-equiv='refresh' content='0; URL=login.html'>";
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Absensi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/datatable.css">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body>


    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $_SESSION['materipnjr']; ?></a>
      </div>
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Absensi</a></li>
        <li ><a href="datasiswa.php">Data Pelajar</a></li>
        <li class="active"><a href="datanilai.php">Data Nilai</a></li>
        <li><a href="materi.php">Materi</a></li>
      </ul>
      <ul class="nav navbar-nav profil" style="">
        <li ><a href="profil.php"><?php echo $_SESSION['namapnjr'] ; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


<div class="row" style="padding-right:4%;padding-left:4%">
  <div class="col-md-12" >
    <form class="" action="proses/prosesnilai.php" method="post">
      <table id="table" class="table table-striped table-bordered" style="width:100%;font-size:14px">
          <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pangkat</th>
                  <th>Kesatuan</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Nilai 1</th>
                  <th>Nilai 2</th>
                  <th>Total Nilai</th>
              </tr>
          </thead>

          <tbody>
              <?php
                  $ambil=$pdo->prepare("select * from siswa ");
                  $ambil->execute();
                  $end ;
                  while($row=$ambil->fetch()){
               ?>
              <tr>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[5]; ?></td>
                  <td><?php echo $row[6]; ?></td>
                  <td><?php echo $row[7]; ?></td>
                  <td><?php echo $row[4]; ?></td>
                  <td class="nilai">
                    <input type="hidden" name="cekid<?php echo $row[0]; ?>" value="<?php echo $row[0]; ?>">
                    <center>
                      <input type="text" name="n1<?php echo $row[0]; ?>"  style="width:70%" value="<?php echo $row[9]; ?>">
                    </center>
                  </td>
                  <td class="nilai">
                    <center>
                      <input type="text" name="n2<?php echo $row[0]; ?>"  style="width:70%" value="<?php echo $row[10]; ?>">
                    </center>
                  </td>
                  <td class="nilai">
                    <center>
                      <input type="text" name="" style="width:70%" value="<?php echo $row[11]; ?>" disabled>
                    </center>
                  </td>
              </tr>
              <?php $end = $row[0]; } ?>
          </tbody>
          <input type="hidden" name="end" value="<?php echo $end; ?>">
      </table>
      <center>
      <button type="submit" class="btn btn-info" style="margin-bottom:15px">Ubah Nilai</button>
    </center>
    </form>
  </div>
</div>


    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2018 <a href='#'>R99</a>
            </div>

         </div>
    </footer>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

      <script>
              $(document).ready(function() {

                $('#table').DataTable();

              } );
              var d = new Date();
              var date = d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear();
              $('#date').val(date);
      </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>

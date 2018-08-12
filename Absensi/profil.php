<?php  ?>
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
        <li><a href="datanilai.php">Data Nilai</a></li>
        <li class="active"><a href="materi.php">Materi</a></li>


      </ul>
      <ul class="nav navbar-nav profil" style="">
        <li ><a href="profil.php"><?php echo $_SESSION['namapnjr'] ; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>



    <div class="container">
      <div class="row">
        <center><h3>Upload Materi</h3></center><br>
      <form enctype="multipart/form-data" class="" action="proses/prosesmateri.php" method="post">
        <div class="col-sm-2 col-sm-offset-4">
            <div class="form-group">
              <label for="">Judul Materi</label>
              <input type="input" name="judul" class="form-control" value="">
            </div>
        </div>
        <input type="hidden" name="idpngjr" value="<?php echo $_SESSION['idpnjr']; ?>">
        <div class="col-sm-3">
          <div class="form-group">
            <label for="">Input Materi</label>
            <input type="file" name="materi" class="form-control" value="">
          </div>
          <button type="submit" name="button" class="btn btn-success">Upload</button>
        </div>
      </form>
      </div>
<br><br>
      <div class="container"style="margin-bottom:20px;margin-top:20px;">
        <?php
        //Proses Download


         ?>

        <br>
        <?php
        //proses list data upload
        $idpngjr = $_SESSION['idpnjr'];
        $ambil=$pdo->prepare("select * from materi where id_pngjr = '$idpngjr'");
        $ambil->execute();

            while($row=$ambil->fetch()){
         ?>
        <div class="boxmateri" style="float:left; margin:10px 10px 10px 5px;">
          <div class="headM">
            <h5><?php echo $row['judul_mtr']; ?></h5>
            <?php
            if ($row['type'] == "docx") {
              $type = 'docx';
            } elseif ($row['type'] == "png" OR $row['type'] == "jpg") {
              $type = 'png';
            } elseif ($row['type'] == "pdf") {
              $type = 'pdf';
            } elseif ($row['type'] == "ppt") {
              $type = 'ppt';
            } else {
              $type = 'tanya';
            }

            ?>
          </div>
          <div class="bodyM">
            <img src="images/<?php echo $type; ?>.png" alt="" style="width:70%; height:100%">
          </div>

          <div class="footerM">
            <a href="images/<?php echo $row['link_mtr']; ?>"<button type="button" name="button" class="btn">Download</button></a>
          </div>
        </div>
      <?php } ?>
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

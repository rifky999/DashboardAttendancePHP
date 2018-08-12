<?php
session_start();
if (empty($_SESSION['idpnjr'])) {  echo "<meta http-equiv='refresh' content='0; URL=login.html'>";
}
  include 'proses/koneksi.php';
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
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

  </head>
  <body>


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $_SESSION['materipnjr']; ?></a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Absensi</a></li>
        <li><a href="datasiswa.php">Data Pelajar</a></li>
        <li><a href="datanilai.php">Data Nilai</a></li>
        <li><a href="materi.php">Materi</a></li>
      </ul>
      <ul class="nav navbar-nav profil" style="">
        <li ><a href="profil.php"><?php echo $_SESSION['namapnjr'] ; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


    <div class="row" style="padding-right:4%;padding-left:2%;padding-bottom:10px">
      <div class="col-md-3">

        <button type="button" name="button" class="btn" onclick="openabsen()">Absen Kelas</button>
        <button type="button" name="button" class="btn" onclick="cekabsen()">Cek Absensi</button><br><br>

        <div id="openabsen">


          <div class="form-group">
            <label for="usr">Pembahasan</label>
            <input type="text" class="form-control" id="Judul" >
          </div>
          <div class="form-group" style="width:40%">
            <label for="usr">Tanggal</label>
            <input type="text" class="form-control" id="date" disabled>
          </div>
          <button type="submit" name="button" class="btn" onclick="absen()">Buat Absen</button>
        </div>

        <div id="cekabsen" class="row" >
          <div class="col-md-12" style="padding-bottom:8px">
            <?php
            $idpeng =  $_SESSION['idpnjr'];
            $ambil=$pdo->prepare("select * from pertemuan where id_pngjr='$idpeng' ");
            $ambil->execute();
            $end ;
            $i=1;
            while($row=$ambil->fetch()){
              $pertemuan  = $row[3];
              $tgl        = $row[2];
             ?>

            <button style="margin: 5px 5px 5px 5px" type="button" name="button" class="btn btn-info" onclick="pertemuan('<?php echo $pertemuan;?>','<?php echo $tgl; ?>')" >Pertemuan <?php echo $i ?></button>
          <?php $i++; } ?>
          </div>
        </div>





      </div>


      <div class="col-md-9" >
          <form action="proses/prosesabsensi.php?action=insert" method="post" id="formabsn">
        <center><h3 class="setjudul"></h3><h5 class="settgl"></h5> </center>
        <table id="table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>kesatuan</th>
                    <th>email</th>
                    <th>Absen</th>
                </tr>
            </thead>

            <tbody>
    <?php
    //cek pertemuan
      if (!empty($_GET['materi'])) {
        $materi = $_GET['materi'];
        $tgl = $_GET['tgl'];
        echo "<script>
            $(document).ready(function() {

                $('.setjudul').text('$materi');
                $('.settgl').text('$tgl');
                $('#formabsn').attr('action','proses/prosesabsensi.php?action=edit');
                $('.Babsen').show().text('edit');
                cekabsen();
                });
              </script>";

                $idpeng =  $_SESSION['idpnjr'];
                $ambil=$pdo->prepare("SELECT siswa.id_siswa, siswa.Nama_ssw, siswa.Pangkat_ssw, siswa.Kesatuan_ssw
                                      , siswa.email_ssw, absensi.absen, absensi.id_absen
                                      FROM absensi
                                      INNER JOIN siswa ON absensi.id_siswa = siswa.id_siswa AND absensi.Pembahasan_abs = '$materi'
                                      AND absensi.id_pengajar = '$idpeng'");
                $ambil->execute();
                      while($row=$ambil->fetch()){
      ?>
                      <tr>
                          <td><?php echo $row[0]; ?></td>
                          <td><?php echo $row[1]; ?></td>
                          <td><?php echo $row[2]; ?></td>
                          <td><?php echo $row[3]; ?></td>
                          <td><?php echo $row[4]; ?></td>
                          <td>
                            <?php if ($row[5] == "Hadir") {
                              $checked = "checked";
                            }
                            else {
                              $checked = null;
                            }
                             ?>
                              <input type="checkbox" name="<?php echo $row[0]; ?>" value="Hadir" <?php echo $checked; ?>>
                              <input type="hidden" name="cekid<?php echo $row[0]; ?>" value="<?php echo $row[0]; ?>">
                              <input type="hidden" name="idabsn<?php echo $row[0]; ?>" value="<?php echo $row[6]; ?>">
                          </td>
                      </tr>
      <?php
                    $end = $row[0];
                    }
        }
        //Make Absen And Firsh Impression Show Page
        else {
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
                          <td>
                              <input type="checkbox" name="<?php echo $row[0]; ?>" value="Hadir" >
                              <input type="hidden" name="cekid<?php echo $row[0]; ?>" value="<?php echo $row[0]; ?>">
                          </td>
                      </tr>
        <?php
                    $end = $row[0];
                    }
          }
         ?>
            </tbody>
            <input type="hidden" name="pengajar" value="<?php echo $_SESSION['idpnjr']; ?>">
            <input type="hidden" name="end"     value="<?php echo $end; ?>">
            <input type="hidden" name="pembahasan" class="pembahasan" value="">
            <input type="hidden" name="tgl" class="tgl" value="">

        </table>
        <center><button type="submit" name="button" class="btn btn-success Babsen" >- - Absen - -</button></center>
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



    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

      <script>
          $(document).ready(function() {



              });
              $('#table').DataTable();
              var d = new Date();
              var month = (1+d.getMonth());
              var date = d.getDate()+"/"+month+"/"+d.getFullYear();
              $('#date').val(date);

              $('#cekabsen').hide();
              $('.Babsen').hide();

              function absen() {
                var juduls =  $('#Judul').val();

                $('.setjudul').text(juduls);
                $('.settgl').text(date);
                $('.tgl').val(date);
                $('.pembahasan').val(juduls);
                $('.Babsen').show().text('Absen');
                $('#formabsn').attr('action','proses/prosesabsensi.php?action=insert');
              }

              function openabsen() {
                $('#openabsen').show();
                $('#cekabsen').hide();
              }

              function cekabsen() {
                $('#openabsen').hide();
                $('#cekabsen').show();
              }

              function pertemuan(materi,tgl){
                window.location = "index.php?materi="+materi+"&tgl="+tgl;
              }

      </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>

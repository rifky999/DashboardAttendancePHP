<?php
session_start();
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
        <li class="active"><a href="#">Data Pelajar</a></li>
        <li><a href="datanilai.php">Data Nilai</a></li>
        <li><a href="materi.php">Materi</a></li>
      </ul>
      <ul class="nav navbar-nav profil" style="">
        <li ><a href="profil.php"><?php echo $_SESSION['namapnjr'] ; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>


  <br>

    <div class="row" style="padding-right:4%;padding-left:4%">



      <div class="col-md-12" >

      <table id="table" class="table table-striped table-bordered" style="width:100%;font-size:14px">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Pangkat</th>
                  <th>Kesatuan</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Option</th>
              </tr>
          </thead>
          <form class="" action="index.html" method="post">
          <tbody>
            <?php
            include 'proses/koneksi.php';
            $ambil=$pdo->prepare("select * from siswa ");
            $ambil->execute();
            while($row=$ambil->fetch()){
             ?>
              <tr>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $row[1]; ?> </td>
                  <td><?php echo $row[5]; ?></td>
                  <td><?php echo $row[6]; ?></td>
                  <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                  <td>
                    <center>
                      <button type="button" name="button" class="btn-info" onclick="edit(
                                                                                    '<?php echo $row[0]; ?>'
                                                                                    ,'<?php echo $row[1]; ?>'
                                                                                    ,'<?php echo $row[2]; ?>'
                                                                                    ,'<?php echo $row[3]; ?>'
                                                                                    ,'<?php echo $row[4]; ?>'
                                                                                    ,'<?php echo $row[5]; ?>'
                                                                                    ,'<?php echo $row[6]; ?>'
                                                                                    ,'<?php echo $row[7]; ?>')">Edit</button>
                    <a href="proses/prosesmhs.php?action=del&id=<?php echo $row[0]; ?>" > <button type="button" name="button" class="btn-danger">Delete</button></a>
                    </center>
                  </td>
              </tr>
            <?php } ?>
          </tbody>
          </form>
      </table>
      </div>
    </div>
    <br>

    <div class="container">
      <center>
      <button type="button" name="button" class="btn btn-info" onclick="inputmhs()">Tambah Pelajar</button>
    </center>
    </div>

    <div class="container" id="edit">
      <div class="row">
        <form class="" action="proses/prosesmhs.php?action=edit" method="post">
        <div class="col-md-4 col-md-offset-1">
          <center><h3>Edit Pelajar</h3></center>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="hidden" name="id" class="no" value="">
            <input type="text" name="nama" class="form-control nama" value="">
          </div>
          <div class="form-group">
            <label for="nama">Username</label>
            <input type="text" name="user" class="form-control user" value="">
          </div>
          <div class="form-group">
            <label for="nama">Password</label>
            <input type="password" name="pass" class="form-control pass" value="">
          </div>
          <div class="form-group">
            <label for="nama">Pangkat</label>
            <input type="text" name="pangkat" class="form-control pangkat" value="">
          </div>

          <button type="submit" name="button" class="btn btn-success">Edit</button>
        </div>
        <div class="col-md-4 "><br><br><br><br>
          <div class="form-group">
            <label for="nama">Kesatuan</label>
            <input type="text" name="kesatuan" class="form-control kesatuan" value="">
          </div>
          <div class="form-group">
            <label for="nama">Email</label>
            <input type="email" name="email" class="form-control email" value="">
          </div>
          <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea type="text" name="alamat" class="form-control alamat">Alamat</textarea>
            <input name="pengajar"  type="hidden" value="<?php echo $_SESSION['idpnjr'] ; ?>">
          </div>
        </div>
      </form>
      </div>
    </div>

    <div class="container" id="inputsiswa">
      <div class="row">
        <form class="" action="proses/prosesmhs.php?action=insert" method="post">
        <div class="col-md-4 col-md-offset-1">

          <center><h3>Tambah Pelajar</h3></center>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="nama">Username</label>
            <input type="text" name="user" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="nama">Paswword</label>
            <input type="password" name="pass" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="nama">Pangkat</label>
            <input type="text" name="pangkat" class="form-control" value="" required>
          </div>
          <button type="submit" name="button" class="btn btn-success">Tambah</button>

        </div>
        <div class="col-md-4 "><br><br><br><br>
          <div class="form-group">
            <label for="nama">Kesatuan</label>
            <input type="text" name="kesatuan" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="nama">Email</label>
            <input type="text" name="email" class="form-control" value="" required>
          </div>
          <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea type="text" name="alamat" class="form-control" required></textarea>
            <input type="hidden" name="pengajar" value="<?php echo $_SESSION['idpnjr'] ; ?>">
          </div>
        </div>
        </form>
      </div>
    </div>
    <br>
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

              $('#inputsiswa').hide();
              $('#edit').hide();

              function edit(no,nama,user,pass,pangkat,kesatuan,email,alamat) {
                $('.no').val(no);
                $('.nama').val(nama);
                $('.user').val(user);
                $('.pass').val(pass);
                $('.pangkat').val(kesatuan);
                $('.kesatuan').val(email);
                $('.email').val(alamat);
                $('.alamat').val(pangkat);
                $('#edit').toggle();
                $('#inputsiswa').hide();

              }

              function inputmhs() {
                $('#inputsiswa').toggle();
                  $('#edit').hide();
              }

              var d = new Date();
              var date = d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear();
              $('#date').val(date);

      </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  </body>
</html>

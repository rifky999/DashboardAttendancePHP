<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/regis/bootstrap/css/bootstrap.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/regis/font-awesome/css/font-awesome.min.css');?>" />

    <script type="text/javascript" src="<?php echo base_url('assets/regis/js/jquery-1.10.2.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/regis/bootstrap/js/bootstrap.min.js');?>"></script>
</head>
<body>

<div class="container">

<div class="page-header">

</div>

<!-- Registration form - START -->
<div class="container">
  <div class="form-daftar">

        <form role="form" method="post" action="<?php echo site_url('Auth/daftar');?>">
          <?php
          if($sukses== ' '){
            echo $sukses;
          }
          elseif ($sukses==1) {
            echo "<div class='alert alert-success fade in'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
               Berhasil Mendaftar
             </div>";
          }
          else {
            echo "<div class='alert alert-warning'>
               <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
               Data yang di inputkan tidak sesuai
             </div>";
          }
           ?>
            <div class="col-lg-10">
                <div class="well well-sm" ><center><strong>PENDAFTARAN</strong></center></div>
                <div class="form-group">
                    <label for="InputName">Username</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="InputName" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Password</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="password" id="InputName" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Nama</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nama" id="InputName" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputEmail">Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="email" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">No Handphone</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="no" id="InputName" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Kota</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="kota" id="InputName" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Alamat</label>
                    <div class="input-group">
                        <textarea name="alamat" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <input type="submit" name="submit" id="submit" value="DAFTAR" class="btn btn-info pull-right">
                <a href="<?php echo site_url('auth/index')?>"><div class="login">LOGIN<div></a>
              </div>
        </form>

</div>
<!-- Registration form - END -->

</div>

</body>
</html>

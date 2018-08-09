<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/favicon.ico">

  <title>Pencarian Orang</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo  base_url('assets/css/bootstrap.css');?>" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/modernizr.js') ;?>"></script>
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="<?php echo site_url('welcome/')?>">HUMANITY SEARCH</a>
      </div>
      <div class="navbar-collapse collapse navbar-right">
        <ul class="nav navbar-nav">
          <li ><a href="<?php echo site_url('welcome/')?>">HOME</a></li>
          <li ><a href="<?php echo site_url('welcome/about')?>">ABOUT</a></li>
          <li class="active"><a href="<?php echo site_url('welcome/buat')?>">PENGADUAN</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFIL <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('welcome/profil') ?>">PROFIL SAYA</a></li>
              <li><a href="<?php echo site_url('auth/logout')?>">LOGOUT</a></li>

            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

<!--BODY -->

   <div class="container mtb">
     <?php
     if($sukses== ' '){
       echo $sukses;
     }
     elseif ($sukses==1) {
       echo "<div class='alert alert-success fade in'>
     			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
     			Berhasil Melapor
     		</div>";
     }
     else {
       echo "<div class='alert alert-warning'>
     			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
     			Data yang di inputkan tidak sesuai $sukses
     		</div>";
     }
      ?>

     <div class="col-lg-8">
       <h4>Kirim Berita Acara Kehilangan

       </h4>
       <div class="hline"></div><br>
                 <form role="form" method="post" <?php echo form_open_multipart('Crud/input');?>

          <div class="form-group">
                <label >Upload Foto</label>
                <input name="FotoBerita" type="file" class="form-control" >
               </div>
           <div class="form-group">
             <label >Judul</label>
             <input name="judul" type="text" class="form-control" >
           </div>
           <div class="form-group">
             <label >Nama </label>
             <input name="nama" type="text" class="form-control" >
           </div>


              <div class="form-group">
             <label >Jenis Kelamin </label>

             <select class="form-control" id="sel1">
               <option>Laki-laki</option>
               <option>Perempuan</option>
            </select>
            </div>


           <div class="form-group">
             <label >Umur</label>
             <input name="umur" type="text" class="form-control" >
           </div>
           <div class="form-group">
             <label >Ciri-ciri</label>
             <textarea name="ciri2" class="form-control" rows="3"></textarea>
           </div>
           <div class="form-group">
             <label >Deskripsi</label>
             <textarea name="deskripsi" class="form-control"  rows="3"></textarea>
           </div>
           <div class="form-group">
             <label >kota</label>
             <input name="kota" type="text" class="form-control" >
           </div>
           <div class="form-group">
             <label >No Kontak</label>
             <input name="no" type="text" class="form-control" >
             <input name="no_user" type="hidden" value="<?php echo $nouser; ?>">
           </div>
           <button type="submit" class="btn btn-theme">Submit</button>
         </form>
     </div><! --/col-lg-8 -->


   </div><! --/container -->




<!-- FOOTER -->



<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>Tentang Kami</h4>
        <div class="hline-w"></div>
        <p>Aplikasi dicari di buat oleh mahasiswa mercubuana, dimana bertujuan
        dari aplikasi ini yaitu untuk mencentralisasikan data-data orang hilang agar tersusun dengan baik dan sebagai wadah dalam melapor kehilangan atau pencarian orang.</p>
      </div>
      <div class="col-md-4">
        <h4>Meda Sosial</h4>
        <div class="hline-w"></div>
        <p>
          <a href="#"><i class="fa fa-dribbble"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-tumblr"></i></a>
        </p>
      </div>
      <div class="col-md-4">
        <h4>Kontak Person</h4>
        <div class="hline-w"></div>
        <p>
          Azhari Fauzan, 081726327174<br/> Irfandika, 08147238125<br/>
        </p>
      </div>

    </div>
    <! --/row -->
  </div>
  <! --/container -->
</div>
  <! --/footerwrap -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/retina-1.1.0.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.hoverdir.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.hoverex.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.isotope.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>


  <script>
    // Portfolio
    $(document).ready(function(){


    });
  </script>
</body>

</html>

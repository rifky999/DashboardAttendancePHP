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
          <li class="active"><a href="<?php echo site_url('welcome/')?>">HOME</a></li>
          <li ><a href="<?php echo site_url('welcome/about')?>">ABOUT</a></li>
          <li><a href="<?php echo site_url('welcome/buat')?>">PENGADUAN</a></li>
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

     <div class="profil">

      <div class="row">
        <h2 class="text-center">PROFIL USER</h2><br>
        <div class="allprofil">
          <table border="0">
<?php foreach ($user as $usr) { ?>

          <tr>
            <td class="td">Nama </td> <td> <?php echo $usr['nama']; ?></td></tr>

          <tr>
            <td>Email </td> <td> <?php echo $usr['email']; ?></td></tr>

          <tr>
            <td>No Hp </td> <td> <?php echo $usr['no_telp']; ?></td></tr>

          <tr>
            <td>Kota </td> <td> <?php echo $usr['kota']; ?></td></tr>

          <tr>
            <td>Alamat </td> <td><?php echo $usr['alamat']; ?></td></tr>

    <?php } ?>
    </table>
    </div>

    </div>

      <br>

      <h2 class="text-center">DATA BERITA TERUPLOAD </h2>
    <?php foreach ($berita as $ber ) { ?>

      <div class="row">
      <hr>
        <div class="col-sm-2
         ">
         <?php echo $ber['nama']; ?>
        </div>
        <div class="col-sm-2 ">
          <?php echo $ber['judul']; ?>
        </div>
        <div class="col-sm-1 ">
          <?php echo $ber['kota']; ?>
        </div>
        <div class="col-sm-2 ">
          <?php echo $ber['jkel']; ?>
        </div>
        <div class="col-sm-1 ">
        <?php echo $ber['umur']; ?>
        </div>

        <div class="col-sm-2 ">
          <?php echo $ber['hubungi']; ?>
        </div>
        <div class="col-sm-1 ">
          <form role="form" method="post" <?php echo form_open_multipart('Welcome/delete');?>
            <input name="no_berita" type="hidden" value="<?php echo $ber['no_berita']; ?>">
            <input name="link_foto" type="hidden" value="<?php echo $ber['foto']; ?>">
           <button type="submit" class="btn btn-theme">Hapus</button>
        </form>
      </div>
      <div class="col-sm-1 ">
        <form role="form" method="post" <?php echo form_open_multipart('Welcome/edit');?>
          <input name="no_berita" type="hidden" value="<?php echo $ber['no_berita'] ?>">
        <button type="submit" class="btn btn-theme">Edit</button>
      </form>
      </div>
        <hr>
      </div>
    <?php  }?>
    </div>

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

  </script>
</body>

</html>

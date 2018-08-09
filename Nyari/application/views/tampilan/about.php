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
    <link href="<?php echo  base_url('assets/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo  base_url('assets/css/font-awesome.min.css');?>" rel="stylesheet">




    <script src="<?php echo  base_url('assets/js/modernizr.js');?>"></script>
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
            <li class="active"><a href="<?php echo site_url('welcome/about')?>">ABOUT</a></li>
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

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->

	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-md-6">
	 			<img class="img-responsive" src="<?php echo  base_url('assets/img/logo/agency.png');?>" alt="" >
	 		</div>

	 		<div class="col-md-6">
		 		<h4>Sedikit Tentang Dicari.</h4>
		 		<p>Kehilangan orang merupakan sesuatu kejadian yang membuat keluarga atau orang terdekat cemas dan panik saat
          kehilangan keluarga atau orang terdekat. Kejadian seperti ini sering kali membingungkan keluarga atau orang terdekat
           dalam menemukan kembali keluarga atau orang terdekat yang hilang tersebut. Sering terjadi kasus kehilangan orang hilang
           ataupun menemukan seseorang yang kehilangan keluarga, yang biasanya seseorang hanya membuat pengumuman di sosial media
           ataupun secara manual. Mungkin dengan cara-cara tersebut dapat menyelesaikan masalah kehilangan orang hilang, akan tetapi
           masih kurang efektif karena belum adanya wadah tersendiri untuk lingkup kehilangan orang. Berdasarkan masalah tersebut,
           peneliti bertujuan untuk mengembangkan aplikasi pencarian orang hilang berbasis web. Metode pengembangan aplikasi menggunakan
           metode waterfall dengan beberapa fase yaitu analisis kebutuhan, desain sistem, implementasi, dan pengujian. Sistem pengkodean
           menggunakan PHP dan MySQL untuk mengembangkan aplikasi pencarian orang hilang tersebut. Proses kerja aplikasi
            ini seperti online shop, yang terdapat proses unggahan dan mencari informasi tentang orang yang hilang.
            Langkah untuk mengklaim orang. Hasil dari aplikasi yang dikembangkan ini dapat mempermudah dalam menangani pencarian orang hilang. </p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br> <br><br><br><br>
          <p><br/></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

	<!-- *****************************************************************************************************************
	 TEEAM MEMBERS
	 ***************************************************************************************************************** -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
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
   </div><! --/footerwrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo  base_url('assets/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo  base_url('assets/js/retina-1.1.0.js');?>"></script>
	<script src="<?php echo  base_url('assets/js/jquery.hoverdir.js');?>"></script>
	<script src="<?php echo  base_url('assets/js/jquery.hoverex.min.js');?>"></script>
	<script src="<?php echo  base_url('assets/js/jquery.prettyPhoto.js');?>"></script>
  	<script src="<?php echo  base_url('assets/js/jquery.isotope.min.js');?>"></script>
  	<script src="<?php echo  base_url('assets/js/custom.js');?>"></script>


  </body>
</html>

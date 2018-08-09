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
       <?php foreach ($berita as $b) { ?>
         <?php $foto = $b['foto'] ;?>
         <?php $foto2 = base_url("assets/img/$foto"); ?>
         <?php $berita = $b['no_berita']; ?>

        <h2 class="text-center">Detail Berita</h2><br>
      <center>
        <div class="foto">
           <img height="600px" src="<?php echo $foto2; ?>"  alt="">
         </div>
      </center>

      <div class="data">

          <div class="row">
            <div class="col-xs-2 col-xs-offset-4 ">
              Nama
            </div>
            <div class="col-xs-6">
              <?php echo $b['nama']; ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4 ">
              Judul
            </div>
            <div class="col-xs-6">
              <?php echo $b['judul']; ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4 ">
              Kota
            </div>
            <div class="col-xs-6">
              <?php echo $b['kota']; ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4  ">
              Jkel
            </div>
            <div class="col-xs-6">
              <?php echo $b['jkel']; ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4  ">
            Umur
            </div>
            <div class="col-xs-6">
              <?php echo $b['umur']; ?>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4  ">
              Ciri-ciri
            </div>
            <div class="col-xs-6">
              <div class="break">
              <?php echo $b['ciri-ciri']; ?>
            </div>
            </div>
          </div>
          <div class="row">

            <div class="col-xs-2 col-xs-offset-4  ">
              Deskripsi
            </div>
            <div class="col-xs-6">
              <div class="break">
              <?php echo $b['deskripsi']; ?>
            </div>
            </div>
          </div>

          <div class="row">

            <div class="col-xs-2 col-xs-offset-4  ">
              Kontak
            </div>
            <div class="col-xs-6">
              <?php echo $b['hubungi']; ?>
            </div>
          </div>
        </div>

        <?php } ?>
          <br>






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
    (function($) {
      "use strict";
      var $container = $('.portfolio'),
        $items = $container.find('.portfolio-item'),
        portfolioLayout = 'fitRows';

      if ($container.hasClass('portfolio-centered')) {
        portfolioLayout = 'masonry';
      }

      $container.isotope({
        filter: '*',
        animationEngine: 'best-available',
        layoutMode: portfolioLayout,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        },
        masonry: {}
      }, refreshWaypoints());

      function refreshWaypoints() {
        setTimeout(function() {}, 1000);
      }

      $('nav.portfolio-filter ul a').on('click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({
          filter: selector
        }, refreshWaypoints());
        $('nav.portfolio-filter ul a').removeClass('active');
        $(this).addClass('active');
        return false;
      });

      function getColumnNumber() {
        var winWidth = $(window).width(),
          columnNumber = 1;

        if (winWidth > 1200) {
          columnNumber = 5;
        } else if (winWidth > 950) {
          columnNumber = 4;
        } else if (winWidth > 600) {
          columnNumber = 3;
        } else if (winWidth > 400) {
          columnNumber = 2;
        } else if (winWidth > 250) {
          columnNumber = 1;
        }
        return columnNumber;
      }

      function setColumns() {
        var winWidth = $(window).width(),
          columnNumber = getColumnNumber(),
          itemWidth = Math.floor(winWidth / columnNumber);

        $container.find('.portfolio-item').each(function() {
          $(this).css({
            width: itemWidth + 'px'
          });
        });
      }

      function setPortfolio() {
        setColumns();
        $container.isotope('reLayout');
      }

      $container.imagesLoaded(function() {
        setPortfolio();
      });

      $(window).on('resize', function() {
        setPortfolio();
      });
    })(jQuery);
  </script>
</body>

</html>

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

      <h1 class="mb">Data Pencarian</h1>
     <div class="camera">

     </div>
     <button id="take_snapshots" class="btn btn-success btn-sm">Take Snapshots</button>
     <div class="col-md-6">
            <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th>Image</th><th>Image Name</th>
                </tr>
            </thead>
            <tbody id="imagelist">

            </tbody>
        </table>
        </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">

          <div class="form-group">
            <label>Search By Name</label>
            <form class="" method="post" <?php echo form_open_multipart('Crud/search');?>
            <input type="text" name="search" value="" class="form-control">

          </div>
        </div>
        <div class="col-md-1"><br>
          <button type="submit" class="btn btn-theme" name="button">search</button>
        </div>
      </form>
      </div>
      <hr><br>
      <?php foreach ($beritaku as $ber) {
      ?>
      <div class="padding-bottom">
      <div class="list">

        <div class="he-wrap tpl6">
          <?php $foto = $ber['foto'] ;?>
          <?php $foto2 = base_url("assets/img/$foto"); ?>
          <?php $berita = $ber['no_berita']; ?>

        <img height="600px"  src="<?php echo $foto2; ?>"  alt="">
          <div class="he-view">
            <div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">CheckUP</h3>
                            <a href="<?php echo site_url("welcome/detailprofil?no_berita=$berita")?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-eye"></i></a>

                      </div><!-- he bg -->
          </div><!-- he view -->
        </div><!-- he wrap -->
        <h4>                <?php echo $ber['judul'];     ?>         </h4>
        <h5 class="ctitle"> <?php echo $ber['nama'];      ?>        </h5>
      <center>  <p>                 <?php echo $ber['deskripsi']; ?>  </p></center>


      </div><! --/col-lg-3 -->
    </div>

<?php }; ?>


<?php
if ($berita1!=1) {


 foreach ($berita1 as $bero) {

if($bero['kota'] == $kota2){
  continue;
}
else{

?>
<div class="padding-bottom">
<div class="list">

  <div class="he-wrap tpl6">
    <?php $foto = $bero['foto'] ;?>
    <?php $foto2 = base_url("assets/img/$foto"); ?>
    <?php $berita = $bero['no_berita']; ?>

  <img   src="<?php echo $foto2; ?>"  alt="<?php echo $foto2; ?>">
    <div class="he-view">
      <div class="bg a0" data-animate="fadeIn">
                      <h3 class="a1" data-animate="fadeInDown">CheckUP</h3>
                      <a href="<?php echo site_url("welcome/detailprofil?no_berita=$berita")?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-eye"></i></a>

                </div><!-- he bg -->
    </div><!-- he view -->
  </div><!-- he wrap -->
  <h4>                <?php echo $bero['judul'];     ?>         </h4>
  <h5 class="ctitle"> <?php echo $bero['nama'];      ?>        </h5>
<center>  <p class="overflow">                 <?php echo $bero['deskripsi']; ?>  </p></center>


</div><! --/col-lg-3 -->
</div>

<?php }};
}
?>
   </div><! --/container -->




<!-- FOOTER -->



  <div id="footerwrap">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4>Tentang Kami</h4>
          <div class="hline-w"></div>
          <p class="overflow">Aplikasi dicari di buat oleh mahasiswa mercubuana, dimana bertujuan
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



  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/camp/jpeg_camera/jpeg_camera_with_dependencies.min.js')?>"></script>
  <script>
      var options = {
        shutter_ogg_url: "jpeg_camera/shutter.ogg",
        shutter_mp3_url: "jpeg_camera/shutter.mp3",
        swf_url: "jpeg_camera/jpeg_camera.swf",
      };
      var camera = new JpegCamera("#camera", options);

    $('#take_snapshots').click(function(){
      var snapshot = camera.capture();
      snapshot.show();

      snapshot.upload({api_url: "action.php"}).done(function(response) {
  $('#imagelist').html("<tr><td><img src='"+response+"' width='200px' height='200px'></td><td>"+response+"</td></tr>");
  }).fail(function(response) {
    alert("Upload failed with status " + response);
  });
  })

  function done(){
      $('#snapshots').html("uploaded");
  }
  </script>
</body>

</html>

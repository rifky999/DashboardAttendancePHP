<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Liga Futsall</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>
    <?php
    include 'proses/koneksi.php';
    $cek = 0;
    $stmt = $conn->query("SELECT * FROM cek");
    while ($row = $stmt->fetch()) {
      $cek = $row['cec'];
    }
    if ($cek!=1) {
      $cek;
    }
    else{
      echo "<script type='text/javascript'>alert('Jadwal Telah Terinput');</script>";
      echo "<meta http-equiv='refresh' content='0;URL=services.php'>";

    } ?>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="pendaftaran.php">Liga Futsall Kampus</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="pendaftaran.php">Pendaftaran</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services2.php">Input Jadwal Pertandingan</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="services.php">Bagan Pertandingan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listpemain.php">List Team</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
<div class="container">
<form method="post" action="proses/inputjadwal.php">
    <hr>
    <h2 class="mt-4 mb-3">
    <small>Penyisihan</small>
    </h2>
    <div class="row">


        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Pertandigan Ke-1 & 2</center></h5>
            <div class="card-body">
              <div class="form-group">
              <div class="box">
                <label >Tanggal</label>
                <input type="text" name="P-1-2" required="required" class="form-control"    required="required" placeholder="Input Tanggal">
              </div>
              </div>
              <div class="form-group">
              <div class="box">
                <label >Jam</label>
                <input type="text" name="P-J1-1-2" class="form-control"   required="required" placeholder="Jam Pertama">
                <input type="text" name="P-J2-1-2" class="form-control"  required="required" placeholder="Jam kedua">
              </div>
              </div>
            </div>
            <hr>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Pertandigan Ke-3 & 4</center></h5>
            <div class="card-body">
              <div class="form-group">
              <div class="box">
                <label >Tanggal</label>
                <input type="text" name="P-3-4" class="form-control"   required="required" placeholder="Input Tanggal">
              </div>
              </div>
              <div class="form-group">
              <div class="box">
                <label >Jam</label>
                <input type="text" name="P-J1-3-4" class="form-control"   required="required" placeholder="Jam Pertama">
                <input type="text" name="P-J2-3-4" class="form-control"  required="required" placeholder="Jam kedua">
              </div>
              </div>
            </div>
            <hr>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Pertandigan Ke-5 & 6</center></h5>
            <div class="card-body">
              <div class="form-group">
              <div class="box">
                <label >Tanggal</label>
                <input type="text" name="P-5-6" class="form-control"   required="required" placeholder="Input Tanggal">
              </div>
              </div>
              <div class="form-group">
              <div class="box">
                <label >Jam</label>
                <input type="text" name="P-J1-5-6" class="form-control"   required="required" placeholder="Jam Pertama">
                <input type="text" name="P-J2-5-6" class="form-control"  required="required" placeholder="Jam kedua">
              </div>
              </div>
            </div>
            <hr>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="card h-100">
            <h5 class="card-header"><center>Pertandigan Ke-7 & 8</center></h5>
            <div class="card-body">
              <div class="form-group">
              <div class="box">
                <label >Tanggal</label>
                <input type="text" name="P-7-8" class="form-control"   required="required" placeholder="Input Tanggal">
              </div>
              </div>
              <div class="form-group">
              <div class="box">
                <label >Jam</label>
                <input type="text" name="P-J1-7-8" class="form-control"   required="required" placeholder="Jam Pertama">
                <input type="text" name="P-J2-7-8" class="form-control"  required="required" placeholder="Jam kedua">
              </div>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    <div class="row">
            <div class="col-lg-3 mb-4">
              <div class="card h-100">
                <h5 class="card-header"><center>Pertandigan Ke-9 & 10</center></h5>
                <div class="card-body">
                  <div class="form-group">
                  <div class="box">
                    <label >Tanggal</label>
                    <input type="text" name="P-9-10" class="form-control"   required="required" placeholder="Input Tanggal">
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="box">
                    <label >Jam</label>
                    <input type="text" name="P-J1-9-10" class="form-control"   required="required" placeholder="Jam Pertama">
                    <input type="text" name="P-J2-9-10"class="form-control"  required="required" placeholder="Jam kedua">
                  </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>

            <div class="col-lg-3 mb-4">
              <div class="card h-100">
                <h5 class="card-header"><center>Pertandigan Ke-11 & 12</center></h5>
                <div class="card-body">
                  <div class="form-group">
                  <div class="box">
                    <label >Tanggal</label>
                    <input type="text" name="P-11-12" class="form-control"   required="required" placeholder="Input Tanggal">
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="box">
                    <label >Jam</label>
                    <input type="text" name="P-J1-11-12" class="form-control"   required="required" placeholder="Jam Pertama">
                    <input type="text" name="P-J2-11-12" class="form-control"  required="required" placeholder="Jam kedua">
                  </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>

            <div class="col-lg-3 mb-4">
              <div class="card h-100">
                <h5 class="card-header"><center>Pertandigan Ke-13 & 14</center></h5>
                <div class="card-body">
                  <div class="form-group">
                  <div class="box">
                    <label >Tanggal</label>
                    <input type="text" name="P-13-14" class="form-control"   required="required" placeholder="Input Tanggal">
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="box">
                    <label >Jam</label>
                    <input type="text" name="P-J1-13-14" class="form-control"   required="required" placeholder="Jam Pertama">
                    <input type="text" name="P-J2-13-14" class="form-control"  required="required" placeholder="Jam kedua">
                  </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>

            <div class="col-lg-3 mb-4">
              <div class="card h-100">
                <h5 class="card-header"><center>Pertandigan Ke-15 & 16</center></h5>
                <div class="card-body">
                  <div class="form-group">
                  <div class="box">
                    <label >Tanggal</label>
                    <input type="text" name="P-15-16" class="form-control"   required="required" placeholder="Input Tanggal">
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="box">
                    <label >Jam</label>
                    <input type="text" name="P-J1-15-16" class="form-control"   required="required" placeholder="Jam Pertama">
                    <input type="text" name="P-J2-15-16" class="form-control"  required="required" placeholder="Jam kedua">
                  </div>
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

    <hr>
    <h2 class="mt-4 mb-3">
    <small>Perdelapan Final</small>
    </h2>
    <div class="row">


                <div class="col-lg-3 mb-4">
                  <div class="card h-100">
                    <h5 class="card-header"><center>Pertandigan Ke-1 & 2</center></h5>
                    <div class="card-body">
                      <div class="form-group">
                      <div class="box">
                        <label >Tanggal</label>
                        <input type="text" name="P8-1-2" class="form-control"   required="required" placeholder="Input Tanggal">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="box">
                        <label >Jam</label>
                        <input type="text" name="P8-J1-1-2" class="form-control"   required="required" placeholder="Jam Pertama">
                        <input type="text" name="P8-J2-1-2" class="form-control"  required="required" placeholder="Jam kedua">
                      </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>

                <div class="col-lg-3 mb-4">
                  <div class="card h-100">
                    <h5 class="card-header"><center>Pertandigan Ke-3 & 4</center></h5>
                    <div class="card-body">
                      <div class="form-group">
                      <div class="box">
                        <label >Tanggal</label>
                        <input type="text" name="P8-3-4" class="form-control"   required="required" placeholder="Input Tanggal">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="box">
                        <label >Jam</label>
                        <input type="text" name="P8-J1-3-4" class="form-control"   required="required" placeholder="Jam Pertama">
                        <input type="text" name="P8-J2-3-4" class="form-control"  required="required" placeholder="Jam kedua">
                      </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>

                <div class="col-lg-3 mb-4">
                  <div class="card h-100">
                    <h5 class="card-header"><center>Pertandigan Ke-5 & 6</center></h5>
                    <div class="card-body">
                      <div class="form-group">
                      <div class="box">
                        <label >Tanggal</label>
                        <input type="text" name="P8-5-6" class="form-control"   required="required" placeholder="Input Tanggal">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="box">
                        <label >Jam</label>
                        <input type="text" name="P8-J1-5-6" class="form-control"   required="required" placeholder="Jam Pertama">
                        <input type="text" name="P8-J2-5-6" class="form-control"  required="required" placeholder="Jam kedua">
                      </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>

                <div class="col-lg-3 mb-4">
                  <div class="card h-100">
                    <h5 class="card-header"><center>Pertandigan Ke-7 & 8</center></h5>
                    <div class="card-body">
                      <div class="form-group">
                      <div class="box">
                        <label >Tanggal</label>
                        <input type="text" name="P8-7-8" class="form-control"   required="required" placeholder="Input Tanggal">
                      </div>
                      </div>
                      <div class="form-group">
                      <div class="box">
                        <label >Jam</label>
                        <input type="text" name="P8-J1-7-8" class="form-control"   required="required" placeholder="Jam Pertama">
                        <input type="text" name="P8-J2-7-8" class="form-control"  required="required" placeholder="Jam kedua">
                      </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div>

    <h2 class="mt-4 mb-3">
    <small>Perempat Final</small>
    </h2>
    <div class="row">
                          <div class="col-lg-3 mb-4">
                            <div class="card h-100">
                              <h5 class="card-header"><center>Pertandigan Ke-1 & 2</center></h5>
                              <div class="card-body">
                                <div class="form-group">
                                <div class="box">
                                  <label >Tanggal</label>
                                  <input type="text" name="P4-1-2" class="form-control"   required="required" placeholder="Input Tanggal">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="box">
                                  <label >Jam</label>
                                  <input type="text" name="P4-J1-1-2" class="form-control"   required="required" placeholder="Jam Pertama">
                                  <input type="text" name="P4-J2-1-2" class="form-control"  required="required" placeholder="Jam kedua">
                                </div>
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>

                          <div class="col-lg-3 mb-4">
                            <div class="card h-100">
                              <h5 class="card-header"><center>Pertandigan Ke-3 & 4</center></h5>
                              <div class="card-body">
                                <div class="form-group">
                                <div class="box">
                                  <label >Tanggal</label>
                                  <input type="text" name="P4-3-4" class="form-control"   required="required" placeholder="Input Tanggal">
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="box">
                                  <label >Jam</label>
                                  <input type="text" name="P4-J1-3-4" class="form-control"   required="required" placeholder="Jam Pertama">
                                  <input type="text" name="P4-J2-3-4" class="form-control"  required="required" placeholder="Jam kedua">
                                </div>
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>

                    </div>
                      <h2 class="mt-4 mb-3">
                      <small>Semi Final</small>
                      </h2>
                      <div class="row">
                                            <div class="col-lg-3 mb-4">
                                              <div class="card h-100">
                                                <h5 class="card-header"><center>Pertandigan Ke-1 & 2</center></h5>
                                                <div class="card-body">
                                                  <div class="form-group">
                                                  <div class="box">
                                                    <label >Tanggal</label>
                                                    <input type="text" name="SM-1-2" class="form-control"   required="required" placeholder="Input Tanggal">
                                                  </div>
                                                  </div>
                                                  <div class="form-group">
                                                  <div class="box">
                                                    <label >Jam</label>
                                                    <input type="text" name="SM-J1-1-2" class="form-control"   required="required" placeholder="Jam Pertama">
                                                    <input type="text" name="SM-J2-1-2" class="form-control"  required="required" placeholder="Jam kedua">
                                                  </div>
                                                  </div>
                                                </div>
                                                <hr>
                                              </div>
                                            </div>



                                    </div>
                                    <h2 class="mt-4 mb-3">
                                    <small>Final</small>
                                    </h2>
                                    <div class="row">
                                                          <div class="col-lg-3 mb-4">
                                                            <div class="card h-100">
                                                              <h5 class="card-header"><center>Pertandigan Ke-1 </center></h5>
                                                              <center>Perebutan Juara 1 & 2 </center>
                                                              <div class="card-body">
                                                                <div class="form-group">
                                                                <div class="box">
                                                                  <label >Tanggal</label>
                                                                  <input type="text" name="F-1" class="form-control"   required="required" placeholder="Input Tanggal">
                                                                </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <div class="box">
                                                                  <label >Jam</label>
                                                                  <input type="text" name="F1-J" class="form-control"   required="required" placeholder="Jam">
                                                                </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-3 mb-4">
                                                            <div class="card h-100">
                                                              <h5 class="card-header"><center>Pertandigan Ke-2 </center></h5>
                                                              <center>Perebutan Juara 3 </center>
                                                              <div class="card-body">
                                                                <div class="form-group">
                                                                <div class="box">
                                                                  <label >Tanggal</label>
                                                                  <input type="text" name="F-2" class="form-control"   required="required" placeholder="Input Tanggal">
                                                                </div>
                                                                </div>
                                                                <div class="form-group">
                                                                <div class="box">
                                                                  <label >Jam</label>
                                                                  <input type="text" name="F2-J" class="form-control"   required="required" placeholder="Jam">
                                                                </div>
                                                                </div>
                                                              </div>
                                                              <hr>
                                                            </div>
                                                          </div>



                                                  </div>

          <button class="buttonDaf" type="submit" class="btn btn-primary">Daftar</button>


</form>
</div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Liga Futasall Kampus</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

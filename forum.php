<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>www.kopioncakofficialweb.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="assets/font/css/all.css">
    <script src="assets/font/all.js"></script>
  </head>
  <body class="goto-here">
  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="picture/logooncakkopi.png" width="280px" alt="logooncak"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Our Menu Pricing</a></li>
            <li class="nav-item"><a href="gallery.php" class="nav-link">Our Gallery</a></li>
            <li class="nav-item active"><a href="forum.php" class="nav-link">Coffee Lover Forum</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
            

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('picture/kopi53.jpeg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Forum</span></p>
            <h1 class="mb-0 bread">Forum Diskusi Pecinta Kopi Nusantara</h1>
          </div>
        </div>
      </div>
    </div>
    
    <br><br>
    
  <div class="container">
        <style type="text/css">
            .scroll
              {
                width:500px;
                height:200px;
                margin: auto;
                padding: auto;
                border: 1px black dotted;
                overflow-y:auto;
                overflow-x:scroll; 
              }
          </style>
            <div class="scroll"> 
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php $data = mysqli_query($koneksi,"SELECT * FROM forum ORDER BY id_forum DESC");
                    while($d = mysqli_fetch_array($data)){?>
                    <div class="col-md-4">
                      <img src="picture/customer.png" width="50px" class="img img-rounded img-fluid"/>
                      <p class="text-secondary small">Costumer</p>
                    </div>
                    <div class="col-md-10">
                      <p>
                        <a class="float-left" href="mailto:<?php echo $d['email']; ?>"><strong><?php echo $d['email']; ?></strong></a>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                      </p>
                      <div class="clearfix"></div>
                        <p align="justify"><?php echo $d['isi_forum']; ?></p>
                      </div>
                      <!-- balasan kopi oncak -->
                      <!-- <div class="card card-inner"> -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="picture/cs.png" width="70px" class="img img-rounded img-fluid"/>
                                    <p class="text-secondary small">Kopi Oncak</p>
                                </div>
                                <div class="col-md-10">
                                    <p><a href="mailto:kopioncakofficial@gmail.com"><strong>Kopi Oncak</strong></a></p>
                                    <p align="justify"><?php echo $d['isi_balasan']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  <div class="container">
    <div class="row">
        <div class="card-body">
          <div class="panel-heading">
            <h3 align="center"><b>Ulasan Pelanggan Kopi Oncak <i class="fa fa-coffee"></i></b></h3>
          </div>
          <div class="panel-body">
            <form method="post" action="proses.php">
              <div class="form-group">
                <h5 class="panel.title" align="center"><b><u>Kritik & Saran Pelayanan Kopi Oncak</u></b></h5>
                <label><h5>Email Anda</h5></label>
                <input type="email" class="form-control" name="email" value="" autocomplete="off" placeholder="masukkan alamat email anda" required>
              </div>
              <div class="form-group">
                <label><h5>Masukkan Kritik dan Saran Anda</h5></label>
                <textarea class="form-control" name="isi_forum" placeholder="Masukkan Kritik dan Saran Anda Disini" rows="5px" required></textarea>
              </div>
              <button class="btn btn-success btn-lg" name="send">Send <i class="fa fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
    </div>
  </div>

    
    <section class="ftco-section img" style="background-image: url(picture/kopi41.jpeg);">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <span class="subheading">Kopi Oncak</span>
            <font color="white" size="5" face="Cooper black"><p align="center">"Jagonya Kopi"</p></font>
            <font color="white" face="Comic Sans MS"><p align="center">100% Kopi Robusta Sumatera menggunakan biji kopi dengan kualitas terbaik</p></font>
          </div>
        </div>      
      </div>
    </section>

    
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h1><font face="Cooper black">Get In Touch</font></h1>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://api.whatsapp.com/send?phone=6287881836314&text=*Hallo*%20*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20"><span class="icon-whatsapp"></span></a>
                </li>
                <li class="ftco-animate"><a href="https://www.facebook.com/pages/category/Coffee-Shop/%F0%9D%91%B2%F0%9D%92%90%F0%9D%92%91%F0%9D%92%8A-%F0%9D%91%B6%F0%9D%92%8F%F0%9D%92%84%F0%9D%92%82%F0%9D%92%8C-%F0%9D%91%B6%F0%9D%92%87%F0%9D%92%87%F0%9D%92%8A%F0%9D%92%84%F0%9D%92%8A%F0%9D%92%82%F0%9D%92%8D-109591040763433/"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate"><a href="https://www.instagram.com/kopioncakofficial/"><span class="icon-instagram"></span></a>
                </li>
                <li class="ftco-animate"><a href="mailto:kopioncakofficial@gmail.com"><span class="icon-envelope"></span></a>
                </li>
                <li class="ftco-animate"><a href="https://www.google.com/maps/place/6%C2%B024'08.4%22S+106%C2%B052'02.2%22E/@-6.4023337,106.8651004,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.4023337!4d106.8672891?hl=id"><span class="icon icon-map-marker"><span class="icon-map-marker"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="https://www.google.com/maps/place/6%C2%B024'08.4%22S+106%C2%B052'02.2%22E/@-6.4023337,106.8651004,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.4023337!4d106.8672891?hl=id"><span class="icon icon-map-marker"></span><span class="text">Jl. Nangka, Perum Cimanggis Permai Komplek TNI AD 201, Jl. Cenderawasih 4 Blok B1 N0.15 RT.005/RW.014, Suka Maju Baru, Tapos, Depok Jawa Barat</span></a></li>
                  <li><a href="https://api.whatsapp.com/send?phone=6287881836314&text=*Hallo*%20*KOPI*%20*ONCAK*%20*OFFICIAL*%0A%0A*Saya*%20*Mau*%20*Order*%20*Kopinya*%0A%0A*Nama*%20*:*%0A%0A*Alamat*%20*Lengkap*%20*:*%0A%0A*Kode*%20*Pos*%20*:*%0A%0A*Jumlah*%20*Gram*%20*:*%0A%0A*No*%20*Hp*%20*/*%20*Whatsapp*%20*:*%20"><span class="icon icon-whatsapp"></span><span class="text">0878 8183 6341 (Filda Angellia, SKOM.,MMSI)</span></a></li>
                    <li><a href="https://www.facebook.com/pages/category/Coffee-Shop/%F0%9D%91%B2%F0%9D%92%90%F0%9D%92%91%F0%9D%92%8A-%F0%9D%91%B6%F0%9D%92%8F%F0%9D%92%84%F0%9D%92%82%F0%9D%92%8C-%F0%9D%91%B6%F0%9D%92%87%F0%9D%92%87%F0%9D%92%8A%F0%9D%92%84%F0%9D%92%8A%F0%9D%92%82%F0%9D%92%8D-109591040763433/"><span class="icon icon-facebook"></span><span class="text">kopioncakofficial</span></a></li>
                    <li><a href="https://www.instagram.com/kopioncakofficial/"><span class="icon icon-instagram"></span><span class="text">kopioncakofficial</span></a></li>
                  <li><a href="mailto:kopioncakofficial@gmail.com"><span class="icon icon-envelope"></span><span class="text">kopioncakofficial@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <font face="Cooper black">Copyright Kopi Oncak &copy;<script>document.write(new Date().getFullYear());</script> | Jagonya Kopi <i class="icon-coffee"></i></font>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
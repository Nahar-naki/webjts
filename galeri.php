<?php
include "admin/koneksi.php";

$limit1 = 10;

// menentukan halaman saat ini
$page1 = (isset($_GET['page1'])) ? $_GET['page1'] : 1;

// menghitung jumlah data yang ada dalam database
$query1 = mysqli_query($conect, "SELECT COUNT(*) FROM tb_galeri");
$total_data1 = mysqli_fetch_array($query1)[0];

// menghitung jumlah halaman yang diperlukan
$total_page1 = ceil($total_data1 / $limit1);

// menentukan batas awal data yang akan ditampilkan pada halaman ini
$start1 = ($limit1 * $page1) - $limit1;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>JKT48 Terbaik Sedunia</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Vrinda Maru Kansal" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/favicon.png" />

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <!-- SLIDER REVOLUTION CSS SETTINGS -->
    <link href="plugin/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen" />
  </head>

  <body style="overflow: hidden">
    <!-- Preloader -->
    <section id="preloader">
      <div class="loader" id="loader">
        <div class="loader-img"></div>
      </div>
    </section>
    <!-- End Preloader -->

    <!-- Site Wraper -->
    <div class="wrapper">
      <!-- Header -->
      <header id="header" class="header shadow">
        <div class="header-inner">
          <!-- Logo -->
          <div class="logo">
            <a href="index.html">
              <img class="logo-light" src="img/gth-logo-white.png" alt="Global Talent House" />
              <img class="logo-dark" src="img/gth-logo-black.png" alt="Global Talent House" />
            </a>
          </div>
          <!-- End Logo -->

          <!-- Mobile Navbar Icon -->
          <div class="nav-mobile nav-bar-icon">
            <span></span>
          </div>
          <!-- End Mobile Navbar Icon -->

          <!-- Navbar Navigation -->
          <div class="nav-menu">
            <ul class="nav-menu-inner">
              <li>
                <!-- <a class="" href="home.html">Home</a> -->
              </li>
              <li>
                <a class="" href="about-us.php">About Us</a>
              </li>
              
                  <li>
                    <a class="" href="artist-directory.php">Artis</a>
                  </li>
              <li>
                <a class="btn btn-md btn-black join-btn" href="galeri.php">Gallery JTS</a>
              </li>
          </div>
          <!-- End Navbar Navigation -->
        </div>
      </header>
      <!-- End Header -->

      <!-- CONTENT --------------------------------------------------------------------------------->
      <!-- Intro Section -->
      <section class="inner-intro dark-bg overlay-dark">
        <div class="container">
          <div class="row title">
            <h2 class="h2">Gallery JKT48 & JTS</h2>
            <p>Menjadi Komunitas Terbaik Sedunia</p>
            <div class="spacer-15"></div>
            <div class="page-breadcrumb"><a href="index.html">Home</a>/<span>Gallery</span></div>
          </div>
        </div>
      </section>
      <div class="clearfix"></div>
      <!-- End Intro Section -->
      <!-- Options Section -->
      <section class="ptb-60 ptb-sm-30">
        <div class="container">
          <div class="row container-masonry nf-col-3">
            <?php
          $query = mysqli_query($conect,"SELECT * FROM tb_member JOIN tb_galeri on tb_member.id_member = tb_galeri.id_member ORDER BY id_galeri DESC LIMIT $start1, $limit1 ");
    while($row = mysqli_fetch_array($query)){
      ?>
            <div class="nf-item branding coffee spacing">
              <div class="item-box">
                <a class="cbox-gallary1" href="file" title="Consequat massa quis">
                  <img alt="1" src="admin/img/<?=$row['gambar'];?>" class="item-container" />
                  <div class="item-mask">
                    <div class="item-caption">
                      <h5 class="white"><?=$row['nama'];?></h5>
                      <p class="white">Branding, Design</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <?php  }?>

          </div>
          <!-- Pagination Nav -->
          <div class="page-breadcrumb pagination-nav mt-60 mt-xs-30">
  <ul>
    <li>
      <?php if ($page1 > 1) : ?>
        <a href="?page1=<?= $page1 - 1 ?>"><i class="fa fa-angle-left"></i></a>
      <?php endif; ?>
    </li>
    <?php for ($i = 1; $i <= $total_page1; $i++) : ?>
      <li>
        <a href="?page1=<?= $i ?>" <?= ($i == $page1) ? "class='active'" : "" ?>><?= $i ?></a>
      </li>
    <?php endfor; ?>
    <li>
      <?php if ($page1 < $total_page1) : ?>
        <a href="?page1=<?= $page1 + 1 ?>"><i class="fa fa-angle-right"></i></a>
      <?php endif; ?>
    </li>
  </ul>
</div>
          <!-- End Pagination Nav -->
        </div>
      </section>
      <!-- End Work Detail Section -->
      <!-- End CONTENT ------------------------------------------------------------------------------>

      <!-- FOOTER -->
      <footer class="footer pt-60">
        <div class="container">
          <!--Footer Info -->
          <div class="row footer-info mb-30">
            <div class="col-md-6 col-sm-12 col-xs-12 mb-sm-30 text-sm-left">
              <p class="mb-xs-0">
               Menjadikan komunitas ini Terbaik sedunia
              </p>
              <ul class="link-small">
                <li>
                  <a href="mailto:naharinaki@gmail.com"><i class="fa fa-envelope-o left"></i>naharinaki@gmail.com</a>
                </li>
                <li>
                  <a><i class="fa fa-phone left"></i>+62 81311870819</a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 text-right text-sm-left">
             
                <li>Sosial Media JKT48</li>
               
              <div class="spacer-30"></div>
              <ul class="social">
                <li>
                  <a target="_blank" href="https://twitter.com/officialJKT48?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a target="_blank" href="https://www.instagram.com/jkt48/"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a target="_blank" href="https://id-id.facebook.com/official.JKT48"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a target="_blank" href="https://www.youtube.com/c/JKT48TV/channels"><i class="fa fa-youtube"></i></a>
                </li>
                
              </ul>
            </div>
          </div>
          <!-- End Footer Info -->
        </div>
  
        <hr />
  
        <!-- Copyright Bar -->
        <div class="copyright ptb-15">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 text-left text-sm-left">
                © 2022 <a href="index.html"><b>JTS</b></a
                >. All Rights Reserved.
              </div>
              <div class="col-sm-6 text-right text-sm-left">
                Website by <a target="_blank" href="http://localhost/jts/"><b>M Abdillah Nahar</b></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Copyright Bar -->
      </footer>
      <!-- END FOOTER -->
    </div>
  </div>
  <!--end fullpage-->
  <!-- Scroll Top -->
  <a class="scroll-top">
    <i class="fa fa-angle-double-up"></i>
  </a>
  <!-- End Scroll Top -->
</div>
<!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
  </body>
</html>

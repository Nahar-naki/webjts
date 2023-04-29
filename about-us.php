<?php
include_once "admin/koneksi.php";


?>

<style>
.three-items {
  display: flex;
  flex-wrap: wrap;
}

.three-items .team-item {
  width: 33.33%;
  padding: 10px;
}

@media (max-width: 767px) {
  .three-items .team-item {
    width: 50%;
  }
}
</style>

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
            <h2 class="h2">About Us</h2>
            <h6>JTS & JKT48</h6>
            <div class="spacer-15"></div>
            <div class="page-breadcrumb"><a href="http://localhost/jts/">Home</a>/<span>About</span></div>
          </div>
        </div>
      </section>
      <!-- End Intro Section -->

      <!-- About Section -->
      <section id="about" class="wow fadeIn ptb-80 ptb-sm-30">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <h3 class="h4">Welcome to JKT48 Fans Comummunity</h3>
              <div class="spacer-15"></div>
              <p>
                Bergabunglah menjadi anggota JKT48 Official Fans Club (OFC)! Pada program JKT48 OFC Renewal 2021 ini, banyak benefit yang bisa kamu dapatkan! 
                Kamu bisa menghadiri event khusus OFC, melakukan pemesanan tiket lebih awal dari non-OFC, 
                dan banyak benefit lainnya. Silahkan scroll ke bawah untuk info lebih lanjut!, etc..
              </p>

              <p>
                Hal ini juga yang dialami salah satu grup idola remaja saat ini, JKT48. Jika menyebut nama JKT48, 
                tentu tak lepas dari para penggemarnya yang dikenal dengan nama Wota
              </p>

              <p>
                Wota adalah istilah yang muncul di Jepang untuk menyebutkan para penggemar grup idol. Istilah ini juga digunakan oleh penggemar di Indonesia sejak kemunculan grup idol JKT48. 
                Istilah Wota sering diberikan untuk penggemar yang rela membeli berbagai merchandise dan datang ke semua konser JKT48.
              </p>
            </div>
          </div>
          <div class="row mt-80">
            <!-- Welcome Content -->
            <div class="col-md-6">
              <h4>JKT48TERBAIK SEDUNIA</h4>
              <div class="spacer-15"></div>
              <p>
               JKT48 TERBAIK SEDUNIA adalah komutitas yang pertama kali dibuat di facebook. JTS atau JKT48 Terbaik Sedunia yang ingin menjadi wadah untuk 
               tempat Fans JKT48 untuk menyalurkan meme yang khususnya tetang member jkt48 atau isu yang sedang hanggat di dunia sosial media.
              </p>

              <p>Menjadikan fandom ini lebih menyenangkan</p>

              <p>
               Selain menjadi tempat meme. JTS juga megadakan Free Talk di Discord yang bertujuan untuk membahas hal-hal seputar JKT48 dan adapun membahas hal-hal yang sedang ramai
               di sosial media.
              </p>
            </div>
            <!-- End Welcome Content -->

            <!-- Skills -->
            <div class="col-md-6">
              <div class="spacer-45"></div>
              <p>Di JTS kami ingin membuat semuah hal yang menyenangka dengan fandom ini, Isu yang dibawa dengan santai dan menyenangkan. 
               </p>

             
            </div>
            <!-- End Skills -->
          </div>
        </div>
      </section>

      <!-- Vision -->
      <section id="testimonial" class="overlay-dark80 dark-bg ptb-80 ptb-sm-80" style="background-image: url('img/full/25.jpg')" data-stellar-background-ratio="0.4">
        <div class="container">
          <div class="owl-carousel testimonial-carousel nf-carousel-theme white">
<?php


          $query = mysqli_query($conect,"SELECT * FROM tb_member JOIN tb_about on tb_member.id_member = tb_about.id_member ORDER BY id_about DESC ");
    while($row = mysqli_fetch_array($query)){
?>
            <div class="item">
              <div class="testimonial text-center dark-color">
                <h4 class="quote-author">Quotes</h4>
                <p class="lead"><?=$row['quotes']?></p>
                  <p class="lead"><?=$row['nama']?></p>
              </div>
            </div>
            <?php }?>

            <!-- <div class="item">
              <div class="testimonial text-center dark-color">
                <h4 class="quote-author">Quotes</h4>
                <p class="lead">“Meski ada hal sedih ataupun hal yang memberatkan. Tak apa asal yang bahagia lebih banyak.”</p>
                <p class="lead">Yuuhi Wo Miteiruka</div>
            </div>
            <div class="item">
              <div class="testimonial text-center dark-color">
                <h4 class="quote-author">Quotes</h4>
                <p class="lead">“Setiap terluka jadi makin dewasa. Air mata mengalir dada trasa sakit.”</p>
                <p class="lead">First Rabbit</p>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- End Vision -->

      <!-- Team -->
      <section class="ptb-80 ptb-sm-80">
        <div class="container text-center">
          <h3>Member Minggu Ini!</h3>
          <div class="spacer-60"></div>
          <!--Team Carousel -->
          <div class="row">
            <div class="owl-carousel team-carousel nf-carousel-theme">
              <?php
            $query = mysqli_query($conect,"SELECT * FROM tb_member JOIN tb_about on tb_member.id_member = tb_about.id_member ORDER BY id_about DESC ");
while ($row = mysqli_fetch_array($query)) {
    ?>
              <div class="item">
                <div class="team-item nf-col-padding">
                  <div class="team-item-img">
                    <img src="admin/img/<?=$row['gambar'];?>" alt="" />
                    <div class="team-item-detail">
                      <div class="team-item-detail-inner light-color">
                        <h5>Quotes</h5>
                        <p><?=$row['quotes']?></p>
                        <ul class="social">
                          <li>
                            <a href="https://twitter.com/A_ChristyJKT48?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/jkt48.christy/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="team-item-info">
                    <h5><?=$row['nama']?></h5>
                    <p class="">Member</p>
                  </div>
                </div>
              </div>
              <?php } ?>
              

              <!-- <div class="item">
                <div class="team-item nf-col-padding">
                  <div class="team-item-img">
                    <img src="img/team/Ashel.jpg" alt="" />
                    <div class="team-item-detail">
                      <div class="team-item-detail-inner light-color">
                        <h5>Quotes</h5>
                        <p>Kita remaja yang sedang dimabuk Adzana
                        </p>
                        <ul class="social">
                         
                          <li>
                            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/jkt48.ashel/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="team-item-info">
                    <h5>Adzana Shaliha</h5>
                    <p class="">Member</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="team-item nf-col-padding">
                  <div class="team-item-img">
                    <img src="img/team/Oniel.jpg" alt="" />
                    <div class="team-item-detail">
                      <div class="team-item-detail-inner light-color">
                        <h5>Quotes</h5>
                        <p>Hidup itu seperti kanvas yang selalu kita warnai dan terus menumpuk mejadi sebuah sejarah</p>
                        <ul class="social">
                         
                          <li>
                            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="https://www.instagram.com/jkt48.ashel/?hl=id" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>
                         
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="team-item-info">
                    <h5>Cornelia Vanisa </h5>
                    <p class="">Member</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="team-item nf-col-padding">
                  <div class="team-item-img">
                    <img src="img/team/cornelia_vanisa.jpg" alt="" />
                    <div class="team-item-detail">
                      <div class="team-item-detail-inner light-color">
                        <h5>John Doe</h5>
                        <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                        <ul class="social">
                          <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                          </li>
                          <li>
                            <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                          </li>
                          <li>
                            <a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                          </li>
                          <li>
                            <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                          </li>
                          <li>
                            <a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="team-item-info">
                    <h5>John Doe</h5>
                    <p class="">Photographer</p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <!--End Team Carousel --->
        </div>
      </section>
      <!-- End Team -->

      <!-- About Section -->

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
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
  </body>
</html>

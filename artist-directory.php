<?php
include_once "admin/koneksi.php";

// menentukan jumlah data per halaman
$limit = 3;

// menentukan halaman saat ini
$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

// menghitung jumlah data yang ada dalam database
$query = mysqli_query($conect, "SELECT COUNT(*) FROM tb_about");
$total_data = mysqli_fetch_array($query)[0];

// menghitung jumlah halaman yang diperlukan
$total_page = ceil($total_data / $limit);

// menentukan batas awal data yang akan ditampilkan pada halaman ini
$start = ($limit * $page) - $limit;
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
                    <h2 class="h2">Anggota JKT48</h2>
					<p>Profile Member JKT48</p>
					<div class="spacer-15"></div>
                    <div class="page-breadcrumb">
                        <a href="index.html">Home</a>/<span>Anggota JKT48</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
		<!-- Sidemenu -->
					<section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
						<a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>
						<h5 class="white">Filters</h5>
						<div class="filter-form">
							 <!-- Filters FORM -->
                        <form class="filters-form" id="filters" role="form">
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-name" type="text" name="form-name" placeholder="Name">
							</div>
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-state" type="text" name="form-state" placeholder="State">
							</div>                                   
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-city" type="text" name="form-city" placeholder="City">
							</div>							
							<div class="form-field-wrapper">
								<input class="input-sm form-full" id="form-tags" type="text" name="form-tags" placeholder="Tags">
							</div>
							<div class="accordion mb-15">
                            <div class="accordion-section">
                                <h6 class="accordion-title white">Category</h6>
                                <div class="accordion-content">
                                    <div class="form-field-wrapper">
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Graphic Designer">Graphic Designer</span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Animators">Animator<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Creative Directors">Creative Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Webdev">Web Developers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Videographers">Videographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Coordinators">Coordinators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="CastingDirectors">Casting Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Actors">Actors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Dancers">Dancers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="ScriptWriter">Script Writer<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Beauticians">Beauticians<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="HairStylist">Hair Stylist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="FashionStylist">Fashion Stylist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Choreographers">Choreographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Curators">Curators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Magicians">Magicians<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Decorators">Decorators<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Sound">Sound<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Promoters">Promoters/ Hostesses<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="VFXArtist">VFX Artist<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Visualizers">Visualizers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="ContentWriters">Content Writers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Photographers">Photographers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Models">Models<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Directors">Directors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Film Editors">Film Editors<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Singers">Singers<span><br>
										<span><input class="input-sm" id="category" type="checkbox" name="form-category" value="Choreographers">Choreographers<span><br>
									</div>
								</div>
                            </div>
							</div>
							
                        <button class="btn btn-md btn-white form-full" type="submit" id="form-submit" name="submit">Filter</button>
                        </form>
                        <!-- END Filters	 FORM -->
						</div>
					</section>
					<!--End Sidemenu -->

        <!-- Options Section -->
        <section class="ptb-60 ptb-sm-30">
			<div class="container text-left">
                <div class="mb-30">
					<h2> Anggota JKT48 </h2>	
					<hr>
				</div>	
        <?php
    $query = mysqli_query($conect,"SELECT * FROM tb_member  ORDER BY id_member DESC LIMIT $start, $limit ");
    while($row = mysqli_fetch_array($query)){
?>
        <?php ?>
        <div class="row mtb-30">
					<div class="item-box col-md-4 col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 mb-sm-30">
						<a href="artist-profile.html"><img alt="adzana_shaliha" src="admin/img/<?= $row['gambar']; ?>" class="item-container"></a>                           
					</div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<a href="artist-profile.html"><h6><?=$row['nama'] ?></h6></a>
           <h6>Tanggal Lahir</h6>
						<p><?= $row['tgl_lahir'] ?></p>
            <h6>Tempat lahir<h6>
						<p><?= $row['alamat'] ?></p>
            <h6>Tentang saya<h6>
						<p><?= $row['tentang_member'] ?>
						</p>								
					</div>
				</div>	
				<hr>

        <?php }?>
				


        <div class="page-breadcrumb pagination-nav mt-60 mt-xs-30">
  <ul>
    <li>
      <?php if ($page > 1) : ?>
        <a href="?page=<?= $page - 1 ?>"><i class="fa fa-angle-left"></i></a>
      <?php endif; ?>
    </li>
    <?php for ($i = 1; $i <= $total_page; $i++) : ?>
      <li>
        <a href="?page=<?= $i ?>" <?= ($i == $page) ? "class='active'" : "" ?>><?= $i ?></a>
      </li>
    <?php endfor; ?>
    <li>
      <?php if ($page < $total_page) : ?>
        <a href="?page=<?= $page + 1 ?>"><i class="fa fa-angle-right"></i></a>
      <?php endif; ?>
    </li>
  </ul>
</div>

				</div>
			</div>
								
        </section>
		
        <!-- End Options Section -->

        <!-- End CONTENT ------------------------------------------------------------------------------>

           <!-- FOOTER -->
          <footer class="footer pt-60">
            <div class="container">
              <!--Footer Info -->
              <div class="row footer-info mb-30">
                <div class="col-md-6 col-sm-12 col-xs-12 mb-sm-30 text-sm-left">
                  <p class="mb-xs-0">
                    Kami ingin menciptakan tempat bagi para perempuan Indonesia untuk mewujudkan impian mereka. Bersama para penggemar, kami ingin membuat satu-satunya “Idola Orisinil Indonesia“. Inilah inspirasi utama kami meluncurkan
                    JKT48.
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
                  <ul class="link">
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms-and-conditions.html">Terms</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                  </ul>
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
                    <li>
                      <a target="_blank" href="https://id.linkedin.com/company/jkt48?original_referer=https%3A%2F%2Fwww.google.co.id%2F"><i class="fa fa-linkedin"></i></a>
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
                    © 2022 <a href="index.html"><b>JKT48</b></a
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

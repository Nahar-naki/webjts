<?php 
session_start();
error_reporting(0);
if (!isset($_SESSION["login"])) {
	header("Location: ../login.php");
	exit;
}
require "koneksi.php";

// menentukan jumlah data per halaman
$limit = 5;

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
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
      shrink-to-fit=no">
    <title>JKT48 Terbaik Sedunia</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="../image/x-icon" href="../img/favicon.ico" />
    <link rel="icon" type="../image/png" href="../img/favicon.png" />
    <link rel="apple-touch-icon" href="../img/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex
        align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center
          justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="index.html">
                    <img src="../img/gth-logo-black.png" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <img src="../img/gth-logo-black.png" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Selamat Datang, <span class="text-black
                  fw-bold"><?= $_SESSION['admin']?></span></h1>
                    <h3 class="welcome-sub-text">Menjadikan komunitas ini Terbaik sedunia
                    </h3>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold"><?= $_SESSION['admin']?></p>
                        </div>
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon mdi
                    mdi-power text-primary me-2"></i>Sign Out</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none
            align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Menu</li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-floor-plan"></i>
                        <span class="menu-title">Menu</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="member.php">Member</a></li>
                            <li class="nav-item"> <a class="nav-link" href="galeri.php">About & Galeri</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-tab">
                            <div class="row flex-grow">
                                <div class="col-12 grid-margin stretch-card">
                                    <div class="card card-rounded">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-betweenalign-items-center mb-3">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Member
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <?php
                                        $i = 1;
                            $query = mysqli_query($conect,"SELECT * FROM tb_member  ORDER BY id_member DESC LIMIT $start, $limit ");
                            while($row = mysqli_fetch_array($query)){
                        ?>
                                                    <div class="mt-3">
                                                        <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                            <div class="d-flex">
                                                                <img class="img-sm rounded-10" src="img/<?=$row['gambar'];?>" alt="profile">
                                                                <div class="wrapper ms-3">
                                                                    <p class="ms-1 mb-1 fw-bold"><?=$row['nama'];?></p>
                                                                    <small class="text-muted mb-0"><?=$row['tentang_member'];?></small>
                                                                </div>
                                                            </div>
                                                            <div class="text-muted text-small">
                                                                <?=$i++;?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
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
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center
    justify-content-sm-between">
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0
    text-center">Copyright © 2021 JTS. All rights reserved.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
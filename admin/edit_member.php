<?php 
session_start();
error_reporting(0);
require 'koneksi.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$b = mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM tb_member WHERE id_member='$id'"));

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

$nama = htmlspecialchars($_POST['nama']);
$tgl_lahir = htmlspecialchars($_POST['tgl_lahir']);
$alamat = htmlspecialchars($_POST['alamat']);
$tentang_member = htmlspecialchars($_POST['tentang_member']);

$gambar= $_FILES['gambar']['tmp_name'];
$namagambar= $_FILES['gambar']['name'];

$ext = strtolower(end(explode(".", $namagambar)));
$newnama = generate_string($permitted_chars, 10) .'.'. $ext;

$gambarbaru = mysqli_real_escape_string($conect, $_POST['gambar_lama']);

if (isset($_POST["input"])) {

    if(empty($namagambar)){
        $sql = mysqli_query($conect, "UPDATE `tb_member` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`alamat`='$alamat',`tentang_member`='$tentang_member' WHERE id_member='$id'");
        if ($sql) {
            echo "<script>alert('input berhasil');document.location='member.php'</script>";
        } else{
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    } else {
        unlink('img/'.$gambarbaru);
        move_uploaded_file($gambar, 'img/'.$newnama);

        $sql = mysqli_query($conect, "UPDATE `tb_member` SET `nama`='$nama',`gambar`='$newnama',`tgl_lahir`='$tgl_lahir',`alamat`='$alamat',`tentang_member`='$tentang_member' WHERE id_member='$id'");
        if ($sql) {
            echo "<script>alert('input berhasil');document.location='member.php'</script>";
        } else {
            echo "<script>alert('input gagal silahkan coba lagi');</script>";
        }
    }
}
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
    <link href="../css/ionicons.css" rel="stylesheet" type="text/css" />
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
            </div>`
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
                    <div class="img-ss rounded-circle bg-light border me-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
                </div>
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
                                            <h4 class="card-title">Edit data</h4>
                                            <p class="card-description">
                                               JKT48 Terbaik Sedunia
                                            </p>
                                            <form class="forms-sample" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="exampleInputUsername1">Nama</label>
                                                    <input type="text" name="nama" value="<?=$b['nama']?>" class="form-control" id="exampleInputUsername1" placeholder="Nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto">Gambar</label>
                                                    <input type="hidden" name="gambar_lama" value="<?= $b['gambar']; ?>">
                                                    <input type="file" name="gambar" class="form-control" id="foto" placeholder="Gambar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Tanggal lahir</label>
                                                    <input type="date" class="form-control" id="exampleInputEmail1" value="<?= $b['tgl_lahir']; ?>" name="tgl_lahir" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $b['alamat']; ?>" id="alamat" placeholder="Alamat">
                                                </div>
                                                <div class="form-group">
                                                <label for="tentang">Tentang Member</label>
                                                <textarea class="form-control" id="tentang" name="tentang_member" value="<?= $b['tentang_member']; ?>"  style="height:200px" ><?= $b['tentang_member']; ?></textarea>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="tentang">Tentang</label>
                                                    <input type="text" class="form-control" id="tentang" placeholder="tentang">
                                                </div> -->
                                                <button type="submit" name="input" class="btn btn-primary me-2">Submit</button>
                                                <a class="btn btn-light" href="member.php">kembali</a>
                                            </form>
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
    <script src="vendors/chart.js/Chart.min.js"></script>
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
<?php 
session_start();
if(!$_SESSION['username'] && !$_SESSION['password'] && $_SESSION['tipe_user'] != "Admin")
{
    echo "
		<script type='text/javascript'>
		alert('Anda harus login terlebih dahulu!')
		window.location='../../../index.php';
		</script>";
}
else
{
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link href='/images/logo_ayam.png' rel='SHORTCUT ICON' />
    <title>Admin | Ayam Bubos</title> </head> <body>
            <div class="dashboard-main-wrapper"> 
                <div class="dashboard-header">
                    <nav class="navbar navbar-expand-lg bg-white fixed-top">
                        <a class="navbar-brand" href="dashboard.php">Ayam Bubos</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-right-top">
                                <li class="nav-item">

                                </li>
                                <li class="nav-item dropdown nav-user">
                                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><img src="../images/logo_ayam.png"
                                            alt="" class="user-avatar-md rounded-circle">&nbsp;&nbsp;&nbsp;Admin <i
                                            class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                        <a class="dropdown-item" href="process/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="nav-left-sidebar sidebar-dark">
                    <div class="menu-list">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav flex-column">
                                    <li class="nav-divider">
                                        Menu
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link active" href="dashboard.php" aria-expanded="false"
                                            data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard
                                            <span class="badge badge-success">6</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                            data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                        <div id="submenu-5" class="collapse submenu">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/tables/makanan/hal_makanan.php">Daftar Makanan</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/tables/customer/table_customer.php">Data
                                                        Customer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/tables/kategori/table_kategori.php">Data
                                                        Kategori</a>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/tables/transaksi/table_transaksi.php">Data
                                                        Transaksi</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="pages/tables/user/table_user.php">Data
                                                        User</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="dashboard-wrapper">
                    <div class="dashboard-ecommerce">
                        <div class="container-fluid dashboard-content ">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="page-header">
                                        <h2 class="pageheader-title">Dashboard</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="card">
                                    <h3 class="card-header">Selamat Datang Di Halaman Administrator</h3>
                                    <div class="card-body text-center">
                                        <img src="/images/admin.png" alt="" width="700">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <script src="assets/libs/js/main-js.js"></script>
            <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
            <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
            <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
            <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
            <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
            <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
            <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
            <script src="assets/libs/js/dashboard-ecommerce.js"></script>
            </body>

</html>
<?php } ?>
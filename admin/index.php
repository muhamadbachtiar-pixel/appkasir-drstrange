<?php 
    session_start();
    include'../library/koneksi.php';
	if (!isset($_SESSION['jabatan'])) {
		include 'login/login.php';
	}else{
		$jabatan = $_SESSION['jabatan'];
		$nama = $_SESSION['nama'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN | MANAGEMENT</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../asset/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15" style="font-size:30px;"></div>
                    <div class="sidebar-brand-text mx-3"><span>AppKasir</span></div>
                </a>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="?page=home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <i class="fa fa-tachometer" aria-hidden="true"></i><span class="">Dashboard</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <li class="nav-item active ">
                <a class="nav-link" href="?page=user">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <i class="fa fa-user-circle" aria-hidden="true"></i><span class="">User</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active ">
                <a class="nav-link" href="?page=input-barang">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <i class="fa fa-user-circle" aria-hidden="true"></i><span class="">Input Barang</span></a>
            </li>
            <hr class="sidebar-divider my-0">

            <div class="sidebar-heading mt-4">
                USER
            </div>
            <li class="nav-item active ">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="mt-1 text-white"><?=$nama?></h6>
                                    </div>
                                </div>
                            </button>
                            <ul class="dropdown-menu m-4" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?">Profile</a></li>
                                <li><a class="dropdown-item ms-3" href="#">Setting</a></li>
                                <li><a class="dropdown-item ms-3" href="?page=logout">Logout</a></li>
                            </ul>
                        </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h2>Selamat Datang <span><b><?=$jabatan?>😋</b></span></h2>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow me-3">
                        
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                

        <script src="../asset/js/sb-admin-2.min.js"></script>
        <script src="../asset/js/bootstrap.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            new DataTable('#example');
        </script>
    </body>

</html>
<?php
error_reporting(0);
if (!isset($_GET['page'])) {
    include 'modul/home.php';
}else{
    switch ($_GET['page']) {
        case 'home':
            include 'modul/home.php';
            break;
        case 'user':
            include 'modul/user.php';
            break;
        case 'input-barang':
            include 'modul/input-barang.php';
            break;
        case 'logout':
            include 'login/logout.php';
            break;
        
        default:
            # code...
            break;
    }
}
   
    }
?>
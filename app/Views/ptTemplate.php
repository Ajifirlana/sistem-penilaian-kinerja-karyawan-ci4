<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/img/logo.svg" type="image/icon type">
    <title>NKPP | Pengendali Teknis</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/pt/index/<?php echo $_SESSION['id'] ?>">
                <div class="sidebar-brand-icon">
                    <img src='<?php echo base_url(); ?>/../img/logo.svg' width="60px">
                </div>
                <div class="sidebar-brand-text mx-1">BPK Lampung</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="/pt/index/<?php echo $_SESSION['id'] ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Heading -->

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pengendali Teknis
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item ">
                <a class="nav-link" href="/pt/sasarankinerja">
                    <i class="fa fa-folder"></i>
                    <span>Sasaran Kinerja</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-sitemap"></i>
                    <span>Pengelolaan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pt/nkp">NKP</a>
                        <a class="collapse-item" href="/pt/nkt">NKT</a>
                        <a class="collapse-item" href="/pt/nkpp">NKPP</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pt/bimbingan">
                    <i class="fa fa-share"></i>
                    <span>Bimbingan</span></a>
            </li>

            <!-- Heading -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Ketua Tim
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa fa-folder-open"></i>
                    <span>Realisasi</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pt/ketua/nskp">NSKP</a>
                        <a class="collapse-item" href="/pt/ketua/nkp">NKP</a>
                        <a class="collapse-item" href="/pt/ketua/nkt">NKT</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/pt/ketua/tanggapan_bimbingan">
                    <i class="fa fa-reply"></i>
                    <span>Tanggapan Bimbingan</span></a>
            </li>

            <!-- Heading -->

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Anggota Tim
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa fa-list"></i>
                    <span>Review</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pt/anggota/review_sasaran">Sasaran Kinerja</a>
                        <a class="collapse-item" href="/pt/anggota/review_nkp">NKP</a>
                        <a class="collapse-item" href="/pt/anggota/review_nkt">NKT</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <?= $this->renderSection('contentAdmin') ?>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url(); ?>/../vendor/chart.js/Chart.min.js"></script>
        <script src="<?php echo base_url(); ?>/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url(); ?>/../js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url(); ?>/../js/demo/chart-pie-demo.js"></script>

        <script src="<?php echo base_url(); ?>/js/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url(); ?>/js/demo/chart-pie-demo.js"></script>

</body>

</html>
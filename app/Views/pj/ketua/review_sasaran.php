<?= $this->extend('pjTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto my-2 my-md-0  navbar">
                <h4 class="text-gray-800">Penilaian Kinerja Pelaksanaan Pemeriksa</h4>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Penanggung Jawab</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h3 class="px-2 mb-0 text-gray-800">Data Sasaran Kinerja Ketua Tim </h3>

            <!-- Page Heading -->
            <div class="row">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Pengisian</th>
                            <th>Periode</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Status</th>
                            <th>Realisasi Nilai</th>
                            <th>Review Nilai</th>
                            <th>Nilai Capaian SKP</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <?php foreach ($sasaranKT as $no => $sasaranKT) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $sasaranKT['tanggal']; ?></td>
                            <td><?php echo $sasaranKT['periode_kt']; ?></td>
                            <td><?php echo $sasaranKT['nama_kt']; ?></td>
                            <td><?php echo $sasaranKT['nip_kt']; ?></td>
                            <td><?php echo $sasaranKT['status']; ?></td>
                            <td><?php echo $sasaranKT['nilai']; ?></td>
                            <td><?php echo $sasaranKT['review_nilai']; ?></td>
                            <td><?php echo $sasaranKT['nilai_skp']; ?></td>
                            <th><a href="/pj/ketua/detail_sasaran/<?php echo $sasaranKT['id_kinerja_kt']; ?>" class="btn btn-primary">
                                    <span class="text">Detail</span>
                                </a>
                            </th>
                        </tr>
                    <?php endforeach; ?>


                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?= $this->endSection() ?>
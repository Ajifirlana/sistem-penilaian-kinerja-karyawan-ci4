<?= $this->extend('ptTemplate') ?>
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pengendali Teknis</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <a style="float: right;" href="/pt/edit_sasaran/<?php echo $sasaranPT['id_kinerja_pt']; ?>" class="btn btn-primary">Edit Sasaran Kinerja</a>
            <h3 class="px-2 mb-0 text-gray-800">Detail Data Sasaran Kinerja</h3>

            <?php
            if ($sasaranPT['status'] == 'Pending') { ?>
                <div class="alert alert-danger mt-3" role="alert">Sasaran kinerja belum di realisasi!</div>
            <?php } else { ?>
                <div class="alert alert-success mt-3" role="alert">Sasaran kinerja telah di realisasi!</div>
            <?php
            }

            ?>

            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Periode : <?php echo $sasaranPT['periode_pt']; ?></th>
            </table>
            <table id="example2" class="table table-bordered table-hover">
                <tr>
                    <th style="width:30px">No</th>
                    <th style="width: 200px">Kegiatan Tugas Jabatan</th>
                    <th>Kuantitas</th>
                    <th>Kualitas</th>
                    <th>Waktu</th>
                    <th>Realisasi Kuantitas</th>
                    <th>Realisasi Kualitas</th>
                    <th>Realisasi Waktu</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Mereviu KKP yang telah direviu oleh Ketua Tim (Hot Reviu)</td>
                    <td><?php echo $sasaranPT['kuantitas']; ?> KKP</td>
                    <td><?php echo $sasaranPT['kualitas']; ?></td>
                    <td><?php echo $sasaranPT['waktu']; ?> Hari</td>
                    <td><?php echo $sasaranPT['realisasi_kuantitas']; ?> KKP</td>
                    <td><?php echo $sasaranPT['realisasi_kualitas']; ?></td>
                    <td><?php echo $sasaranPT['realisasi_waktu']; ?> Hari</td>
                    <td><?php echo $sasaranPT['nilai']; ?></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Melakukan Bimbingan kepada Ketua Tim</td>
                    <td><?php echo $sasaranPT['kuantitas2']; ?> Form</td>
                    <td><?php echo $sasaranPT['kualitas2']; ?></td>
                    <td><?php echo $sasaranPT['waktu2']; ?> Hari</td>
                    <td><?php echo $sasaranPT['realisasi_kuantitas2']; ?> Form</td>
                    <td><?php echo $sasaranPT['realisasi_kualitas2']; ?></td>
                    <td><?php echo $sasaranPT['realisasi_waktu2']; ?> Hari</td>
                    <td><?php echo $sasaranPT['nilai2']; ?></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Penilaian Kinerja Ketua Tim</td>
                    <td><?php echo $sasaranPT['kuantitas3']; ?> Form</td>
                    <td><?php echo $sasaranPT['kualitas3']; ?></td>
                    <td><?php echo $sasaranPT['waktu3']; ?> Hari</td>
                    <td><?php echo $sasaranPT['realisasi_kuantitas3']; ?> Form</td>
                    <td><?php echo $sasaranPT['realisasi_kualitas3']; ?></td>
                    <td><?php echo $sasaranPT['realisasi_waktu3']; ?> Hari</td>
                    <td><?php echo $sasaranPT['nilai3']; ?></td>
                </tr>

            </table>

            <table id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Catatan : <?php echo $sasaranPT['catatan_pt']; ?></th>
            </table>
            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Detail Capaian SKP</th>
                <th><?php echo $sasaranPT['nilai_skp']; ?></th>
            </table>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <?= $this->endSection() ?>
<?= $this->extend('atTemplate') ?>
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Anggota Tim</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <a style="float: right;" href="/at/edit_sasaran/<?php echo $sasaranAT['id_kinerja_anggota']; ?>" class="btn btn-primary">Edit Sasaran Kinerja</a>
            <h3 class="px-2 mb-0 text-gray-800">Detail Data Sasaran Kinerja</h3>

            <?php
            if ($sasaranAT['status'] == 'Pending') { ?>
                <div class="alert alert-danger mt-3" role="alert">Sasaran kinerja belum di realisasi dan di review!</div>
            <?php } else if ($sasaranAT['status'] == 'Proses') { ?>
                <div class="alert alert-warning mt-3" role="alert">Sasaran kinerja telah di realisasi tetapi belum di review!</div>
            <?php } else { ?>

                <div class="alert alert-success mt-3" role="alert">Sasaran kinerja telah di realisasi dan di review!</div>

            <?php
            }

            ?>

            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Periode : <?php echo $sasaranAT['periode_at']; ?></th>
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
                    <th>Review Kuantitas</th>
                    <th>Review Kualitas</th>
                    <th>Review Waktu</th>
                    <th>Nilai</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Menyusun dan Melaksanakn PKP</td>
                    <td><?php echo $sasaranAT['kuantitas']; ?> PKP</td>
                    <td><?php echo $sasaranAT['kualitas']; ?></td>
                    <td><?php echo $sasaranAT['waktu']; ?> Hari</td>
                    <td><?php echo $sasaranAT['realisasi_kuantitas']; ?> PKP</td>
                    <td><?php echo $sasaranAT['realisasi_kualitas']; ?></td>
                    <td><?php echo $sasaranAT['realisasi_waktu']; ?> Hari</td>
                    <td><?php echo $sasaranAT['review_kuantitas']; ?> PKP</td>
                    <td><?php echo $sasaranAT['review_kualitas']; ?></td>
                    <td><?php echo $sasaranAT['review_waktu']; ?> Hari</td>
                    <td><?php echo $sasaranAT['nilai']; ?></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>menyusun KKP sesuai dengan PKP </td>
                    <td><?php echo $sasaranAT['kuantitas2']; ?> KKP</td>
                    <td><?php echo $sasaranAT['kualitas2']; ?></td>
                    <td><?php echo $sasaranAT['waktu2']; ?> Hari</td>
                    <td><?php echo $sasaranAT['realisasi_kuantitas2']; ?> KKP</td>
                    <td><?php echo $sasaranAT['realisasi_kualitas2']; ?></td>
                    <td><?php echo $sasaranAT['realisasi_waktu2']; ?> Hari</td>
                    <td><?php echo $sasaranAT['review_kuantitas2']; ?> KKP</td>
                    <td><?php echo $sasaranAT['review_kualitas2']; ?></td>
                    <td><?php echo $sasaranAT['review_waktu2']; ?> Hari</td>
                    <td><?php echo $sasaranAT['nilai2']; ?></td>
                </tr>
            </table>

            <table id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Catatan : <?php echo $sasaranAT['catatan_at']; ?></th>
            </table>
            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Detail Capaian SKP</th>
                <th><?php echo $sasaranAT['nilai_skp']; ?></th>
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
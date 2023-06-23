<?= $this->extend('ktTemplate') ?>
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ketua Tim</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h3 class="px-2 mb-0 text-gray-800">Realisasi Sasaran Kinerja Anggota Tim </h3>

            <!-- Page Heading -->
            <div class="row">
                <div class="card-body">

                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <th>No</th>
                            <th>Kegiatan Tugas Jabatan</th>
                            <th>Kuantitas</th>
                            <th>Kualitas</th>
                            <th>Waktu</th>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>Menyusun dan melaksanakan PKP</td>
                            <td><?php echo $sasaranAT['kuantitas']; ?> PKP</td>
                            <td><?php echo $sasaranAT['kualitas']; ?></td>
                            <td><?php echo $sasaranAT['waktu']; ?> Hari</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Menyusun KKP sesuai dengan PKP</td>
                            <td><?php echo $sasaranAT['kuantitas2']; ?> KKP</td>
                            <td><?php echo $sasaranAT['kualitas2']; ?></td>
                            <td><?php echo $sasaranAT['waktu2']; ?> Hari</td>
                        </tr>
                    </table>
                    <table id="example4" class="table table-bordered table-hover">
                        <th style="width: 1100px;">Catatan : <?php echo $sasaranAT['catatan_at']; ?></th>
                    </table>
                    <hr class="sidebar-divider my-0">
                    <div class="row">
                        <form action="/kt/saveSasaranAT/<?php echo $sasaranAT['id_kinerja_anggota']; ?>" method="POST" enctype="multipart/form-data">
                            <div class="col">
                                <div class="mb-3 mt-4">
                                    <h4>
                                        <strong>
                                            01. Nama Tugas Jabatan : Menyusun dan melaksanakan PKP
                                        </strong>
                                    </h4>
                                </div>
                                <div class="mb-3">
                                    <label for="kuantititas" class="form-label">Kuantitas</label>
                                    <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kualitas" class="form-label">Kualitas</label>
                                    <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu" required>
                                </div>
                                <hr class="sidebar-divider my-0">
                                <div class="mb-3 mt-4">
                                    <h4>
                                        <strong>
                                            02. Nama Tugas Jabatan : Menyusun KKP sesuai dengan PKP
                                        </strong>
                                    </h4>
                                </div>
                                <div class="mb-3">
                                    <label for="kuantititas" class="form-label">Kuantitas</label>
                                    <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant2" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kualitas" class="form-label">Kualitas</label>
                                    <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual2" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu2" required>
                                </div>

                                <hr class="sidebar-divider my-0">

                                <div class="mb-3 mt-4">
                                    <h4>
                                        <strong>
                                            Tambahan
                                        </strong>
                                    </h4>
                                </div>
                                <div class="mb-3">
                                    <label for="periode" class="form-label">Periode</label>
                                    <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="periode" required>
                                </div>

                                <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="waktuAT1" value="<?php echo $sasaranAT['waktu']; ?>">

                                <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="waktuAT2" value="<?php echo $sasaranAT['waktu2']; ?>">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?= $this->endSection() ?>
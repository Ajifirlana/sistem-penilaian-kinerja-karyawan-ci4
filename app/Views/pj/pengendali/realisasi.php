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
            <h3 class="px-2 mb-0 text-gray-800">Realisasi Sasaran Kinerja Pengendali Teknis </h3>


            <!-- Page Heading -->
            <div class="row">
                <div class="card-body">
                    <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                        <th style="width: 1100px;">Periode : <?php echo $sasaranPT['periode_pt']; ?></th>
                    </table>
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
                            <td>Mereviu KKP yang telah direviu oleh Ketua Tim (Hot Reviu)</td>
                            <td><?php echo $sasaranPT['kuantitas']; ?> PKP</td>
                            <td><?php echo $sasaranPT['kualitas']; ?></td>
                            <td><?php echo $sasaranPT['waktu']; ?> Hari</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Melakukan Bimbingan kepada Ketua Tim</td>
                            <td><?php echo $sasaranPT['kuantitas2']; ?> KKP</td>
                            <td><?php echo $sasaranPT['kualitas2']; ?></td>
                            <td><?php echo $sasaranPT['waktu2']; ?> Hari</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Penilaian Kinerja Ketua Tim</td>
                            <td><?php echo $sasaranPT['kuantitas3']; ?> Form</td>
                            <td><?php echo $sasaranPT['kualitas3']; ?></td>
                            <td><?php echo $sasaranPT['waktu3']; ?> Hari</td>
                        </tr>

                    </table>
                    <table id="example4" class="table table-bordered table-hover">
                        <th style="width: 1100px;">Catatan : <?php echo $sasaranPT['catatan_pt']; ?></th>
                    </table>
                    <hr class="sidebar-divider my-0">
                    <div class="row">
                        <form action="/pj/saveSasaranPT/<?php echo $sasaranPT['id_kinerja_pt']; ?>" method="POST" enctype="multipart/form-data">
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
                                    <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kualitas" class="form-label">Kualitas</label>
                                    <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu1" required>
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
                                            03. Nama Tugas Jabatan : Penilaian Kinerja Ketua Tim
                                        </strong>
                                    </h4>
                                </div>
                                <div class="mb-3">
                                    <label for="kuantititas" class="form-label">Kuantitas</label>
                                    <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="kualitas" class="form-label">Kualitas</label>
                                    <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="waktu" class="form-label">Waktu</label>
                                    <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu3" required>
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

                                <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="waktuPT1" value="<?php echo $sasaranPT['waktu']; ?>">

                                <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="waktuPT2" value="<?php echo $sasaranPT['waktu2']; ?>">

                                <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="waktuPT3" value="<?php echo $sasaranPT['waktu3']; ?>">

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?= $this->endSection() ?>
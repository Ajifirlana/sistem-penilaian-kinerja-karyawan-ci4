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

            <!-- Page Heading -->
            <div class="row">
                <form action="/at/updateSasaran/<?php echo $sasaranAT['id_kinerja_anggota']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="col">
                        <div class="mb-3">
                            <h4>
                                <strong>
                                    01. Nama Tugas Jabatan : Menyusun dan melaksanakan PKP
                                </strong>
                            </h4>
                        </div>
                        <div class="mb-3">
                            <label for="kuantititas" class="form-label">Kuantitas</label>
                            <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Edit kuantitas/output yang akan dihasilkan" name="kuant1" required value="<?php echo $sasaranAT['kuantitas']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kualitas" class="form-label">Kualitas</label>
                            <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Edit kualitas/mutu yang akan dihasilkan" name="kual1" required value="<?php echo $sasaranAT['kualitas']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Edit waktu yang dibutuhkan" name="waktu1" required value="<?php echo $sasaranAT['waktu']; ?>">
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
                            <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Edit kuantitas/output yang akan dihasilkan" name="kuant2" required value="<?php echo $sasaranAT['kuantitas2']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kualitas" class="form-label">Kualitas</label>
                            <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Edit kualitas/mutu yang akan dihasilkan" name="kual2" required value="<?php echo $sasaranAT['kualitas2']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu</label>
                            <input type="number" class="form-control" id="waktu2" aria-describedby="emailHelp" placeholder="Edit waktu yang dibutuhkan" name="waktu2" required value="<?php echo $sasaranAT['waktu2']; ?>">
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
                            <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Edit periode pelaksanaan" name="periode" required value="<?php echo $sasaranAT['periode_at']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" id="catatan" aria-describedby="emailHelp" placeholder="Edit catatan jika perlu" name="catatan" value="<?php echo $sasaranAT['catatan_at']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>

                        <a href="#" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?= $this->endSection() ?>
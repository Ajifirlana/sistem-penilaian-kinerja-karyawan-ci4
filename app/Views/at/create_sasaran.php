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
            <form action="/at/saveSasaran" method="POST" enctype="multipart/form-data">
                <!-- Page Heading -->
                <div class="row">

                    <div class="col">
                        <div class="mb-3">
                            <h4>
                                <strong>
                                    01. Nama Tugas Jabatan : Menyusun dan melaksanakan PKP
                                </strong>
                            </h4>
                        </div>
                        <div class="mb-3">
                            <label for="kuantititas" class="form-label">Kuantitas (PKP)</label>
                            <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan kuantitas/output yang akan dihasilkan" name="kuant1" required>
                        </div>
                        <div class="mb-3">
                            <label for="kualitas" class="form-label">Kualitas (1-100)</label>
                            <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan kualitas/mutu yang akan dihasilkan" name="kual1" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu (Hari)</label>
                            <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan waktu yang dibutuhkan" name="waktu1" required>
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
                            <label for="kuantititas" class="form-label">Kuantitas (KKP)</label>
                            <input type="number" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan kuantitas/output yang akan dihasilkan" name="kuant2" required>
                        </div>
                        <div class="mb-3">
                            <label for="kualitas" class="form-label">Kualitas (1-100)</label>
                            <input type="number" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan kualitas/mutu yang akan dihasilkan" name="kual2" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Waktu (Hari)</label>
                            <input type="number" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan waktu yang dibutuhkan (Hari)" name="waktu2" required>
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
                            <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="Masukan periode pelaksanaan" name="periode" required>
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <input type="text" class="form-control" id="catatan" aria-describedby="emailHelp" placeholder="Masukan catatan jika perlu" name="catatan">
                        </div>

                        <input type="hidden" class="form-control" id="catatan" aria-describedby="emailHelp" placeholder="Masukan catatan jika perlu" name="nama" value="<?php echo $_SESSION['nama'] ?>">

                        <input type="hidden" class="form-control" id="catatan" aria-describedby="emailHelp" placeholder="Masukan catatan jika perlu" name="nip" value="<?php echo $_SESSION['nip'] ?>">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?= $this->endSection() ?>
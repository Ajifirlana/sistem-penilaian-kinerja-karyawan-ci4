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
            <h3 class="px-2 mb-0 text-gray-800">Data Bimbingan Ketua Tim </h3>

            <!-- Page Heading -->
            <div class="row">
                <form action="/pj/pengendali/saveTanggapan/<?php echo $bimbingan['idBimbingan'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Bimbingan 1</th>
                                <th>Bimbingan 2</th>

                            </tr>
                            <tr>

                                <th><?php echo $bimbingan['nama']; ?></th>
                                <th><?php echo $bimbingan['nip']; ?></th>
                                <th><?php echo $bimbingan['bimbingan_satu']; ?></th>
                                <th><?php echo $bimbingan['bimbingan_dua']; ?></th>
                            </tr>
                        </table>
                        <hr class="sidebar-divider my-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 mt-3 px-1">
                                    <label for="tanggapan" class="form-label">Tanggapan Pertama</label>
                                    <input type="text" class="form-control" id="tanggapan" aria-describedby="emailHelp" placeholder="Masukan Tanggapan Pertama" required name="tanggapan1">
                                </div>
                                <div class="mb-3 px-1">
                                    <label for="tanggapan2" class="form-label">Tanggapan Kedua</label>
                                    <input type="text" class="form-control" id="tanggapan2" aria-describedby="emailHelp" placeholder="Masukan Tanggapan Kedua" required name="tanggapan2">
                                </div>
                                <div class="px-1">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                </form>
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
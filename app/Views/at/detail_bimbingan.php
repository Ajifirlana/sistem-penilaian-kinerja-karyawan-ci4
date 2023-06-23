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
            <a style="float: right;" href="/at/edit_bimbingan/<?php echo $bimbingan['idBimbingan'] ?>" class="btn btn-primary">Edit Bimbingan</a>
            <h3 class="px-2 mb-0 text-gray-800">Detail Bimbingan</h3>

            <?php
            if ($bimbingan['status'] == 'Selesai') { ?>
                <div class="alert alert-success mt-3" role="alert">Bimbingan sudah ditanggapi</div>
            <?php } else { ?>

                <div class="alert alert-danger mt-3" role="alert">Bimbingan belum ditanggapi</div>

            <?php
            }

            ?>
            <table style="text-align: center;" id="example2" class="table table-bordered table-hover mt-2">
                <table id="example2" class="table table-bordered table-hover">
                    <tr>
                        <th>Tanggal Pengisian</th>
                        <th>Bimbingan 1</th>
                        <th>Bimbingan 2</th>
                        <th>Tanggapan 1</th>
                        <th>Tanggapan 2</th>
                    </tr>


                    <tr>

                        <td><?php echo $bimbingan['tanggal']; ?></td>
                        <td><?php echo $bimbingan['bimbingan_satu']; ?></td>
                        <td><?php echo $bimbingan['bimbingan_dua']; ?></td>
                        <td><?php echo $bimbingan['tanggapan_satu']; ?></td>
                        <td><?php echo $bimbingan['tanggapan_dua']; ?></td>
                    </tr>
                </table>

        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?= $this->endSection() ?>
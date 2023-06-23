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
            <a style="float: right;" href="/pt/edit_nkp/<?= $nkp['id_nkp_pt'] ?>" class="btn btn-primary">Edit NKP</a>
            <h3 class="px-2 mb-0 text-gray-800">Detail NKP</h3>

            <?php
            if ($nkp['status'] == 'Pending') { ?>
                <div class="alert alert-danger mt-3" role="alert">NKP belum di realisasi!</div>
            <?php } else { ?>
                <div class="alert alert-success mt-3" role="alert">NKP telah di realisasi!</div>
            <?php
            }

            ?>

            <table style="text-align: center;" id="example2" class="table table-bordered table-hover mt-3">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 500px;">Indikator</th>
                        <th>Melebihi Harapan</th>
                        <th>Memenuhi Harapan</th>
                        <th>Perlu Perbaikan</th>
                        <th>Tidak Memenuhi Harapan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($soal as $no => $soal) : ?>
                        <tr>
                            <th><?php echo $no + 1 ?></th>
                            <th><?php echo $soal['soal']; ?></th>

                            <th><input type="radio" name="nilai<?php echo $no + 1 ?>" value="100"></th>
                            <th><input type="radio" name="nilai<?php echo $no + 1 ?>" value="85"></th>
                            <th><input type="radio" name="nilai<?php echo $no + 1 ?>" value="70"></th>
                            <th><input type="radio" name="nilai<?php echo $no + 1 ?>" value="55"></th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table style="text-align: center;" id="example4" class="table table-bordered table-hover">
                <th style="width: 1100px;">Nilai Kompetensi Perilaku</th>
                <th><?= $nkp['nilai'] ?></th>
            </table>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <?= $this->endSection() ?>
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
            <h3 class="px-2 mb-0 text-gray-800">Penilaian Kompetensi Teknis</h3>
            <div class="row">
                <form action="/at/updateNKT/<?= $nkt['id_nkt_at'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="text" class="form-control" id="kendala" aria-describedby="emailHelp" placeholder="Masukan Periode" required name="periode" maxlength="4">
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
                                <?php $no=1;
                                $urut = 1;foreach ($soal as $soal) : ?>
                                    <tr>
                                        <th><?php echo $no++ ?></th>
                                        <th>
                           <?php echo $soal['soal']; ?></th>
                            <?php if($soal['melebihi'] >= 100){ ?>
                                            <th>
                                                <input type="radio" name="nilai[<?= $urut++?>]" id="nilai" value="<?php echo $soal['melebihi'] ?>" checked>
                                            </th>
                                        <?php }else{?>
                                          <th>
                                            <input type="radio" name="nilai[<?= $urut++?>]" id="nilai" value="100">
                                          </th>
                                      <?php }?>

                                      <?php if($soal['memenuhi'] >= 85){ ?>
                                        <th>
                                            <input type="radio" name="nilai[<?= $urut++?>]" id="nilai1" value="<?php echo $soal['memenuhi'] ?>" checked>
                                        </th>
                                    <?php }else{?>
                                        <th><input type="radio" name="nilai[<?= $urut++?>]" value="85"id="nilai1"></th>
                                    <?php }?>

                                    <?php if($soal['perlu_perhatian'] >= 70){ ?>
                                        <th>
                                            <input type="radio" name="nilai[<?= $urut++?>]" id="nilai2" value="<?php echo $soal['perlu_perhatian'] ?>" checked>
                                        </th>
                                    <?php }else{?>
                                        <th>
                                            <input type="radio" name="nilai[<?= $urut++?>]" value="70"id="nilai2">
                                        </th>
                                    <?php }?>
                                    <?php if($soal['tidak_memenuhi'] >= 55){ ?>
                                        <th>
                                            <input type="radio" name="nilai[<?= $urut++?>]" id="nilai3" value="<?php echo $soal['tidak_memenuhi'] ?>" checked>
                                        </th>
                                    <?php }else{?>
                                        <th><input type="radio" name="nilai[<?= $urut++?>]" value="55" id="nilai3"></th>
                                    <?php }?>
 
                                    
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <a href="/at/nkt" class="btn btn-danger">Batal</a>

                    </div>
                </form>
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <?= $this->endSection() ?>
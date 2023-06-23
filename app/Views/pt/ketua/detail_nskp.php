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
            <h3 class="px-2 mb-0 text-gray-800">Data Sasaran Kinerja Ketua Tim </h3>

            <!-- Page Heading -->
            <div class="row">
                <div class="card-body">
                    <table style="text-align: center;" id="example2" class="table table-bordered table-hover">
                        <th>
                            Nama Ketua Tim : <?php echo $sasaranKT['nama_kt']; ?>
                        </th>
                    </table>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th style="width: 30px;">No.</th>
                            <th style="width: 200px;">Kegiatan Tugas Jabatan</th>
                            <th style="width: 60px;">Kuantitas</th>
                            <th style="width: 60px;">Kualitas</th>
                            <th style="width: 60px;">Waktu</th>
                            <th style="width: 60px;">Nilai</th>
                            <th style="width: 60px;">Realisasi Kuantitas</th>
                            <th style="width: 60px;">Realisasi Kualitas</th>
                            <th style="width: 60px;">Realisasi Waktu</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1. </th>
                                <th>Mereviu seluruh PKP yang disusun dan dilaksanakan AT atau yang telah direviu oleh KST, berdasarkan kesesuaian dengan P2</th>
                                <td><?php echo $sasaranKT['kuantitas']; ?></td>
                                <td><?php echo $sasaranKT['kualitas']; ?></td>
                                <td><?php echo $sasaranKT['waktu']; ?></td>
                                <td><?php echo $sasaranKT['nilai']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kuantitas']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kualitas']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_waktu']; ?></td>
                            </tr>
                            <tr>
                                <th>2. </th>
                                <th>Mereviu KKP seluruh AT atau yang telah direviu oleh KST, berdasarkan tanggung jawab PKP masing-masing </th>
                                <td><?php echo $sasaranKT['kuantitas2']; ?></td>
                                <td><?php echo $sasaranKT['kualitas2']; ?></td>
                                <td><?php echo $sasaranKT['waktu2']; ?></td>
                                <td><?php echo $sasaranKT['nilai2']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kuantitas2']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kualitas2']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_waktu2']; ?></td>
                            </tr>

                            <tr>
                                <th>3. </th>
                                <th>Melakukan Bimbingan kepada AT/KST</th>
                                <td><?php echo $sasaranKT['kuantitas3']; ?></td>
                                <td><?php echo $sasaranKT['kualitas3']; ?></td>
                                <td><?php echo $sasaranKT['waktu3']; ?></td>
                                <td><?php echo $sasaranKT['nilai3']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kuantitas3']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kualitas3']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_waktu3']; ?></td>
                            </tr>

                            <tr>
                                <th>4. </th>
                                <th>Penilaian Kinerja Anggota Tim</th>
                                <td><?php echo $sasaranKT['kuantitas4']; ?></td>
                                <td><?php echo $sasaranKT['kualitas4']; ?></td>
                                <td><?php echo $sasaranKT['waktu4']; ?></td>
                                <td><?php echo $sasaranKT['nilai4']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kuantitas4']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_kualitas4']; ?></td>
                                <td><?php echo $sasaranKT['realisasi_waktu4']; ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <table id="example4" class="table table-bordered table-hover">
                        <th style="width: 1100px;">Catatan : <?php echo $sasaranKT['catatan_kt']; ?></th>
                    </table>
                    <table id="example1" class="table table-bordered table-hover">
                        <tr style="text-align: center;">
                            <th style="width: 680px;">Nilai capaian SKP</th>
                            <th style="width: 83px;"> <?php echo $sasaranKT['nilai_skp']; ?></th>
                            <th style="max-width: 38px;">
                                <a href="/pt/ketua/realisasi/<?php echo $sasaranKT['id_kinerja_kt']; ?>" class="btn btn-danger">
                                    <span class="text">Denail</span>
                                </a>
                                <form action="/pt/approveSasaranKT/<?php echo $sasaranKT['id_kinerja_kt']; ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant1" required value=<?php echo $sasaranKT['kuantitas']; ?>>

                                    <input type="hidden" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual1" required value=<?php echo $sasaranKT['kualitas']; ?>>

                                    <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu1" required value=<?php echo $sasaranKT['waktu']; ?>>

                                    <input type="hidden" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant2" required value=<?php echo $sasaranKT['kuantitas2']; ?>>

                                    <input type="hidden" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual2" required value=<?php echo $sasaranKT['kualitas2']; ?>>

                                    <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu2" required value=<?php echo $sasaranKT['waktu2']; ?>>

                                    <input type="hidden" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant3" required value=<?php echo $sasaranKT['kuantitas3']; ?>>

                                    <input type="hidden" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual3" required value=<?php echo $sasaranKT['kualitas3']; ?>>

                                    <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu3" required value=<?php echo $sasaranKT['waktu3']; ?>>

                                    <input type="hidden" class="form-control" id="kuantititas" aria-describedby="emailHelp" placeholder="Masukan realisasi kuantitas yang dihasilkan" name="kuant4" required value=<?php echo $sasaranKT['kuantitas4']; ?>>

                                    <input type="hidden" class="form-control" id="kualitas" aria-describedby="emailHelp" placeholder="Masukan realisasi kualitas yang dihasilkan" name="kual4" required value=<?php echo $sasaranKT['kualitas4']; ?>>

                                    <input type="hidden" class="form-control" id="waktu" aria-describedby="emailHelp" placeholder="Masukan realisasi waktu" name="waktu4" required value=<?php echo $sasaranKT['waktu4']; ?>>


                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <?= $this->endSection() ?>
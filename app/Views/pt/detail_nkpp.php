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
            <h3 class="px-2 mb-0 text-gray-800">Lembar Nilai Kinerja Pelaksanaa Pemeriksaan</h3>

            <!-- Page Heading -->
            <div class="row">
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <tr>
                            <th style="width: 10px">No.</th>
                            <th>Aspek yang dinilai</th>
                            <th>Nilai</th>
                            <th>Bobot</th>
                            <th>Nilai Kinerja</th>
                        </tr>
                        <tr>
                            <th>1.</th>
                            <th>Sasaran Kinerja (N-SKn)</th>
                            <th><?php echo $nilai_sasaran;?></th>
                            <th>60%</th>
                            <th><?php echo $nilai_kinerja_sasaran;?></th>
                        </tr>
                        <tr>
                            <th>2.</th>
                            <th>Kompetensi Perilaku (N-KPn)</th>
                            <th><?php echo $nilai_nkp;?></th>
                            <th>20%</th>
                            <th><?php echo $nilai_kinerja_nkp;?></th>
                        </tr>
                        <tr>
                            <th>3.</th>
                            <th>Kompetensi Teknis (N-KTn)</th>
                            <th><?php echo $nilai_nkt;?></th>
                            <th>20%</th>
                            <th><?php echo $nilai_kinerja_nkt;?></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Nilai Kinerja(NK-PP)</th>
                            <th></th>
                            <th></th>
                            <th><?php echo $total = $nilai_kinerja_nkt+$nilai_kinerja_nkp+$nilai_kinerja_sasaran?></th>
                        </tr>
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
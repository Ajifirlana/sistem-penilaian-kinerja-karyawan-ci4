<?= $this -> extend('adminTemplate')?>
<?= $this-> section('contentAdmin')?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h3 class="px-2 mb-0 text-gray-800">Menambahkan Data Pengendali Teknis</h3>

                    <div class="row">
                        <div class="col-md-4-px-2">
                            <form action="/admin/savePT" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Pegawai" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">NIP</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIP" name="nip">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unit Kerja</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Unit Kerja" name="unit">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Penanggung Jawab</label>
                                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="pj">
                                        <!-- <option selected>Choose...</option> -->
                                        <?php foreach ($pj as $pj) { ?>
                                            <option value="<?= $pj['idPJ']?>"><?= $pj['nama_pj']?></option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Periode</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Periode" name="periode">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No. Surat Dinas</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan No. Surat Dinas" name="surat">
                                    </div>
                                </div>
                                <div class="card-footer">
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

 
            <?= $this -> endSection() ?>
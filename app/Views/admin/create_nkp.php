<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Menambahkan Data Indikator NKP</h3>

    <div class="row">
        <div class="col-md-4-px-2">
            <form action="/admin/saveNKP" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">SOAl</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="soal" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bobot Melebihi Harapan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="melebihi_harapan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bobot Memenuhi Harapan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="memenuhi_harapan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bobot Perlu Perhatian</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="perlu_perhatian">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bobot Tidak memenuhi harapan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="tidak_memenuhi_harapan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Bagian(Ex:AT/KT/PT)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="bagian" maxlength="2">
                    </div>
                    <hr>
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


<?= $this->endSection() ?>
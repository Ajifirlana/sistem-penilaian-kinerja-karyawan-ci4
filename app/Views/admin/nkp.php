<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Data Indikator NKP</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="card-body">
            <a href="/admin/create_nkp" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Indikator Perilaku</th>
                        <th>Bobot 1</th>
                        <th>Bobot 2</th>
                        <th>Bobot 3</th>
                        <th>Bobot 4</th>
                        <th>Soal Bagian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($nkp as $no => $nkp) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $nkp['soal']; ?></td>
                            <td><?php echo $nkp['melebihi']; ?></td>
                            <td><?php echo $nkp['memenuhi']; ?></td>
                            <td><?php echo $nkp['perlu_perhatian']; ?></td>
                            <td><?php echo $nkp['tidak_memenuhi']; ?></td>
                            <td><?php echo $nkp['bagian']; ?></td>
                            <td>
                                <a href="/admin/nkp/delete/<?= $nkp['id_nkp'] ?>" class="btn btn-danger mb-3">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
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
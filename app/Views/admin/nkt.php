<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Data Indikator NKT</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="card-body">
            <a href="/admin/create_nkt" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="example2" class="table table-bordered table-hover">
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
                    <?php foreach ($nkt as $no => $nkt) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $nkt['soal']; ?></td>
                            <td><?php echo $nkt['melebihi']; ?></td>
                            <td><?php echo $nkt['memenuhi']; ?></td>
                            <td><?php echo $nkt['perlu_perhatian']; ?></td>
                            <td><?php echo $nkt['tidak_memenuhi']; ?></td>
                            <td><?php echo $nkt['bagian']; ?></td>
                            <td>
                                <a href="/admin/nkt/delete/<?= $nkt['id_nkt'] ?>" class="btn btn-danger mb-3">Hapus</a>
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
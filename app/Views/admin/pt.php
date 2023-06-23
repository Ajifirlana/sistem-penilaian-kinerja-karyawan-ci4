<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Data Pengendali Teknis</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="card-body">
            <a href="/admin/create_pt" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Unit Kerja</th>
                        <th>Nama Penanggung Jawab</th>
                        <th>Periode</th>
                        <th>No. Surat Dinas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pt as $no => $pt) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $pt['nip_pt']; ?></td>
                            <td><?php echo $pt['nama_pt']; ?></td>
                            <td><?php echo $pt['email_pt']; ?></td>
                            <td><?php echo $pt['unit_kerja_pt']; ?></td>
                            <td><?php echo $pt['nama_pj']; ?></td>
                            <td><?php echo $pt['periode_pt']; ?></td>
                            <td><?php echo $pt['no_surat_dinas_pt']; ?></td>
                            <td>
                                <a href="/admin/pt/delete/<?= $pt['idPT'] ?>" class="btn btn-danger mb-3">Hapus</a>
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
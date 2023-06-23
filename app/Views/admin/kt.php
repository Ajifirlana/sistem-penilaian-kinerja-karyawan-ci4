<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Data Ketua Tim</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="card-body">
            <a href="/admin/create_kt" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Unit Kerja</th>
                        <th>Nama Pengendali Teknis</th>
                        <th>Nama Penanggung Jawab</th>
                        <th>Periode</th>
                        <th>No. Surat Dinas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($kt as $no => $kt) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $kt['nip_kt']; ?></td>
                            <td><?php echo $kt['nama_kt']; ?></td>
                            <td><?php echo $kt['email_kt']; ?></td>
                            <td><?php echo $kt['unit_kerja_kt']; ?></td>
                            <td><?php echo $kt['nama_pt']; ?></td>
                            <td><?php echo $kt['nama_pj']; ?></td>
                            <td><?php echo $kt['periode_kt']; ?></td>
                            <td><?php echo $kt['no_surat_dinas_kt']; ?></td>
                            <td>
                                <a href="/admin/kt/delete/<?= $kt['idKT'] ?>" class="btn btn-danger mb-3">Hapus</a>
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
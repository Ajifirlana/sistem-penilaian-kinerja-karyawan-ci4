<?= $this->extend('adminTemplate') ?>
<?= $this->section('contentAdmin') ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="px-2 mb-0 text-gray-800">Data Anggota Tim</h3>
    <!-- Page Heading -->
    <div class="row">
        <div class="card-body">
            <a href="/admin/create_at" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Unit Kerja</th>
                        <th>Nama Ketua Tim</th>
                        <th>Nama Pengendali Teknis</th>
                        <th>Periode</th>
                        <th>No. Surat Dinas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($at as $no => $at) : ?>
                        <tr>
                            <td><?php echo $no + 1 ?></td>
                            <td><?php echo $at['nip_at']; ?></td>
                            <td><?php echo $at['nama_at']; ?></td>
                            <td><?php echo $at['email_at']; ?></td>
                            <td><?php echo $at['unit_kerja_at']; ?></td>
                            <td><?php echo $at['nama_kt']; ?></td>
                            <td><?php echo $at['nama_pt']; ?></td>
                            <td><?php echo $at['periode_at']; ?></td>
                            <td><?php echo $at['no_surat_dinas_at']; ?></td>
                            <td>
                                <a href="/admin/at/delete/<?= $at['idAT'] ?>" class="btn btn-danger mb-3">Hapus</a>
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
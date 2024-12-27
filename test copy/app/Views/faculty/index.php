<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-mid-12 table-responsive">
            <h1 class="mb-4">Daftar Fakultas</h1>
            <a href="<?php echo base_url('faculty/create') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            <table border="1" class="table table-bordered table-striped w-full">
                <thead class="thead-dark">
                    <tr>
                        <th>Kode Fakultas</th>
                        <th>Nama Fakultas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($fakultas) && is_array($fakultas)) : ?>
                    <?php foreach ($fakultas as $fak) : ?>
                    <tr>
                        <td><?= esc($fak['kd_fak']) ?></td>
                        <td><?= esc($fak['nm_fak']) ?></td>
                        <td>
                            <a href="<?php echo base_url('faculty/edit/'.$fak['kd_fak']) ?>"
                                class="btn btn-sm btn-primary">EDIT</a>
                            <a href="<?php echo base_url('faculty/delete/'.$fak['kd_fak']) ?>"
                                class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="3">Tidak ada data.</td>
                    </tr> <?php endif; ?>
                </tbody>
            </table>
            <?php echo $pager->links('fak', 'bootstrap_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
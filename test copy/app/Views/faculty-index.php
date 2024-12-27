<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-mid-12 table-responsive">
            <h1>Daftar Posts</h1>
            <a href="<?php echo base_url('fakultas/create') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            <table border="1" class="table table-bordered table-striped w-full">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>kd_fak</th>
                        <th>nm_fak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($faculties) && is_array($faculties)) : ?>
                    <?php foreach ($faculties as $faculty) : ?>
                    <tr>
                        <td><?= $faculty['kd_fak'] ?></td>
                        <td><?= esc($faculty['nm_fak']) ?></td>
                        <td>
                            <a href="<?php echo base_url('fakultas/edit/'.$faculty['kd_fakultas']) ?>"
                                class="btn btn-sm btn-primary">EDIT</a>
                            <a href="<?php echo base_url('fakultas/delete/'.$faculty['kd_fakultas']) ?>"
                                class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="3">Tidak ada data.</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
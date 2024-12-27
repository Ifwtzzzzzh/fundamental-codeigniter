<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-mid-12 table-responsive">
            <h1>Daftar Posts</h1>
            <a href="<?php echo base_url('post/create') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            <table border="1" class="table table-bordered table-striped w-full">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>kd_fak</th>
                        <th>nm_fak</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($tests) && is_array($tests)) : ?>
                    <?php foreach ($tests as $test) : ?>
                    <tr>
                        <td><?= esc($test['id']) ?></td>
                        <td><?= esc($test['kd_fak']) ?></td>
                        <td><?= esc($test['nm_fak']) ?></td>
                        <td>
                            <a href="<?php echo base_url('post/edit/'.$test['id']) ?>"
                                class="btn btn-sm btn-primary">EDIT</a>
                            <a href="<?php echo base_url('post/delete/'.$test['id']) ?>"
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
            <?php echo $pager->links('test', 'bootstrap_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
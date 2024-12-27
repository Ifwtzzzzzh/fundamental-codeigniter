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
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($posts) && is_array($posts)) : ?>
                    <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?= esc($post['id']) ?></td>
                        <td><?= esc($post['title']) ?></td>
                        <td><?= esc($post['content']) ?></td>
                        <td>
                            <a href="<?php echo base_url('post/edit/'.$post['id']) ?>"
                                class="btn btn-sm btn-primary">EDIT</a>
                            <a href="<?php echo base_url('post/delete/'.$post['id']) ?>"
                                class="btn btn-sm btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td colspan="3">Tidak ada data.</td>
                    </tr>table <?php endif; ?>
                </tbody>
            </table>
            <?php echo $pager->links('post', 'bootstrap_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($validation)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $validation->listErrors() ?>
            </div>
            <?php } ?>
            <h1 class="mb-5">Create Posts</h1>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('post/store') ?>" method="POST">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="title" placeholder="Masukkan Title">
                        </div>
                        <div class="form-group">
                            <label>KONTEN</label>
                            <textarea class="form-control" name="content" rows="4"
                                placeholder="Masukkan Konten"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
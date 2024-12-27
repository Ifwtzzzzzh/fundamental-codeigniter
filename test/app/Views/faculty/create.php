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
                    <form action="<?php echo base_url('faculty/store') ?>" method="POST">
                        <div class="form-group">
                            <label>Kode Fakultas</label>
                            <input type="text" class="form-control" name="kd_fak" placeholder="Masukkan Kode Fakultas">
                        </div>
                        <div class="form-group">
                            <label>Nama Fakultas</label>
                            <textarea class="form-control" name="nm_fak" rows="4"
                                placeholder="Masukkan Nama Fakultas"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
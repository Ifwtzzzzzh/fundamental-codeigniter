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
            <h1 class="mb-5">Edit Posts</h1>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('faculty/update/'.$fak['kd_fak']) ?>" method="POST">
                        <div class="form-group">
                            <label>Kode Fakultas</label>
                            <input type="text" class="form-control" name="kd_fak" value="<?php echo $fak['kd_fak'] ?>"
                                placeholder="Masukkan Kode Fakultas">
                        </div>
                        <div class="form-group">
                            <label>Nama Fakultas</label>
                            <input type="text" class="form-control" name="nm_fak" value="<?php echo $fak['nm_fak'] ?>"
                                placeholder="Masukkan Nama Fakultas">
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
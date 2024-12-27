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
                    <form action="<?php echo base_url('post/update/'.$post['id']) ?>" method="POST">
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $post['title'] ?>"
                                placeholder="Masukkan Title">
                        </div>
                        <div class="form-group">
                            <label>KONTEN</label>
                            <textarea class="form-control" name="content" rows="4"
                                placeholder="Masukkan Konten"><?php echo $post['content'] ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
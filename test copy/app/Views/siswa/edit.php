<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Data Siswa</h2>
        <form action="<?= base_url('siswa/update/' . $siswa['NIM']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="NIM" value="<?= $siswa['NIM'] ?>" readonly>
            </div>

            <div class="mb-3">
                <label for="nm_mhs" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nm_mhs" name="nm_mhs" value="<?= $siswa['nm_mhs'] ?>"
                    required>
            </div>

            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                    value="<?= $siswa['tgl_lahir'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="kd_fak" class="form-label">Fakultas</label>
                <select class="form-select" id="kd_fak" name="kd_fak" required>
                    <?php foreach ($fakultas as $fak): ?>
                    <option value="<?= $fak['kd_fak'] ?>" <?= ($fak['kd_fak'] == $siswa['kd_fak']) ? 'selected' : '' ?>>
                        <?= $fak['nm_fak'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="kd_prod" class="form-label">Program Studi</label>
                <select class="form-select" id="kd_prod" name="kd_prod" required>
                    <?php foreach ($prodi as $prod): ?>
                    <option value="<?= $prod['kd_prod'] ?>"
                        <?= ($prod['kd_prod'] == $siswa['kd_prod']) ? 'selected' : '' ?>>
                        <?= $prod['nm_prod'] ?>
                    </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('siswa') ?>" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>

</html>
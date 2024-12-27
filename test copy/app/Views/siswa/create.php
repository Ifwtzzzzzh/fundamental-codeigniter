<!DOCTYPE html>
<html>

<head>
    <title>Tambah Siswa</title>
</head>

<body>
    <h1>Tambah Siswa</h1>
    <form action="/siswa/store" method="post">
        <label>NIM</label>
        <input type="text" name="NIM" required><br>
        <label>Nama</label>
        <input type="text" name="nm_mhs" required><br>
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" required><br>
        <label>Fakultas</label>
        <select name="kd_fak">
            <?php foreach ($fakultas as $f): ?>
            <option value="<?= $f['kd_fak']; ?>"><?= $f['nm_fak']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <label>Program Studi</label>
        <select name="kd_prod">
            <?php foreach ($program_studi as $p): ?>
            <option value="<?= $p['kd_prod']; ?>"><?= $p['nm_prod']; ?></option>
            <?php endforeach; ?>
        </select><br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <a href="/siswa/create">Tambah Siswa</a>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($siswa as $row): ?>
        <tr>
            <td><?= $row['NIM']; ?></td>
            <td><?= $row['nm_mhs']; ?></td>
            <td><?= $row['tgl_lahir']; ?></td>
            <td><?= $row['kd_fak']; ?></td>
            <td><?= $row['kd_prod']; ?></td>
            <td>
                <a href="/siswa/edit/<?= $row['NIM']; ?>">Edit</a> |
                <a href="/siswa/delete/<?= $row['NIM']; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
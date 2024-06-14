<!DOCTYPE html>
<html>
<head>
    <title>Kelola Akun</title>
</head>
<body>
    <h1>Daftar Akun</h1>
    <a href="/account/create">Buat Akun Baru</a>
    <table border="1">
        <tr>
            <th>Username</th>
            <th>Nama</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($accounts as $account): ?>
        <tr>
            <td><?= $account['username'] ?></td>
            <td><?= $account['name'] ?></td>
            <td><?= $account['role'] ?></td>
            <td>
                <a href="/account/edit/<?= $account['username'] ?>">Edit</a>
                <a href="/account/delete/<?= $account['username'] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/">Kembali ke Beranda</a>
</body>
</html>
    
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Post</title>
</head>
<body>
<h1>Daftar Post</h1>
<a href="/post/create">Buat Post Baru</a>
<table border="1">
    <tr>
        <th>Judul</th>
        <th>Konten</th>
        <th>Tanggal</th>
        <th>Username</th>
        <th>Aksi</th>
    </tr>
    <?php foreach($posts as $post): ?>
    <tr>
        <td><?= $post['title'] ?></td>
        <td><?= $post['content'] ?></td>
        <td><?= $post['date'] ?></td>
        <td><?= $post['username'] ?></td>
        <td>
            <a href="/post/edit/<?= $post['idpost'] ?>">Edit</a>
            <a href="/post/delete/<?= $post['idpost'] ?>" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="/">Kembali ke Beranda</a>
</body>
</html>

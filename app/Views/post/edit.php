<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
<h1>Edit Post</h1>
<form action="/post/update/<?= $post['idpost'] ?>" method="post">
    <label>Judul:</label>
    <input type="text" name="title" value="<?= $post['title'] ?>" required><br>
    <label>Konten:</label>
    <textarea name="content" required><?= $post['content'] ?></textarea><br>
    <button type="submit">Simpan</button>
</form>
<a href="/post">Kembali ke Daftar Post</a>
</body>
</html>

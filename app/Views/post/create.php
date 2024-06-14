<!DOCTYPE html>
<html>
<head>
    <title>Buat Post Baru</title>
</head>
<body>
<h1>Buat Post Baru</h1>
<form action="/post/store" method="post">
    <label>Judul:</label>
    <input type="text" name="title" required><br>
    <label>Konten:</label>
    <textarea name="content" required></textarea><br>
    <button type="submit">Simpan</button>
</form>
<a href="/post">Kembali ke Daftar Post</a>
</body>
</html>

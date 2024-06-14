<!DOCTYPE html>
<html>
<head>
    <title>Buat Akun Baru</title>
</head>
<body>
<h1>Buat Akun Baru</h1>
<form action="/account/store" method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <label>Nama:</label>
    <input type="text" name="name" required><br>
    <label>Role:</label>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="author">Author</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
<a href="/account">Kembali ke Daftar Akun</a>
</body>
</html>

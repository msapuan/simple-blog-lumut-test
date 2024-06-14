<!DOCTYPE html>
<html>
<head>
    <title>Edit Akun</title>
</head>
<body>
<h1>Edit Akun</h1>
<form action="/account/update/<?= $account['username'] ?>" method="post">
    <label>Password:</label>
    <input type="password" name="password"><br>
    <label>Nama:</label>
    <input type="text" name="name" value="<?= $account['name'] ?>" required><br>
    <label>Role:</label>
    <select name="role">
        <option value="admin" <?= $account['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="author" <?= $account['role'] == 'author' ? 'selected' : '' ?>>Author</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
<a href="/account">Kembali ke Daftar Akun</a>
</body>
</html>

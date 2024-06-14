<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/auth/doLogin" method="post">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <?php if(session()->getFlashdata('error')): ?>
        <p><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
</body>
</html>

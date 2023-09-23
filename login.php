<!DOCTYPE html>
<html>
<head>
    <title>Login Pengguna</title>
</head>
<body>
    <h2>Login Pengguna</h2>
    <form method="post" action="login_process.php">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Kata Sandi:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="login" value="Masuk">
    </form>
</body>
</html>

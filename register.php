<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pengguna</title>
</head>
<body>
    <h2>Registrasi Pengguna</h2>
    <form method="post" action="register_process.php">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Kata Sandi:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" name="register" value="Daftar">
    </form>
</body>
</html>

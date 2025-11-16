<?php
session_start();

// Default akun login
$defaultUser = "admin";
$defaultPass = "123456";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $defaultUser && $password === $defaultPass) {
        $_SESSION["logged_in"] = true;
        $_SESSION["contacts"] = $_SESSION["contacts"] ?? [];
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem Kontak</title>
</head>
<body>
    <h2>Login Sistem Manajemen Kontak</h2>

    <?php if ($error): ?>
        <p style="color:red"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>

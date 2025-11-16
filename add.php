<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $telepon = trim($_POST["telepon"]);

    if ($nama === "") $errors[] = "Nama wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
    if (!preg_match("/^[0-9]+$/", $telepon)) $errors[] = "Nomor telepon hanya boleh angka.";

    if (empty($errors)) {
        $_SESSION["contacts"][] = [
            "nama" => $nama,
            "email" => $email,
            "telepon" => $telepon
        ];

        header("Location: dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kontak</title>
</head>
<body>
    <h2>Tambah Kontak</h2>
    <a href="dashboard.php">Kembali</a><br><br>

    <?php if ($errors): ?>
        <ul style="color:red">
            <?php foreach ($errors as $e): ?>
                <li><?php echo $e; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="telepon"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>

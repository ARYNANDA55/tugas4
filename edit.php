<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

$id = $_GET["id"] ?? null;

if (!isset($_SESSION["contacts"][$id])) {
    die("Kontak tidak ditemukan.");
}

$contact = $_SESSION["contacts"][$id];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"]);
    $email = trim($_POST["email"]);
    $telepon = trim($_POST["telepon"]);

    if ($nama === "") $errors[] = "Nama wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email tidak valid.";
    if (!preg_match("/^[0-9]+$/", $telepon)) $errors[] = "Telepon hanya angka.";

    if (empty($errors)) {
        $_SESSION["contacts"][$id] = [
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
    <title>Edit Kontak</title>
</head>
<body>

<h2>Edit Kontak</h2>
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
    <input type="text" name="nama" value="<?php echo htmlspecialchars($contact['nama']); ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($contact['email']); ?>"><br><br>

    <label>Telepon:</label><br>
    <input type="text" name="telepon" value="<?php echo htmlspecialchars($contact['telepon']); ?>"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>

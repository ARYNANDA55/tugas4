<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

$contacts = $_SESSION["contacts"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kontak</title>
</head>
<body>
    <h2>Daftar Kontak</h2>

    <a href="add.php">+ Tambah Kontak</a> |
    <a href="logout.php">Logout</a>
    <br><br>

    <?php if (empty($contacts)): ?>
        <p>Belum ada kontak.</p>
    <?php else: ?>
        <table border="1" cellpadding="8">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($contacts as $id => $c): ?>
                <tr>
                    <td><?php echo htmlspecialchars($c["nama"]); ?></td>
                    <td><?php echo htmlspecialchars($c["email"]); ?></td>
                    <td><?php echo htmlspecialchars($c["telepon"]); ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $id; ?>">Edit</a> |
                        <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Hapus kontak ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php endif; ?>

</body>
</html>

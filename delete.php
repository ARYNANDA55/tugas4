<?php
session_start();

if (!isset($_SESSION["logged_in"])) {
    header("Location: index.php");
    exit();
}

$id = $_GET["id"] ?? null;

if (isset($_SESSION["contacts"][$id])) {
    unset($_SESSION["contacts"][$id]);
}

header("Location: dashboard.php");
exit();
?>

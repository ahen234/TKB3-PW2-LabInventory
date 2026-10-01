<?php
session_start();

if(isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Inventaris</title>
</head>
<body>
    <h1>Dashboard Inventaris Lab</h1>
    <p> Selamat Datang di Halaman Inventaris Lab Kampus Politeknik Bisnis Indonesa</p>
    <p>Jenis akun : <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></p>

    <hr>
    <ul>
        <li><a href="update_stock.php">Update Stock</a></li>
        <li><a href="api_alat.php" target="_blank">Lihat Output API</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
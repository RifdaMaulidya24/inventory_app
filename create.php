<?php
include "config.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_item'];
    $jumlah = $_POST['jumlah'];

    $query = "INSERT INTO inventory (nama_item, jumlah) VALUES ('$nama', '$jumlah')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Item</title>
</head>
<body>
    <h1>Tambah Item</h1>
    <form method="POST">
        <label>Nama Item:</label><br>
        <input type="text" name="nama_item" required><br>
        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" required><br><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

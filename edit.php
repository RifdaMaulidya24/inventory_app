<?php
include "config.php";

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM inventory WHERE id = $id");
$item = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_item'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($conn, "UPDATE inventory SET nama_item='$nama', jumlah='$jumlah' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form method="POST">
        <label>Nama Item:</label><br>
        <input type="text" name="nama_item" value="<?php echo $item['nama_item']; ?>" required><br>
        <label>Jumlah:</label><br>
        <input type="number" name="jumlah" value="<?php echo $item['jumlah']; ?>" required><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>

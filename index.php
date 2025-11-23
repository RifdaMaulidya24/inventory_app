<?php
include "config.php";

// Ambil semua data inventory
$result = mysqli_query($conn, "SELECT * FROM inventory");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Inventory List</h1>
    <a href="create.php">Tambah Item</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama Item</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama_item']; ?></td>
            <td><?php echo $row['jumlah']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

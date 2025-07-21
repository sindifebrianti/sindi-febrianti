<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Produk</h2>
    <form method="post">
        <input type="text" name="nama" placeholder="Nama Produk" required><br>
        <input type="text" name="ukuran" placeholder="Ukuran" required><br>
        <input type="number" name="harga" placeholder="Harga" required><br>
        <button type="submit">Simpan</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $ukuran = $_POST['ukuran'];
        $harga = $_POST['harga'];
        $conn->query("INSERT INTO produk (nama, ukuran, harga) VALUES ('$nama', '$ukuran', '$harga')");
        header("Location: index.php");
    }
    ?>
</body>
</html>
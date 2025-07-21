<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Produk</h2>
    <form method="post">
        <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
        <input type="text" name="ukuran" value="<?= $data['ukuran'] ?>"><br>
        <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
        <button type="submit">Update</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $ukuran = $_POST['ukuran'];
        $harga = $_POST['harga'];
        $conn->query("UPDATE produk SET nama='$nama', ukuran='$ukuran', harga='$harga' WHERE id=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>
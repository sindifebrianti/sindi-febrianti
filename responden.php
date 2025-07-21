<?php
$koneksi = new mysqli("localhost", "root", "", "sindi_portal");

// Tambah data
if (isset($_POST['tambah'])) {
    $no = $_POST['no_responden'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];
    $koneksi->query("INSERT INTO responden (no_responden, nama, jenis_kelamin, kelas) 
                     VALUES ('$no', '$nama', '$jk', '$kelas')");
    header("Location: responden.php");
}

// Hapus data
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $koneksi->query("DELETE FROM responden WHERE id = '$id'");
    header("Location: responden.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Responden</title>
    <style>
        body {
            background-image: url('img/aqua_logo.PNG');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            background-color: rgba(255,255,255,0.95);
            padding: 20px;
            margin-top: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th {
            background-color: #00aaff;
            color: white;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 12px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], select {
            width: 100%;
            padding: 6px;
        }
        .btn {
            padding: 8px 16px;
            background-color: #0077cc;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 style="text-align:center;">Form Input Data Responden</h2>
    <form method="post">
        <div class="form-group">
            <label>No. Responden:</label>
            <input type="text" name="no_responden" required>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" required>
        </div>
        <button type="submit" name="tambah" class="btn">Tambah</button>
    </form>

    <hr>

    <h3 style="text-align:center;">Daftar Responden</h3>
    <table>
        <tr>
            <th>No</th>
            <th>No. Responden</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = $koneksi->query("SELECT * FROM responden");
        while ($d = $data->fetch_assoc()) {
            echo "<tr>
                    <td>$no</td>
                    <td>$d[no_responden]</td>
                    <td>$d[nama]</td>
                    <td>$d[jenis_kelamin]</td>
                    <td>$d[kelas]</td>
                    <td>
                        <a href='responden.php?hapus=$d[id]' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</div>
</body>
</html>

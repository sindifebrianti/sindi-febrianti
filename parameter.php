<?php
include "koneksi.php";

// Ambil kata kunci pencarian
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

// Query pencarian data dari tabel parameter
$sql = "SELECT * FROM parameter WHERE CAST(no_responden AS CHAR) LIKE '%$keyword%'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parameter Penilaian</title>
    <style>
        body {
            margin: 0;
            background-image: url('img/aqua.jpg'); /* Pastikan file ada */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            min-height: 100vh;
        }

        .container {
            width: 70%;
            margin: 50px auto;
            padding: 25px;
            background-color: rgba(255,255,255,0.9);
            border-radius: 15px;
            box-shadow: 0 0 15px #aaa;
            text-align: center;
        }

        h2 {
            color: #0072c6;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #888;
        }

        button {
            padding: 8px 12px;
            background-color: #0072c6;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #aaa;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #0072c6;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Penilaian Parameter</h2>
    <form method="GET">
        <input type="text" name="keyword" placeholder="Cari No Responden..." value="<?= $keyword ?>">
        <button type="submit">Cari</button>
    </form>

    <table>
        <tr>
            <th>No Responden</th>
            <th>Penilaian Komunitas Lokal</th>
            <th>Penilaian Relevansi</th>
            <th>Penilaian Dampak Sosial</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $row['no_responden']; ?></td>
            <td><?= $row['penilaian_komunitas']; ?></td>
            <td><?= $row['penilaian_relevansi']; ?></td>
            <td><?= $row['penilaian_dampak']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>

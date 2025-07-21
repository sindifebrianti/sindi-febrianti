<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Jurnal</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    h2 {
      color: #0077cc;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    a {
      color: #0066cc;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<h2>Daftar Jurnal CSR</h2>

<table>
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>File</th>
  </tr>

  <?php
  $no = 1;
  $query = "SELECT * FROM jurnal";
  $result = mysqli_query($conn, $query);

  while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>{$no}</td>";
    echo "<td>{$data['judul']}</td>";
    echo "<td>{$data['penulis']}</td>";
    echo "<td><a href='uploads/{$data['file']}' target='_blank'>Lihat File</a></td>";
    echo "</tr>";
    $no++;
  }
  ?>
</table>

</body>
</html>

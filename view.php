<?php
$koneksi = new mysqli("localhost", "root", "", "sindi_portal");

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $komunitas = $_POST['komunitas'];
  $relevansi = $_POST['relevansi'];
  $dampak = $_POST['dampak'];
  $keputusan = $_POST['keputusan'];

  $query = "INSERT INTO hasil_keputusan (nama, komunitas_lokal, relevansi, dampak_sosial, keputusan) 
            VALUES ('$nama', '$komunitas', '$relevansi', '$dampak', '$keputusan')";
  $koneksi->query($query);
}
?>

<h2>Input Hasil Keputusan</h2>
<form method="post">
  <label>Nama:</label><br>
  <input type="text" name="nama" required><br>

  <label>Komunitas Lokal:</label><br>
  <input type="text" name="komunitas" required><br>

  <label>Relevansi:</label><br>
  <input type="text" name="relevansi" required><br>

  <label>Dampak Sosial:</label><br>
  <input type="text" name="dampak" required><br>

  <label>Keputusan:</label><br>
  <input type="text" name="keputusan" required><br><br>

  <button type="submit" name="simpan">Simpan</button>
</form>

<hr>

<h2>Data Hasil Keputusan</h2>
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>Nama</th>
    <th>Komunitas Lokal</th>
    <th>Relevansi</th>
    <th>Dampak Sosial</th>
    <th>Keputusan</th>
  </tr>

  <?php
  $result = $koneksi->query("SELECT * FROM hasil_keputusan ORDER BY id ASC");
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['komunitas_lokal'] . "</td>
            <td>" . $row['relevansi'] . "</td>
            <td>" . $row['dampak_sosial'] . "</td>
            <td>" . $row['keputusan'] . "</td>
          </tr>";
  }
  ?>
</table>

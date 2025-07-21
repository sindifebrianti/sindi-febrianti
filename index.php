<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Portal AQUA Indonesia</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-image: url('img/aqua_logo.PNG');
      background-size: cover;
      background-position: center;
      height: 150px;
      color: white;
      text-align: center;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    nav {
      background-color: #008cba;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
      font-size: 16px;
    }

    nav a:hover {
      color: yellow;
    }

    iframe {
      width: 100%;
      height: 500px;
      border: none;
    }

    footer {
      background-color: #f2f2f2;
      text-align: center;
      padding: 15px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>
    <h1>Portal CSR Pabrik AQUA Indonesia</h1>
    <p>Evaluasi Dampak terhadap Komunitas Lokal</p>
  </header>

  <nav>
    <a href="biodata.html" target="konten">Biodata</a>
    <a href="sejarah.html" target="konten">Sejarah</a>
    <a href="responden.php" target="konten">Responden</a>
    <a href="parameter.php" target="konten">Parameter</a>
    <a href="view.php" target="konten">View</a>
    <a href="jurnal.html" target="konten">Jurnal</a>
  </nav>

  <iframe name="konten" src="biodata.html"></iframe>

  <footer>
    &copy; 2025 - Portal Evaluasi CSR AQUA | Sindi & Zezen
  </footer>

</body>
</html>

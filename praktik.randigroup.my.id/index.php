<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apotek</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="logo apotek.png" />
</head>

<body>
  <?php
  require("koneksi.php");
  $query = "TRUNCATE id_berjalan";
  mysqli_query($host, $query);
  $_SESSION['a'] = "";
  $_SESSION['b'] = "";
  $_SESSION['c'] = "";
  $_SESSION['d'] = "";
  $_SESSION['e'] = "";
  $_SESSION['f'] = "";
  $_SESSION['g'] = "";

  if (isset($_GET['ubah'])) {
    $query = "TRUNCATE id_berjalan";
    mysqli_query($host, $query);
    $_SESSION['a'] = $_GET['a'];
    $idberjalan = $_GET['a'];
    $query = "INSERT INTO `id_berjalan` (`id`) VALUES ('$idberjalan');";
    mysqli_query($host, $query);
    $_SESSION['b'] = $_GET['b'];
    $_SESSION['c'] = $_GET['c'];
    $_SESSION['d'] = $_GET['d'];
    $_SESSION['e'] = $_GET['e'];
    $_SESSION['f'] = $_GET['f'];
    $_SESSION['g'] = $_GET['g'];
  }
  ?>
  <h1>DAFTAR OBAT</h1>
  <div class="container">
    <div class="kotakan">
      <div class="daftar">
        <h2>Tabel Obat</h2>
        <?php
        require("tampil.php");
        ?>
      </div>
      <div class="isi">
        <h2>Kelola Data Obat</h2>
        <?php
        require("kelola.php");
        $id = $_SESSION['a'];;
        ?>
      </div>

    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apotek</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <?php
  require("koneksi.php");
  session_start();
  $sessdir = dirname(dirname(__FILE__)) . '/session_dir';
  ini_set('session.session_dir', $sessdir);
  $_SESSION['a'] = "";
  $_SESSION['b'] = "";
  $_SESSION['c'] = "";
  $_SESSION['d'] = "";
  $_SESSION['e'] = "";
  $_SESSION['f'] = "";
  $_SESSION['g'] = "";
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
        ?>
      </div>

    </div>
  </div>
</body>

</html>
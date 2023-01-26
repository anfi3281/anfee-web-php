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
  $_SESSION['a'] = "";
  $_SESSION['b'] = "";
  $_SESSION['c'] = "";
  $_SESSION['d'] = "";
  $_SESSION['e'] = "";
  $_SESSION['f'] = "";
  $_SESSION['g'] = "";



  if (isset($_POST['ubah'])) {
    $kbid = $_SESSION['a'];
    $kb = $_POST['kb'];
    $nb = $_POST['nb'];
    $ks = $_POST['ks'];
    $kk = $_POST['kk'];
    $hj = $_POST['hj'];
    $hb = $_POST['hb'];
    $a = $_POST['a'];
    $query = "UPDATE tbobat set kd_barang='$kb', nm_barang='$nb', kd_satuan='$ks', kd_kategori='$kk', hrg_jual='$hj', hrg_beli='$hb', active='$a' WHERE kd_barang='$kbid'";
    mysqli_query($host, $query);
    header("Location: index.php");
  }

  if (isset($_GET['ubah'])) {
    $_SESSION['a'] = $_GET['a'];
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
        ?>
      </div>

    </div>
  </div>
</body>

</html>
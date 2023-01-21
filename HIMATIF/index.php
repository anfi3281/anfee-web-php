<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HIMATIF</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="../logo.jpg" />
</head>

<body>
  <div class="halaman">
    <header>
      <h1>HIMATIF</h1>
      <h3>Himpunan Mahasiswa Teknologi Informasi</h3>
    </header>
    <div class="navbar">
      <ul>
        <li><a href="index.php?halaman=home">HOME</a></li>
        <li><a href="index.php?halaman=tentang">TENTANG</a></li>
        <li><a href="index.php?halaman=info">INFO</a></li>
      </ul>
    </div>
    <div class="content">

      <div class="maaf">
        <?php
        if (isset($_GET['halaman'])) {
          $halaman = $_GET['halaman'];

          switch ($halaman) {
            case ('home'):
              include('halaman/home.php');
              break;
            case ('tentang'):
              include('halaman/tentang.php');
              break;
            case ('info'):
              include('halaman/info.php');
              break;
            default:
              include('halaman/home.php');
              break;
          }
        } else { ?>
          <?php echo "Maaf, Halaman yang Anda cari tidak ada"; ?>
      </div>
    <?php }
    ?>
    </div>
  </div>
</body>

</html>
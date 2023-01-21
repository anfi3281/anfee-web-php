<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Membuat Halaman Web Dinamis</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <!-- 
        Author : Randi
        Kelas  : TIF21B
    -->
  <div class="content">
    <header>
      <h1 class="judul">randi.com</h1>
      <h3 class="deskripsi">Membuat halaman web dinamis</h3>
    </header>
    <div class="menu">
      <ul>
        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=tentang">TENTANG</a></li>
        <li><a href="index.php?page=tutorial">TUTORIAL</a></li>
      </ul>
    </div>

    <div class="badan">

      <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
          case 'home':
            include "halaman/home.php";
            break;
          case 'tentang':
            include "halaman/tentang.php";
            break;
          case 'tutorial':
            include "halaman/tutorial.php";
            break;
          default:
            echo "<center><h3>Maaf, Halaman tidak ditemukan</h3></center>";
        }
      } else {
        include "halaman/home.php";
      }
      ?>

    </div>

  </div>
</body>

</html>
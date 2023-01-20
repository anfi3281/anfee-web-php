<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kalkulator</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shorcut icon" href="../logo.jpg" />
</head>

<body>
  <?php
  if (isset($_POST['hitung'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
      case 'tambah':
        $hasil = $bil1 + $bil2;
        break;
      case 'kurang':
        $hasil = $bil1 - $bil2;
        break;
      case 'kali':
        $hasil = $bil1 * $bil2;
        break;
      case 'bagi':
        $hasil = $bil1 / $bil2;
        break;
    }
  }
  ?>
  <div class="container">
    <div class="tengah">
      <div class="dalam">
        <div class="kotak">
          <h1>KALKULATOR</h1>
          <form action="index.php" method="post" style="margin-bottom:0px;">
            <a href="https://www.malasngoding.com">www.malasngoding.com</a>
            <br />
            <input type="text" name="bil1" size="40px" style="height: 30px; border-radius: 5px" placeholder="Masukkan Bilangan Pertama" /><br />
            <input type="text" name="bil2" size="40px" style="height: 30px; border-radius: 5px" placeholder="Masukkan Bilangan Kedua" /><br />
            <select name="operasi" id="" style="height: 30px; border-radius: 5px; width: 170px">
              <option value="tambah">+</option>
              <option value="kurang">-</option>
              <option value="kali">*</option>
              <option value="bagi">/</option>
            </select>
            <input type="submit" value="Hitung" name="hitung" style="width: 93px; height: 30px; color:white; background-color: red; border-radius: 4px; box-shadow: 0px 0px 0px 2px red; margin-left: 2px; font-size: 10pt; border:0" /><br />
          </form>
          <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" size="40px" style="height: 30px; border-radius: 5px" value="<?php echo $hasil ?>" />
          <?php } else { ?>
            <input type="text" size="40px" style="height: 30px; border-radius: 5px" value="0" />
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
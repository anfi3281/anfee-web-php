<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ITNSA</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="logo itnsa.png" />
</head>

<body>
  <?php
  require("koneksi.php");
  ?>
  <div class="logo">
    <img src="logo itnsa.png" alt="" />
  </div>
  <div class="container">
    <h3>ITNSA</h3>
    <form action="index.php" method="post">
      <table align="center">
        <tr>
          <a style="color:black">-</a>
          <a style="color:red"><?php echo $hasil; ?></a>
          <a style="color:black">-</a>
        </tr>
        <tr>
          <td style="text-align:left">Username</td>
          <td><input type="text" name="username" /></td>
        </tr>
        <tr>
          <td style="text-align:left">Password</td>
          <td><input type="password" name="password" /></td>
        </tr>
        <tr>
          <td style="text-align:left">Capthca</td>
          <td><img src="captcha.php" alt="gambar" name="captcha" /></td>
        </tr>
        <tr>
          <td style="text-align:left; width:100px;">Isi Captcha</td>
          <td><input type="text" name="username" /></td>
        </tr>
      </table>
      <div class="masuk">
        <input class="tombol" type="submit" name="masuk" value="MASUK" />
      </div>
    </form>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Captcha</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../logo.jpg" />
  </head>
  <body>
    <?php
      if(isset($_GET['pesan'])){
        echo "<p>Captcha tidak sesuai.</p>";
      }
    ?>
    <div class="container">
      <h3 style="text-align: center">Isi Captcha dengan Benar</h3>
      <form action="periksa_captcha.php" method="post">
        <table align="center">
          <td>Captcha</td>
          <td><img src="captcha.php" alt="gambar"></td>
          <tr>
            <td>Isikan Captcha</td>
            <td><input type="text" name="nilaiCaptcha" value=""/></td>
          </tr>
        </table>
        <input type="submit" Value="Cek Captcha">
      </form>
    </div>
  </body>
</html>

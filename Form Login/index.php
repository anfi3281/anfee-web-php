<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Login</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="../logo.jpg" />
</head>

<body>
  <div class="container">
    <?php
    require('konek.php');
    ?>
    <h1>LOGIN FORM</h1>
    <form action="index.php" method="post">
      <table style="margin-bottom: 40px;">
        <tr>
          <td style="width: 100px">Username</td>
          <td><input type="text" name="nama" placeholder=""/></td>
        </tr>
        <tr>
          <td style="width: 100px;">Password</td>
          <td><input type="text" name="pass" placeholder=""/></td>
        </tr>
      </table>
      <div class="text" style="color: red; font-size: 8pt; text-align: center; margin-top: -30px; margin-bottom: 10px;"><a style="color: rgb(14, 202, 14);">-</a><?php echo $hasil;?><a style="color: rgb(14, 202, 14);">-</a></div>
      <div class="submit">
        <input id="masuk" type="submit" name="input" value="ENTER" />
      </div>
    </form>
  </div>
</body>

</html>
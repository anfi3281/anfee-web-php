<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=s, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="shorcut icon" href="../logo.jpg" />
  </head>
  <body>
    <?php require('cek.php'); ?>
    <div class="container">
      <div class="tengah">
        <div class="kotak">
          <h1>Login</h1>
          <form action="index.php" method="post">
            <label>Username : </label>
            <input type="text" name="username" /><br />            
            <label>Password : </label>
            <input type="password" name="password"/><br />
            <?php echo $hasil;?>          
            <div class="submit">
              <input type="submit" value="ENTER" name="enter" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

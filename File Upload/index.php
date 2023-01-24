<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upload File</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
  <?php
  require("aksi.php");
  ?>
  <div class="container">
    <div class="subcontainer">
      <h3>Belajar Membuat Upload File</h3>
      <?php
      switch ($page) {
        case (0): ?>
          <form action="index.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <br>
            <input type="submit" name="upload" value="Upload" style="margin-top:20px" />
          </form>
        <?php
          break;
        case (1):
        ?>
          <form action="index.php" method="post">
            <?php echo $hasil;?>
            <br>
            <input type="submit" value="Kembali" name="kembali" style="margin-top:20px" />
          </form>
      <?php
          break;
      }
      ?>
    </div>
  </div>
</body>

</html>
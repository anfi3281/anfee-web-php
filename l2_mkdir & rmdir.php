<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membuat folder dan hapus folder dengan php</title>
  </head>
  <body>
    <h1>Membuat mkdir</h1>
    <?php
        function hai(){
            echo "Folder telah dibuat";
        }

        function hapus(){
            echo "Folder telah dihapus";
        }

        mkdir("malas ngoding2", hai());
        rmdir("malas ngoding2", hapus());
        ?>
  </body>
</html>

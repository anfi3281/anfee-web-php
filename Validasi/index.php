<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h1>Membuat Form Validation</h1>
    <?php
        if(isset($_GET['nama'])){
            if($_GET['nama'] == "kosong"){
                echo "<h2 style='color:red'>Maaf, Nama Anda kosong</h2>";
            }
        }
    ?>
    <form action="cek.php" method="post">
        Username : <input type="text" name="username">
        <input type="submit" name="kirim" value="Kirim">
    </form>
</body>
</html>
<?php
$nama = $_POST['username'];
if ($nama == "") {
    header("Location: index.php?nama=kosong");
} else {
    echo "Nama Anda adalah : " . $nama;
}

<?php
$host = mysqli_connect('localhost', 'root', '', 'login');
$hasil = "";
$query = mysqli_query($host, "SELECT * FROM data");
$isi = mysqli_fetch_assoc($query);
if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    while ($isi){
        if($isi['username'] == $user && $pass == $isi['password']){
            header("Location: home.php");
        }
    }
    $hasil = "maaf, username atau password Anda salah";
}

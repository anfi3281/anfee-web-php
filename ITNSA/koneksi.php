<?php
session_start();
$host = mysqli_connect('localhost', 'root', '', 'login');
$hasil = "";

if (isset($_POST['masuk'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = mysqli_query($host, "SELECT * FROM data WHERE username LIKE '%$user%' AND password LIKE '%$pass%'");
    $isi = mysqli_fetch_assoc($query);

    if (isset($_POST['masuk'])) {
        if ($_SESSION['Captcha'] == $_POST['captcha']) {

            if (!$isi) {
                $hasil = "maaf, username atau password Anda salah";
            } else if (!$user && !$pass) {
                $hasil = "maaf, username atau password Anda kosong";
            } else {
                header("Location: home.php");
            }
        } else {
            $hasil = "Maaf, captcha salah";
        }
    }
}

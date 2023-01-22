<?php
$host = mysqli_connect('localhost', 'root', '');
$database = mysqli_select_db($host, 'login');
$hasil = "";
if (isset($_POST['input'])) {
    $user = $_POST['nama'];
    $pass = $_POST['pass'];
    $query = mysqli_query($host, "SELECT * FROM data WHERE username='randi' AND password='123'");
    $isi = mysqli_fetch_array($query);
    if($user == $isi['username'] && $pass == $isi['password']){
        header("Location: berhasil.php");
    }else{
        $hasil = "Maaf, username atau password Anda salah";
    }
}
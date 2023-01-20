<?php
    $hasil = "";
    if(isset($_POST['enter'])){
        if($_POST['username'] == "Randi" && $_POST['password'] == "123"){
            header("Location: berhasil_login.php");
        }else if($_POST['username'] == "" && $_POST['password'] == ""){
            $hasil ="";
        }else{
            $hasil ="gagal";
        }
    }
?>
<?php
require('koneksi.php');
$page = 0;
$hasil = "";
if (isset($_POST['upload'])) {
    $extensi_diizinkan = array("jpg", "png");
    $nama = $_FILES['file']['name'];
    $nama_terpisah = explode(".", $nama);
    $extensi = strtolower(end($nama_terpisah));
    $ukuran = $_FILES['file']['size'];
    $letak_sementara = $_FILES['file']['tmp_name'];

    if (in_array($extensi, $extensi_diizinkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($letak_sementara, 'file/' . $nama);
            $query = mysqli_query($host, "INSERT INTO upload VALUES(NULL, '$nama')");
            if ($query) {
                $page = 1;
                $hasil = "Upload File Berhasil";
            } else {
                $page = 1;
                $hasil = "Gagal Mengupload Gambar";
            }
        } else {
            $page = 1;
            $hasil = "Ukuran File Terlalu Besar";
        }
    } else {
        $page = 1;
        $hasil = "Ekstensi File Tidak Diperbolehkan";
    }
}
if (isset($_POST['kembali'])) {
    $page = 0;
}

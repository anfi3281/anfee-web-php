<style>
    .tabling tr td {
        text-align: left;
        width: 150px;
    }

    tr {
        height: 30px;
    }

    .combo {
        width: 300px;
        margin-top: 20px;
        border: 0;
        padding: 2px;
        height: 30px;
        border-radius: 25px;
        margin-bottom: 5px;
        text-align: center;
        background-color: rgb(236, 236, 236);
    }

    .combo:hover {
        background-color: rgb(177, 177, 177);
        cursor: pointer;
    }

    .option:active {
        background-color: rgb(236, 236, 236);
        cursor: pointer;
    }

    .button {
        margin-top: 30px;
        width: 80px;
        border: 0;
        height: 30px;
        border-radius: 10px;
    }

    .hapus {
        background-color: rgb(255, 90, 90);
        color: white;
        font-size: 11px;
        transition: 0.3s;
    }

    .hapus:hover {
        background-color: red;
        cursor: pointer;
    }

    .ubah {
        background-color: rgb(255, 162, 56);
        color: white;
        font-size: 11px;
        transition: 0.3s;
    }

    .ubah:hover {
        background-color: rgb(255, 136, 0);
        cursor: pointer;
    }
</style>
<?php

require("koneksi.php");
if (isset($_POST['ubah'])) {
    session_start();
    $id = $_SESSION['a'];
    $kb = $_POST['kb'];
    $nb = $_POST['nb'];
    $ks = $_POST['ks'];
    $kk = $_POST['kk'];
    $hj = $_POST['hj'];
    $hb = $_POST['hb'];
    $a = $_POST['a'];
    $query = "UPDATE tbobat set kd_barang='$kb', nm_barang='$nb', kd_satuan='$ks', kd_kategori='$kk', hrg_jual='$hj', hrg_beli='$hb', active='$a' WHERE kd_barang='$id'";
    mysqli_query($host, $query);
    header("Location: index.php");
}
$a = $_SESSION['a'];
$b = $_SESSION['b'];
$c = $_SESSION['c'];
$d = $_SESSION['d'];
$e = $_SESSION['e'];
$f = $_SESSION['f'];
$g = $_SESSION['g'];
if (isset($_POST['input'])) {
    $kb = $_POST['kb'];
    $nb = $_POST['nb'];
    $ks = $_POST['ks'];
    $kk = $_POST['kk'];
    $hj = $_POST['hj'];
    $hb = $_POST['hb'];
    $a = $_POST['a'];
    $query = "INSERT INTO tbobat VALUES('$kb','$nb','$ks','$kk','$hj','$hb','$a')";
    mysqli_query($host, $query);
    header("Location: index.php");
}

if (isset($_GET['hapus'])) {
    $id = $_GET['koba'];
    $query = "DELETE FROM tbobat WHERE kd_barang = '$id'";
    mysqli_query($host, $query);
    header("Location: index.php");
}
?>
<form action="kelola.php" method="post">
    <table align="center" class="tabling">
        <tr>
            <td>Kode Barang </td>
            <td><input type="text" name="kb" placeholder="Kode Barang ..." value="<?php echo $a; ?>"></td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td><input type="text" name="nb" placeholder="Nama Barang ..." value="<?php echo $b; ?>"></td>
        </tr>
        <tr>
            <td>Kode Satuan </td>
            <td><input type="text" name="ks" placeholder="Kode Satuan ..." value="<?php echo $c; ?>"></td>
        </tr>
        <tr>
            <td>Kode Kategori </td>
            <td><input type="text" name="kk" placeholder="Kode Kategori ..." value="<?php echo $d; ?>"></td>
        </tr>
        <tr>
            <td>Harga Jual </td>
            <td><input type="text" name="hj" placeholder="Harga Jual ..." value="<?php echo $e; ?>"></td>
        </tr>
        <tr>
            <td>Harga Beli </td>
            <td><input type="text" name="hb" placeholder="Harga Beli ..." value="<?php echo $f; ?>"></td>
        </tr>
        <tr>
            <td>Active </td>
            <td><input type="text" name="a" placeholder="Active ..." value="<?php echo $g; ?>"></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td><input type="submit" class="button ubah" value="UPDATE" name="ubah"></td>
            <td style="width: 10px;"></td>
            <td><input type="submit" class="submit" value="INPUT" name="input" /></td>
        </tr>
    </table>
</form>
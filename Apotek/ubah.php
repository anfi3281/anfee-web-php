<style>
    tr td {
        text-align: left;
        width: 150px;
    }

    tr {
        height: 30px;
    }

    .button {
        margin-top: 30px;
        width: 150px;
        border: 0;
        height: 30px;
        border-radius: 10px;
    }

    .kembali {
        background-color: rgb(255, 90, 90);
        color: white;
        font-size: 11px;
        transition: 0.3s;
    }

    .kembali:hover {
        background-color: red;
        cursor: pointer;
    }

    .input {
        background-color: rgb(93, 93, 255);
        color: white;
        font-size: 11px;
        transition: 0.3s;
    }

    .input:hover {
        background-color: blue;
        cursor: pointer;
    }

    .combo {
        width: 150px;
    }
</style>
<form action="input.php" method="post">
    <table align="center">
        <tr>
            <td>Kode Barang </td>
            <td>
                <select name="" id="" class="combo">
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" placeholder="Ubah Kode Barang..."></td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td><input type="text" placeholder="Ubah Nama Barang...">></td>
        </tr>
        <tr>
            <td>Kode Satuan </td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Kode Kategori </td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Harga Jual </td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Harga Beli </td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Active </td>
            <td><input type="text"></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td><input type="submit" class="button input" value="KEMBALI" name="kembali"></td>
            <td style="width: 10px;"></td>
            <td><input type="submit" class="button kembali" value="UBAH" name="hapus"></td>
        </tr>
    </table>
</form>
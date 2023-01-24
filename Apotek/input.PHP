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
        background-color: red;
        color: white;
        font-size: 11px;
    }

    .input {
        background-color: blue;
        color: white;
        font-size: 11px;
    }
</style>
<form action="input.php" method="post">
    <table align="center">
        <tr>
            <td>Kode Barang </td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Nama Barang </td>
            <td><input type="text"></td>
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
            <td><input type="submit" class="button kembali" value="KEMBALI" name="kembali"></td>
            <td style="width: 10px;"></td>
            <td><input type="submit" class="button input" value="INPUT" name="input"></td>
        </tr>
    </table>
</form>
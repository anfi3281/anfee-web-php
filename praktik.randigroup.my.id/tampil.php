<div class="kotak">
  <table border="1" align="center">
    <tr>
      <th>ID Obat</th>
      <th>Nama Obat</th>
      <th>ID Jenis Obat</th>
      <th>Kategori Obat</th>
      <th>Harga Jual Obat</th>
      <th>Harga Beli Obat</th>
      <th>Status Nama Obat</th>
      <th>Keterangan</th>
    </tr>
    <?php
    $query = "SELECT * FROM tbobat ORDER BY kd_barang ASC";
    $data = mysqli_query($host, $query);
    while ($obat = mysqli_fetch_array($data)) {
    ?>
      <tr>
        <td><?php echo $obat[0]; ?></td>
        <td><?php echo $obat[1]; ?></td>
        <td><?php echo $obat[2]; ?></td>
        <td><?php echo $obat[3]; ?></td>
        <td><?php echo $obat[4]; ?></td>
        <td><?php echo $obat[5]; ?></td>
        <td><?php echo $obat[6]; ?></td>
        <td><a class="ahapus" href="kelola.php?hapus=iya&koba=<?php echo $obat[0]; ?>">HAPUS</a> | <a class="aubah" href="index.php?ubah=iya&a=<?php echo $obat[0]; ?>&b=<?php echo $obat[1]; ?>&c=<?php echo $obat[2]; ?>&d=<?php echo $obat[3]; ?>&e=<?php echo $obat[4]; ?>&f=<?php echo $obat[5]; ?>&g=<?php echo $obat[6]; ?>">UBAH</a></td>
      </tr>
    <?php
    }
    ?>
  </table>
</div>
</form>
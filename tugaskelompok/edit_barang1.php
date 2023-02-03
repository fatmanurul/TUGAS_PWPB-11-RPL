<?php
include 'koneksi1.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM `tb_koprasi` WHERE `id_barang` = $id");

$tampil = mysqli_fetch_array($data); 


?>
<form action="update_barang1.php" method="POST">
    <input type="text" name="id_barang" value="<?php echo $id;?>" hidden=""><br>
    <input type="text" name="nama_barang" value="<?php echo $tampil['nama_barang']?>"><br>
    <input type="number" name="jumlah_barang" value="<?php echo $tampil['jumlah_barang']?>"><br>
    <input type="number" name="stok_barang" value="<?php echo $tampil['stok_barang']?>"><br>
    <input type="submit" value = "kirim">
</form>
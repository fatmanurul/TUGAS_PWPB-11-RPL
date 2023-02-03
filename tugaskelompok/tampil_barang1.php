<?php
include 'koneksi1.php';
$data = mysqli_query($koneksi, "SELECT * FROM `tb_koprasi`");
?>
<a href="tambah_data1.php">tambah data</a><br>
<?php
foreach($data as $data){
    echo $data['nama_barang']; 
    echo $data['jumlah_barang'];
    echo $data['stok_barang'];
    ?>
    <a href="delete_barang1.php?id=<?php echo $data['id_barang']?>">hapus</a>
    &nbsp
    <a href="edit_barang1.php?id=<?php echo $data['id_barang']?>">edit</a><br>
    <br>
    <?php
}
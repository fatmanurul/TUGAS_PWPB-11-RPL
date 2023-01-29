<?php
include 'koneksi1.php';
$data = mysqli_query($koneksi1,"SELECT * FROM `tb_koprasi`");
?>
<a href = "tambah_data1.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data ['nama_barang'];
    echo $data ['jumlah_barang'];
    echo $data ['stok_barang'];
    ?>
   <a href = "delete_barang.php?id><?php $data['id_barang']?>">hapus</a><br> 
   <br>
   <?php
}

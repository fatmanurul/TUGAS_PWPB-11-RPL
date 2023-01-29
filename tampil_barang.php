<?php
include 'koneksi.php';
$data= mysqli_query($koneksi,"SELECT * FROM `barang`");
?>
<a href = "tambah_data.php">tambah data</a><br>

<?php
foreach($data as $data){
    echo $data ['Nama_barang'];
    echo $data ['jumlah_barang'];
    echo $data ['stok_barang'];
    ?>
   <a href = "delete_barang.php?id=<?php $data['id_barang']?>">hapus</a><br> 
   <br>
   <?php
}
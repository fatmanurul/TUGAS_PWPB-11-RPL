<?php

include 'koneksi1.php';
echo $id= $_POST['id_barang'];
echo $nama_barang = $_POST['nama_barang'];
echo $jumlah_barang = $_POST['jumlah_barang'];
echo $stok_barang = $_POST['stok_barang'];

$data = mysqli_query($koneksi,"UPDATE `tb_koprasi` SET `nama_barang`='$nama_barang',`jumlah_barang`='$jumlah_barang',`stok_barang`='$stok_barang' WHERE `id_barang` = $id");

header("location: tampil_barang1.php");
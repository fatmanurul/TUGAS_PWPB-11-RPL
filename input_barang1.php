<?php
include 'koneksi1.php';
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$stok_barang = $_POST['stok_barang'];

$data = mysqli_query($koneksi1, "INSERT INTO `tb_koprasi`(`nama_barang`, `jumlah_barang`, `stok_barang`) VALUES ('$nama_barang','$jumlah_barang','$stok_barang')");

header("location:tampil_barang1.php");
?>
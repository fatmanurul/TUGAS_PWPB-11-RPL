<?php
include 'koneksi1.php';
 $nama_barang = $_POST['nama_barang'];
 $jml_barang = $_POST['jml_barang'];
 $stok_barang = $_POST['stok_barang'];

 $data = mysqli_query($koneksi, "INSERT INTO `tb_koprasi`(`nama_barang`, `jumlah_barang`, `stok_barang`) VALUES ('$nama_barang','$jml_barang','$stok_barang')");

 header("location: tampil_barang1.php");

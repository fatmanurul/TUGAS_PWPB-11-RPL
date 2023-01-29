<?php
include 'koneksi.php';

$nama_barang= $_POST['nama_barang'];
$jml_barang= $_POST['jml_barang'];

$data= mysqli_query($koneksi,"INSERT INTO `barang`( `Nama_barang`, `jumlah_barang`, `stok_barang`) VALUES ('$nama_barang','$jml_barang','$jml_barang')");

header("location: tampil_barang.php");
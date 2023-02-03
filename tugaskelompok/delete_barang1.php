<?php
include 'koneksi1.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM `tb_koprasi` WHERE `id_barang` = $id");

if($data == TRUE){
    header("location: tampil_barang1.php");
}else{
    echo "gagal hapus"; 
}
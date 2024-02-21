<?php 
 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
 
mysqli_query($conn,"UPDATE penyimpanan SET namabrg='$nama', harga='$harga', 
jumlah='$jumlah'WHERE  kodebrg='$id'");
 
header("location:edit.php?pesan=update");
 
?>

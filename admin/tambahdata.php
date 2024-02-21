<?php
require "../koneksi.php";
require "../function.php";
 
    if (isset($_POST['Submit'])) {
    $a= $_POST['kode'];
    $b= $_POST['nama'];
    $c= $_POST['admin'];
    $d= $_POST['harga'];
    $e= $_POST['jumlah'];
   
    $input    ="INSERT INTO penyimpanan (kodebrg,idadmin,namabrg,harga,jumlah) VALUES ('$a','$c','$b','$d','$e')";
    crud($input);
    redirect('tambah.php');
    }

?>
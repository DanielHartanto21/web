<?php
require "../koneksi.php";
require "../function.php";
include "template/navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <?php
    $query="SELECT * FROM penyimpanan";
    $brg=query($query);
    ?>
    <center><h1>EDIT BARANG</h1>
    
    <table border="1" >
        <tr>
            <th>id barang</th>
            <th>nama barang</th>
            <th>harga</th>
            <th>jumlah</th>
        </tr>
        <?php foreach ($brg as $a) : ?>
        <tr>
            
            <th><?= $a['kodebrg'] ?></th>
            <th><?= $a['namabrg'] ?></th>
            <th><?= $a['harga'] ?></th>
            <th><?= $a['jumlah'] ?></th>
        </tr>
        <?php endforeach; ?>
    </table></center>
    <a href="indexuser.php">kembali</a>
</body>
</html>
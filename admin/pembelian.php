<?php
require "../koneksi.php";
require "../function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data penjualan</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <?php
    $query = "SELECT * FROM beli";
    $beli = query($query);
    ?>
    <h3 class="right"><a href="../logout.php">Logout</a></h3>
    <h1 class="center">DAFTAR PENJUALAN</h1>
    <h3 class="left"><a href="indexadmin.php">kembali</a></h3>
    <center><table border="1" >
        <tr>
            <th>username pembeli</th>
            <th>kode barang yang dibeli</th>
            <th>jumlah yang dibeli</th>
        </tr>
        <?php foreach ($beli as $a):?>
        <tr>
            
            <th><?= $a['username'] ?></th>
            <th><?= $a['kodebrg'] ?></th>
            <th><?= $a['jumlahbeli'] ?></th>
        </tr>
        <?php endforeach; ?>
    </table></center>
</body>
</html>
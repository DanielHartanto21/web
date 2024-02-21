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
    <title>edit barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h3 class="right"><a href="../logout.php">Logout</a></h3>
<h3 class="left"><a href="indexadmin.php">kembali</a></h3>
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
            <th>edit barang</th>
        </tr>
        <?php foreach ($brg as $a) : ?>
        <tr>
            
            <th><?= $a['kodebrg'] ?></th>
            <th><?= $a['namabrg'] ?></th>
            <th><?= $a['harga'] ?></th>
            <th><?= $a['jumlah'] ?></th>
            <th><a class="btn btn-primary" role="button" href="editbrg.php?kb=<?= $a['kodebrg'] ?>&nama=<?= $a['namabrg'] ?>&harga=<?= $a['harga'] ?>&jumlah=<?= $a['jumlah'] ?>">
                Edit
            </a></th>
        </tr>
        <?php endforeach; ?>
    </table></center>
</body>
</html>
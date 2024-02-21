<?php
require "../function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index admin</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    
</head>
<body>
<h3 class="right"><a href="../logout.php">Logout</a></h3>    
<h1 class="center"> Admin Toko sembako</h1>
    
    <br>
    <br>
    <br>
    <br>

    <center><table class="center"> 
        <tr>
            <td><a href="tambah.php"><img src="foto/tambahbrg.jpg" alt="">
            </a></td>
            <td></td>
            <td></td>
            <td><a href="edit.php"><img src="foto/editbrg.png" alt="">
            </a></td>
        </tr>
        <tr>
            <td><a href="tambah.php">
            tambah barang</a></td>
            <td></td>
            <td></td>
            <td><a href="edit.php">
            edit barang</a></td>
        </tr>
        <tr>
            <td><a href="user.php"><img src="foto/user.png" alt="">
            </a></td>
            <td></td>
            <td></td>
            <td><a href="pembelian.php"><img src="foto/transaksi.png" alt="">
            </a></td>
        </tr>
        <tr>
            <td><a href="user.php">
            user yang terdaftar</a></td>
            <td></td>
            <td></td>
            <td><a href="pembelian.php">
            penjualan</a></td>
        </tr>
    </table></center>
   
</body>
</html>
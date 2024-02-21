<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah barang</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
        .container{
            height: 100%; display: flex; justify-content: center;
        }
        .box{
            
            width: 800px;height: 400px;background-color: lightgray;
            border-radius: 9px;
            position: absolute;top: 50%;
            transform: translate(0,-50%);
        }
    </style>
</head>
<body>
<h3 class="right"><a href="../logout.php">Logout</a></h3>

<h3 class="left"><a href="indexadmin.php">kembali</a></h3>
    <center>

    <div style="border:0; padding:10px; width:760px; height:auto;">
    <div class="box">
    <h1 class="center">TAMBAH DATA BARANG</h1>
    <form action="tambahdata.php" method="POST" name="form-input-data">
        <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tr height="46">
                <td> </td>
                <td>Kode Barang</td>
                <td><input type="text" name="kode" size="35" maxlength="6" /></td>
            </tr>
            <tr height="46">
                <td> </td>
                <td>Nama barang</td>
                <td><input type="text" name="nama" size="50" maxlength="30" /></td>
            </tr>
            <tr height="46">
                <td> </td>
                <td>admin yang mengisi</td>
                <td><select name="admin">
                    <option value="-">- admin-
                    <option value="1">1
                    <option value="2">2
                </select></td>
            </tr>
            <tr height="46">
                <td> </td>
                <td>harga</td>
                <td><input type="text" name="harga" size="50" maxlength="30" /></td>
            </tr>
            <tr height="46">
                <td> </td>
                <td>jumlah</td>
                <td><input type="text" name="jumlah" size="20" maxlength="12" /></td>
            </tr>
            <tr height="46">
                <td> </td>
                <td> </td>
                <td><input type="submit" name="Submit" value="Submit">  </td>
            </tr>
        </table>
    </form></div></div>
    
</body>
</html>
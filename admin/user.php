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
    <title>user terdaftar</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h3 class="right"><a href="../logout.php">Logout</a></h3>
<h3 class="left"><a href="indexadmin.php">kembali</a></h3>
    <center>
    <h1>DATA USER YANG TERDAFTAR</h1>
        <?php
        $query = "SELECT * FROM user";
        $user = query($query);
        ?>
        <table class="table table-hover" border="1">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">username</th>
                    <th scope="col">nama</th>
                    <th scope="col">alamat</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <?php $i = 1; ?>
                <?php foreach ($user as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $a['username'] ?></td>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['alamat'] ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table></center>
</body>
</html>
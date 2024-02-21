<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit barang</title>
</head>
<body>
    <?php
    $id=$_GET['kb'];
    $nm=$_GET['nama'];
    $hr=$_GET['harga'];
    $jl=$_GET['jumlah'];
    ?>
    <form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="text" name="nama" value="<?php echo $nm ?>">
				</td>					
			</tr>	
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga" value="<?php echo $hr?>"></td>					
			</tr>	
			<tr>
				<td>jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $jl ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
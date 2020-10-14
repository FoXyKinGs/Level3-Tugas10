<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<form action="proses-pendaftaran.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama_produk">Nama Produk: </label>
			<input type="text" name="nama_produk" placeholder="nama produk" />
		</p>
		<p>
			<label for="keterangan">Keterangan: </label>
			<textarea name="keterangan"></textarea>
		</p>
		<p>
			<label for="harga">Harga: </label>
			<input type="text" name="harga" placeholder="harga" />
		</p>
		<p>
			<label for="jumlah">Jumlah:</label>
			<input type="text" name="jumlah" placeholder="jumlah" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>

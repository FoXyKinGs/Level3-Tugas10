<?php 

include("config.php");

if( !isset($_GET['id']) ){
	header('Location: index.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>

<body>
	
	<form action="proses-edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
		
		<p>
			<label for="nama_produk">Nama Produk: </label>
			<input type="text" name="nama_produk" placeholder="nama produk" value="<?php echo $data['nama_produk'] ?>" />
		</p>
		<p>
			<label for="keterangan">Keterangan: </label>
			<textarea name="keterangan"><?php echo $data['keterangan'] ?></textarea>
		</p>
		<p>
			<label for="harga">Harga: </label>
			<input type="text" name="harga" placeholder="harga" value="<?php echo $data['harga'] ?>" />
		</p>
		<p>
			<label for="jumlah">Jumlah: </label>
			<input type="text" name="jumlah" placeholder="jumlah" value="<?php echo $data['jumlah'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>

<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>

<body>
	<nav>
		<a href="form-daftar.php">Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Jumlah</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM produk";
		$query = mysqli_query($db, $sql);
		
		while($data = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$data['id']."</td>";
			echo "<td>".$data['nama_produk']."</td>";
			echo "<td>".$data['keterangan']."</td>";
			echo "<td>".$data['harga']."</td>";
			echo "<td>".$data['jumlah']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$data['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$data['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total Data: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
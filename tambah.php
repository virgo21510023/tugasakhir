<?php
require 'functions.php';
$connection = mysqli_connect("localhost", "root", "", "databuku");

if (isset($_POST['submit'])){
	
	if (tambah($_POST) > 0){
		echo"
		<script>
			alert('Data berhasil ditambahkan');
			document.location.href = 'index.php';
		</script>";
	} else {
		echo"
		<script>
			alert('Data gagal ditambahkan');
			document.location.href = 'index.php';
		</script>";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Buku</h1>
	<form action="" method="POST">
		<ul>
			<li>
				<label for="title">Title : </label>
				<input type="text" name="title" id="title" required>
			</li>
			<li>
				<label for="author">Author : </label>
				<input type="text" name="author" id="author" required>
			</li>
			<li>
				<label for="year">Year : </label>
				<input type="year" name="year" id="year" required>
			</li>
			<li>
				<label for="imgr">Image : </label>
				<input type="img" name="img" id="img" required>
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Simpan</button>
			</li>
		</ul>
	</form>
</body>
</html>
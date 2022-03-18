<?php
require 'functions.php';
$books = query("SELECT * FROM databuku");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Buku</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Action</th>
			<th>Picture</th>
			<th>Title</th>
			<th>Authors</th>
			<th>Original Publication Year</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($books as $row) : ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="">Edit</a> |
				<a href="">Delete</a>
			</td>
			<td>
				<img src="img/<?= $row['img'] ?>" width="70px">
			</td>
			<td><?= $row['title'] ?></td>
			<td><?= $row['author'] ?></td>
			<td><?= $row['year'] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>
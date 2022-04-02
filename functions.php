<?php
$connection = mysqli_connect("localhost", "root", "", "databuku");

function query ($query){
	global $connection;
	$result = mysqli_query($connection, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	global $connection;
	$title = htmlspecialchars($data['title']);
	$author = htmlspecialchars($data['author']);
	$year = htmlspecialchars($data['year']);
	$img = htmlspecialchars($data['img']);

	$query = "INSERT INTO databuku VALUES 
			('','$title','$author','$year','$img')";

	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection);
}

function hapus($id){
	global $connection;
	mysqli_query($connection, "DELETE FROM databuku WHERE id = $id");
	return mysqli_affected_rows($connection);
}

?>

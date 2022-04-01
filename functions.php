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
	$title = $data['title'];
	$author = $data['author'];
	$year = $data['year'];
	$img = $data['img'];

	$query = "INSERT INTO databuku VALUES 
			('','$title','$author','$year','$img')";

	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection);
}
?>
<?php
	$connection = new mysqli("172.16.4.190", "s4", "s4", "s4");
	$con=mysqli_connect("172.16.4.190","s4","s4","s4");
	// Check connection
	if (mysqli_connect_errno($connection))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  } else { echo "Connection was OK!\n";}

	//Create Tables
	$sql = "CREATE TABLE User(id INT, nume CHAR(30), prenume CHAR(30), email CHAR(30), an INT, grad INT)";
	if ($connection->query($sql)) {
		echo "<br>Tabel User creat<br>";
	}
	else {
		echo "Error: " . mysqli_error($connection); 
	}
	
	$sql = "CREATE TABLE Materii(id INT, nume CHAR(30))";	
	if ($connection->query($sql)) {
		echo "Tabel Materii creat<br>";
	}
	else {
		echo "Error: " . mysqli_error($connection); 
	}
	
	$sql = "CREATE TABLE Catalog(id_user INT, id_materii INT, note INT)";
	if ($connection->query($sql)) {
		echo "Tabel Catalog creat";
	}
	else {
		echo "Error: " . mysqli_error($connection); 
	}
	
?>

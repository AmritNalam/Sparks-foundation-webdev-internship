<?php

	$servername = "localhost";
	$username = "id17087339_root";
	$password = "Skyscraper_02";
	$dbname = "id17087339_zombiebank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
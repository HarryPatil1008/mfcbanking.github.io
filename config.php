<?php

	$servername = "localhost";
	$username = "id16642743_harsh";
	$password = "Momdadhp@1008";
	$dbname = "id16642743_mfcbanking";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
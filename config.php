<?php

	$conn = mysqli_connect('localhost','root','','dbname');

	if(!$conn){
		var_dump("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
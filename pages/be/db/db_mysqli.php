<?php

	/* MySQLI DB connection configuration */

	$connection = mysqli_connect("localhost","root","", "sme-db");

	if(!$connection){
		die("Database not selected.");

	}
?>
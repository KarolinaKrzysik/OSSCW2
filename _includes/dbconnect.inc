<?php
	//  replace mysqllogin and mysqlpassword with your own
	$conn = mysqli_connect("localhost", "root", "", "db1_21904889");

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>

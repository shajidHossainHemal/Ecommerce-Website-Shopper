<?php
	$name = $_POST['name'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$message = $_POST['message'];

	// Database connection
	$connection = mysqli_connect('localhost','root','','shopper');

	if(!$connection) {
		die("Connection Failed : ". mysqli_connect_error());
	} else {
		echo "Successfully connected.\n";
	}

	$sql = "INSERT INTO contact(name, phoneNumber, email, address, message) VALUES(?, ?, ?, ?, ?)";

	/* create a prepared statement */
	$stmt = mysqli_prepare($connection, $sql);

	/* bind parameters for markers */
	mysqli_stmt_bind_param($stmt, "sisss", $name, $phoneNumber, $email, $address, $message);

	/* execute query */
	$result = mysqli_stmt_execute($stmt);

	if ($result) {
		echo "\nRecord updated successfully";
	} else {
		echo "\nError updating record: " . mysqli_error($connection);
	}
?>
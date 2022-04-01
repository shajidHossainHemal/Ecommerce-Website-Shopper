<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$qualification = $_POST['qualification'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$id = $_POST['idnum'];


	// Database connection
	$connection = mysqli_connect('localhost','root','','shopper');

	if(!$connection) {
		die("Connection Failed : ". mysqli_connect_error());
	} else {
		echo "Successfully connected.\n";
	}

	$sql = "INSERT INTO apply(name, age, qualification, phoneNumber, email, idNumber) VALUES(?, ?, ?, ?, ?, ?)";

	/* create a prepared statement */
	$stmt = mysqli_prepare($connection, $sql);

	/* bind parameters for markers */
	mysqli_stmt_bind_param($stmt, "ssssss", $name, $age, $qualification, $phoneNumber, $email, $id);

	/* execute query */
	$result = mysqli_stmt_execute($stmt);

	if ($result) {
		echo "\nRecord updated successfully";
	} else {
		echo "\nError updating record: " . mysqli_error($connection);
	}
?>
<?php

include 'database.php';



	$use_name = $_POST['user_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$sql = "INSERT INTO registration ( `user_name`, `email`, `password`) VALUES('$use_name', '$email',' $password')";


	if ($conn->query($sql) === TRUE) {
        echo "save data";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
     
?>
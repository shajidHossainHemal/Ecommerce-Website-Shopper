<?php
include 'database.php';
 $email = $_POST["email"];
 $password = $_POST["password"];

 $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	session_start();
	 $_SESSION['email'] = $email;
     header("Location:index.php"); 
     }else{
         echo "enter correct email and password";
     }

?>
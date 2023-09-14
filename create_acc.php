<?php
//Script to initiate connection with MySQL server
include "connection.php";

//Credentials received from new user
$name = $_POST["name"];
$email = $_POST["email"];

//MySQL query to create user's credentials in database
$stmt = $conn->prepare("insert into logins values(?, ?, ?)");

//Substituting data in query
$stmt->bind_param("sss", $name, $email, $_POST['passwd']);

//Execute the query in server and check for error
if($stmt->execute()){

	//Account created
echo "<h3>Your account has been created.</h3><p>Continue to <a href='./index.html'>Login</a></p>";
}else{
	//Exit the script and show error
	die("Some error has occurred!");
}

//Terminating connection with server
$stmt->close();
$conn->close();
?>

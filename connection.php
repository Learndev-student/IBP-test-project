<?php
//Credentials to connect with MySQL server
$servername = "localhost";
$user = "root";
$passwd = "";

//Database name
$dbname = "accounts";

//MySQL table
$table = "logins";

//Initiate connection with MySQL server
$conn = new mysqli($servername, $user, $passwd, $dbname);
if($conn->connect_error){

	//Exit and show error in case of error
	die("Connection failed: ".$conn->connect_error);
}
?>

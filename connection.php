<?php
//Credentials to connect with MySQL server
$server_name = "localhost";
$server_user = "root";
$server_passwd = "";

//Database name
$dbname = "accounts";

//MySQL table
$table = "logins";

//Initiate connection with MySQL server
$conn = new mysqli($server_name, $server_user, $server_passwd, $dbname);
if($conn->connect_error){

	//Exit and show error in case of error
	die("Connection failed: ".$conn->connect_error);
}
?>

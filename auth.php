<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
</head>
<body>
<?php
//Script for initiating connection with MySQL server
include "connection.php";

//Username
$user = $_POST["user"];

//MySQL query for getting credentials of user
$sql = "select name, passwd from $table where user='$user'";

//MySQL query result
$result = $conn->query($sql);

//Condition for checking whether the data exist about user
if ($result->num_rows>0){

	//If data exists
	$row = $result->fetch_assoc();
	if($_POST["passwd"]===$row['passwd']){

		//Greet user for successful login
		echo "Welcome ".$row['name'];
	}else {
		//Otherwise...
		echo "Incorrect password";
	}
}else{
	//User's credential does not exist in database
	echo "User not found in database";
}

//Terminating connection with MySQL server
$conn->close();
?>
</body>
</html>

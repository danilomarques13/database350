<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 

	//Created a Template 
$sql = "SELECT * FROM users WHERE uid=? AND pwd=?;";
//create a prepared statement
$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed";
}
else{
	//Bind parameters to the placeholder
	mysqli_stmt_bind_param($stmt, "ss", $uid, $pwd);
	//Run parameters inside database
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	if(!$row = mysqli_fetch_assoc($result)){
	echo "Your Username or Password is incorrect";
	}
	else{

		$_SESSION['admin'] = $row['admin'];
		$_SESSION['id'] = $row['id']; 
		header("Location: admin.php");
	}
}

?>



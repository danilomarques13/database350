<?php
session_start();
include 'dbh.php';
 
$prod_name = mysqli_real_escape_string($conn,$_POST['prod_name']);
$prod_price = mysqli_real_escape_string($conn,$_POST['prod_price']);
$prod_details = mysqli_real_escape_string($conn,$_POST['prod_details']);
 
$sql = "INSERT INTO Product (prod_name, prod_price, prod_details) 
		VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed";
}
else{
	//Bind parameters to the placeholder
	mysqli_stmt_bind_param($stmt, "sis", $prod_name, $prod_price, $prod_details);
	//Run parameters inside database
	mysqli_stmt_execute($stmt);
}

header("Location: admin.php");


?>


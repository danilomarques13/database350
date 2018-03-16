<?php
session_start();
include 'dbh.php';
 
$prodID = mysqli_real_escape_string($conn, $_POST['prodID']);
 
$sql = "DELETE FROM Product
		WHERE prod_id = ?;";

$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
	echo "SQL statement failed";
}
else{
	//Bind parameters to the placeholder
	mysqli_stmt_bind_param($stmt, "i", $prodID);
	//Run parameters inside database
	mysqli_stmt_execute($stmt);
}

header("Location: admin.php");

?>

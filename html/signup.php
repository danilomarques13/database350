<?php
session_start();
include 'dbh.php';
 
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
 
$sql = "INSERT INTO users (first, last, uid, pwd) 
                  VALUES (?, ?, ?, ?);";
//create a prepared statement
$stmt = mysqli_stmt_init($conn);
//Prepare the prepared statement
if(!mysqli_stmt_prepare($stmt, $sql)){
  echo "SQL statement failed";
}
else{
  //Bind parameters to the placeholder
  mysqli_stmt_bind_param($stmt, "ssss", $first, $last, $uid, $pwd);
  //Run parameters inside database
  mysqli_stmt_execute($stmt);
}

		header("Location: Login.html");

?>

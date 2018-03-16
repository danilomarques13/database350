<?php
session_start();
include 'dbh.php';

$prodID = mysqli_real_escape_string($conn, $_POST['prodID']); 
$prod_name = mysqli_real_escape_string($conn, $_POST['prod_name']);
$prod_price = mysqli_real_escape_string($conn, $_POST['prod_price']);
$prod_details = mysqli_real_escape_string($conn, $_POST['prod_details']);
$sql = "UPDATE Product SET ";

if(ctype_alnum($prod_name))
{	$sql_name = "prod_name = '$prod_name' ";
	$sql = $sql . $sql_name;
}

if(ctype_digit($prod_price))
{	if($prod_name == NULL){
		$sql_price = "prod_price = $prod_price ";
		$sql = $sql . $sql_price;
	}
	else
	{
		$sql_price = ", prod_price = $prod_price ";
		$sql = $sql . $sql_price;
	}

}

if(ctype_alnum($prod_details))
{	if($prod_name == NULL && $prod_price == NULL){
		$sql_details= "prod_details = '$prod_details' ";
		$sql = $sql . $sql_details;
	}
	else{
			$sql_details = ", prod_details = '$prod_details' ";
			$sql = $sql . $sql_details;
	}
}

$where = "WHERE prod_id = $prodID;";
$sql = $sql . $where;
$result = $conn->query($sql);

header("Location: admin.php");


?>

<?php
session_start();
$conn = mysqli_connect("localhost", "root", "danilo1", "login");

if(!conn){
	die("Connection failed: ".mysqli_connect_error());
}
   
?>

<?php
include("php/config.php");
session_start();
//post method
$txtName = $_POST['uname'];
$txtEmail = $_POST['email'];
$txtPassword = $_POST['psw'];
//database insert
$sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES ('0', '$txtName', '$txtEmail', '$txtPassword')";

//insert to the database

$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

else
{
	echo "Are you a genuine visitor?";
	
}
?>
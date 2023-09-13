<?php
include("inc/admin_auth.php");
include 'inc/head.php';

$id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE id= '{$id}'";
$result = mysqli_query($con,$sql);
if ($result) {
	header("location: add_user.php");
}else{
	header("location: add_user.php");
}

?>
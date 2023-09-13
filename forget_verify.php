<?php
session_start();
include 'inc/config.php';


$email = $_GET['email'];
$v_code = $_GET['v_code'];

if(isset($email)&&isset($v_code))
{
	$email = $_GET['email'];
	$sql_ver = "select * from users where email='{$email}' and for_pass='{$v_code}'";
	$result_ver = mysqli_query($con,$sql_ver);
	if($result_ver)
	{
		if(mysqli_num_rows($result_ver)==1)
		 {
		 	echo "Successfully Updated";
		 }else{
		 	echo "Somthing Wrong";
		 }
	}else{
		echo "URL is Wrong OR Token Exoire....";
	}



}
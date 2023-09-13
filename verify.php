<?php
session_start();
include 'inc/config.php';


$email = $_GET['email'];
$v_code = $_GET['v_code'];

if(isset($email)&&isset($v_code))
{
	$email = $_GET['email'];
	$sql_ver = "select * from users where email='{$email}' and Ver_code='{$v_code}'";
	$result_ver = mysqli_query($con,$sql_ver);
	if($result_ver)
	{
		if(mysqli_num_rows($result_ver)==1)
		 {
		 	$result_featch = mysqli_fetch_assoc($result_ver);
		 	if($result_featch['is_verify']==0)
		 	{
		 		$update = "UPDATE users set is_verify = '1', Ver_code='' where email= '$email'";
		 		if(mysqli_query($con, $update)){
		 			$_SESSION["status"] ="User Register Successfully.....";
        			header("Location: login.php");
		 		}else{
		 			$_SESSION["status"] ="Query Error....";
        			header("Location: login.php");
		 		}
		 	}else{
		 		$_SESSION["status"] ="User Already Register..";
        		header("Location: login.php");
		 	}
		 }else{
		 		$_SESSION["status"] ="User Already Register....";
        		header("Location: login.php");

		 }

	}else{
		$_SESSION["status"] ="Query Not Run..";
        header("Location: login.php");
	}


}
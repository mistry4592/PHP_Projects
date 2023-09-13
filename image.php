<?php
if (isset($_FILES['image'])) {

	// echo "<pre>";
	// print_r($_FILES['image']);
	// echo "</pre>";
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$v_code = bin2hex(random_bytes(16));

	$allow_ext = array('jpge','png');
	$ext = end(explode('.', $_FILES['image'] ['name']));

	if ($_FILES['image'] ['size'] < 30000) {
		$name = md5(rand() . '.' . $ext);
		$path = "upload/".$name;
		move_uploaded_file($_FILES['image']['tmp_name'],$path);
	}else{
		echo '<script>alert("Check File Size")</script>';
	}

	// if(move_uploaded_file($file_tmp,"upload/"."$v_code")){
	// 	echo "Successfully Upload..";
	// }else{
	// 	echo "Something Error Plz Upload Again...";
	// }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chirag Mistry</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <input type="submit" name="sub">
    </form>
</body>

</html>
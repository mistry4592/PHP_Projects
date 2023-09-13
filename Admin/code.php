<?php
include_once("inc/admin_auth.php");
if (isset($_POST['role_add'])) {
	// $rname = $_POST['role_name'];
}


//Register code Start here...
if (isset($_POST["reg_sub"])) {
    $uname = $_POST["uname_reg"];
    $email = $_POST["email_reg"];
    $pno = $_POST["pno_reg"];
    $pass = $_POST["pass_reg"];
    $role = $_POST["role_reg"];

    $log = "User Enter ";
    loggers($log);

    if ($pass == "" || $pno == "" || $email == "") {
        echo "All fields should be filled. Either one or many fields are empty.";
        echo "<br/>";
        echo "<a href='register.php'>Go back</a>";
    } else {
        $sql_check = "select * from users where uname= '{$uname}' or email = '{$email}' or pno = '{$pno}'";
        ($result_check = mysqli_query($con, $sql_check)) or die("Query Failed");

        if (mysqli_num_rows($result_check) > 0) {
            $_SESSION["status"] ="Username, email and Phone Number is already exist";
            header("Location: login.php");
        } else {
            $v_code = bin2hex(random_bytes(16));
            $sql = "INSERT INTO users(uname,email,pass,pno,roles,Ver_code,is_verify) VALUES('$uname','$email',md5('$pass'), '$pno', '$role','$v_code','0')";
            $result = mysqli_query($con, $sql) && endmail($email, $v_code);
            if ($result) {
                $_SESSION["status"] ="Please Check Your Mail.. And Verify it...";
                header("Location: login.php");
            } else {
                $_SESSION["status"] = "Register failed";
                // header("Location: login.php");
            }
        }
    }
}

//Register code End here...
?>
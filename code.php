<?php
session_start();
include "inc/config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Logs
function loggers($log){
    if(!file_exists('log.txt')){
        file_put_contents('log.txt','');
    }
    $ip =$_SERVER['REMOTE_ADDR'];
    $time = date('m/d/y h:iA', time());

    $contants = file_get_contents('log.txt');
    $contants= "$ip\t$time\t$log\r";

    file_put_contents('log.txt',$contants);
}

//Logs End



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


// Password_Forget
if (isset($_POST["forget_pass"])) {
    $email_for = $_POST["emails"];
    
    $sql_foget = "select * from users where email = '{$email_for}'";
    $result = mysqli_query($con, $sql_foget);
    if (mysqli_num_rows($result) > 0) {
            $vp_code = bin2hex(random_bytes(16));
            $sql_fu = "UPDATE USERS SET for_pass = '$vp_code' where email = '$email_for'";
            $result_f = mysqli_query($con, $sql_fu) && endmail($email_for, $vp_code);
            if ($result_f) {
                $_SESSION["status"] ="Please Check Your Mail.. And Verify it...";
                header("Location: login.php");
            } else {
                $_SESSION["status"] = "Register failed";
                // header("Location: login.php");
            }        
    }
    
}
// Password_Forget end

//Email Verifications start....

function endmail($emails, $v_code)
{
    require "PHPMailer/Exception.php";
    require "PHPMailer/PHPMailer.php";
    require "PHPMailer/SMTP.php";

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    try {
        //Server settings                     //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = "smtp.gmail.com"; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = "chigs4592@gmail.com"; //SMTP username
        $mail->Password = "ojjljlafshgylstz"; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure =

        //Recipients
        $mail->setFrom("chigs4592@gmail.com", "Chigs");
        $mail->addAddress($emails); //Add a recipient
        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = "Email verify From Chigs";
        $mail->Body = "Thank You For Register! Click The link below to  verify the email address http://192.168.0.114/sakshi/verify.php?email=$emails&v_code=$v_code ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        // return false;
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//Email Verifications End....



//login code here
if (isset($_POST["login_btn"])) {
    $email = mysqli_real_escape_string($con, $_POST["email_log"]);
    $pass = md5($_POST["pass_log"]);
    $log = "User Enter ";
    loggers($log);

    $sql = "select * from users where email = '{$email}' and pass = '{$pass}'";
    ($result = mysqli_query($con, $sql)) or die("Query Faild...");

    if (mysqli_num_rows($result) > 0) {
        $sql_ver = "select * from users where email='{$email}' and is_verify='1'";
        ($result_ver = mysqli_query($con, $sql_ver)) or die("Query Faild...");
        if (mysqli_num_rows($result_ver) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                session_start();
                $_SESSION["uname"] = $row["uname"];
                $_SESSION["id"] = $row["id"];
                $_SESSION["roles"] = $row["roles"];

                if ($_SESSION["roles"] == "Admin") {
                    header("Location: Admin/Admin-login.php");
                } else {
                    header("Location: User/visitor.php");
                }
            }
        } else {
            $_SESSION["status"] = "Account is not activate";
            header("Location: login.php");
        }
    } else 
 {       $_SESSION["status"] = "Username and Password Not Found";
        header("Location: login.php");
        // echo '<div class="alert alert-danger"> Username and Password Not Found</div>';
    }
}





?>

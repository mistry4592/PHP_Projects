<?php

session_start();
include "config.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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
    require "../PHPMailer/Exception.php";
    require "../PHPMailer/PHPMailer.php";
    require "../PHPMailer/SMTP.php";

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
        $mail->Body = "Thank You For Register! Click The link below to  verify the email address <a href='http://192.168.0.114/sakshi/forget_verify.php?email=$emails&v_code=$v_code'>Visit W3Schools.com!</a> ";

        $mail->send();
        return true;
    } catch (Exception $e) {
        // return false;
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//Email Verifications End....

?>
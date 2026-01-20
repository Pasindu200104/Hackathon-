<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["e"])) {

    $email = $_GET["e"];

    if (empty($email)) {
        echo ("Please enter your email.");
    } else {
        $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
        $n = $rs->num_rows;

        $email = $_GET["e"];

        if ($n == 1) {

            $code = uniqid();

            Database::iud("UPDATE `user` SET `verification`='" . $code . "' WHERE `email`='" . $email . "'");

            $mail = new PHPMailer;
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dilshanpasindu593@gmail.com';
            $mail->Password = 'lbbgpkwmkrkodmfg';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('dilshanpasindu593@gmail.com', 'Reset Password');
            $mail->addReplyTo('dilshanpasindu593@gmail.com', 'Reset Password');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Reset Password Verification Code';
            $bodyContent = '<h1>Forgot Password?</h1>
            <h4>We are sending this email to you because you have requested a password reset.
            Use this verification code to reset your password. </h6>
            <h3>Your verification code is <b style="color:green;">' . $code . '</b></h3>
            <h4>Thank You For Using Our Service.</h4>
            ';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification code sending failed';
            } else {
                echo 'Success';
            }
        } else {
            echo ("Invalid Email Address");
        }
    }
}

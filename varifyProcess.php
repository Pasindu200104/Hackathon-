<?php
require "connection.php";

$verify = $_POST["verify"];
$pass3 = $_POST["pass3"];
$pass4 = $_POST["pass4"];

if (empty($verify)) {
    echo ("Please Enter the Verification code.");
} else if (empty($pass3 & $pass4)) {
    echo ("Please enter your Password!");
} else if (strlen($pass3 & $pass4) < 5 || strlen($pass3 & $pass4) > 20) {
    echo ("Password length must be between 5 and 20!");
} else if ($pass3 != $pass4) {
    echo ("Password Incorrect.Try Again.");
} else {
    $user_rs = Database::search("SELECT * FROM `user` WHERE `verification`='" . $verify . "'");
    $user_num = $user_rs->num_rows;


    Database::iud("UPDATE `user` SET `password`='" . $pass3 . "'");
    echo ("Success");
}

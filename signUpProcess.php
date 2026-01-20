<?php
require "connection.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email1"];
$password1 = $_POST["pass1"];
$password2 = $_POST["pass2"];

if (empty($fname)) {
    echo ("Please enter your First Name!");
} else if (strlen($fname) > 45) {
    echo ("First Name must have LESS THAN 45 characters!");
}else if (empty($lname)) {
    echo ("Please enter your Last Name!");
} else if (strlen($lname) > 50) {
    echo ("Last Name must have LESS THAN 45 characters!");
}else if(empty($email)){
    echo("Please enter your Email address!");
}else if(strlen($email)>100){
    echo ("Email must have LESS THAN 100 characters!");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email address!");
}else if(empty($password1)){
    echo ("Please enter your Password!");
}else if(strlen($password1)<5 || strlen($password1)>20){
    echo ("Password length must be between 5 and 20!");
}else if($password1 != $password2){
    echo ("Password is wrong. Check Again!");
}else {
    $user_rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."'");
    $user_num = $user_rs->num_rows;

    if($user_num > 0){
        echo("User with the same email alredy exists");
    }else{
        Database::iud("INSERT INTO `user`(`fname`,`lname`,`email`,`password`,`user_status_status_id`)
        VALUES('".$fname."','".$lname."','".$email."','".$password1."','1') ");

        echo("Success");
    }
}

?>
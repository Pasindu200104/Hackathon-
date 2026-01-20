<?php
require "connection.php";

$email = $_GET["e"];

Database::iud("UPDATE `user` SET `user_status_status_id`= '2' WHERE `email`='" . $email . "'");
echo ("User Blocked Successfully.");

?>
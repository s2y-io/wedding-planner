<?php

$db_server = "localhost:3309";
$db_username = "root";
$db_password = "123";
$db_ = "silverstar";

$connection = mysqli_connect($db_server, $db_username, $db_password, $db_);

if (mysqli_connect_errno()) {
    die('Couldnt Connect' . mysqli_error());
}
?>


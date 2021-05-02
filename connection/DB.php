<?php

// $db_server = "localhost:3309";
// $db_username = "root";
// $db_password = "123";
// $db_ = "silverstar";

$db_server = "localhost:3306";
$db_username = "healthyb_root";
$db_password = "E!_FP6ozr0}S";
$db_ = "healthyb_wedding_planner";

$connection = mysqli_connect($db_server, $db_username, $db_password, $db_);

if (mysqli_connect_errno()) {
    die('Couldnt Connect' . mysqli_error());
}
?>


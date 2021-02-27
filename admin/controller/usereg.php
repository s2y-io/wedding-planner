<?php

$utype = $_POST["userType"];
$fulname = $_POST["fullname"];
$emailus = $_POST["email"];
$mobileus = $_POST["mobile"];
$addressus = $_POST["address"];
$passwordus = $_POST["passwordregister"];
$usregdate = date("Y/m/d");
$delteflag = "0";

include "../connection/DB.php";
mysqli_query($connection, "INSERT INTO useregistry (usertype, fname, email, mobile, address, password, delflag, regdate) VALUES('".$utype."','".$fulname."','".$emailus."','".$mobileus."','".$addressus."','".$passwordus."','".$delteflag."','".$usregdate."')");
mysqli_close($connection);
echo "<script>
alert('Successfuly registered');
window.location.href='../index.php';
</script>";
?>
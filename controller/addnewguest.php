<?php

$fname = $_POST["fname"];
$email1 = $_POST["email"];
$mobileno = $_POST["mobile"];
$address1 =$_POST["address1"];
$tele =$_POST["teleno"];
$inflag = "0";
$acceptflag1 = "0";
$declinflag = "0";
$delflag1 = "0";
$regdate1 = date("Y/m/d");
$idcple = $_POST["cpleID"];

include "../connection/DB.php";
mysqli_query($connection, "INSERT INTO newguest (fullname, email, mobile, address, telephone, inviteflag, acceptflag, declinedflag, delflag, regdate,cuplid) VALUES('".$fname."','".$email1."','".$mobileno."','".$address1."','".$tele."','".$inflag."','".$acceptflag1."','".$declinflag."','".$delflag1."','".$regdate1."','".$idcple."')");
mysqli_close($connection);
echo "<script>
alert('Successfully Added to the list.');
window.location.href='../couple-dashboard-guest-manager.php';
</script>";
?>
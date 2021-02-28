<?php

$businesname = $_POST["bussinessname"];
$uname = $_POST["username"];
$venemail = $_POST["email"];
$pass = $_POST["passwordregister"];
$vencat = $_POST["vendorcat"];
$venmagazine = $_POST["magazine"];
$province = $_POST["province"];
$district = $_POST["district"];
$veregdate = date("Y/m/d");
$delteflag = "0";

include "../connection/DB.php";
mysqli_query($connection, "INSERT INTO vendoreg (busname, username, email, password, vendorcat, magazinemood, regdate, delflag,province,district) VALUES('".$businesname."','".$uname."','".$venemail."','".$pass."','".$vencat."','".$venmagazine."','".$veregdate."','".$delteflag."','".$province."','".$district."')");
mysqli_close($connection);
echo "<script>
alert('Successfully Added');
window.location.href='../vendor-form.php';
</script>";
?>
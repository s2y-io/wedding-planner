<?php

$cuname = $_POST["name"];
$cuemail = $_POST["email"];
$cupassword = $_POST["password"];
$cuwedate = $_POST["weddingdate"];
$curegdate = date("Y/m/d");

include "../connection/DB.php";
mysqli_query($connection, "INSERT INTO couplereg (name, email, password, weddingdate, regdate) VALUES('" . $cuname . "','".$cuemail."','".$cupassword."','".$cuwedate."','".$curegdate."')");
mysqli_close($connection);
echo "<script>
alert('Successfully Added');
window.location.href='../couple-form.php';
</script>";
?>
<?php

session_start();
$un = $_POST["username2"];
$pw = $_POST["passwordlogin"];

$username = "";
$userfname = "";
$password = "";
$userID = "";

include '../connection/DB.php';

$resultsetLogin = mysqli_query($connection, "SELECT * FROM useregistry WHERE email='".$un."' AND password='".$pw."'");

while ($row = mysqli_fetch_row($resultsetLogin)) {
    $username = $row[3];
	$userfname= $row[2];
    $password = $row[6];
    $userID = $row[0];
}

mysqli_close($connection);
echo $username;
if ($un == $username && $pw == $password) {
    $_SESSION["userID"] = $userID;
	$_SESSION["userfname"] = $userfname;
	echo "<script>
alert('Successfuly logedin');
window.location.href='../admin-dashboard-overview.php';
</script>";
} else {
    $_SESSION['msg'] = "wrong username or password Enter valid username or password to login.";
	echo "<script>
alert('Enter valid username or password');
window.location.href='../index.php';
</script>";
}

?>
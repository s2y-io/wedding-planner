<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
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
// 	echo "<script>
// alert('Successfuly logedin');
// window.location.href='../admin-dashboard-overview.php';
// </script>";
echo '<script>
swal.fire({icon: "success",title: "Welcome!",text: "Login Successful",type: "success"
}).then(function() {
    window.location = "../admin-dashboard-overview.php";
});
</script>';
} else {
    $_SESSION['msg'] = "wrong username or password Enter valid username or password to login.";
	echo "<script>
alert('Enter valid username or password');
window.location.href='../index.php';
</script>";
}

?>
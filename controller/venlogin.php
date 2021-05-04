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
$usernameven = "";
$busname = "";
$password = "";
$vendorID = "";

include '../connection/DB.php';

$resultsetLogin = mysqli_query($connection, "SELECT * FROM vendoreg WHERE email='".$un."' AND password='".$pw."'");

while ($row = mysqli_fetch_row($resultsetLogin)) {
    $username = $row[3];
	$usernameven = $row[2];
	$busname = $row[1];
    $password = $row[4];
    $vendorID = $row[0];
}

mysqli_close($connection);
echo $username;
if ($un == $username && $pw == $password) {
    $_SESSION["vendorID"] = $vendorID;
	$_SESSION["venUsername"] = $usernameven;
	$_SESSION["busname"] = $busname;
// 	echo "<script>
// alert('Successfully logedin');
// window.location.href='../vendor-dashboard-overview.php';
// </script>";
echo '<script>
swal.fire({icon: "success",title: "Welcome!",text: "Login Successful",type: "success"
}).then(function() {
    window.location = "../vendor-dashboard-overview.php";
});
</script>';
} else {
    $_SESSION['msg'] = "wrong username or password Enter valid username or password to login.";
	echo "<script>
alert('Enter valid username or password');
window.location.href='../vendor-form.php';
</script>";
}

?>

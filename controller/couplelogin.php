<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

<?php

session_start();
$un = $_POST["username"];
$pw = $_POST["passwordlogin"];

$username = "";
$password = "";
$coupleID = "";
$cplename = "";

include '../connection/DB.php';

$resultsetLogin = mysqli_query($connection, "SELECT * FROM couplereg WHERE email='".$un."' AND password='".$pw."'");

while ($row = mysqli_fetch_row($resultsetLogin)) {
    $username = $row[2];
    $password = $row[3];
    $coupleID = $row[0];
	$cplename = $row[1];
}

mysqli_close($connection);
echo $username;
if ($un == $username && $pw == $password) {
    $_SESSION["coupleID"] = $coupleID;
	$_SESSION["cplename"] = $cplename;
//     echo "<script>
// alert('Successfully Logedin');
// window.location.href='../couple-dashboard-overview.php';
// </script>";
echo '<script>
swal.fire({icon: "success",title: "Welcome!",text: "Login Successful",type: "success"
}).then(function() {
    window.location = "../couple-dashboard-overview.php";
});
</script>';

} else {
    $_SESSION['msg'] = "wrong username or password Enter valid username or password to login.";
    echo "<script>
    alert('Enter valid username or password');
    window.location.href='Location:../couple-form.php';
    </script>";
    // exit(header("Location:../couple-form.php"));
}

?>

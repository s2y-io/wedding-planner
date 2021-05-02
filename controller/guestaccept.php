<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newguest SET acceptflag='1' WHERE idnewguest='".$id ."'");
echo "<script>
alert('Guest Accepted the invitation');
window.location.href='../couple-dashboard-guest-manager.php';
</script>";
?>
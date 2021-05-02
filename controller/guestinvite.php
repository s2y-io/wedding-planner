<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newguest SET inviteflag='1' WHERE idnewguest='".$id ."'");
echo "<script>
alert('Guest invited success');
window.location.href='../couple-dashboard-guest-manager.php';
</script>";
?>
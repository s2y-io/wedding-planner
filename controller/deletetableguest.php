<?php
$id = $_GET["id"];
$gid = $_GET["gid"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newguest SET declinedflag='0' WHERE idnewguest='".$gid."'");
mysqli_query($connection, "UPDATE guesttable SET delflag='1' WHERE idguesttable='".$id."'");
echo "<script>
alert('Successfully Deleted');
window.location.href='../couple-dashboard-table-planner.php';
</script>";
//header("Location:../couple-dashboard-table-planner.php");
?>
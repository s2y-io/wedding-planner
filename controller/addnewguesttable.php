<?php

$gname = $_POST["gustname"];
$tblno = $_POST["tablename"];
$delflag1 = "0";
$cupleid =$_POST["cpleID"];
$gid =$_POST["guestid"];

include "../connection/DB.php";
mysqli_query($connection, "UPDATE newguest SET declinedflag='1' WHERE idnewguest='".$gname."' AND cuplid='".$cupleid."'");
mysqli_query($connection, "INSERT INTO guesttable (guestname, tableno, cplid, delflag) VALUES('".$gname."','".$tblno."','".$cupleid."','".$delflag1."')");
mysqli_close($connection);
echo "<script>
alert('Successfully Added to the list.');
window.location.href='../couple-dashboard-table-planner.php';
</script>";
?>
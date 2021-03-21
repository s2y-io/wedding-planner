<?php

$titletask = $_POST["tasktitle"];
$idcple = $_POST["cpleID"];
$dateoftask = $_POST["taskdate"];
$date=$_POST["taskdate"];
$old_date_timestamp = strtotime($date);
$new_date = date('Y/m/d', $old_date_timestamp);
$completeflag = "0";

include "../connection/DB.php";
mysqli_query($connection, "INSERT INTO cpltodolist (title, dodate, cpleID,comflag) VALUES('".$titletask."','".$new_date."','".$idcple."','".$completeflag."')");
mysqli_close($connection);
echo "<script>
alert('Successfully Added to the list.');
window.location.href='../couple-dashboard-todolist.php';
</script>";
?>
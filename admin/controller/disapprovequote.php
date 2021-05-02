<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newlisting SET approveflag='0' WHERE idnewlisting='".$id."'");
echo "<script>
alert('Successfully Disapproved');
window.location.href='../admin-dashboard-approved-quote.php';
</script>";
//header("Location:../admin-dashboard-request-quote.php?approve=ok");
?>
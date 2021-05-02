<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newlisting SET approveflag='1' WHERE idnewlisting='".$id."'");
echo "<script>
alert('Successfully Approved');
window.location.href='../admin-dashboard-request-quote.php';
</script>";
//header("Location:../admin-dashboard-request-quote.php?approve=ok");
?>
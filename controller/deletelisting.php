<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newlisting SET delflag='1' WHERE idnewlisting='".$id."'");
echo "<script>
alert('Successfully Deleted');
window.location.href='../vendor-dashboard-listing.php';
</script>";
//header("Location:../admin-dashboard-request-quote.php?approve=ok");
?>
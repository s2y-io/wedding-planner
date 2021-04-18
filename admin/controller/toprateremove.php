<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newlisting SET topflag='0' WHERE idnewlisting='".$id."'");
echo "<script>
alert('Selected Vendor Remove from Top Rated Successfuly');
window.location.href='../admin-dashboard-toprate-quote.php';
</script>";
?>
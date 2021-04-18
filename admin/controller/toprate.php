<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE newlisting SET topflag='1' WHERE idnewlisting='".$id."'");
echo "<script>
alert('Selected Vendor Top Rated Successfuly');
window.location.href='../admin-dashboard-toprate-quote.php';
</script>";
?>
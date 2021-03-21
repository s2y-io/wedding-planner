<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "DELETE FROM cpltodolist WHERE idcpltodolist='".$id ."'");
echo "<script>
alert('Selected ToDo removed from the list');
window.location.href='../couple-dashboard-todolist.php';
</script>";
?>
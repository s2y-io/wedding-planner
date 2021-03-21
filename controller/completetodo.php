<?php
$id = $_GET["id"];
include '../connection/DB.php';
mysqli_query($connection, "UPDATE cpltodolist SET comflag='1' WHERE idcpltodolist='".$id ."'");
echo "<script>
alert('Selected ToDo Completed');
window.location.href='../couple-dashboard-todolist.php';
</script>";
?>
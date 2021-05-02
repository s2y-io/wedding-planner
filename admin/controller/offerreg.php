<?php
$name = $_POST["ofname"];
$exdisccription = $_POST["offdes"];
$exdatefrom = $_POST["sdate"];
$exdateto = $_POST["edate"];
$exnumber = $_POST["contnum"];
$delflag = "0";


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filebutton"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["filebutton"]["tmp_name"], "../" . $target_dir . $_FILES["filebutton"]["name"]);
if(isset($_POST["submit"])) {
        include "../connection/DB.php";
		
		mysqli_query($connection, "INSERT INTO offerstbl(offersname, offersdiscription, offersfromdate, offerstodate, offerscontactno, delflag, offersimage) VALUES('".$name."','".$exdisccription."','".$exdatefrom."','".$exdateto."','".$exnumber."','".$delflag."','".$target_file."')");
		echo "<script>
		alert('Offers added Successfuly');
		window.location.href='../admin-dashboard-add-offers.php';
		</script>";  
}
?>
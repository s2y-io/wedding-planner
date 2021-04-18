<?php
$name = $_POST["exname"];
$exdisccription = $_POST["exdes"];
$exdatefrom = $_POST["exfromdate"];
$exdateto = $_POST["extodate"];
$exnumber = $_POST["exnumber"];
$delflag = "0";


$target_dir = "uploads/exhi/";
$target_file = $target_dir . basename($_FILES["filebutton"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["filebutton"]["tmp_name"], "../" . $target_dir . $_FILES["filebutton"]["name"]);
if(isset($_POST["submit"])) {
        include "../connection/DB.php";
		
		mysqli_query($connection, "INSERT INTO exhibitions(exhiname, exhidiscription, exhifromdate, exhitodate, excontactno, delflag,eximage) VALUES('".$name."','".$exdisccription."','".$exdatefrom."','".$exdateto."','".$exnumber."','".$delflag."','".$target_file."')");
		echo "<script>
		alert('Exhibition added Successfuly');
		window.location.href='../admin-dashboard-add-exhibition.php';
		</script>";  
}
?>
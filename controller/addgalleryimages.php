<?php
$title1 = $_POST["imname"];
$veregdate = date("Y/m/d");


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filebutton"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["filebutton"]["tmp_name"], "../" . $target_dir . $_FILES["filebutton"]["name"]);
//echo "The file ". basename( $_FILES["filebutton"]["tmp_name"]). " has been uploaded.";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["filebutton"]["name"]);
    //if($check !== false) {
        include "../connection/DB.php";
		
		mysqli_query($connection, "INSERT INTO galleryimages(magno, regdate, imagepath, delflag) VALUES('".$title1."','".$veregdate."','".$target_file."','0')");
		echo "<script>
		alert('Image added to Gallery Successfuly');
		window.location.href='../vendor-dashboard-add-images.php';
		</script>";  
}
?>
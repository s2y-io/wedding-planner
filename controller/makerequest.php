<?php
$name1 = $_POST["cusname"];
$email1 = $_POST["cusemail"];
$phone1 = $_POST["cusphone"];
$wedate1 = $_POST["weddingdate"];
$comments1 = $_POST["comments"];
$id = $_GET['id'];

// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["filebutton"]["name"]);
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// move_uploaded_file($_FILES["filebutton"]["tmp_name"], "../" . $target_dir . $_FILES["filebutton"]["name"]);
//echo "The file ". basename( $_FILES["filebutton"]["tmp_name"]). " has been uploaded.";
// Check if image file is a actual image or fake image
// if (isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["filebutton"]["name"]);
    //if($check !== false) {
    include "../connection/DB.php";

    mysqli_query($connection, "INSERT INTO makereq(cusname, email, mobile, wedate, comments, del_flag,venid) VALUES('" . $name1 . "','" . $email1 . "','" . $phone1 . "','" . $wedate1 . "','" . $comments1 . "','0','".$id."')");
    echo "<script>
		alert('Quote Send Successfuly');
		window.location.href='../list-grid-view.php';
		</script>";
// }

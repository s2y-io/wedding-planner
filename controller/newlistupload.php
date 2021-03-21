<?php
$path1 = "";
$title1 = $_POST["title1"];
$tele = $_POST["tel1"];
$addres = $_POST["address1"];
$web1 = $_POST["website"];
$description1 = $_POST["editordata"];
$lat1 = $_POST["latitude"];
$long1 = $_POST["longitude"];
$galimage = $_POST["filebutton"];
$linkvideo = $_POST["video"];
$linkfb = $_POST["facebook"];
$linktwt = $_POST["twitter"];
$linkinsta = $_POST["instagram"];
$veregdate = date("Y/m/d");
$appflag = "0";
$delteflag = "0";
$venid1 = $_POST["venid1"];
$mobile = $_POST["mob"];
$toprateflag = "0";


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filebutton"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["filebutton"]["tmp_name"], "../" . $target_dir . $_FILES["filebutton"]["name"]);
//echo "The file ". basename( $_FILES["filebutton"]["tmp_name"]). " has been uploaded.";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    //$check = getimagesize($_FILES["filebutton"]["name"]);
    //if($check !== false) {
        include "../connection/DB.php";
		
		mysqli_query($connection, "INSERT INTO newlisting(title, tel, address, web, descripton, lat, longtitude, imageven, videolink, fb, twt, insta, regdate, approveflag, delflag, venid, mobileno,topflag) VALUES('".$title1."','".$tele."','".$addres."','".$web1."','".$description1."','".$lat1."','".$long1."','".$target_file."','".$linkvideo."','".$linkfb."','".$linktwt."','".$linkinsta."','".$veregdate."','".$appflag."','".$delteflag."','".$venid1."','".$mobile."','".$toprateflag."')");
		echo "<script>
		alert('Category added Successfuly');
		window.location.href='../vendor-dashboard-listing.php';
		</script>"; 
   
}
?>
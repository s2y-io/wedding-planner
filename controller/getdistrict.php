<?php
    $province = $_POST['groupid'];

include '../connection/DB.php';
  $sql="select * from district where province = '$province'";
  $result = mysqli_query($connection, $sql);

  while($row = mysqli_fetch_row($result)) { 

    echo '<option value='.$row[1].'>'.$row[1].'</option>';


  }
  mysqli_query($sql) or die("Error: ".pg_last_error());
?>
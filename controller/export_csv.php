<?php
/* vars for export */
// database record to be exported
$id = $_GET["id"];
$db_record = 'newguest';
// optional where query
$where = 'WHERE cuplid=".$id."';
// filename for export
$csv_filename = 'db_export_'.date('Y-m-d').'.csv';

include "../connection/DB.php";

// create var to be filled with export data
$csv_export = '';

// query to get data from database
$query = mysqli_query($connection,"SELECT * FROM ".$db_record." ".$where);
$field = mysqli_num_fields($connection,$query);

// create line with field names
for($i = 0; $i < $field; $i++) {
  $csv_export.= mysqli_field_name($connection,$query,$i).',';
}
// newline (seems to work both on Linux & Windows servers)
$csv_export.= '
';

while($row = mysqli_fetch_array($query)) {
  // create line with field values
  for($i = 0; $i < $field; $i++) {
    $csv_export.= '"'.$row[mysqli_field_name($connection,$query,$i)].'",';
  }	
  $csv_export.= '
';	
}

// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);
?>
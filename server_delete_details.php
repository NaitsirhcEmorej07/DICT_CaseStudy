<?php
require_once 'database.php';

$get_value_delete = " 
select * from tbl_vaccine_record where id = '".$_POST['delete_records_value']."'
";
$result = mysqli_query($connect, $get_value_delete);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$fname = $row ['fname'];
$lname = $row ['lname'];
// $new_array = array('deleted_fname' => $fname); 
$row['deleted_name'] = $fname." ".$lname;
// $merged_array = array_merge($row,$new_array);
// array_push($row,  $fname);


// echo json_encode($row);
echo json_encode($row['deleted_name']);

$sql_delete_records = "
delete from tbl_vaccine_record where id = '".$_POST['delete_records_value']."'
";
$connect->query($sql_delete_records);

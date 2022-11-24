<?php
require_once 'database.php';

if (isset($_POST["update_records_value"])) {
$server_fetch_update_details= "
select * from  tbl_vaccine_record where id = '".$_POST['update_records_value']."'
";
$result = mysqli_query($connect, $server_fetch_update_details);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo json_encode($row);
}
?>
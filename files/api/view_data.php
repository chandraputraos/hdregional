<?php
header('Content-Type: application/json');
require '../functions/db.php';
$conn = connect();

$query = "SELECT * FROM `hcid_hdreg` order by tanggal desc limit 33";
$result = mysqli_query($conn, $query);
$data = array();
if(mysqli_num_rows($result) != 0) {
 while($row = mysqli_fetch_assoc($result)) {
   $data[] = $row;
 }
}

echo $json_info = json_encode($data);

?>

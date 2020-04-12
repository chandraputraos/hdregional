<?php
header('Content-Type: application/json');
require '../functions/db.php';
$conn = connect();

$query = "SELECT * FROM `hcid_hdreg` where tanggal >= DATE(NOW()) - INTERVAL 7 DAY order by tanggal desc ";
$result = mysqli_query($conn, $query);
$data = array();
if(mysqli_num_rows($result) != 0) {
 while($row = mysqli_fetch_assoc($result)) {
   $data[] = $row;
 }
}

echo $json_info = json_encode($data);

?>

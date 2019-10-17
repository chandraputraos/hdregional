<?php
header('Content-Type: application/json');
require '../functions/db.php';
$conn = connect();

$query = "SELECT * from user_data";
$result = mysqli_query($conn, $query);
$data = array();
if(mysqli_num_rows($result) != 0) {
 while($row = mysqli_fetch_assoc($result)) {
   $data[] = $row;
 }
}

echo $json_info = json_encode($data);

?>

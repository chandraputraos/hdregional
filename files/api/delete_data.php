<?php
require '../functions/db.php';
$conn = connect();

$conn = connect();
$postdata = file_get_contents("php://input");
if (isset($postdata) && !empty($postdata)) {
    $request = json_decode($postdata);
 
    $hdr_id = (int) $request->recordId;
    $sql = "DELETE FROM `hcid_hdreg` WHERE `hdr_id` = '$hdr_id' LIMIT 1";
 
    if(mysqli_query($conn, $sql)) {  
           echo 'Delete berhasil.. :D ';  
      } else {  
           echo 'Yah Gagal..!';  
      };  
}
?>
   
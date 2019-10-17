

<?php

include('../functions/db.php');
$data = json_decode(file_get_contents("php://input"));
 
$out = array('error' => false);
 
$firstname = $data->firstname;
$lastname = $data->lastname;
$address = $data->address;
$hdr_id = $data->hdr_id;
 
$sql = "UPDATE hcid_hdreg SET ping = '$ping', upload = '$upload', download = '$download' WHERE hdr_id = '$hdr_id'";
$query = $conn->query($sql);
 
if($query){
    $out['message'] = 'Updated Successfully';
}
else{
    $out['error'] = true;
    $out['message'] = 'Update Failed';
}
 
echo json_encode($out);
?>


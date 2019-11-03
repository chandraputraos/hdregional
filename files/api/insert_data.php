<?php
require '../functions/db.php';
$conn = connect();
$data = (file_get_contents("php://input"));
$info = json_decode($data);

if(count($info) > 0) {	
	
	$namalengkap = mysqli_real_escape_string($conn,$info->user_name);
	$office = mysqli_real_escape_string($conn,$info->user_team);
    $ping = mysqli_real_escape_string($conn,$info->ping);
    $download = mysqli_real_escape_string($conn,$info->download);
    $upload = mysqli_real_escape_string($conn,$info->upload);	
	$status_internet = mysqli_real_escape_string($conn,$info->status_internet);
	
    $call_internal = mysqli_real_escape_string($conn,$info->call_internal);
    $call_eksternal = mysqli_real_escape_string($conn,$info->call_eksternal);
	$status_yealink = mysqli_real_escape_string($conn,$info->status_yealink);
	
    $test_print = mysqli_real_escape_string($conn,$info->test_print);
	$life_toner = mysqli_real_escape_string($conn,$info->life_toner);
    $life_opc = mysqli_real_escape_string($conn,$info->life_opc);
	$status_printer = mysqli_real_escape_string($conn,$info->status_printer);
	
	
    $test_print_mcf = mysqli_real_escape_string($conn,$info->test_print_mcf);	
	$life_toner_mcf = mysqli_real_escape_string($conn,$info->life_toner_mcf);
    $life_drum_mcf = mysqli_real_escape_string($conn,$info->life_drum_mcf);	
	$life_fuser_mcf = mysqli_real_escape_string($conn,$info->life_fuser_mcf);	
	$status_printer_mcf = mysqli_real_escape_string($conn,$info->status_printer_mcf);
	
	
    $suhu_ac = mysqli_real_escape_string($conn,$info->suhu_ac);
	 $kondisi_ac = mysqli_real_escape_string($conn,$info->kondisi_ac);	
	$status_ac = mysqli_real_escape_string($conn,$info->status_ac);
	
    
	 $load_ups = mysqli_real_escape_string($conn,$info->load_ups);	
	$battery_ups = mysqli_real_escape_string($conn,$info->battery_ups);
    $status_ups = mysqli_real_escape_string($conn,$info->status_ups);
	
	
	$modem = mysqli_real_escape_string($conn,$info->modem);	
	$core_switch = mysqli_real_escape_string($conn,$info->core_switch);
    $server_lokal = mysqli_real_escape_string($conn,$info->server_lokal);
	$kebersihan = mysqli_real_escape_string($conn,$info->kebersihan);	
	$status_rack = mysqli_real_escape_string($conn,$info->status_rack);
	
	$remarks = mysqli_real_escape_string($conn,$info->remarks); 
	$jira = mysqli_real_escape_string($conn,$info->jira);   
   
    
$query = "INSERT INTO `hcid_hdreg`(`name`, `office`,`ping`, `download`, `upload`, `status_internet`, `call_internal`, `call_eksternal`, `status_yealink`, `test_print`, `life_toner`, `life_opc`, `status_printer`, `test_print_mcf`, `life_toner_mcf`, `life_drum_mcf`, `life_fuser_mcf`, `status_printer_mcf`, `suhu_ac`, `kondisi_ac`, `status_ac`,
 `load_ups`, `battery_ups`, `status_ups`, `modem`, `core_switch`, `server_lokal`, `kebersihan`, `status_rack`, `remarks`, `jira`)
 VALUES ('$namalengkap','$office', '$ping','$download','$upload','$status_internet','$call_internal' ,'$call_eksternal','$status_yealink','$test_print','$life_toner','$life_opc', '$status_printer'
	  ,'$test_print_mcf','$life_toner_mcf','$life_drum_mcf','$life_fuser_mcf' , '$status_printer_mcf','$suhu_ac','$kondisi_ac','$status_ac','$load_ups' ,'$battery_ups','$status_ups',
	  '$modem','$core_switch' ,'$server_lokal','$kebersihan','$status_rack','$remarks', '$jira')";
	  $msg = "Successfully Inserted Your Record";
	
   if(mysqli_query($conn, $query)) {
		echo "Insert Data Successfully";
	}
	else {
		echo "Gagal";
		}
}
?>
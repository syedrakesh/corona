<?php
	include('UserInfo.php');
	
	
	$ip = "IP: ".UserInfo::get_ip();
	$Device = "Device: ".UserInfo::get_device();
	$OS = "OS: ".UserInfo::get_os();
	$Browser = "Browser: ".UserInfo::get_browser();
	
	$open = fopen("info.txt","a+");
	$ip = "\n".$ip."||||";
	$Device = $Device."||||";
	$OS = $OS."||||";
	$Browser = $Browser."||||";
	
	// $HTTP = $_SERVER['HTTP_REFERER'];
	// $REFERER = "Reffer: ".$HTTP."||||";
	
	date_default_timezone_set('asia/dhaka');
    $currentDateTime = date('d-m-Y h:i:s A');
	
	fwrite($open, $ip);
	fwrite($open, $Device);
 	fwrite($open, $OS);
	fwrite($open, $Browser);
	
	// fwrite($open, $REFERER);
	
	fwrite($open, $currentDateTime);
	
	fclose($open);
?>
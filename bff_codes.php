<?php

require 'config.php';

function log_access($name) {
	$myFile = "access.log";
	$fh = fopen($myFile, 'a') or die;
	$stringData = date('c') . ': ' . $name . "\n";
	fwrite($fh, $stringData);
	fclose($fh);
}

$code = $_REQUEST['Digits'];

# Time lock
if ($overnightStart && $overnightEnd) {
	$date = new DateTime("now", new DateTimeZone($timezone));
	$day = $date->format('Y-m-d');
	$time = $date->format('H:i');
	if (($time > $overnightStart) && ($time < $overnightEnd)){
		log_access('Out of Hours: ' . ($codeList[$code] ?? 'Unknown Code'));
		header('Location: return_outoftime.php');
		die;
	}
}

# Dial 0 for operator, if $operatorPhoneNumber is set
if ($code == '0' && $operatorPhoneNumber) {
	log_access('Code 0: Called Operator');
	header('Location: return_operator.php');
	die;
}

# Successful code
if (array_key_exists($code, $codeList)) {
	log_access('Code Accepted: ' . $codeList[$code]);
	header('Location: return_open.php');
	die;
}

# Code does not match
log_access('Code Rejected: ' . ($code ?? 'No Code Provided'));
header('Location: return_failed.php');
die;

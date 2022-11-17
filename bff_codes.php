<?php

require 'config.php';

function log_access($name) {
	$myFile = "access.log";
	$fh = fopen($myFile, 'a') or die;
	$stringData = date('c').": ".$name."\n";
	fwrite($fh, $stringData);
	fclose($fh);
}

$code = $_REQUEST['Digits'];

if ($code == '0') {
	log_access("Operator");
	header("Location: return_operator.php");
	die;
}

if (array_key_exists($code, $codeList)) {
	log_access($codeList[$code]);
	header("Location: return_open.php");
	die;
}

log_access("Failed");
header("Location: return_failed.php");
die;

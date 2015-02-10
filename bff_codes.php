<?php
function log_access($name)
{
	$myFile = "access_log.txt";
	$fh = fopen($myFile, 'a') or die;
	$stringData = date('c').": ".$name."\n";
	fwrite($fh, $stringData);
	fclose($fh);
}

$code = $_REQUEST['Digits'];

$codeList = [
	"1234" => "Dark Helmet"
];

if ($code == '0') {
	log_access("Operator");
	header("Location: operator.xml");
	die;
}

if (array_key_exists($code, $codeList)) {
	log_access($codeList[$code]);
	header("Location: return_open.xml");
	die;
}

log_access("Failed");
header("Location: failed.xml");
die;

?>


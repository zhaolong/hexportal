<?php
error_reporting(0);
header("Content-type: image/gif");
$host = $_GET['host'];
$port = $_GET['port'];
$fp = fsockopen($host, $port,$errno,$errstr, 4);
if (!$fp)
{
    readfile('offline.gif');
}else{
	readfile('online.gif');
}
fclose($fp);
?>
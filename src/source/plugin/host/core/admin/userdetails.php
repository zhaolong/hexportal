<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$hid=intval($_GET['hid']);

$query = DB::query("SELECT * FROM host_user WHERE id = '$hid'");
$array = mysql_fetch_array($query);
$password = base64_decode($array[password]);
include template("host:admin_userdetails");
?>
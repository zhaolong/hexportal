<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$username=$_GET['username'];

$query = DB::query("SELECT * FROM host_user WHERE username = '$username'");
$array = mysql_fetch_array($query);

if ($_POST['act'] == 'edit' AND $_POST['expiredate'])
{
	$_POST[expiredate]=strtotime($_POST[expiredate]);
	DB::query("UPDATE host_user SET expiredate = '$_POST[expiredate]' WHERE username = '$username'");
}
$array[expiredate] = gmdate('Y-m-d H:i:s', $array[expiredate] + $timeoffset *3600);

include template("host:admin_expire");
?>
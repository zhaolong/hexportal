<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_networkissues WHERE id=".$_GET['no']);
$F = mysql_fetch_array($query);
$check = DB::num_rows($query);
if ($action == 'edit' AND $no)
{
	$_POST[time]=strtotime($_POST[time]);
	DB::query("UPDATE  `host_networkissues` SET  `time` =  '$_POST[time]',`title` =  '$_POST[title]',`content` =  '$_POST[content]' WHERE  `host_networkissues`.`id` =".$_GET['no'].";");
	showmessage($lang[updated], 'plugin.php?id=host:host&panel=admin&type=ni&no='.$_GET['no']);
}
$F[time] = gmdate('Y-m-d H:i:s', $F[time] + $timeoffset *3600);
include template("host:admin_editni");
?>
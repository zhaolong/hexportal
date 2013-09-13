<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_announcements ORDER BY ID ASC");
while($Fx = mysql_fetch_array($query)) 
{
	$Data[] = $Fx;
}
$check = DB::num_rows($query);
if ($action == 'delete' AND $no)
{
	DB::query("DELETE FROM host_announcements WHERE id ='$no'");
	showmessage($lang[deleted], 'plugin.php?id=host:host&panel=admin&type=announcements');
}
if($_GET['action']=="manage"&&$_GET['id']){
	$query = DB::query("SELECT * FROM host_announcements WHERE id=".$_GET['no']);
	$F = mysql_fetch_array($query);
	$check1 = DB::num_rows($query);
}
if ($action == 'manage' AND $no AND $_POST[content])
{
	$_POST[time]=strtotime($_POST[time]);
	DB::query("UPDATE  `host_announcements` SET  `time` =  '$_POST[time]',`title` =  '$_POST[title]',`content` =  '$_POST[content]' WHERE  `host_announcements`.`id` =".$_GET['no'].";");
	showmessage($lang[updated], 'plugin.php?id=host:host&panel=admin&type=notice&no='.$_GET['no']);
}
$F[time] = gmdate('Y-m-d H:i:s', $F[time] + $timeoffset *3600);

include template("host:admin_announcements");
?>
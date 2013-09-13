<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);

if(!intval($_GET['p']))$_GET['p']=1;
$_GET['p']--;
$s=$_GET['p']*10;
$nx=$_GET['p']+2;
$query = DB::query("SELECT * FROM host_announcements ORDER BY ID DESC LIMIT ".$s." , 10");

if(intval($_GET['aid'])){
	$aid=intval($_GET['aid']);
	$query = DB::query("SELECT * FROM host_announcements WHERE id = ".$aid." LIMIT 1");
}
while($F = mysql_fetch_array($query)) 
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
$check = DB::num_rows($query);
include template("host:announcements");
?>
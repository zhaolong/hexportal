<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_networkissues ORDER BY ID ASC LIMIT 10");
while($F = mysql_fetch_array($query)) 
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
$check = DB::num_rows($query);
include template("host:networkissues");
?>
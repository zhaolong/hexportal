<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_server ORDER by ID ASC");
while($F = mysql_fetch_array($query)) 
{	
	$Data[] = $F;	
}
$check = DB::num_rows($query);
include template("host:server");
?>
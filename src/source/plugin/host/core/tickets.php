<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}

$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$sql="SELECT * FROM host_tickets WHERE user='$discuz_userss' and ttype='post' and ".($_GET['type']=="closed"?"status='已关闭":"status!='已关闭")."'";
//die($sql);
$query = DB::query($sql);
while($F = mysql_fetch_array($query)) 
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
$check = DB::num_rows($query);
include template("host:tickets");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_setting WHERE name = 'support'");
$arrayx = mysql_fetch_array($query);
if (!$arrayx[value])
{
	showmessage($lang[support_not_open]);
}
elseif (isset($_POST[submit])) 
{			
	if (empty($_POST[title])||empty($_POST[content])) 
	{
		showmessage($lang[fill_all],'javascript:history.back()');
	} 
	$ticketid = rand(10,9999999);
	DB::query("INSERT INTO host_tickets (user,title,urgency,content,ticketid,ttype,status,time) values ('{$discuz_userss}','{$_POST[title]}','{$_POST[urgency]}','{$_POST[content]}','$ticketid','post','客户回复','$timestamp')");
	showmessage($lang[submit_ok], 'plugin.php?id=host:host&page=tickets');
}
include template("host:support");
?>
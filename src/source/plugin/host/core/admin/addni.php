<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if (isset($_POST[submit])) 
{			
	DB::query("INSERT INTO host_networkissues (title,content,time) values ('{$_POST[title]}','{$_POST[content]}','$timestamp')");
	showmessage($lang[submit_ok], 'plugin.php?id=host:host&panel=admin&type=networkissues');
}
include template("host:admin_addni");
?>
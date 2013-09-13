<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if (isset($_POST[submit])) 
{			
	DB::query("INSERT INTO host_kb (title,content) values ('{$_POST[title]}','{$_POST[content]}')");
	showmessage($lang[submit_ok],'plugin.php?id=host:host&panel=admin&type=kb');
}
include template("host:admin_addkb");
?>
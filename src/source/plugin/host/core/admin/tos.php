<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_setting WHERE name = 'tos'");
$array = mysql_fetch_array($query);
if (isset($_POST[submit])) 
{	
	DB::query("UPDATE host_setting set value ='$_POST[tos]' WHERE name= 'tos'");
	showmessage($lang[updated],"plugin.php?id=host:host&panel=admin&type=tos");	
}
include template("host:admin_setting");
?>
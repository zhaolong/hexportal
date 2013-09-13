<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_server ORDER by ID ASC");
while($F = mysql_fetch_array($query)) 
{
	$Data[] = $F;
}
$check = DB::num_rows($query);
if (!$check) 
{
	showmessage($lang[add_server_notice],'plugin.php?id=host:host&panel=admin&type=addserver');
}
include template("host:admin_addplan");
?>
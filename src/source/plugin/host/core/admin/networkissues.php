<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_networkissues ORDER BY ID ASC");
while($F = mysql_fetch_array($query)) 
{
	$Data[] = $F;
}
$check = DB::num_rows($query);
if ($action == 'delete' AND $no)
{
	DB::query("DELETE FROM host_networkissues WHERE id ='$no'");
	showmessage($lang[deleted], 'plugin.php?id=host:host&panel=admin&type=networkissues');
}
include template("host:admin_networkissues");
?>
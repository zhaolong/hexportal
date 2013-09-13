<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_kb ORDER BY ID ASC");
while($F = mysql_fetch_array($query))
{
	$Data[] = $F;
}
if ($action == 'delete' AND $no)
{
	DB::query("DELETE FROM host_kb WHERE id ='$no'");
	showmessage($lang[deleted], 'plugin.php?id=host:host&panel=admin&type=kb');
}
$check = DB::num_rows($query);
include template("host:admin_kb");
?>
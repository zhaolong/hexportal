<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_tickets WHERE ttype='post' ORDER by TIME ASC");
while($F = mysql_fetch_array($query))
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
$check = DB::num_rows($query);
if ($action =='closed' AND $ticketid)
{
	DB::query("UPDATE host_tickets SET status ='$lang[tk_closed]' WHERE ticketid = '$ticketid'");
	showmessage($lang[tk_closed_ok], 'plugin.php?id=host:host&panel=admin&type=tickets');
}
elseif ($action =='delete' AND $ticketid)
{
	DB::query("DELETE FROM host_tickets WHERE ticketid = '$ticketid'");
	showmessage($lang[deleted], 'plugin.php?id=host:host&panel=admin&type=tickets');
}
include template("host:admin_tickets");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query11 = DB::query("SELECT * FROM host_tickets WHERE ticketid = '$ticketid' and ttype ='post' ");		
$array11 = mysql_fetch_array($query11); 
$array11[time_s] = gmdate('Y-m-d H:i', $array11[time] + $timeoffset *3600);
$query = DB::query("SELECT * FROM host_tickets WHERE ticketid = '$ticketid' ORDER by TIME ASC");		
while($F = mysql_fetch_array($query)) 
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
if(isset($_POST[submit]))
{			
	DB::query("INSERT INTO host_tickets (user,content,ticketid,ttype,time) values ('{$discuz_userss}','{$_POST[content]}','$ticketid','csreply','$timestamp')");
	DB::query("UPDATE host_tickets SET status ='$lang[admin_replied]' WHERE ticketid='$ticketid' AND ttype ='post'");
	showmessage($lang[replied], 'plugin.php?id=host:host&panel=admin&type=tickets');
}
include template("host:admin_replytickets");
?>
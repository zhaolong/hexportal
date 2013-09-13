<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$forumhash=formhash();
if ($ticketid)
{
	$query = DB::query("SELECT * FROM host_tickets WHERE ticketid = '$ticketid' and ttype ='post' ");		
	$array = mysql_fetch_array($query); 
	$check = DB::num_rows($query);
	if(!$check)
	{
		showmessage($lang[no_this_ticket]);
	}
	$array[time_s] = gmdate('Y-m-d H:i', $array[time] + $timeoffset *3600);
	$query1 = DB::query("SELECT * FROM host_tickets WHERE ticketid = '$ticketid'");		
	while($F = mysql_fetch_array($query1))
	{
		$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
		$Data[] = $F;
	}
	if(isset($_POST[submit])) 
	{			
		DB::query("INSERT INTO host_tickets (user,content,ticketid,ttype,time) values ('{$discuz_userss}','{$_POST[content]}','$ticketid','reply','$timestamp')");
		DB::query("UPDATE host_tickets SET status ='$lang[custom_reply]' WHERE ticketid='$ticketid' AND ttype ='post'");
	    showmessage($lang[ticket_submit_ok], 'plugin.php?id=host:host&page=tickets');
	}
}
else
{
	include template("host:chat");
}
?>
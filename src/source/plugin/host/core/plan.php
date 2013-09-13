<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$queryx = DB::query("SELECT * FROM host_plan ORDER BY ID ASC ");
while($F = mysql_fetch_array($queryx)) 
{
	if ($F[open] =='on')
	{
		$F[status_s] = $lang[accept_application];
		$F[icon] = "<img src='./source/plugin/host/images/yes.png' />";
	}
	elseif ($F[open] == 0)
	{
		$F[status_s] = $lang[stopped];
		$F[icon]= "<img src='./source/plugin/host/images/no.png' />";
	}
	if ($F[ads] !='')
	{
		$F[icons] = "<img src='./source/plugin/host/images/yes.png' />";
	}
	elseif ($F[ads] == '')
	{
		$F[icons]= "<img src='./source/plugin/host/images/no.png' />";
	}
	if ($F[auto] =='on')
	{
		$F[auto_s] = $lang[auto_active];
	}
	else
	{
		$F[auto_s]= $lang[manual_active];
	}
	if ($F[max] <= $F[user])
	{
		DB::query("UPDATE host_plan SET open='' WHERE plan = '$F[plan]'");
	}
	elseif ($F[max] >= $F[user])
	{
		DB::query("UPDATE host_plan SET open='on' WHERE plan = '$F[plan]'");
	}
	$Data[] = $F;
}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$check = DB::num_rows($queryx);
include template("host:plan");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_user  WHERE uid='$discuz_uid'");
$check = DB::num_rows($query);
$array = mysql_fetch_array($query);
if(!$check)
{
	showmessage($lang[no_host],"plugin.php?id=host:host&page=plan");
}
$username = $array[username];
$plan = $array[plan];
$password = base64_decode($array[password]);
$array[date_s] = gmdate('Y-m-d H:i:s', $array[date] + $timeoffset *3600);
$query2 = DB::query("SELECT p.*, s.* FROM host_plan p LEFT JOIN host_server s ON s.server = p.server WHERE p.plan='$plan'");
$array2 = mysql_fetch_array($query2);
$query3 = DB::query("SELECT * FROM host_user WHERE aff='$_POST[username]'");
$check3 = DB::num_rows($query3);
if ($array2[cp] == 'cPanel')
{
	$xmlapi = new xmlapi($array2[ip]);
	$xmlapi->password_auth($array2[userlogin] ,$array2[passlogin]);
	$output = $xmlapi->accountsummary($username);
	$diskused = $output->acct->diskused;
	$disklimit = $output->acct->disklimit;
	$port ="2082";
}
elseif ($array2[cp] == 'DirectAdmin')
{
	$sock = new HTTPSocket;
	$sock->connect($array2[ip], 2222);
	$sock->set_login($array2[userlogin],$array2[passlogin]);
	$sock->set_method('GET');
	$sock->query('/CMD_API_SHOW_USER_USAGE',array('user' => $username));
	$str = $sock->fetch_body();
	parse_str($str, $output);
	$diskused = $output[quota]. "M";		
	$sock->query('/CMD_API_SHOW_USER_CONFIG',array('user' => $username));
	$str1 = $sock->fetch_body();
	parse_str($str1, $output1);
	$disklimit = $output1[quota]. "M";
	$port ="2222";
}
if ($disklimit == 0)
{
	$percentage = '0';
}
else
{
	$percentage = $diskused / $disklimit * 100;
}
if (gethostbyname($array[domain]) != $array2[ip])
{
	$domain ="<img src='./source/plugin/host/images/no.png' /> $lang[domain_point_wrong]";
}
else
{
	$domain ="<img src='./source/plugin/host/images/yes.png' /> $lang[domain_point_ok]";
}
if (!$array2[ads])
{
	$array2[ads] = $lang[no_forced_ads];
}
include template("host:myhost");
?>
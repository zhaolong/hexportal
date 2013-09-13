<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_user ORDER by DATE ASC");
while($F = mysql_fetch_array($query))
{
	$Data[] = $F;
}
$check = DB::num_rows($query);
$query1 = DB::query("SELECT u.*, p.*,s.* FROM host_user u LEFT JOIN host_plan p ON u.plan = p.plan LEFT JOIN host_server s ON p.server = s.server WHERE u.username='$_POST[username]'");
$array1 = mysql_fetch_array($query1);
$query2 = DB::query("SELECT * FROM host_user WHERE aff='$_POST[username]'");
$check2 = DB::num_rows($query2);
$website_data = @file_get_contents('http://'.$array1[domain].'/');
$domain = @gethostbyname($array1[domain]);
if (isset($_POST['adschecker']))
{
	if ($array1[ads])
	{
		$pos = @strpos($website_data, $array1[ads]);
		if ($pos === false)
		{
			$noads = $lang[ads_not_placed];
		}
		else
		{
			$noads = $lang[ads_placed];
		}
	}
	else
	{
		$noads = $lang[no_ads_forced];
	}
	showmessage("$noads");
}
elseif (isset($_POST['domainchecker']))
{
	if ($domain != $array1[ip])
	{
		$connected = $lang[domain_point_wrong];	
	}
	else
	{
		$connected = $lang[domain_point_ok];
	}
	showmessage("$connected");
}
elseif (isset($_POST['affchecker']))
{
	showmessage("$lang[affiliate_total]$check2");
}
include template("host:admin_tools");
?>
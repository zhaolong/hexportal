<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
if(!intval($_GET['hid'])){
		showmessage('?');die();
}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_user  WHERE uid='$discuz_uid' AND id='".intval($_GET['hid'])."'");
$check = DB::num_rows($query);
$arrayx = mysql_fetch_array($query);

if(!$check)
{
	showmessage($lang[no_host_to_renewal],"plugin.php?id=host:host&page=plan");
}
$username = $arrayx[username];
$plan = $arrayx[plan];
$password = base64_decode($arrayx[password]);
$arrayx[date_s] = gmdate('Y-m-d H:i:s', $arrayx[date] + $timeoffset *3600);
$query2 = DB::query("SELECT p.*, s.* FROM host_plan p LEFT JOIN host_server s ON s.server = p.server WHERE p.id='$plan'");
$array2 = mysql_fetch_array($query2);
$twoyrprice=$array2[twoyrprice];
$yrprice=$array2[yrprice];
$sixmonprice=$array2[sixmonprice];
$monprice=$array2[monprice];

if($arrayx[status]!="active"){
	showmessage("主机状态不支持续费","javascript:window.history.go(-1)");
}

if($twoyrprice=="0"){
	$monprice=$lang[free_no_renewal];
	$sixmonprice=$lang[free_no_renewal];
	$yrprice=$lang[free_no_renewal];
	$twoyrprice=$lang[free_no_renewal];
}else{
	$monprice = "<option value=\"jQuery.post('plugin.php?id=host:host&page=save','action=renew&hid=".$_GET['hid']."&during=1&term=mon&token=".$hashToken."',function(data){dp(data);});\">续费1个月</option>";
	$sixmonprice = "<option value=\"jQuery.post('plugin.php?id=host:host&page=save','action=renew&hid=".$_GET['hid']."&during=6&term=mon&token=".$hashToken."',function(data){dp(data);});\">续费6个月</option>";
	$yrprice="<option value=\"jQuery.post('plugin.php?id=host:host&page=save','action=renew&hid=".$_GET['hid']."&during=1&term=yr&token=".$hashToken."',function(data){dp(data);});\">续费1年</option>";
	$twoyrprice="<option value=\"jQuery.post('plugin.php?id=host:host&page=save','action=renew&hid=".$_GET['hid']."&during=2&term=yr&token=".$hashToken."',function(data){dp(data);});\">续费2年</option>";
}

$arrayx[expiredate] = gmdate('Y-m-d H:i:s', $arrayx[expiredate] + $timeoffset *3600);
$arrayx[plan]=$array2[plan];
include template("host:cash1");
?>
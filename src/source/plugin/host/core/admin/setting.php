<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query7 = DB::query("SELECT * FROM host_setting WHERE name = 'ips'");
$array7 = mysql_fetch_array($query7);
$query8 = DB::query("SELECT * FROM host_setting WHERE name = 'support'");
$array8 = mysql_fetch_array($query8);
$query9 = DB::query("SELECT * FROM host_setting WHERE name = 'msn'");
$array9 = mysql_fetch_array($query9);
$query10 = DB::query("SELECT * FROM host_setting WHERE name = 'email'");
$array10 = mysql_fetch_array($query10);
$query11 = DB::query("SELECT * FROM host_setting WHERE name = 'skype'");
$array11 = mysql_fetch_array($query11);
$query = DB::query("SELECT * FROM host_setting WHERE name = 'tos'");
$tos = mysql_fetch_array($query);
if (isset($_POST[submit])) 
{	
	DB::query("UPDATE host_setting set value ='$_POST[tos]' WHERE name= 'tos'");
	showmessage($lang[updated],"plugin.php?id=host:host&panel=admin&type=tos");	
}
if ($array100[value] == 'on')
{
	$array[checked1] = 'checked="checked"';
}
else
{
	$array[checked1] ="";
}
if ($array8[value] == 'on')
{
	$array[checked2] = 'checked="checked"';
}
else
{
	$array[checked2] ="";
}
if ($array7[value] == 'on')
{
	$array[checked3] = 'checked="checked"';
}
else
{
	$array[checked3] ="";
}
if (isset($_POST[submit])) 
{	
	$InputArray = array('general','support','ips','admin','msn','email','skype');
	foreach ($InputArray as $i) 
	{
		DB::query("UPDATE host_setting set value ='$_POST[$i]' WHERE name= '$i'");
	}
	showmessage($lang[updated],'plugin.php?id=host:host&panel=admin&type=setting');	
}
include template("host:admin_setting");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_admin WHERE username = '{$_COOKIE[adminusername]}'");		
$array = mysql_fetch_array($query); 
if (isset ($_POST[submit]))
{
	$password = base64_encode($_POST[password]);
	if ($_POST[oldpassword] != base64_decode($array[password]))
	{
		showmessage($lang[wrong_old_pwd], 'javascript:history.back()');
	}
	elseif ($_POST[password] != $_POST[password2])
	{
		showmessage($lang[pass_not_match], 'javascript:history.back()');
	}
	else
	{
		DB::query("UPDATE host_admin SET password ='$password' WHERE username = '{$_COOKIE[adminusername]}'");	
		showmessage($lang[updated], 'javascript:history.back()');
	}
}
include template("host:admin_changepw");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(isset($_POST['submit']))
{
	if(empty($_POST['subject'])||empty($_POST['content'])) 
	{
		showmessage($lang[fill_all],"javascript:history.back()");
	}
	else
	{
		massmail($_POST['subject'],$_POST['content']);
		showmessage($lang[email_sent_ok],"javascript:history.back()");
	}
}
include template("host:admin_massmail");
?>
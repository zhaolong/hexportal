<?php

if(!defined('IN_DISCUZ')) {die('Access Denied');}

if($_G['uid']){
	header('location:plugin.php?id=host:host');
}else{
	$formhash=formhash();
	include template("host:login");
}
?>
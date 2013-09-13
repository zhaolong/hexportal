<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_setting WHERE name = 'msn'");
$array3 = mysql_fetch_array($query);
$query1 = DB::query("SELECT * FROM host_setting WHERE name = 'email'");
$array1 = mysql_fetch_array($query1);
$query2 = DB::query("SELECT * FROM host_setting WHERE name = 'skype'");
$array2 = mysql_fetch_array($query2);
$lang[email_api]=str_replace('#value#',$array1[value],$lang[email_api]);
$lang[im_api]=str_replace('#value#',$array3[value],$lang[im_api]);
include template("host:contactus");
?>
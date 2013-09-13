<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_setting WHERE name = 'tos'");
$arrayx = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);

include template("host:tos");
?>
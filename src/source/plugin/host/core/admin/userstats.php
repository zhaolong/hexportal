<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_user");
$tuser = DB::num_rows($query);
$query = DB::query("SELECT * FROM host_user WHERE status='active'");
$auser = DB::num_rows($query);
$query = DB::query("SELECT * FROM host_user WHERE status='inactive'");
$iuser = DB::num_rows($query);
$query = DB::query("SELECT * FROM host_user WHERE status='suspend'");
$suser = DB::num_rows($query);
include template("host:admin_userstats");
?>
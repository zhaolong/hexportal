<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_tickets WHERE status = '$lang[custom_reply]'");
$array[tickets] = DB::num_rows($query);
$query = DB::query("SELECT * FROM host_user WHERE status = 'inactive'");
$array[users] = DB::num_rows($query);
$lang[ticket_stat]=str_replace('#tickets#',$array[tickets],$lang[ticket_stat]);
$lang[user_inactive_stat]=str_replace('#users#',$array[users],$lang[user_inactive_stat]);
include template("host:admin_home");
?>
<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
$query = DB::query("SELECT * FROM host_announcements ORDER BY ID DESC LIMIT 3");
while($F = mysql_fetch_array($query)) 
{
	$F[time_s] = gmdate('Y-m-d H:i', $F[time] + $timeoffset *3600);
	$Data[] = $F;
}
$check = DB::num_rows($query);

$after_7day = time() + 3600 * 24 * 7;
$query_all = DB::query("SELECT count(id) as count FROM host_user WHERE uid='$discuz_uid'; ");
$array_all = DB::fetch( $query_all );
$query_will_expire = DB::query("SELECT count(id) as exp_count FROM host_user WHERE expiredate < {$after_7day} AND uid='$discuz_uid'; ");
$array_will_expire = DB::fetch( $query_will_expire );
//echo $_G['username'];
$sql_tks = "SELECT * FROM host_tickets WHERE user = '".$_G["username"]."' AND ttype = 'post' AND ( STATUS = '管理员回复' OR STATUS =  '新提交' ) LIMIT 0 , 10";
//echo $sql_tks;
$query_tks = DB::query($sql_tks);
$array_tks = array();
while($E = mysql_fetch_array($query_tks)) 
{
	$array_tks[] = $E;
}

//print_r($array_tks);

include template("host:index");
?>

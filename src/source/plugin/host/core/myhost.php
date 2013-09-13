<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$navtitle = "管理主机";

$hid = intval($_GET['hid']);
$exp_date = time() - 7 * 24 * 3600;
$will_exp_date = time() + 7 * 24 * 3600;
$query = DB::query("SELECT * FROM host_user WHERE expiredate > {$exp_date} AND uid='$discuz_uid'".($hid?(" AND id='".$hid."' "):""));
if(!$hid){
	$l_a=array();
	while ($row = mysql_fetch_array($query)) {
		//print_r($row);
		$row['date']=date('Y-m-d',$row[date]);
		$row['expiredate']=date('Y-m-d',$row[expiredate]);
		$query2 = DB::query("SELECT p.*, s.* FROM host_plan p LEFT JOIN host_server s ON s.server = p.server WHERE p.id='{$row['plan']}'");
		$array2 = mysql_fetch_array($query2);
		$row['plan']=$array2['plan'];
		$row['alias'] = base64_decode( $row['alias'] );
		array_push($l_a,$row);
	}
	include template("host:myhost_list");
}else{
	if(!DB::num_rows($query)){
		showmessage($lang[no_host],"plugin.php?id=host:host&page=plan");
	}else{

	}
	$arrayx = mysql_fetch_array($query);
	if(!$arrayx)showmessage('Given CloudServer Not Exists.');
	if($_GET['action'] == "rename"){
		DB::query("UPDATE host_user SET alias = '".base64_encode($_POST['name'])."' WHERE uid = $discuz_uid AND id = $hid");
		echo "1";
		die();
	}
	$username = $arrayx[username];
	$plan = $arrayx[plan];
	$password = base64_decode($arrayx[password]);
	$arrayx[date_s] = gmdate('Y-m-d H:i:s', $arrayx[date] + $timeoffset *3600);
	$query2 = DB::query("SELECT p.*, s.* FROM host_plan p LEFT JOIN host_server s ON s.server = p.server WHERE p.id='$plan'");
	$array2 = mysql_fetch_array($query2);
	$arrayx[expiredate] = gmdate('Y-m-d H:i:s', $arrayx[expiredate] + $timeoffset *3600);
	$arrayx['plan']=$array2['plan'];
	$arrayx['alias'] = base64_decode( $arrayx['alias'] );
	if(strtolower(substr($arrayx[os],0,7))=="windows"){
		$arrayx[osico]="iconsweets-windows";
	}else{
		$arrayx[osico]=" iconsweets-linux";
	}
	include template("host:myhost");
}

?>
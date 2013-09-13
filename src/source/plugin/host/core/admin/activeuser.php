<?php
/**
File:	activeuser.php
Note:	开通用户时补充主机名称、IP地址、操作系统、机房、等信息。
*/

if(!defined('IN_DISCUZ')) {die('Access Denied');}
$hid=intval($_GET['hid']);

if($action == 'show' AND $hid){
	//showmessage("未定义操作","plugin.php?id=host:host&panel=admin&type=user");
}elseif ($action == 'create' AND $hid AND $_POST){
	/*
		hostid:AY1302241021447dc7307
		uid:5
		plan:经济A
		status:active
		datacenter:hangzhou_bgp
		os:ubuntu12.04_64bit
		publicIp:42.121.112.94
		lanIp:10.200.12.216
	*/
	$hostid=$_POST['hostid'];
	$uid=$_POST['uid'];
	$plan=$_POST['plan'];
	$status=$_POST['status'];
	$datacenter=$_POST['datacenter'];
	$os=$_POST['os'];
	$publicIp=$_POST['publicIp'];
	$lanIp=$_POST['lanIp'];
	$j['cpu']=intval($_POST['cpu']);
	$j['mem']=intval($_POST['mem']);
	$j['storage']=intval($_POST['storage']);
	$j['bandwidth']=intval($_POST['bandwidth']);
	$j['datacenter']=$datacenter;
	$j['os']=$os;
	$vmid=intval($_POST['vmid']);
	
	$json = json_encode($j);
	$sql="UPDATE host_user SET status = '{$status}' , domain = '{$hostid}' , uid = '{$uid}' , plan = '{$plan}' , status = '{$status}' , datacenter = '{$datacenter}' , os = '{$os}' , publicIp = '{$publicIp}' , lanIp = '{$lanIp}', vmid = '{$vmid}', confData = '{$json}' WHERE id = '{$hid}'";
	//die($sql);
	DB::query($sql);
	showmessage($lang[active_ok],"plugin.php?id=host:host&panel=admin&type=activeuser&hid=".$hid."&action=show");die();
}
$query = DB::query("SELECT * FROM host_user WHERE id=".$hid);
$F = mysql_fetch_array($query);
$F[date_s] = gmdate('Y-m-d H:i', $F[date] + $timeoffset *3600);
$F[date_n] = (int)(($timestamp - $F[date])/ 3600 / 24) ;
if($F[date_n]<0)$F[date_n]=0;
$F[expiredate]= gmdate('Y-m-d H:i', $F[expiredate] + $timeoffset *3600);
$array = $F;
//print_r($array);

if(!$array){
	showmessage("好像没找到这个主机","plugin.php?id=host:host&panel=admin&type=user");
}


include template("host:admin_cruser");
?>
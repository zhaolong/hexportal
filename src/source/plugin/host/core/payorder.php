<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$_csrf_token = $_POST['_csrf_token'];
if($_csrf_token != FORMHASH){
	die('-999');
}

$order_id = @addslashes($_POST['order_id']);
$query = DB::query("SELECT type,paid,order_time,pay_time,json,need_pay,hid FROM  `host_order` WHERE `order_id` =  '{$order_id}' AND `uid` = '{$discuz_uid}' AND `paid` = 0 LIMIT 1");
$array = DB::fetch($query);

if(!$array)showmessage('无此订单');

function yuan($num){
	echo number_format($num,2);
}

$amount_query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$amount_array = mysql_fetch_array($amount_query);

$amount = $amount_array['extcredits4'];

$type = $array['type'];
$paid = $array['paid'];
$order_time = $array['order_time'];
$pay_time = $array['pay_time'];
$order_data = json_decode($array['json'],true);
$need_pay = $array['need_pay'];
$hid = $array['hid'];

if( $amount < $need_pay ){
	die("-3");
}else if( $amount >= $need_pay ){
	// Enough to pay
	
	// cut down credit
	$new_credit = $amount - $need_pay ;
	DB::query("UPDATE ".DB::table("common_member_count")." SET  `extcredits4` =  '{$new_credit}' WHERE  `uid` ={$discuz_uid};");
	
	
	// update order
	DB::query("UPDATE `host_order` SET  `paid` =  '1', `pay_time` = '".date('Y-m-d H:i:s')."' WHERE  `order_id` ={$order_id} AND `uid` ={$discuz_uid};");

	if( $type == 1 ){
		// mk host database
		$start_time = time() + 86400;
		if ( $order_data['term'] == "yr" ){
			$long = 86400 * 365 * $order_data['during'];
		}else{
			$long = 86400 * 30 * $order_data['during'];		
		}
		$end_time = time() + 86400 + $long;
		
		$confJson = json_decode( $array['json'], true );
		unset($confJson['term']);
		unset($confJson['during']);
		$confJson = json_encode( $confJson );
		
		DB::query("INSERT INTO `host_user` (`uid`, `plan`, `vmid`,  `domain`, `publicIp`, `lanIp`, `os`, `datacenter`, `status`, `date`, `expiredate`, `pname`, `confData`) VALUES ('{$discuz_uid}', '0', '0', '',  '', '', '".$order_data['os']."', '".$order_data['datacenter']."', 'inactive', '".$start_time."', '".$end_time."', '', '".$confJson."');");
	}else if( $type == 2 ){
		// Renew
		
		$query = DB::query("SELECT * FROM host_user WHERE id = ".$hid." AND uid = {$discuz_uid}");
		$data = DB::fetch($query);
		
		//print_r($data);
		$expiredate = $data['expiredate'];
		if( $order_data['term'] == "yr" ){
			$long = 365 * 86400;
		}else if( $order_data['term'] == "mon" ){
			$long = 30 * 86400;
		}
		$long = $long * $order_data['during'];
		$new_expiredate = $expiredate + $long;
		DB::query("UPDATE `host_user` set `expiredate` = '{$new_expiredate}' WHERE id = {$hid} AND uid = {$discuz_uid}");

	}
	die("1");
}

?>
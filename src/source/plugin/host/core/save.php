<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);

$amount = $array['extcredits4'];
//if ( $amount < 0 ) die('-4');

$cpu = intval($_POST['cpu']);
$mem = intval($_POST['mem']);
$storage = intval($_POST['storage']);
$bandwidth = intval($_POST['bandwidth']);
$during = intval($_POST['during']);
$action = $_POST['action'];
$os = $_POST['os'];
$term = $_POST['term'];
$datacenter = $_POST['datacenter'];
$hid = intval($_POST['hid']);

//echo $need_pay;
//print_r( $p_array );

//if ( $amount < $need_pay ) die('-1'); //amount is not enough  
// Generating an order do not need check amount.
if ( $action == "new" ){
	require_once "class.ecsprice.php";

	$price=new ecsPrice($cpu, $mem, $storage, $bandwidth, $os);
	$json = $price->getPrice();
	$p_array = json_decode( $json, true );

	if ( $term == "yr" ){
		$need_pay = $during * $p_array['year'] ;
	}else if( $term == "mon" ){
		$need_pay = $during * $p_array['month'] ;
	}
	if( $need_pay == 0 ){
		die('-5');
	}
	if ( $cpu <= 0 || $mem <= 0 || $during <= 0 || $os == "" || $term == "" || $datacenter == "" ) die('-3'); //need more param
	$order_id = date('YmdHis').rand(10000,99999);
	$json_data = json_encode( array(
		"cpu" => $cpu,
		"mem" => $mem,
		"storage" => $storage,
		"bandwidth" => $bandwidth,
		"os" => $os,
		"datacenter" => $datacenter,
		"term" => $term,
		"during" => $during,
	) );
	$query = DB::query("INSERT INTO `host_order` (`order_id`, `uid`, `type`, `paid`, `order_time`, `json`, `need_pay`) VALUES ('{$order_id}', '{$discuz_uid}', '1', '0', CURRENT_TIMESTAMP, '{$json_data}', '{$need_pay}');");
	die('1|'.$order_id);
}else if ( $action == "renew" ){
	if ( !$hid ) die('-3'); //need more param
	$data = DB::fetch_all("SELECT * FROM `host_user` WHERE `id` = ".$hid." LIMIT 0 , 1");
	$confData = json_decode( $data[0]['confData'], true );
	require_once "class.ecsprice.php";

	$price=new ecsPrice($confData['cpu'], $confData['mem'], $confData['storage'], $confData['bandwidth'], $confData['os']);
	$json = $price->getPrice();
	$p_array = json_decode( $json, true );
	// $p_array['month']; ÔÂ¸¶
	// $p_array['year'];  Äê¸¶
	if( $during < 0 || $during > 10 ){
		die('-3');
	}
	if($term == "mon"){
		$price = $p_array['month'];
	}else if($term == "yr"){
		$price = $p_array['year'];	
	}else{
		die('-3');
	}
	
	$need_pay = $price * $during;
	if( $need_pay == 0 ){
		die('-5');
	}
	$order_id = date('YmdHis').rand(10000,99999);
	$confData['term'] = $term;
	$confData['during'] = $during;
	$json_data = json_encode( $confData );
	DB::query("INSERT INTO `host_order` (`order_id`, `uid`, `type`, `paid`, `order_time`, `json`, `need_pay`, `hid`) VALUES ('{$order_id}', '{$discuz_uid}', '2', '0', CURRENT_TIMESTAMP, '{$json_data}', '{$need_pay}', '{$hid}');");
	die('1|'.$order_id);
}else if ( $action == "cancel" ){
	$order_id = @addslashes($_POST['order_id']);
	DB::query("UPDATE `host_order` SET  `paid` =  '-1', `pay_time` = '".date('Y-m-d H:i:s')."' WHERE  `order_id` = '{$order_id}' AND `uid` = '{$discuz_uid}' AND `paid` = 0 ;");
	die('1');
}
?>
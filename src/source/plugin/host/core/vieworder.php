<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$order_id = intval($_GET['order_id']);
$query = DB::query("SELECT type,paid,order_time,pay_time,json,need_pay,coupon,promo_price,hid FROM  `host_order` WHERE `order_id` =  '{$order_id}' AND `uid` = '{$discuz_uid}' LIMIT 1");
$array = DB::fetch($query);
//print_r($array);

if(!$array)showmessage('无此订单');

function yuan($num){
	echo number_format($num,2);
}

$type = $array['type'];
$paid = $array['paid'];
$order_time = $array['order_time'];
$pay_time = $array['pay_time'];
$order_data = json_decode($array['json'],true);
$need_pay = $array['need_pay'];
$coupon = $array['coupon'];
$promo_price = $array['promo_price'];
$hid = $array['hid'];

include template("host:vieworder");

?>
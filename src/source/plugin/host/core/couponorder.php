<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$order_id = intval($_POST['order_id']);
$coupon = addslashes($_POST['coupon']);

$query = DB::query("SELECT * FROM  `host_order` WHERE `order_id` = '{$order_id}' AND `uid` = '{$discuz_uid}' AND `paid` = 0 LIMIT 1");
$array = DB::fetch($query);

if( !$array )die('-1');

if( $coupon ){
	//checking coupon code.
	$chk_coupon_query = DB::query("SELECT * FROM  `host_coupon` WHERE `code` = '{$coupon}' LIMIT 1");
	$chk_coupon_array = DB::fetch($chk_coupon_query);
	if( time() > strtotime($chk_coupon_array['expire_time']) ) die('-2');
	if( time() < strtotime($chk_coupon_array['create_time']) ) die('-3');
	if( $chk_coupon_array['canuse'] == 0 || $chk_coupon_array['limit'] == $chk_coupon_array['used'] ) die('-4');

	/*
	echo json_encode( array(
		array(
			'min'=>0.00,
			'max'=>3000.00,
			'do'=>'*0.9'
		),
		array(
			'min'=>3000.01,
			'max'=>10000.00,
			'do'=>'-200'
		)
	) );
	*/
	$algor = json_decode( $chk_coupon_array['algor'], true );
	$promo_price = "0.00";
	foreach ($algor as $d){
		//echo $d['do'] . "\r\n";
		if( $d['min'] <= $array['need_pay'] && $d['max'] >= $array['need_pay'] ){
			preg_match_all( "/([\-\*])([\d\.]{1,5})/", $d['do'], $alg );
		
			if( $alg[1][0] == "-" ){
				$promo_price = $array['need_pay'] - $alg[2][0] ;
			}else if( $alg[1][0] == "*" ){
				$promo_price = $array['need_pay'] * $alg[2][0] ;
			}
		}
	}
	
	
}else{
	$promo_price = "0.00";
}


//"UPDATE `host_order` SET coupon = '20130715', promo_price = 372.6  WHERE `order_id` = '2013071519094484707' AND `uid` = '1' AND `paid` = 0; UPDATE `host_coupon` SET used = used + 1, canuse = canuse - 1 WHERE `code` = '20130715'"

$old_coupon = $array['coupon'];

DB::query("UPDATE `host_order` SET coupon = '{$coupon}', promo_price = {$promo_price}  WHERE `order_id` = '{$order_id}' AND `uid` = '{$discuz_uid}' AND `paid` = 0");

DB::query("UPDATE `host_coupon` SET used = used + 1, canuse = canuse - 1 WHERE `code` = '{$coupon}'");

if($old_coupon)DB::query("UPDATE `host_coupon` SET used = used - 1, canuse = canuse + 1 WHERE `code` = '{$old_coupon}'");


$ret = array(
	'code' => $chk_coupon_array['code'], 
	'note' => $chk_coupon_array['note'],
	'promo_price' => $promo_price 
);

echo json_encode( $ret );
die();


?>
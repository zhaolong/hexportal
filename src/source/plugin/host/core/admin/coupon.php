<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_coupon ORDER BY ID ASC");
while($Fx = mysql_fetch_array($query)) 
{
	$Data[] = $Fx;
}
$check = DB::num_rows($query);
if ($action == 'disable' AND $no)
{
	DB::query("UPDATE host_coupon set canuse = 0 WHERE id ='$no'");
	showmessage("已禁用", 'plugin.php?id=host:host&panel=admin&type=coupon');
}
if($_GET['action']=="manage"&&$_GET['id']){
	$query = DB::query("SELECT * FROM host_coupon WHERE id=".$_GET['no']);
	$F = mysql_fetch_array($query);
	$check1 = DB::num_rows($query);
}

if( $_POST['algor'] ){
        $algor_array = array();
        foreach( $_POST['algor'] as $key => $algor_item ){
                //  Build the algorithm
                var $min = $_POST['min']['key'];
                var $max = $_POST['max']['key'];
                var $algor = $algor_item;
                var $array = array();
                $array['min'] = $min;
                $array['max'] = $max;
                $array['algor'] = $algor_item;
                array_push($algor_array, $array);
                unset($min, $max, $algor, $array);
        }
        $algor_json = json_encode( $algor_array );
}

if ($action == 'manage' AND $no AND $_POST[code])
{
	$_POST[time]=strtotime($_POST[time]);
	DB::query("UPDATE  `host_coupon` SET  `create_time` =  '$_POST[create_time]',`expire_time` = '$_POST[expire_time]',`limit` = '$_POST[limit]',`used` =  '$_POST[used]',`canuse` =  '$_POST[canuse]',`algor` =  '$_POST[algor]' WHERE  `host_coupon`.`id` =".$_GET['no'].";");
	showmessage($lang[updated], 'plugin.php?id=host:host&panel=admin&type=coupon&no='.$_GET['no']);
}


include template("host:admin_coupon");
?>

<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
define('HEXPANEL_ROOT',DISCUZ_ROOT.'/source/plugin/host/lang/');
$language="Chinese_Simplified_Utf8";
require_once(HEXPANEL_ROOT.$language.".php");//Load language module
#Email

#Variables
$page = $_GET[page];
$type = $_GET[type];
$action = $_GET[action];
$ticketid = $_GET[ticketid];
$username = $_GET[username];
$no = $_GET[no];
$panel = $_GET[panel];
$timestamp = time();
$ip_check = DB::result_first("SELECT * FROM host_user WHERE ip='$ip'");
$discuz_uid = $_G[uid];
$discuz_userss = $_G[member][username];
$query100 = DB::query("SELECT * FROM host_setting WHERE name='general'");
$check100 = DB::num_rows($query100);
$array100 = mysql_fetch_array($query100);
$query103 = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'");
$check103 = DB::num_rows($query103);
$lkeyl='';
$lkeys='';
$lpwd='';

#Check Admin
$query104 = DB::query("SELECT * FROM host_setting WHERE name = 'admin'");
$array104 = mysql_fetch_array($query104);
$admin_array = explode(",", $array104['value']);

#Functions

function getIp(){
	if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]){ 
		$ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]; 
	}elseif ($HTTP_SERVER_VARS["HTTP_CLIENT_IP"]){ 
		$ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"]; 
	}elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"]){ 
		$ip = $HTTP_SERVER_VARS["REMOTE_ADDR"]; 
	}elseif (getenv("HTTP_X_FORWARDED_FOR")){ 
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
	}elseif (getenv("HTTP_CLIENT_IP")){ 
		$ip = getenv("HTTP_CLIENT_IP"); 
	}elseif (getenv("REMOTE_ADDR")){ 
		$ip = getenv("REMOTE_ADDR"); 
	}else{ 
		$ip = "Unknown"; 
	} 
	return $ip;
}
function hashToken($uid){
	$hours=date('Y-m-d H');
	$ip=getIp();
	$hashKey="ssdfnh#dsfsdfkklas6582993";
	return md5($hashKey.base64_encode($uid.$ip.$hashKey.$hours));
}


function GetMonthDay( $Year , $Month) {
    if($Month<12)$Month +=1;
	else{
		$Year+=1;
		$Month=1;
	}

    $d=date ('d' , strtotime ( $Year .'-'. $Month .'-' . '01') - 1 );
	return $d;
}
function GetMultiMonthDay( $Year , $Month , $Much ) {
	// $Year:起点年份 $Month:起点月份 $Much:计算多少个月
	$j=0;
	for( $i = 0;$i<$Much;$i++){
		if($Month+$i>12){
			$Yearx = $Year + intval(($Month+$i)/12);
			$l = ($Month+$i)%12 ;
		}else{
			$Yearx = $Year;
			$l = $Month+$i;
		}
		$j = $j + GetMonthDay($Yearx,$l);
	}
	return $j;
}
function GetYearDay ( $Year ){
	if( $Year % 4 ) {
		return 366;
	}else{
		return 365;
	}
}
$ip = getIp();
$hashToken=hashToken();
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);
?>
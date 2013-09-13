<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$query = DB::query("SELECT * FROM ".DB::table("common_member_count")." WHERE uid='$discuz_uid'");
$array = mysql_fetch_array($query);

/*
$query = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'");
$check = DB::num_rows($query);


if ($check)
{
	showmessage($lang[hosted],"plugin.php?id=host:host&page=myhost");
}
*/
$datacenters=array('hangzhou_bgp','qingdao_bgp');
if($_POST[submit]&&!in_array($_POST[datacenter],$datacenters)){
	$a=array('code'=>403,'msg'=>'badDatacenter');
	die(json_encode($a));
}

if(isset($_POST['os'])){
	$a=array('code'=>403,'msg'=>'osCheckFaild');
	switch($_POST['os']){
		case "centos5.4_32bit": $flag=1;break;
		case "centos5.7_64bit": $flag=1;break;
		case "centos5.8_64bit": $flag=1;break;
		case "centos6.3_64bit": $flag=1;break;
		case "debian6.0.3_64bit": $flag=1;break;
		case "debian6.0.6_64bit": $flag=1;break;
		case "ubuntu10.10_64bit": $flag=1;break;
		case "ubuntu12.04_64bit": $flag=1;break;
		case "redhat5.4_64bit": $flag=1;break;
		case "redhat5.7_64bit": $flag=1;break;
		default:die(json_encode($a));
	}
}

$queryx = DB::query("SELECT * FROM host_plan ORDER BY ID ASC ");
while($F = mysql_fetch_array($queryx)){
	$Data[] = $F;
}

if ($planid){

	$query1 = DB::query("SELECT * FROM host_plan WHERE id ='$planid'");
	$array1	= mysql_fetch_array($query1);
	
	if (!DB::num_rows($query1))
	{
		showmessage($lang[no_plan],"plugin.php?id=host:host");
	}		
	elseif ($array1[reseller] =='on')
	{
		$array1[type] = $lang[reseller];
	}
	elseif (!$array1[reseller])
	{
		$array1[type]= $lang[noemalhosting];
	}	
	if (isset($_POST[submit]))
	{
		$query2 = DB::query("SELECT p.*, s.* FROM host_plan p LEFT JOIN host_server s ON s.server = p.server WHERE p.plan='$_POST[plan]'");
		$array2 = mysql_fetch_array($query2);
		$user = $array2[user] + 1;
		$query3 = DB::query("SELECT * FROM host_setting  WHERE name='ips'");
		$array3 = mysql_fetch_array($query3);
		$password = base64_encode($_POST[password]);
		if (empty($_POST[mobile])){
			$a=array('code'=>403,'msg'=>'mustFillAll');
			echo json_encode($a);
			die();
			//showmessage($lang[fill_all],'javascript:history.back()');
		}elseif (empty($_POST[agree]))		{
			$a=array('code'=>403,'msg'=>'mustAgreeTos');
			echo json_encode($a);
			die();	
			//showmessage($lang[must_agree_tos],'javascript:history.back()');
		} 
		elseif ($ip_check AND $array3[value] != 'on')
		{
			$a=array('code'=>403,'msg'=>'ipLimitExceeded');
			echo json_encode($a);
			die();
			//showmessage($lang[ip_limited],'javascript:history.back()');
		}

		//$mail_content = $lang[mail_content_apply_page];
		if($array2[twoyrprice]==0&&$array2[yrprice]==0&&$array2[sixmonprice]==0&&$array2[monprice]==0){
			$flag=false;//free hosting
			$expiredate=date('U')+3600*24*365*3;
		}else{
			$flag=true;
			$expiredate=date('U');
		}
			$enough=true;
			if($_POST[term]=='mon'&&$array[extcredits4]<$array1[monprice]){
				$enough=false;
			}
			if($_POST[term]=='sixmon'&&$array[extcredits4]<$array1[sixmonprice]){
				$enough=false;
			}
			if($_POST[term]=='yr'&&$array[extcredits4]<$array1[yrprice]){
				$enough=false;
			}
			if($_POST[term]=='twoyr'&&$array[extcredits4]<$array1[twoyrprice]){
				$enough=false;
			}
			if((!empty($_POST[term]))&&$_POST[term]!='mon'&&$_POST[term]!='sixmon'&&$_POST[term]!='yr'&&$_POST[term]!='twoyr'){
				$enough=false;
			}
			if($enough){
				DB::query("INSERT INTO host_user (uid,plan,email,domain,os,status,date,ip,expiredate,pname,datacenter) values('{$discuz_uid}', '{$_POST[plan]}', '".intval($_POST[mobile])."', '','".htmlspecialchars($_POST[os])."','inactive','$timestamp', '$ip','{$expiredate}','".htmlspecialchars($_POST[name])."','".$_POST[datacenter]."' )");	
			}else{
				$a=array('code'=>403,'msg'=>'amountExceeded');
				echo json_encode($a);
				die();
			}
				if($_POST[term]=='mon'){
						$new_expire=$timestamp+3600*24*GetMonthDay(date('Y'),date('m'));
						DB::query("UPDATE host_user SET expiredate = '$new_expire'  WHERE uid='$discuz_uid' AND date='$timestamp'");
						$a=array('code'=>200,'msg'=>'OK');
						updatemembercount($discuz_uid, array('extcredits4' => (0-$array1[monprice])), true, 'B01', 12, '主机新购_1个月');
						echo json_encode($a);
						die();
						//showmessage($lang[applied_successfully_1],'./plugin.php?id=host:host&page=myhost');
				}elseif($_POST[term]=='sixmon'){
						$new_expire=$timestamp+3600*24*GetMultiMonthDay(date('Y'),date('m'),6);
						updatemembercount($discuz_uid, array('extcredits4' => (0-$array1[sixmonprice])), true, 'B06', 12, '主机新购_6个月');
						DB::query("UPDATE host_user SET expiredate = '$new_expire'  WHERE uid='$discuz_uid' AND date='$timestamp'");
						$a=array('code'=>200,'msg'=>'OK');
						echo json_encode($a);
						die();
						//showmessage($lang[applied_successfully_2],'./plugin.php?id=host:host&page=myhost');
				}elseif($_POST[term]=='yr'){
						$new_expire=$timestamp+3600*24*GetYearDay(date('Y'));
						updatemembercount($discuz_uid, array('extcredits4' => (0-$array1[yrprice])), true, 'B12', 12, '主机新购_1年');
						DB::query("UPDATE host_user SET expiredate = '$new_expire'  WHERE uid='$discuz_uid' AND date='$timestamp'");
						$a=array('code'=>200,'msg'=>'OK');
						echo json_encode($a);
						die();
						//showmessage($lang[applied_successfully_3],'./plugin.php?id=host:host&page=myhost');
				}elseif($_POST[term]=='twoyr'){
						$new_expire=$timestamp+3600*24*(GetYearDay(date('Y'))+GetYearDay(intval(date('Y'))+1));
						updatemembercount($discuz_uid, array('extcredits4' => (0-$array1[twoyrprice])), true, 'B24', 12, '主机新购_2年');
						DB::query("UPDATE host_user SET expiredate = '$new_expire'  WHERE uid='$discuz_uid' AND date='$timestamp'");
						$a=array('code'=>200,'msg'=>'OK');
						echo json_encode($a);
						die();
				}else{
					//showmessage('Fuck you!'.$POST[term]);
					$a=array('code'=>400,'msg'=>'badCycle');
					echo json_encode($a);
					die();
				}
	}
}
$lang[agree]=str_replace('#bbname#',$_G[setting][bbname],$lang[agree]);
$lang[agree]=str_replace('#indexname#',$indexname,$lang[agree]);
$lang[ip_tip]=str_replace('#ip#',$ip,$lang[ip_tip]);
$lang[fees_1]=str_replace('#monprice#',$array1[monprice],$lang[fees_1]);
$lang[fees_2]=str_replace('#sixmonprice#',$array1[sixmonprice],$lang[fees_2]);
$lang[fees_3]=str_replace('#yrprice#',$array1[yrprice],$lang[fees_3]);
$lang[fees_4]=str_replace('#twoyrprice#',$array1[twoyrprice],$lang[fees_4]);
$tel=getuserprofile('mobile');
include template("host:apply");

?>
<?php
if($_GET['action']!="getMonitor"){
	if(!defined('IN_DISCUZ')||((!$_GET['hid']))&&$_GET['action']!=="getPrice") {die('Access Denied');}

	require_once "class.ecsprice.php";

	if($_GET['action']=="getPrice"){
		$price=new ecsPrice($_GET['cpu'],$_GET['mem'],$_GET['storage'],$_GET['bandwidth'],$_GET['os']);
		echo $price->getPrice();die();
	}

	if(!$discuz_uid){
			showmessage('not_loggedin', NULL, array(), array('login' => 1));
	}
	$uid=$discuz_uid;
	if(!htmlspecialchars($_GET['hid'])){die('Access Denied');}
	if($hashToken!=$_GET['token']){
		showmessage("XSS口令验证失效.");
		die();
	}
	$query = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'".($_GET['hid']?(" AND domain='".htmlspecialchars($_GET['hid'])."' "):""));
	$x=mysql_fetch_array($query, MYSQL_NUM);
	if(!$x){
		die('Access denied');
	}

	$accessKeyId = '';      // 这里填写您的Access Key ID
	$accessKeySecret = '';  // 这里填写您的Access Key Secret

	$action_array=array('StartInstance','StopInstance','RebootInstance','ModifyInstanceAttribute','DescribeInstanceStatus','DescribeInstanceAttribute','DescribeInstanceDisks','DescribeImages','AllocatePublicIpAddress','ReleasePublicIpAddress','GetMonitorData','CreateInstance','getMonitor');
	if($_GET['action']=="getStatus"){
		$_GET['action']="DescribeInstanceAttribute";//DescribeInstanceAttribute
		$callback="1";
	}

	if(!in_array($_GET['action'],$action_array))die('Not a vailid action');
	$action=$_GET['action'];


	function percentEncode($str)
	{
		// 使用urlencode编码后，将"+","*","%7E"做替换即满足ECS API规定的编码规范
		$res = urlencode($str);
		$res = preg_replace('/\+/', '%20', $res);
		$res = preg_replace('/\*/', '%2A', $res);
		$res = preg_replace('/%7E/', '~', $res);
		return $res;
	}

	function computeSignature($parameters, $accessKeySecret)
	{
		// 将参数Key按字典顺序排序
		ksort($parameters);

		// 生成规范化请求字符串
		$canonicalizedQueryString = '';
		foreach($parameters as $key => $value)
		{
		$canonicalizedQueryString .= '&' . percentEncode($key) 
			. '=' . percentEncode($value);
		}

		// 生成用于计算签名的字符串 stringToSign
		$stringToSign = 'GET&%2F&' . percentencode(substr($canonicalizedQueryString, 1));

		// 计算签名，注意accessKeySecret后面要加上字符'&'
		$signature = base64_encode(hash_hmac('sha1', $stringToSign, $accessKeySecret . '&', true));
		return $signature;
	}


	// 注意使用GMT时间
	date_default_timezone_set("GMT");
	$dateTimeFormat = 'Y-m-d\TH:i:s\Z'; // ISO8601规范


	$data = array(
		// 公共参数
		'Format' => 'JSON',
		'Version' => '2013-01-10',
		'AccessKeyId' => $accessKeyId,
		'SignatureVersion' => '1.0',
		'SignatureMethod' => 'HMAC-SHA1',
		'SignatureNonce'=> uniqid(),
		'TimeStamp' => date($dateTimeFormat), 
		//'Callback' => 'test',
		// 接口参数
		'Action' => $action,
	);
	$_GET['hid']&&$data['InstanceId']=$_GET['hid'];
	$_GET['RegionId']&&$data['RegionId']=$_GET['RegionId'];
	$_GET['Password']&&$data['Password']=$_GET['Password'];
	$_GET['HostName']&&$data['HostName']=$_GET['HostName'];
	$_GET['ZoneId']&&$data['ZoneId']=$_GET['ZoneId'];
	$_GET['PageNumber']&&$data['PageNumber']=$_GET['PageNumber'];
	$_GET['Time']&&$data['Time']=$_GET['Time'];
	$_GET['RegionCode']&&$data['RegionCode']=$_GET['RegionCode'];
	$_GET['MaxBandwidthIn']&&$data['MaxBandwidthIn']=$_GET['MaxBandwidthIn'];
	$_GET['MaxBandwidthOut']&&$data['MaxBandwidthOut']=$_GET['MaxBandwidthOut'];
	$_GET['DiskSize']&&$data['DiskSize']=$_GET['DiskSize'];
	$_GET['InstanceType']&&$data['InstanceType']=$_GET['InstanceType'];
	$_GET['GroupCode']&&$data['GroupCode']=$_GET['GroupCode'];
	$_GET['ImageCode']&&$data['ImageCode']=$_GET['ImageCode'];
	$_GET['ZoneCode']&&$data['ZoneCode']=$_GET['ZoneCode'];
	// 计算签名并把签名结果加入请求参数
	$data['Signature'] = computeSignature($data, $accessKeySecret);

	$url='http://ecs.aliyuncs.com/?' . http_build_query($data);
	// 发送请求
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$res = curl_exec($ch);

	switch ($_GET['action']){
	case "StartInstance":
	  $ch_x="开机";
	  break;  
	case "StopInstance":
	  $ch_x="关机";
	  break;
	case "RebootInstance":
	  $ch_x="重启";
	  break;
	case "ModifyInstanceAttribute":
	  $ch_x="修改实例";
	  break;
	}

	if($callback==1){
		echo "hexdata_call(".$res.");";
	}else{
		//echo $res;
		$array=json_decode($res,true);
		//print_r($array);
		@$status=$array['Code'];
		@$msg=$array['Message'];
		if($status=="IncorrectInstanceStatus"){
			//showmessage("主机状态不支持所请求的".$ch_x."操作");
			$dxxx=array('error'=>'1','code'=>'IncorrectInstanceStatus');
		}elseif($_GET['action'] === "DescribeInstanceDisks"&&$array['Disks']['Disk']){
			$dxxx=$array['Disks']['Disk'];
		}elseif(!isset($status)){
			$dxxx=array('error'=>'0','code'=>'OK','instanceId'=>$data['InstanceId']);
			//showmessage("您所请求的".$ch_x."操作已经成功通知到飞天云计算平台",NULL, array('uid' => $uid),array('alert' => 'right'));
		}
		echo json_encode($dxxx);
	}

}else if(isset($_GET['vmid'])&&$_GET['action']=="getMonitor"){

$vmid=$_GET['vmid'];
if($hashToken!=$_GET['token']){
	showmessage("XSS口令验证失效.");
	die();
}
$ax=time();
$xx=$ax-($ax%600);
$cache_dir="cache_tmp/";

if((!defined('IN_DISCUZ')||!$_GET['vmid'])&&$discuz_uid!=1) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$uid=$discuz_uid;
if((!intval($_GET['vmid']))&&$discuz_uid!=1){die('Access Denied');}

$query = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'".($_GET['vmid']?(" AND vmid=".intval($_GET['vmid'])." "):""));
$x=mysql_fetch_array($query, MYSQL_NUM);
if((!$x)&&$discuz_uid!=1){
	die('Access denied');
}

require_once(DISCUZ_ROOT.'cookie.var.php');
$header = array (
	'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Accept-Charset:GBK,utf-8;q=0.7,*;q=0.3',
	'Accept-Encoding:',
	'Accept-Language:zh-CN,zh;q=0.8',
	'Cache-Control:max-age=0',
	'Connection:keep-alive',
	'Cookie:'.$cookievar,
	'Host:console.aliyun.com',
	'User-Agent:Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1'
 );

if(file_exists($cache_dir.$vmid."_".$xx."_new.txt"))readfile($cache_dir.$vmid."_".$xx."_new.txt");
else{
//第二步:通过读取cookie来访问页面
$ch=curl_init();
$login_url2="http://console.aliyun.com/ecs/monitor/detail.json?ecsId=".$vmid;

//die( $login_url2 );

curl_setopt($ch,CURLOPT_URL,$login_url2);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0); 
//curl_setopt($ch,CURLOPT_HTTPHEADER, $header);  //设置头信息的地方
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.12 Safari/537.36');
curl_setopt($ch,CURLOPT_COOKIE , $cookievar );

$output = curl_exec($ch);
curl_close($ch);
echo $output;


$f=fopen($cache_dir.$vmid."_".$xx."_new.txt",'w');
fwrite($f,$output);
fclose($f);
}

}
?>
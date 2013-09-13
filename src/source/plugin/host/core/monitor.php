<?php
//die('the monitor api function disabled.');

$hid=$_GET['hid'];
if($hashToken!=$_GET['token']){
	showmessage("XSS口令验证失效.");
	die();
}
$ax=time();
$xx=$ax-($ax%600);
$cache_dir="cache_tmp/";

if((!defined('IN_DISCUZ')||!$_GET['hid'])&&$discuz_uid!=1) {die('Access Denied');}
if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$uid=$discuz_uid;
if((!intval($_GET['hid']))&&$discuz_uid!=1){die('Access Denied');}

$query = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'".($_GET['hid']?(" AND vmid=".intval($_GET['hid'])." "):""));
$x=mysql_fetch_array($query, MYSQL_NUM);
if((!$x)&&$discuz_uid!=1){
	die('Access denied');
}


$header = array (
	'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
	'Accept-Charset:GBK,utf-8;q=0.7,*;q=0.3',
	'Accept-Encoding:',
	'Accept-Language:zh-CN,zh;q=0.8',
	'Cache-Control:max-age=0',
	'Connection:keep-alive',
	'Cookie: ',
	'Host:vmcp.aliyun.com',
	'User-Agent:Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1'
 );

?>

jQuery(function(){
			Highcharts.setOptions({global: {useUTC: false}});
			chartsConfig.chart.renderTo = 'charts-net';

<?php
if(file_exists($cache_dir.$hid."_".$xx.".txt"))readfile($cache_dir.$hid."_".$xx.".txt");
else{
//第二步:通过读取cookie来访问页面
$ch=curl_init();
$login_url2="http://console.aliyun.com/ecs/monitor/detail.json?ecsId=".$hid;


curl_setopt($ch,CURLOPT_URL,$login_url2);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HEADER,0); 
curl_setopt($ch,CURLOPT_HTTPHEADER, $header);  //设置头信息的地方

//curl_setopt($ch, CURLOPT_COOKIEJAR, 'sdfasdsacookie.txt');
//curl_setopt($ch, CURLOPT_COOKIEFILE, 'sdfasdsacookie.txt');
$output = curl_exec($ch);
curl_close($ch);

echo $output;

//echo "2\r\n";
//echo $output;
$f=fopen($cache_dir.$hid."_".$xx.".txt",'w');
fwrite($f,$a[1]);
fclose($f);
}
?>

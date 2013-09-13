<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}

if(!$discuz_uid){
		showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$uid=$discuz_uid;

$query = DB::query("SELECT * FROM host_user WHERE uid='$discuz_uid'".($_GET['hid']?(" AND domain='".htmlspecialchars($_GET['instanceName'])."' "):""));
$x=mysql_fetch_array($query, MYSQL_NUM);
if(!$x){
	die('Access denied');
}

Class ECS{
	protected static $accessKeyID=null,$accessKeySec=null,$accessGetway="http://ecs.aliyuncs.com",$data=null,$version='2012-09-13';
	
	protected static function xml2array($contents, $get_attributes=1, $priority = 'tag') {
		if(!$contents) return array(); 
		if(!function_exists('xml_parser_create')) {
			return array();
		} 
		$parser = xml_parser_create('');
		xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8");
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
		xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
		xml_parse_into_struct($parser, trim($contents), $xml_values);
		xml_parser_free($parser); 
		if(!$xml_values) return;
		$xml_array = array();
		$parents = array();
		$opened_tags = array();
		$arr = array();
		$current = &$xml_array;
		$repeated_tag_index = array();
		foreach($xml_values as $data) {
			unset($attributes,$value);
			extract($data);
			$result = array();
			$attributes_data = array(); 
			if(isset($value)) {
				if($priority == 'tag') $result = $value;
				else $result['value'] = $value;
			} 
			if(isset($attributes) and $get_attributes) {
				foreach($attributes as $attr => $val) {
					if($priority == 'tag') $attributes_data[$attr] = $val;
					else $result['attr'][$attr] = $val;
				}
			} 
			if($type == "open") {
				$parent[$level-1] = &$current;
				if(!is_array($current) or (!in_array($tag, array_keys($current)))) {
					$current[$tag] = $result;
					if($attributes_data) $current[$tag. '_attr'] = $attributes_data;
					$repeated_tag_index[$tag.'_'.$level] = 1; 
					$current = &$current[$tag]; 
				} else {
					if(isset($current[$tag][0])) {
						$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
						$repeated_tag_index[$tag.'_'.$level]++;
					} else {
						$current[$tag] = array($current[$tag],$result);
						$repeated_tag_index[$tag.'_'.$level] = 2; 
						if(isset($current[$tag.'_attr'])) {
							$current[$tag]['0_attr'] = $current[$tag.'_attr'];
							unset($current[$tag.'_attr']);
						} 
					}
					$last_item_index = $repeated_tag_index[$tag.'_'.$level]-1;
					$current = &$current[$tag][$last_item_index];
				} 
			} elseif($type == "complete") {
				if(!isset($current[$tag])) {
					$current[$tag] = $result;
					$repeated_tag_index[$tag.'_'.$level] = 1;
					if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data; 
				} else {
					if(isset($current[$tag][0]) and is_array($current[$tag])) {
						$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result; 
						if($priority == 'tag' and $get_attributes and $attributes_data) {
							$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
						}
						$repeated_tag_index[$tag.'_'.$level]++; 
					} else {
						$current[$tag] = array($current[$tag],$result);
						$repeated_tag_index[$tag.'_'.$level] = 1;
						if($priority == 'tag' and $get_attributes) {
							if(isset($current[$tag.'_attr'])) {
								$current[$tag]['0_attr'] = $current[$tag.'_attr'];
								unset($current[$tag.'_attr']);
							} 
							if($attributes_data) {
								$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
							}
						}
						$repeated_tag_index[$tag.'_'.$level]++;
					}
				} 
			} elseif($type == 'close') {
				$current = &$parent[$level-1];
			}
		} 
		return($xml_array);
	}

	protected static function _urlencode($str){
		$res = urlencode($str);
		$res = preg_replace('/\+/', '%20', $res);
		$res = preg_replace('/\*/', '%2A', $res);
		$res = preg_replace('/%7E/', '~', $res);
		return $res;
	}
	
	protected static function curl($url){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$res = curl_exec($ch);
		curl_close($ch);
		return $res;
	}

	protected static function nonce(){
      return str_replace("0",rand(1,9),"".rand(100000,99999999));
	}
	
	protected static function gmdateTZ(){
		return 'Y-m-d\TH:i:s\Z';
	}
	
	protected static function httpParams($data){
		return http_build_query($data);
	}
	
	protected static function sign($parameters, $accessKeySecret){
		ksort($parameters);
		$canonicalizedQueryString = '';
		foreach($parameters as $key => $value){
			$canonicalizedQueryString .= '&' . self::_urlencode($key). '=' . self::_urlencode($value);
		}
		$stringToSign = 'GET&%2F&' .self::_urlencode(substr($canonicalizedQueryString,1));
		$signature = base64_encode(hash_hmac('sha1', $stringToSign, $accessKeySecret . '&', true));
		return $signature;
	}

	protected static function auth($params=array(),$curl=true){
		self::$data = array(
			'Format' => 'XML',
			'Version' => self::$version,
			'AccessKeyID' => self::$accessKeyID,
			'SignatureMethod' => 'HMAC-SHA1',
          	'Timestamp' => date(self::gmdateTZ()), 
			'SignatureVersion' => '1.0',
          'SignatureNonce'=> self::nonce(),
		);
		foreach($params as $k => $v ){
			self::$data[$k]=$v;
		}
		self::$data['Signature'] = self::sign(self::$data, self::$accessKeySec);
		$url= self::$accessGetway .'/?' . self::httpParams(self::$data);
		if($curl===true){
			return self::xml2array(self::curl($url));
		}else{
			return $url;
		}
	}
	
	function __construct($keyid="",$keysec="",$getway="http://ecs.aliyuncs.com"){
		if($keyid!=="")self::$accessKeyID=$keyid;
		if($keysec!=="")self::$accessKeySec=$keysec;
		self::$accessGetway=$getway;
		if(self::$data===null)self::$data=array();
      //date_default_timezone_set("GMT");
	}
	
	function describeDisks($instanceName){
		$array=array();
		$array['action']="DescribeDisks";
		$array['InstanceName']=$instanceName;
		return self::auth($array);
	}

	function describeSnapshots($instanceName,$diskCode){
		$array=array();
		$array['action']="DescribeSnapshots";
		$array['InstanceName']=$instanceName;
		$array['DiskCode']=$diskCode;
		return self::auth($array);
	}

	function createSnapshot($instanceName,$diskCode){
		$array=array();
		$array['action']="CreateSnapshot";
		$array['InstanceName']=$instanceName;
		$array['DiskCode']=$diskCode;
		return self::auth($array);
	}

	function deleteSnapshot($instanceName,$diskCode,$snapshotCode){
		$array=array();
		$array['action']="DeleteSnapshot";
		$array['InstanceName']=$instanceName;
		$array['DiskCode']=$diskCode;
		$array['SnapshotCode']=$snapshotCode;
		return self::auth($array);
	}

	function describeSnapshotAttribute($regionCode,$snapshotCode){
		$array=array();
		$array['action']="DescribeSnapshotAttribute";
		$array['RegionCode']=$regionCode;
		$array['SnapshotCode']=$snapshotCode;
		return self::auth($array);
	}
	
	function rollbackSnapshot($instanceName,$diskCode,$snapshotCode){
		$array=array();
		$array['action']="RollbackSnapshot";
		$array['InstanceName']=$instanceName;
		$array['DiskCode']=$diskCode;
		$array['SnapshotCode']=$snapshotCode;
		return self::auth($array);
	}
	
	function cancelSnapshotRequest($instanceName,$snapshotCode){
		$array=array();
		$array['action']="CancelSnapshotRequest";
		$array['InstanceName']=$instanceName;
		$array['SnapshotCode']=$snapshotCode;
		return self::auth($array);
	}
	
	
} 

$ecs=new ECS('###ACCESS_KEY_ID###','###ACCESS_KEY_SECRET###');

if($_GET['action']==="describeSnapshots"){
	$p=$ecs->describeSnapshots($_GET['instanceName'],$_GET['diskCode']);
	echo json_encode($p['DescribeSnapshotsResponse']['DescribeSnapshotsResult']['Snapshots']['Snapshot']);
}else if($_GET['action']==="rollbackSnapshot"){
	$p=$ecs->rollbackSnapshot($_GET['instanceName'],$_GET['diskCode'],$_GET['snapCode']);
	//print_r ($p);
	if($p['Error']['Code']==="UnsupportedOperation"){
		$a=array();
		$a['errCode']="400";
		$a['errMsg']="NotStopped";
		echo json_encode($a);
	}else{
		$a=array();
		$a['errCode']="0";
		$a['errMsg']="OK";
		echo json_encode($a);
	}
}else if($_GET['action']==="deleteSnapshot"){
	$p=$ecs->deleteSnapshot($_GET['instanceName'],$_GET['diskCode'],$_GET['snapCode']);
	//print_r ($p);
	if($p['Error']['Code']==="UnsupportedOperation"){
		$a=array();
		$a['errCode']="400";
		$a['errMsg']="Error";
		echo json_encode($a);
	}else{
		$a=array();
		$a['errCode']="0";
		$a['errMsg']="OK";
		echo json_encode($a);
	}
}else if($_GET['action']==="createSnapshot"){
	$p=$ecs->createSnapshot($_GET['instanceName'],$_GET['diskCode']);
	//print_r ($p);
	if($p['Error']['Code']==="UnsupportedOperation"){
		$a=array();
		$a['errCode']="400";
		$a['errMsg']="Error";
		echo json_encode($a);
	}else{
		$a=array();
		$a['errCode']="0";
		$a['errMsg']="OK";
		$a['createTime']=$p['CreateSnapshotResponse']['CreateSnapshotResult']['CreateTime'];
		echo json_encode($a);
	}
}
?>

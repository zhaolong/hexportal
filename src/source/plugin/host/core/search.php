<?php

if(!defined('IN_DISCUZ')) {die('Access Denied');}
define('CSS_ROOT',DISCUZ_ROOT.'/source/plugin/host/core/sdk/com.alibaba.cloud.search/search/');
if(!file_exists(CSS_ROOT.'cloudsearchapi.php'))die('1');else require_once CSS_ROOT.'cloudsearchapi.php';
if(!file_exists(CSS_ROOT.'examples/config.php'))die('2');else require_once CSS_ROOT.'examples/config.php';
if(!file_exists(CSS_ROOT.'examples/helper.php'))die('3');else require_once CSS_ROOT.'examples/helper.php';

if($_GET['formhash']!=formhash()){
	showmessage('请求失败，请重试');
	die();
}

if(strlen($_GET['q'])>128){
	showmessage('请减少搜索关键字数后再重试，谢谢。');
	die();
}
/**
 * new a CloudSearchApi object
 */
$api = new CloudSearchApi(APIROOT, CLIENT_ID, CLIENT_SECRET);

try {
    $index = $api->getIndex($indexName);
	if(!isset($_GET['pid'])){
		$_GET['pid']=1;
	}
	$_GET['pid']=intval($_GET['pid'])-1;
	$from = 1+(intval($_GET['pid']));
    $results = $index->search('cq='.$_GET['q'],$from,10,'+id;',NULL,NULL,"",$_GET['q']);

	//echo $results["result"]["total"];
    if (isset($results["result"]["total"]) && $results["result"]["total"] != 0) {
		$data=$results["result"]["items"];
		//foreach ($results["result"]["items"] as $v) {
            //echo $v['title'];
        //}
		
		$check=true;
    } else {
        //print_r($results);
		$check=false;
    }

	//处理分页
	if ($results["result"]["total"] > 10){
		//总页数
		//当前页 $_GET['pid']
		$totalPage = ceil( $results["result"]["total"]/10 ) ;
		if($totalPage>1){
			$naviStr="";
			$thisPid=$_GET['pid']+1;
			for($i=1;$i<=$totalPage;$i++){
				$_GET['pid']=$i;
				if($thisPid==$i){
					$naviStr.='<li class="active"><a href="./plugin.php?'.http_build_query($_GET).'">'.$i.'</a></li>';
				}else{
					$naviStr.='<li><a href="./plugin.php?'.http_build_query($_GET).'">'.$i.'</a></li>';
				}
			}
		}
	}
	
} catch (Exception $e) {
    //#TODO 添加用户自己的失败处理逻辑
    Error::parseReturn($e->getCode(), $e->getMessage());
}


include template("host:search");

?>
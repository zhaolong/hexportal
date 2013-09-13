<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
define('CSS_ROOT',DISCUZ_ROOT.'/source/plugin/host/core/sdk/com.alibaba.cloud.search/search/');
require_once CSS_ROOT.'cloudsearchapi.php';
require_once CSS_ROOT.'examples/config.php';
require_once CSS_ROOT.'examples/helper.php';

if (isset($_POST[submit])) 
{			
	DB::query("INSERT INTO host_announcements (title,content,time) values ('{$_POST[title]}','{$_POST[content]}','$timestamp')");
	$api = new CloudSearchApi(APIROOT, CLIENT_ID, CLIENT_SECRET);
	$mid=mysql_insert_id();
	$itemsArr = array(
		array("cmd"=>"add","fields" => array("id" => "".$mid, "title" => $_POST[title], "body" => $_POST[content],"create_timestamp" => "$timestamp", "update_timestamp" => "$timestamp", "url" => 'http://bbs.thislan.com/plugin.php?id=host:host&page=announcements#'.$mid))
	);

	try {
		$index = $api->getIndex($indexName);
		$index->addDocuments($itemsArr);
	} catch (Exception $e) {
		Error::parseReturn($e->getCode(), $e->getMessage());
	}
	showmessage($lang[submit_ok], 'plugin.php?id=host:host&panel=admin&type=announcements');
}

include template("host:admin_addnotice");
?>
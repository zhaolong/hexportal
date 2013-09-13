<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
define('CSS_ROOT',DISCUZ_ROOT.'/source/plugin/host/core/sdk/com.alibaba.cloud.search/search/');
require_once CSS_ROOT.'cloudsearchapi.php';
require_once CSS_ROOT.'examples/config.php';
require_once CSS_ROOT.'examples/helper.php';

$query = DB::query("SELECT * FROM host_announcements WHERE id=".$_GET['no']);
$F = mysql_fetch_array($query);
$check = DB::num_rows($query);
if ($action == 'manage' AND $no)
{
	$_POST[time]=strtotime($_POST[time]);
	DB::query("UPDATE  `host_announcements` SET  `time` =  '$_POST[time]',`title` =  '$_POST[title]',`content` =  '$_POST[content]' WHERE  `host_announcements`.`id` =".$_GET['no'].";");

	$api = new CloudSearchApi(APIROOT, CLIENT_ID, CLIENT_SECRET);
	$timestamp=time();
	$itemsArr = array(
		array("cmd"=>"add","fields" => array("id" => $_GET['no'], "title" => $_POST[title], "body" => $_POST[content],"update_timestamp" => "$timestamp","url" => 'http://bbs.thislan.com/plugin.php?id=host:host&page=announcements#'.$_GET['no']))
	);

	try {
		$index = $api->getIndex($indexName);
		$index->addDocuments($itemsArr);
	} catch (Exception $e) {
		Error::parseReturn($e->getCode(), $e->getMessage());
	}
	showmessage($lang[updated], 'plugin.php?id=host:host&panel=admin&type=notice&no='.$_GET['no']);
}
$F[time] = gmdate('Y-m-d H:i:s', $F[time] + $timeoffset *3600);
include template("host:admin_notice");
?>
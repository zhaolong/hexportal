<?php
//ini_set('display_errors',true);
//error_reporting(E_ALL);
define("host", TRUE);
if(!defined('IN_DISCUZ')){exit ('Access Denied');}

#Init
require_once './source/plugin/host/core/includes/main.func.php';
@include DISCUZ_ROOT.'./data/cache/plugin_host.php';

if( !$discuz_uid && $_GET['page']!="login" && $_GET['page']!="register" ){
	header('location:./plugin.php?id=host:host&page=login&nextpage='.$_GET['page']);
	die();
}

#Log 用户操作日志记录

#Main
if ($page)
{
	if (!file_exists('./source/plugin/host/core/'.$page.'.php'))
	{
		showmessage('Undefined Actions!');
	}
	else
	{
		switch($page){
			// 用户端页面Title路由
			case "myhost":
				$navtitle = "管理主机";
				break;
			case "listorder":
				$navtitle = "订单中心";
				break;
			case "pay":
				$navtitle = "充值中心";
				break;
			case "tickets":
				$navtitle = "客服中心";
				break;
			case "chat":
				$navtitle = "客服中心";
				break;
			default:
				$navtitle = "用户中心";
				break;
		}
		include_once './source/plugin/host/core/'.$page.'.php';
	}
}
elseif ($panel == 'admin' AND $type)
{
	if (!file_exists('./source/plugin/host/core/admin/'.$type.'.php'))
	{
		showmessage('Undefined Actions!');
	}
	elseif (!in_array($discuz_uid, $admin_array))
	{
		$navtitle = "管理中心";
		showmessage('Access denied!','plugin.php?id=host:host');
	}
	else
	{
		include_once './source/plugin/host/core/admin/'.$type.'.php';
	}
}
else
{
	$navtitle = "用户中心";
	include_once './source/plugin/host/core/index.php';

}
?>
<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: cron_cleanuplocatts_daily.php  $
 *		每日清理附件数据的任务
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
function deldir($dir){
	$dh = opendir($dir);
	while ($file = readdir($dh)){
		if ($file != "." && $file != ".."){
			$fullpath = $dir . "/" . $file;
			if (!is_dir($fullpath)){
				unlink($fullpath);
			}else{
				deldir($fullpath);
			}
		}
	}
	closedir($dh);
	if (rmdir($dir)){
		return true;
	}else{
		return false;
	}
}
$path=dirname(__FILE__)."/../../../data/attachment/forum/".date('Ym/d');
deldir($path);
?>
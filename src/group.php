<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: group.php 28091 2012-02-22 07:33:26Z zhengqingpeng $
 */

define('APPTYPEID', 3);
define('CURSCRIPT', 'group');


require './source/class/class_core.php';
showmessage("群组未开放!");
/*
$discuz = C::app();

$cachelist = array('grouptype', 'groupindex', 'diytemplatenamegroup');
$discuz->cachelist = $cachelist;
$discuz->init();

$_G['disabledwidthauto'] = 0;

$modarray = array('index', 'my', 'attentiongroup');
$mod = !in_array($_G['mod'], $modarray) ? 'index' : $_G['mod'];

define('CURMODULE', $mod);

runhooks();

$navtitle = str_replace('{bbname}', $_G['setting']['bbname'], $_G['setting']['seotitle']['group']);

require DISCUZ_ROOT.'./source/module/group/group_'.$mod.'.php';
*/
?>
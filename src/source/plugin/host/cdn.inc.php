<?php
/**
 * Thislancorp
 * Author:	Enj0y
 * 自己改写记录session $code
 */
define('IN_THISLAN',true);

require_once DISCUZ_ROOT."/source/plugin/host/core/sdk/com.thislan.cdn.portal/cdn.nginx.class.php";
require_once DISCUZ_ROOT."/source/plugin/host/core/sdk/com.thislan.cdn.portal/cdn.thislan.class.php";
require_once DISCUZ_ROOT."/source/plugin/host/core/sdk/com.thislan.cdn.portal/db.sql.class.php";
require_once DISCUZ_ROOT."/source/plugin/host/core/sdk/com.thislan.cdn.portal/json.data.php";
require_once DISCUZ_ROOT."/source/plugin/host/core/sdk/com.thislan.cdn.portal/cdn.channel.class.php";
#Init
require_once './source/plugin/host/core/includes/main.func.php';
@include DISCUZ_ROOT.'./data/cache/plugin_host.php';

function caching_headers ($data) {

    header('ETag: "'.md5($data).'"');
    header('Cache-Control: public,max-age=3');

    if(isset($_SERVER['HTTP_IF_NONE_MATCH'])) {
        if (str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == md5($data)) {
            header('HTTP/1.1 304 Not Modified');
            exit();
        }
    }
}

function send_mail($frommail,$tomail,$subject,$body,$toname="") {  
	return mail($tomail,$subject,$body);
}

function userhash($user){
	$key="thjisdfaskdsk56SDF2dg".date('Ymd');
	$hash=md5($user.$key);
	return $hash;
}

#Main
if ($page)
{
	if (!file_exists(DISCUZ_ROOT.'source/plugin/host/core/cdn/'.$page.'.php'))
	{
		showmessage('Undefined Actions!'.DISCUZ_ROOT.'source/plugin/host/core/cdn/'.$page.'.php');
	}
	else
	{
		include_once DISCUZ_ROOT.'source/plugin/host/core/cdn/'.$page.'.php';
	}
}else{
		showmessage('Undefined Actions!');
}

?>
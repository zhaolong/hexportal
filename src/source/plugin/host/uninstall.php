<?php
if(!defined('IN_DISCUZ')) 
{
	die('Access Denied');
}

$sql = <<<EOF

DROP TABLE IF EXISTS host_admin;
DROP TABLE IF EXISTS host_user;
DROP TABLE IF EXISTS host_plan;
DROP TABLE IF EXISTS host_server;
DROP TABLE IF EXISTS host_setting;
DROP TABLE IF EXISTS host_tickets;
DROP TABLE IF EXISTS host_kb;
DROP TABLE IF EXISTS host_announcements;
DROP TABLE IF EXISTS host_log;
DROP TABLE IF EXISTS host_networkissues;

EOF;

runquery($sql);

$finish = TRUE;

?><script>alert('Thanks for your support.we hope dzwhm would co-work with you next time.if you have anything sonfusing please go to www.fen.mu to post.');</script>
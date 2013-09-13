<?php
if(!defined('IN_DISCUZ')) 
{
	exit('Access Denied');
}
$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `host_networkissues` (
`id` MEDIUMINT( 9 ) NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 500 ) NOT NULL ,
`content` VARCHAR( 5000 ) NOT NULL ,
`time` VARCHAR( 500 ) NOT NULL ,
PRIMARY KEY (  `id` )
) ENGINE = MYISAM ;
EOF;
runquery($sql);

$finish = TRUE;

?><script>alert('Upgrade completed!now your DzWHM is v2.04 already!');</script>
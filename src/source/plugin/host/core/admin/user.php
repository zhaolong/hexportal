<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$query = DB::query("SELECT * FROM host_user ORDER by DATE ASC ");
while($F = mysql_fetch_array($query))
{
	$F[date_s] = gmdate('Y-m-d H:i', $F[date] + $timeoffset *3600);
	$F[date_n] = (int)(($timestamp - $F[date])/ 3600 / 24) ;
	if($F[date_n]<0)$F[date_n]=0;
	$F[expiredate]= gmdate('Y-m-d H:i', $F[expiredate] + $timeoffset *3600);

	$Data[] = $F;
}
$check = DB::num_rows($query);
$hid=intval($_GET['hid']);
$query1 = DB::query("SELECT u.*, p.*,s.* FROM host_user u LEFT JOIN host_plan p ON u.plan = p.plan LEFT JOIN host_server s ON p.server = s.server WHERE u.id='$hid'");
$array1 = mysql_fetch_array($query1);

$query2 = DB::query("SELECT * FROM host_plan WHERE plan='$array1[plan]' ");
$array2 = mysql_fetch_array($query2);

$user = $array1[user] + 1;
$userdel = $array1[user] - 1;
$password = base64_decode($array1[password]);
if ($array1[cp] = 'cPanel')
{
	$port = '2082';
}
elseif ($array1[cp] = 'DirectAdmin')
{
	$port = '2222';
}		
$cp = "http://".$array1[ip].":".$port;	
#Email	
			$lang[mail_content_apply_page]=str_replace("#url#",$url,$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace("#plan#",$array1[plan],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace("#username#",$array1[username],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace("#password#",$password,$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#domain#',$array1[domain],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#server#',$array1[server],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#ip#',$array1[ip],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#cp#',$cp,$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#bbname#',$_G[setting][bbname],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#siteurl#',$_G[setting][siteurl],$lang[mail_content_apply_page]);
			$lang[mail_content_apply_page]=str_replace('#siteurl#',$_G[setting][siteurl],$lang[mail_content_apply_page]);
		$mail_content =  $lang[mail_content_apply_page];

if ($action == 'create' AND $hid)
{
	//createuser($array1[server],$array2[space],$array2[traffic],$array2[ftp],$array2[mysql],$array2[emails],$array2[subdomains],$array2[domains],$array1[username],$array1[email],$password,$array1[domain]);
	DB::query("UPDATE host_user SET status = 'active' WHERE id = '$hid'");
	//mail($array1[email], $mail_subject, $mail_content, $mail_header,$parameter);
	showmessage($lang[active_ok],"plugin.php?id=host:host&panel=admin&type=user");
}
elseif ($action == 'setfail' AND $hid)
{
	DB::query("UPDATE host_user SET status = 'fail' WHERE id = '$hid'");
	showmessage($lang[refuse_ok],"plugin.php?id=host:host&panel=admin&type=user");
}
elseif ($action == 'mail' AND $hid)
{
	//mail($array1[email],$_POST[title],$_POST[content],$mail_header,$parameter);
	showmessage($lang[mail_ok],"plugin.php?id=host:host&panel=admin&type=user");
}
elseif ($action == 'suspend' AND $hid)
{
	//suspenduser($array1[server],$array1[username]);
	DB::query("UPDATE host_user SET status = 'suspended' WHERE id = '$hid'");
	showmessage($lang[suspend_ok],'plugin.php?id=host:host&panel=admin&type=user');
}
elseif ($action == 'unsuspend' AND $hid)
{
	//unsuspenduser($array1[server],$array1[username]);
	DB::query("UPDATE host_user SET status = 'active' WHERE id = '$hid'");
	showmessage($lang[unsuspend_ok],'plugin.php?id=host:host&panel=admin&type=user');
}
elseif ($action == 'terminate' AND $hid)
{
	//deleteuser($array1[server],$array1[username]);
	DB::query("UPDATE host_user SET status = 'terminated' WHERE id = '$hid'");
	showmessage($lang[terminate_ok],"plugin.php?id=host:host&panel=admin&type=user");
}
elseif ($action == 'delete' AND $hid)
{
	DB::query("DELETE FROM host_user WHERE id = '$hid'");
	DB::query("UPDATE host_plan SET user='$userdel' WHERE plan='$array1[plan]'");	
	//deleteuser($array1[server],$array1[username]);
	showmessage($lang[delete_ok],"plugin.php?id=host:host&panel=admin&type=user");
}
include template("host:admin_user");
?>
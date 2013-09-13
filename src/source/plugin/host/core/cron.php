<?php
if(!defined('IN_DISCUZ')) {die('Access Denied');}
$now=date('U');
echo "Starting send mail to notice accounts which will expired after 3 days...<br/>开始EMAIL提醒3天内空间到期的用户<br/><br/>";
$threedaylater=$now+3600*24*3;
$n=0;
do{
	$m=$n+1;
	$query = DB::query("SELECT * FROM host_user WHERE expiredate <$threedaylater LIMIT $n , $m");
	$row=mysql_fetch_row($query);
	$email=$row[5];
			$mail_subject=$lang[cron_remind_mail_title];
			$lang[cron_remind_mail_content]=str_replace('#url#',$url,$lang[cron_remind_mail_content]);
			$lang[cron_remind_mail_content]=str_replace('#bbname#',$_G[setting][bbname],$lang[cron_remind_mail_content]);
			$lang[cron_remind_mail_content]=str_replace('#siteurl#',$_G[setting][siteurl],$lang[cron_remind_mail_content]);
			$mail_content =  $lang[cron_remind_mail_content];
	mail($email,$mail_subject,$mail_content,$mail_header,$parameter); 

	$n++;
}
while($row);
echo "Reform finished;<br/>then start suspende expired webhostings...<br/>通知完成<br/><br/>开始冻结已经过期了的空间...<br/>";
$n=0;
do{
	$m=$n+1;
	$query = DB::query("SELECT * FROM `host_user` WHERE expiredate < $now AND `status` = 'active' LIMIT $n , $m");
	$row=mysql_fetch_row($query);
	$email=$row[5];
			$mail_subject=$lang[cron_del_mail_title];
			$lang[cron_del_mail_content]=str_replace('#url#',$url,$lang[cron_del_mail_content]);
			$lang[cron_del_mail_content]=str_replace('#bbname#',$_G[setting][bbname],$lang[cron_del_mail_content]);
			$lang[cron_del_mail_content]=str_replace('#siteurl#',$_G[setting][siteurl],$lang[cron_del_mail_content]);
			$mail_content =  $lang[cron_del_mail_content];
	mail($email,$mail_subject,$mail_content,$mail_header,$parameter); 
	$query1 = DB::query("SELECT u.*, p.*,s.* FROM host_user u LEFT JOIN host_plan p ON u.plan = p.plan LEFT JOIN host_server s ON p.server = s.server WHERE u.username='$row[3]'");
	$array1 = mysql_fetch_array($query1);
	DB::query("UPDATE host_user SET status = 'suspended' WHERE username = '$row[3]'");
	@suspenduser($array1[server],$array1[username]);
	$n++;
}
while($row);


echo "Suspend finished;then delete account&hostings which expired for (longger than) 15days...<br/><br/>冻结完成<br/><br/>开始删除已经过期15天了的空间账户...<br/><br/>";
$fiftydayslater=$now+3600*24*15;
$n=0;
do{
	$m=$n+1;
	$query = DB::query("SELECT * FROM `host_user` WHERE expiredate < $now AND `status` = 'active' LIMIT $n , $m");
	$row=mysql_fetch_row($query);
	$email=$row[5];
			$mail_subject=$lang[cron_deleted_mail_title];
			$lang[cron_deleted_mail_content]=str_replace('#url#',$url,$lang[cron_deleted_mail_content]);
			$lang[cron_deleted_mail_content]=str_replace('#bbname#',$_G[setting][bbname],$lang[cron_deleted_mail_content]);
			$lang[cron_deleted_mail_content]=str_replace('#siteurl#',$_G[setting][siteurl],$lang[cron_deleted_mail_content]);
			$mail_content =  $lang[cron_deleted_mail_content];
	mail($email,$mail_subject,$mail_content,$mail_header,$parameter); 
	$query1 = DB::query("SELECT u.*, p.*,s.* FROM host_user u LEFT JOIN host_plan p ON u.plan = p.plan LEFT JOIN host_server s ON p.server = s.server WHERE u.username='$row[3]'");
	$array1 = mysql_fetch_array($query1);
	@deleteuser($array1[server],$array1[username]);
	DB::query("UPDATE host_user SET status = 'terminated' WHERE username = '$username'");
	DB::query("DELETE FROM host_user WHERE username = '$username'");
	DB::query("UPDATE host_plan SET user='$userdel' WHERE plan='$array1[plan]'");	
	$n++;
}
while($row);
echo "Delete finished.All cronjob finished.Now i will auto close me after 3 seconds...<br/>
删除完成。今天的全部时钟守护作业完成。无需您的干预，3秒本窗口自动关闭。。。<br/><br/>一定注意，今天不要再次运行CRONJOB。否则有可能会被用户举报垃圾邮件！
<script>
aa=setInterval(hs,3000);
function hs()
{
window.opener=null;window.close();
}
</script>";
?>
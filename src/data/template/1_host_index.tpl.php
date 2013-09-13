<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('index');
0
|| checktplrefresh('./source/plugin/host/template/index.htm', './template/default/common/header.htm', 1379089577, 'host', './data/template/1_host_index.tpl.php', './source/plugin/host/template', 'index')
|| checktplrefresh('./source/plugin/host/template/index.htm', './template/default/common/footer.htm', 1379089577, 'host', './data/template/1_host_index.tpl.php', './source/plugin/host/template', 'index')
;?>
<html>
<head>
<!--

    hexData console is an open source & business running project, All functions were based on Discuz!X2.5,
    UI Framework from @QingCloud( Beijing Yunify Technology LTD ). License Snapshot: http://t.cn/z85zacu

    Github:    https://github.com/hexdata/hexportal , Open License: Discuz License & GNU.
    36kr+:     http://www.36kr.net/hexieshuju
    17Startup: http://17startup.com/startup/view/21124

    This project work is being shown on Alibaba Cloud Start-up Competition, If you wanna small upon me, please vote +1 for No.11 on http://dasai.aliyun.com/signup/works2013/
    If you are an investors, and interested in this project, please contact hackes#outlook.com

    Thanks to everyone who helped hexData.

 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=1300">
<meta name="keywords" content="和谐数据 hexdata 云计算 弹性计算 hexcloud">
<meta name="description" content="和谐数据，专为企业用户打造的云计算产品+服务。">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<link href="console.css" rel="stylesheet" type="text/css">
<script src="jquery.min.js" type="text/javascript"></script>
<!--<script src="https://dn-hexssl.qbox.me/hexdata/default/oss/static_upload/js/jquery.min.js" type="text/javascript"></script>-->
<script src="js/jquery.alerts.js" type="text/javascript"></script>
<script>var cookiepre = "<?php echo $_G['config']['cookie']['cookiepre'];?>";</script>
</head>
<body class="modal-ready">
<div class="container">
<div class="viewport" id="console">
<div class="navigation" style="">
<div class="wrapper">
<div class="navigation-profile">
<a class="avatar" href="plugin.php?id=host:host" style="background-image: url('nohead.jpg')" target="_self"></a>
<p class="user-name">
<a href="https://i.hexdata.cn/profile" target="_blank" id="uname"><?php echo $_G['username'];?></a>
</p>
<p class="user-links">
<a class="icon icon-home" title="和谐数据首页" href="https://www.hexdata.cn"></a><a class="icon icon-console" title="控制台首页" href="index.html" data-permalink=""></a><a class="icon icon-account" title="帐户充值" href="https://i.hexdata.cn/charge"></a><a class="icon icon-logout" title="退出登录" href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"></a>
</p>
</div>
<div class="navigation-permission">
<?php if(in_array($discuz_uid, $admin_array)&&$_GET['panel']=="admin") { ?>
<h6>ADMINISTRATION</h6>
<ul>
<li class="item manage-home"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=home" data-permalink=""><span class="icon icon-home"></span>管理主页<span class="title">Home</span></a></li>
<li class="item manage-settings"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=setting" data-permalink=""><span class="icon icon-settings"></span>基础设置<span class="title">Basic Setting</span></a></li><li class="item manage-ecs"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=user" data-permalink=""><span class="icon icon-instances"></span>管理主机<span class="title">Manage ECS</span></a></li>
<li class="item manage-tk"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=tickets" data-permalink=""><span class="icon icon-tickets"></span>管理工单<span class="title">Manage Tickets</span></a></li>

</ul>
<?php } else { ?>
<h6>RESOURCES</h6>
<ul>
<li class="item instances"><a href="plugin.php?id=host:host&amp;page=myhost" data-permalink=""><span class="icon icon-instances"></span>主机<span class="title">Instances</span></a></li>
<li class="item security_groups"><a href="plugin.php?id=host:host&amp;page=firewall" data-permalink=""><span class="icon icon-security_groups"></span>防火墙<span class="title">Security Groups</span></a></li>
<li class="item images"><a href="plugin.php?id=host:host&amp;page=image" data-permalink=""><span class="icon icon-images"></span>镜像<span class="title">Images</span></a></li>
</ul>
<h6>OTHERS</h6>
<ul class="level1">
<li class="item activities"><a href="plugin.php?id=host:host&amp;page=log" data-permalink=""><span class="icon icon-activities"></span>操作日志<span class="title">Activities</span></a></li>
<li class="item consumptions"><a href="plugin.php?id=host:host&amp;page=listorder" data-permalink=""><span class="icon icon-consumptions"></span>订单<span class="title">orders</span></a></li>
<li class="item tickets"><a href="plugin.php?id=host:host&amp;page=tickets" data-permalink=""><span class="icon icon-tickets"></span>工单<span class="title">Tickets</span></a></li>
<?php if(in_array($discuz_uid, $admin_array)&&$_GET['panel']!="admin") { ?>
<li class="item admin"><a href="plugin.php?id=host:host&amp;panel=admin&amp;type=home" target="_blank" data-permalink=""><span class="icon icon-system"></span>管理中心<span class="title">Admin</span></a></li>
<?php } ?>
</ul>
<?php } ?>
</div>
</div>
</div>
<style>
.hilight-total{
color: #fea754;
font-size: 24px;
font-weight: bold;
font-family: 'Arial';
display: inline-block;
padding: 0 0 0 10px;
}
.hilight-total:hover{
color: #fea754;
}
</style>
<div class="content" style="">
<div class="wrapper dashboard">
<div id="zone" class="grid_6">
<h1><strong>hexdata</strong></h1>
</div>
<div class="grid_18 dashboard-account">
<div class="charge">
运行主机:<a class="<?php if($array_all['count'] > 0 ) { ?>balance<?php } else { ?>hilight<?php } ?>-total" href="plugin.php?id=host:host&amp;page=myhost" target="_self"><?php echo $array_all['count'];?></a><span class="unit">台</span> 即将过期:<a class="<?php if($array_will_expire['exp_count'] > 0 ) { ?>hilight<?php } else { ?>balance<?php } ?>-total" href="plugin.php?id=host:host&amp;page=myhost" target="_self"><?php echo $array_will_expire['exp_count'];?></a><span class="unit">台</span> 账户余额:<a class="balance-total" href="plugin.php?id=host:host&amp;page=pay" target="_self"><?php echo $array['extcredits4'];?></a><span class="unit">元</span>
</div>
</div>
<div id="resource_summary">
<div class="grid_6 resource-summary-item" data-type="instance" onclick="location.href='plugin.php?id=host:host&page=myhost';">
<strong><?php echo $array_all['count'];?></strong>
<h5><span class="icon-instance"></span>主机</h5>
</div>
<div class="grid_6 resource-summary-item" data-type="images">
<strong>0</strong>
<h5><span class="icon-images"></span>镜像</h5>
</div>
<div class="grid_6 resource-summary-item" data-type="security_group">
<strong>0</strong>
<h5><span class="icon-security_group"></span>防火墙</h5>
</div>
<div class="grid_6 resource-summary-item" data-type="tickets" onclick="location.href='plugin.php?id=host:host&page=tickets';">
<strong><?php $row = mysql_fetch_array(DB::query("SELECT count(ticketid) as how FROM host_tickets WHERE user = 'admin' AND status = '管理员回复' AND ttype = 'post' LIMIT 0, 99"));echo $row['how'];?></strong>
<h5><span class="icon-tickets"></span>工单</h5>
</div>
</div>
<div id="activity" class="grid_12 dashboard-activity">
<h4><a href="#" data-permalink="">最近操作</a></h4>
<div class="inner">
<p class="none">
操作记录功能正在开发中
</p>
<!--
<div class="activity-item">
<span href="#" class="icon icon-action icon-TerminateInstances"><span class="arrow"></span></span><span class="message">Stop ECS</span><span class="created"><span class="icon icon-time"></span>&nbsp; 2013-09-01 9:30:15</span><span class="consumed"><span class="icon icon-consumed"></span>&nbsp; 13秒</span>
</div>
<div class="activity-item">
<span href="#" class="icon icon-action icon-question"><span class="arrow"></span></span><span class="message">Reply Ticket</span><span class="created"><span class="icon icon-time"></span>&nbsp; 2013-09-01 9:28:46</span><span class="consumed"><span class="icon icon-consumed"></span>&nbsp; 1秒</span>
</div>
-->
</div>
</div>
<div id="ticket" class="grid_12">
<h4><a href="#" data-permalink="">最新问题</a></h4>
<div class="inner">
<?php if($array_tks) { if(is_array($array_tks)) foreach($array_tks as $_F) { ?><div class="ticket-item">
<a href="plugin.php?id=host:host&amp;page=chat#ticketid=<?php echo $_F['ticketid'];?>"><span class="icon icon-action icon-question"></span><span class="message"><?php echo $_F['title']?$_F['title']:$_F['content']?></span></a>
</div>
 
<?php } } else { ?>
<p class="none">
目前没有工单
</p>
<?php } ?>
</div>
</div>
</div>
</div>
<div class="notify" style="">
</div>

        <script type="text/javascript">
jQuery(document).ready(function(){
});
        </script>		<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('a[data-rel]').each(function() {
jQuery(this).attr('rel', jQuery(this).data('rel'));
});
var this_url = "<?php echo substr($_SERVER['REQUEST_URI'],1);?>";
jQuery('.leftmenu .nav li.active').removeClass('active');
jQuery('.leftmenu .nav li a[href="' + this_url + '"]').parent().addClass('active');
jQuery('a[href="#"]').hover(function(){
jQuery(this).attr('href','javascript:void(0);');
});
});
var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000067456'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/q_stat.php%3Fid%3D1000067456' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>
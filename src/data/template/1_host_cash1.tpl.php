<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('cash1');
0
|| checktplrefresh('./source/plugin/host/template/cash1.htm', './template/default/common/header.htm', 1379089739, 'host', './data/template/1_host_cash1.tpl.php', './source/plugin/host/template', 'cash1')
|| checktplrefresh('./source/plugin/host/template/cash1.htm', './template/default/common/footer.htm', 1379089739, 'host', './data/template/1_host_cash1.tpl.php', './source/plugin/host/template', 'cash1')
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
<div class="content" style="">
<div class="wrapper page">
<div class="page-intro">
<h1>续费 renew</h1>
<p class="lead">
为云主机续费
</p>
</div>
<div class="pane">

<table class="table">
<colgroup>
<col class="con0">
<col class="con1">
</colgroup>
<thead>
<tr>
<th>属性</th>
<th>值</th>
</tr>
</thead>
<tbody>
<tr>
<td><b>&nbsp;云编号</b></td>		
<td><?php echo $arrayx['domain'];?> <a href="<?php if($_SERVER['HTTP_REFERER']) { ?><?php echo $_SERVER['HTTP_REFERER'];?><?php } else { ?>plugin.php?id=host:host&page=myhost&hid=<?php echo $arrayx['id'];?><?php } ?>">返回管理主机</a></td>
</tr>
<tr>
<td><b>&nbsp;云型号</b></td>		
<td><?php echo $arrayx['plan'];?></td>
</tr>
<tr>
<td><b>&nbsp;申请日期</b></td>
<td><?php echo $arrayx['date_s'];?></td>
</tr>
<tr>
<td><b>&nbsp;过期日</b></td>
<td><?php echo $arrayx['expiredate'];?></td>
</tr>
<tr>
<td><b>&nbsp;状态</b></td>
<td>&nbsp;<span id="stspan"><?php echo $arrayx['status'];?></span></td>
</tr>	
<tr>
<td><b>&nbsp;续费操作</b></td>
<td>
<select name="renew" id="renew">
<option value=\"javascript:void(0);">请选择续费时长</option>
<?php echo $monprice;?>
<?php echo $sixmonprice;?>
<?php echo $yrprice;?>
<?php echo $twoyrprice;?>
</select>
<a href="#" class="btn btn-renew" style="line-height:18px"><span class="icon icon-refresh"></span> 确认续费</a>
</td>
</tr>	
</tbody>
</table>
</div>
</div>
</div>


<script>
function dp(data){
var a = data.split('|');
if(a){
if(a == "-5" ){
jAlert('续费时发生错误，请联系我们！');
}
if(a[0] == "1"&&a[1]){
x_url = "plugin.php?id=host:host\x26page=listorder#view/id/"+a[1];
jAlert("为主机<?php echo $arrayx['domain'];?>下订单<a href='"+x_url+"' target='_blank'>#"+a[1]+"</a>成功,点击确定进入订单查看页。","hexPanel",function(){
location.href=x_url;
});
}
}
}
    jQuery(document).ready(function(){
jQuery("#uname").html("<?php echo $_G['username'];?>");
jQuery(".btn-renew").click(function(){
eval(jQuery('#renew').val());
return false;
});
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
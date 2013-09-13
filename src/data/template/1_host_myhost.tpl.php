<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('myhost');
0
|| checktplrefresh('./source/plugin/host/template/myhost.htm', './template/default/common/header.htm', 1379089582, 'host', './data/template/1_host_myhost.tpl.php', './source/plugin/host/template', 'myhost')
|| checktplrefresh('./source/plugin/host/template/myhost.htm', './template/default/common/footer.htm', 1379089582, 'host', './data/template/1_host_myhost.tpl.php', './source/plugin/host/template', 'myhost')
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
<script src="js/mjj_chart.js" type="text/javascript" type="text/javascript"></script>
<!--[if lte IE 8]>
<script src="js/html5.js" type="text/javascript" type="text/javascript"></script>
<![endif]-->
<style>
.svg{
/*width:500px;*/
/*width:60%;*/
/*min-width:200px;*/
height:200px;
background:#fff;
}
</style>


<div class="content" style="">
<div id="instances" class="wrapper permalink">
<div class="breadcrumbs">
<a class="level0 " href="plugin.php?id=host:host&amp;page=myhost" data-permalink="">主机</a><a class="level1 id" href="<?php echo $_SERVER['REQUEST_URI'];?>" data-permalink=""><?php echo $arrayx['domain'];?></a>
</div>
<div class="grid_8 description">
<div class="detail-item">
<div class="title">
<h3>基本属性&nbsp;</h3>
<div class="dropdown">
<input class="dropdown-toggle" type="text">
<div class="dropdown-text">
<span class="icon-menu"></span>
</div>
<div class="dropdown-content">
<a class="btn btn-forbidden running-disable btn-start" href="#"><span class="icon icon-start"></span>&nbsp;启动</a>
<a class="btn offline-disable btn-stop" href="#"><span class="icon icon-stop"></span>&nbsp;关机</a>
<a class="btn offline-disable btn-reboot" href="#"><span class="icon icon-restart"></span>&nbsp;重启</a>
<a class="btn btn-forbidden running-disable btn-reset" href="#"><span class="icon icon-reset"></span>&nbsp;重置</a>
<a class="btn btn-repasswd" href="#"><span class="icon icon-password"></span>&nbsp;修改密码</a>
<a class="btn btn-forbidden running-disable" href="#"><span class="icon icon-capture"></span>&nbsp;制作成新映像</a>
<a class="btn" href="plugin.php?id=host:host&amp;page=cash1&amp;hid=<?php echo $hid;?>"><span class="icon icon-pricing"></span>&nbsp;续费</a>
</div>
</div>
</div>
<dl class="dl-horizontal">
<dt>ID</dt>
<dd><span class="id"><?php echo $arrayx['domain'];?></span></dd>
<dt>名称</dt>
<dd><em class="none"><?php echo $arrayx[alias]?$arrayx[alias]:"无";?></em></dd>
<dt>状态</dt>
<dd class="running"><span class="icon-status icon-running"></span>&nbsp; 正常运行</dd>
<dt>时间</dt>
<dd class="time">申请 <?php echo $arrayx['date_s'];?><br/>过期 <?php echo $arrayx['expiredate'];?></dd>
<dt>已开通时间</dt>
<dd class="time"><?php $time = time()?><?php $y = floor(($time - strtotime($arrayx[date_s])) / ( 86400 * 365 )); $m=floor((($time - strtotime($arrayx[date_s]))%(86400 * 365)) / ( 86400 * 30 )); $d= floor((($time - strtotime($arrayx[date_s]))%(86400 * 30)) / ( 86400 )); $h = floor((($time - strtotime($arrayx[date_s]))%(86400 )) / ( 3600 )); $mi = floor((($time - strtotime($arrayx[date_s]))%(3600 )) / ( 360 )); $s = (($time - strtotime($arrayx[date_s]))%60) ; echo  ($y&&($y. "年")). ( $m ? ($m."个月") : ""). ($d ? ($d . "天 ") : ""). ($h ? ($h . "个小时") : ""). ($mi ? ($mi . "分钟") :""). $s  . "秒"?></dd>
</dl><?php $conf = json_decode($arrayx['confData'],true);?><dl class="dl-horizontal">
<dt>映像ID</dt>
<dd><a class="id" href="plugin.php?id=host:host&amp;page=image" data-permalink=""><?php echo $conf['os'];?></a></dd>
<dt>CPU个数</dt>
<dd><?php echo $conf['cpu'];?></dd>
<dt>内存</dt>
<dd><?php echo $conf['mem'];?>MB</dd>
</dl>
</div>
<div class="detail-item">
<div class="title">
<h3>网络与磁盘&nbsp;</h3>
<div class="dropdown">
<input class="dropdown-toggle" type="text">
<div class="dropdown-text">
<span class="icon-menu"></span>
</div>
<div class="dropdown-content">
<a class="btn btn-sgroup" href="#"><span class="icon icon-security_groups"></span>&nbsp;防火墙规则</a>
<a class="btn btn-pubip" href="#"><span class="icon icon-instance"></span>&nbsp;更换公网IP</a>
<a class="btn btn-snapshot" href="#" data-hexdata="{instanceID:'<?php echo $arrayx['domain'];?>'}"><span class="icon icon-volumes"></span>&nbsp;磁盘快照</a>
</div>
</div>
</div>
<dl class="dl-horizontal">
<dt>防火墙</dt>
<dd><a class="id" href="#" data-permalink="">无</a></dd>
<dt>硬盘</dt>
<dd><a class="id" href="#" data-permalink="">无</a></dd>
<dt>内网IP</dt>
<dd><?php echo $arrayx['lanIp'];?></dd>
<dt>公网IP</dt>
<dd><?php echo $arrayx['publicIp'];?></dd>
</dl>
</div>
<div class="detail-item lease-info">
<div class="title">
<h3>计费信息&nbsp;</h3>
<div class="dropdown">
<input class="dropdown-toggle" type="text">
<div class="dropdown-text">
<span class="icon-menu"></span>
</div>
<div class="dropdown-content">
<a class="btn" href="plugin.php?id=host:host&amp;page=listorder&amp;hid=<?php echo $hid;?>"><span class="icon icon-view"></span>&nbsp;查看消费详情</a>
</div>
</div>
</div>
<dl class="dl-horizontal contract">
<dt>申请时间</dt>
<dd class="time"><?php echo $arrayx['date_s'];?></dd>
<dt>过期时间</dt>
<dd class="time"><?php echo $arrayx['expiredate'];?></dd>
<dt>单价:</dt>
<dd>???元/月</dd>
</dl>
</div>
<div>
<a class="show-activity" href="#">显示操作日志</a>
</div>
</div>
<div class="grid_16 monitor">
<div class="title">
<h3>监控信息</h3>
<div class="btn-group nested">
<button class="btn btn-small" href="#" data-step="1140" data-range="24" data-text="24小时">您看到的是从0点起的统计数据</button>
</div>
</div>
<div class="charts">
<div class="chart">
<h3>cpu</h3>
<!--
<div class="toggle toggle-off">
<label class="toggle-radio" for="toggleOption2">开</label><input type="radio" name="toggleOptions" id="toggleOption1" value="option1" checked="checked"><label class="toggle-radio" for="toggleOption1">关</label><input type="radio" name="toggleOptions" id="toggleOption2" value="option2">
</div>
<span class="tips" title="最近1小时,每隔10秒自动刷新">实时数据</span>
<div class="labels">
<span class="unit">百分比 (%)</span><span class="line"></span>使用率
</div>
-->
<div class="svg" id="cpu-monitor">

</div>
</div>
<div class="chart">
<h3>磁盘io</h3>
<!--
<div class="toggle toggle-off">
<label class="toggle-radio" for="toggleOption2">开</label><input type="radio" name="toggleOptions" id="toggleOption1" value="option1" checked="checked"><label class="toggle-radio" for="toggleOption1">关</label><input type="radio" name="toggleOptions" id="toggleOption2" value="option2">
</div>
<span class="tips" title="最近1小时,每隔10秒自动刷新">实时数据</span>
<div class="labels">
<span class="unit"></span><span class="line1"></span>读<span class="line"></span>写
</div>
-->
<div class="svg" id="io-monitor">
</div>
</div>
<div class="chart">
<h3>网络io</h3>
<!--
<div class="toggle toggle-off">
<label class="toggle-radio" for="toggleOption2">开</label><input type="radio" name="toggleOptions" id="toggleOption1" value="option1" checked="checked"><label class="toggle-radio" for="toggleOption1">关</label><input type="radio" name="toggleOptions" id="toggleOption2" value="option2">
</div>
<span class="tips" title="最近1小时,每隔10秒自动刷新">实时数据</span>
<div class="labels">
<span class="unit"></span><span class="line1"></span>进<span class="line"></span>出
</div>
-->
<div class="svg" id="net-monitor">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="notify" style="">
</div>


<script>
var hostname = "<?php echo $arrayx['domain'];?>", _csrf_token="<?php echo $hashToken;?>";
var hexdata_call = function(a){var e=a.PublicIpAddress.IpAddress[0],d=a.InnerIpAddress.IpAddress[0],b="";switch(a.Status){case "Running":b="\u8fd0\u884c\u4e2d";break;case "Stopping":b="\u505c\u6b62\u4e2d";break;case "Stopped":b="\u5df2\u505c\u6b62";break;case "Starting":b="\u5f00\u673a\u4e2d"}jQuery("#ipspan").html(e+" / "+d);jQuery("#stspan").html(b)};

jQuery(document).ready(function(){
jQuery(".instances").addClass('selected');
jQuery("#uname").html("<?php echo $_G['username'];?>");
jQuery.get('plugin.php?id=host:host&page=api&hid=<?php echo $arrayx['domain'];?>&vmid=<?php echo $arrayx['vmid'];?>&action=getMonitor&token=<?php echo $hashToken;?>',function(data){
eval('var data = ' + data );
if( data.code == "200" ){
   Highcharts.setOptions({global: {useUTC: false}});
   chartsConfig.chart.renderTo = 'cpu-monitor';
   var dataCPU = data.data.cpuSeries;
   chartsConfig.series = [{"name":"CPU占用(%)","data":dataCPU }];      
   var chart = new Highcharts.Chart(chartsConfig);

   Highcharts.setOptions({global: {useUTC: false}});
   chartsConfig.chart.renderTo = 'io-monitor';
   var dataIOTX = data.data.bpsWriteSeries;
   var dataIORX = data.data.bpsReadSeries;
   chartsConfig.series = [{"name":"读(MB/s)","data":dataIOTX },{"name":"写(MB/s)","data":dataIORX  }];      
   var chart = new Highcharts.Chart(chartsConfig);

   chartsConfig.chart.renderTo = 'net-monitor';
   var dataTX = data.data.flowTxSeries;
   var dataRX = data.data.flowRxSeries;
   chartsConfig.series = [{"name":"\u51fa\u7f51(Kbps)","data":dataTX },{"name":"\u5165\u7f51(Kbps)","data":dataRX }];      
   var chart = new Highcharts.Chart(chartsConfig);
}
});

})


////// 20130910
var op,zp;
    jQuery(document).ready(function(){
 		jQuery(".instances").addClass('selected');
jQuery('a[data-rel]').each(function() {
            jQuery(this).attr('rel', jQuery(this).data('rel'));
        });
setInterval(function(){
jQuery.get("./plugin.php?id=host:host\x26page=api\x26hid=<?php echo $arrayx['domain'];?>\x26vmid=<?php echo $arrayx['vmid'];?>\x26action=getStatus\x26token=<?php echo $hashToken;?>\x26"+parseInt((new Date).getTime()/10000),function(a){eval(a);});
},3*60*1000);
jQuery.get("./plugin.php?id=host:host\x26page=api\x26hid=<?php echo $arrayx['domain'];?>\x26vmid=<?php echo $arrayx['vmid'];?>\x26action=getStatus\x26token=<?php echo $hashToken;?>\x26"+parseInt((new Date).getTime()/10000),function(a){eval(a);});		
jQuery('.btn-snapshot').click(function(){
eval('var data='+jQuery(this).attr('data-hexdata'));
//console.log(data);
jAlert('<style>#popup_container{max-width:500px !important;}</style><div id="snap-disk">加载中...</div>','磁盘快照管理');
jQuery.get('./plugin.php?id=host:host\x26page=api\x26hid='+data.instanceID+'\x26vmid=<?php echo $arrayx['vmid'];?>\x26action=DescribeInstanceDisks\x26token='+_csrf_token+'\x26',function(a){
eval("var a="+a);
var str="<p>磁盘列表:</p><p>...</p>";
for(i=0;i<a.length;i++){
//console.log(a[i]);
str+="<p>"+(a[i].Type=="system"?"系统盘":"数据盘")+a[i].DiskId+"容量:"+a[i].Size+"GB  <a href='javascript:void(0);' class='btn btn-snap-2' data-hexdata='{instanceID:\"<?php echo $arrayx['domain'];?>\",diskCode:\""+a[i].DiskId+"\",token:\"<?php echo $hashToken;?>\"}'><span class='iconfa-camera-retro'></span>查询快照</a> <a href='javascript:void(0);' class='btn btn-snap-3' data-hexdata='{instanceID:\"<?php echo $arrayx['domain'];?>\",diskCode:\""+a[i].DiskId+"\",token:\"<?php echo $hashToken;?>\"}'><span class='iconfa-camera'></span>新建快照</a></p>";
}
jQuery('#snap-disk').html(str);
op=setInterval(function(){
jQuery('.btn-snap-2').ready(function(){
jQuery('.btn-snap-2').click(function(){
jQuery('#snap-disk').html('加载中...');
eval('var data='+jQuery(this).attr('data-hexdata'));
jQuery.get('./plugin.php?id=host:host\x26page=api2\x26instanceName='+data.instanceID+'\x26diskCode='+data.diskCode+'\x26action=describeSnapshots\x26token='+_csrf_token+'\x26',function(a){
//console.log(a);
var str2="<p>"+data.diskCode+"的快照列表:</p><p>...</p>";
eval('var a='+a);
for(i=0;i<a.length;i++){
j=i+1;
str2+="<p>快照"+j+"("+a[i].CreateTime.replace(/[TZ]/g,' ')+")"+(a[i].Progress=="100%"?"":(" 完成进度("+a[i].Progress+")"))+" <a href='javascript:void(0);' class='btn-snap-rollback' data-hexdata='{instanceID:\"<?php echo $arrayx['domain'];?>\",diskCode:\""+data.diskCode+"\",snapCode:\""+a[i].SnapshotCode+"\",token:\"<?php echo $hashToken;?>\"}'>回滚</a> <a href='javascript:void(0);' class='btn-snap-del' data-hexdata='{instanceID:\"<?php echo $arrayx['domain'];?>\",diskCode:\""+data.diskCode+"\",snapCode:\""+a[i].SnapshotCode+"\",token:\"<?php echo $hashToken;?>\"}'>删除</a></p>";
}
jQuery('#snap-disk').html(str2);
zp=setInterval(function(){
jQuery('.btn-snap-rollback').ready(function(){
jQuery('.btn-snap-rollback').click(function(){
//回滚快照
eval('var snapdata='+jQuery(this).attr('data-hexdata'));
jQuery.get('./plugin.php?id=host:host\x26page=api2\x26instanceName='+snapdata.instanceID+'\x26diskCode='+snapdata.diskCode+'\x26snapCode='+snapdata.snapCode+'\x26action=rollbackSnapshot\x26token='+_csrf_token+'\x26',function(a){
//console.log(a);
if(a==='{"errCode":"0","errMsg":"OK"}'){
jAlert('回滚命令推送成功~！请耐心等待（数据量大小不同对时间有直接影响）','回滚操作提示');
}else{
alert('失败了！亲，只能在关机后回滚额！');
}
});
});			
})
jQuery('.btn-snap-del').ready(function(){
jQuery('.btn-snap-del').click(function(){
//删除快照
eval('var snapdata='+jQuery(this).attr('data-hexdata'));
jQuery.get('./plugin.php?id=host:host\x26page=api2\x26instanceName='+snapdata.instanceID+'\x26diskCode='+snapdata.diskCode+'\x26snapCode='+snapdata.snapCode+'\x26action=deleteSnapshot\x26token='+_csrf_token+'\x26',function(a){
//console.log(a);
if(a==='{"errCode":"0","errMsg":"OK"}'){
jAlert('成功！','删除快照提示');
}else{
alert('失败了！！');
}
});
});
clearInterval(zp)
})
},1000);
});
});
});	
jQuery('.btn-snap-3').ready(function(){
jQuery('.btn-snap-3').click(function(){
eval('var data='+jQuery(this).attr('data-hexdata'));
jQuery.get('./plugin.php?id=host:host\x26page=api2\x26instanceName='+data.instanceID+'\x26diskCode='+data.diskCode+'\x26action=createSnapshot\x26token='+_csrf_token+'\x26',function(a){
if(a==='{"errCode":"400","errMsg":"Error"}'){
alert('失败了！！');
}else{
eval('a='+a);
jAlert('为'+data.diskCode+'创建快照('+a.createTime.replace(/[TZ]/g,' ')+')成功！','创建快照提示');
}
});
});
clearInterval(op)
});	
},1000);
});
return false;
});
    });
jQuery('.btn-start').click(function (){if(jQuery(this).hasClass('btn-forbidden'))return false;jConfirm("\u786e\u5b9a\u8981\u5f00\u542f"+hostname+"\u8fd9\u4e2a\u5b9e\u4f8b\u4e48?","\u548c\u8c10\u6570\u636e",function(d){!0==d&&jQuery.getJSON("./plugin.php?id=host:host\x26page=api\x26hid="+hostname+"\x26action=StartInstance\x26token="+_csrf_token,function(a){"OK"!=a.code?jAlert("\u64cd\u4f5c\u5931\u8d25,\u53ef\u80fd\u5f53\u524d\u4e3b\u673a\u5df2\u5904\u4e8e\u8fd0\u884c\u72b6\u6001\u6216\u8005\u5df2\u8fc7\u671f.\r\n\u5982\u6709\u7591\u95ee\u8bf7\u8054\u7cfb\u6211\u4eec\u7684\u5ba2\u670d","\u548c\u8c10\u6570\u636e"):(jAlert("\u64cd\u4f5c\u6210\u529f,\u8bf7\u7b49\u5f85\u6700\u591a3\u5206\u949f.","\u548c\u8c10\u6570\u636e"),jQuery("#stspan").html("\u5f00\u673a\u4e2d"))})})});

jQuery('.btn-stop').click(function(){if(jQuery(this).hasClass('btn-forbidden'))return false;jConfirm("\u786e\u5b9a\u8981\u505c\u6b62"+hostname+"\u8fd9\u4e2a\u5b9e\u4f8b\u4e48\uff1f\r\n\u8bf7\u786e\u8ba4\u60a8\u5728\u6b64\u4e3b\u673a\u4e0a\u7684\u4efb\u4f55\u5de5\u4f5c\u5df2\u7ecf\u4fdd\u5b58\u3002","\u548c\u8c10\u6570\u636e",function(d){!0==d&&jQuery.getJSON("./plugin.php?id=host:host\x26page=api\x26hid="+hostname+"\x26action=StopInstance\x26token="+_csrf_token,function(a){"OK"!=a.code?jAlert("\u64cd\u4f5c\u5931\u8d25,\u53ef\u80fd\u5f53\u524d\u4e3b\u673a\u5df2\u5904\u4e8e\u5173\u673a\u72b6\u6001\u6216\u8005\u5df2\u8fc7\u671f.\r\n\u5982\u6709\u7591\u95ee\u8bf7\u8054\u7cfb\u6211\u4eec\u7684\u5ba2\u670d",
"\u548c\u8c10\u6570\u636e"):(jAlert("\u64cd\u4f5c\u6210\u529f,\u8bf7\u7b49\u5f85\u6700\u591a15\u5206\u949f.","\u548c\u8c10\u6570\u636e"),jQuery("#stspan").html("\u505c\u6b62\u4e2d"))})})});

jQuery('.btn-reboot').click(function(){if(jQuery(this).hasClass('btn-forbidden'))return false;jConfirm("\u786e\u5b9a\u8981\u91cd\u542f"+hostname+"\u8fd9\u4e2a\u5b9e\u4f8b\u4e48\uff1f\r\n\u8bf7\u786e\u8ba4\u60a8\u5728\u6b64\u4e3b\u673a\u4e0a\u7684\u4efb\u4f55\u5de5\u4f5c\u5df2\u7ecf\u4fdd\u5b58\u3002","\u548c\u8c10\u6570\u636e",function(d){!0==d&&jQuery.getJSON("./plugin.php?id=host:host\x26page=api\x26hid="+hostname+"\x26action=RebootInstance\x26token="+_csrf_token,function(a){"OK"!=a.code?jAlert("\u64cd\u4f5c\u5931\u8d25,\u53ef\u80fd\u5f53\u524d\u4e3b\u673a\u5df2\u8fc7\u671f.\r\n\u5982\u6709\u7591\u95ee\u8bf7\u8054\u7cfb\u6211\u4eec\u7684\u5ba2\u670d","\u548c\u8c10\u6570\u636e"):(jAlert("\u64cd\u4f5c\u6210\u529f,\u8bf7\u7b49\u5f85\u6700\u591a15\u5206\u949f.","\u548c\u8c10\u6570\u636e"),jQuery("#stspan").html("\u5f00\u673a\u4e2d"))})})});

jQuery('.btn-repasswd').click(function(){if(jQuery(this).hasClass('btn-forbidden'))return false;jConfirm("\u786e\u5b9a\u8981\u91cd\u7f6e"+hostname+"\u8fd9\u4e2a\u5b9e\u4f8b\u7684\u5bc6\u7801\u4e48\uff1f\r\n\u8bf7\u4fee\u6539\u540e\u91cd\u542f\u6b64\u5b9e\u4f8b\u4ee5\u4f7f\u65b0\u5bc6\u7801\u751f\u6548\u3002","\u548c\u8c10\u6570\u636e",function(d){!0==d&&jPrompt("请输入需要改成的密码，在重启前新密码不会生效:","","\u548c\u8c10\u6570\u636e",function(b){b&&jQuery.getJSON("./plugin.php?id=host:host\x26page=api\x26hid="+hostname+"\x26action=ModifyInstanceAttribute\x26Password="+b+"\x26token="+_csrf_token,function(a){"OK"!=a.code?jAlert("\u64cd\u4f5c\u5931\u8d25.\r\n\u5982\u6709\u7591\u95ee\u8bf7\u8054\u7cfb\u6211\u4eec\u7684\u5ba2\u670d","\u548c\u8c10\u6570\u636e"):jAlert("\u64cd\u4f5c\u6210\u529f,\u91cd\u542f\u540e\u65b0\u5bc6\u7801\u5373\u751f\u6548.","\u548c\u8c10\u6570\u636e")})})})});

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
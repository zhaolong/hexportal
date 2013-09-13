<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('listorder');
0
|| checktplrefresh('./source/plugin/host/template/listorder.htm', './template/default/common/header.htm', 1379089754, 'host', './data/template/1_host_listorder.tpl.php', './source/plugin/host/template', 'listorder')
|| checktplrefresh('./source/plugin/host/template/listorder.htm', './template/default/common/footer.htm', 1379089754, 'host', './data/template/1_host_listorder.tpl.php', './source/plugin/host/template', 'listorder')
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
<div class="wrapper">
<div class="page-intro">
<h1>消费记录 consumptions</h1>
<p class="lead">
</p>
</div>
<ul class="page-tabs">
<li class="selected"><a href="plugin.php?id=host:host&amp;page=listorder" data-permalink=""><span class="icon icon-summary"></span>消费记录</a></li>
<li class=""><a href="plugin.php?id=host:host&amp;page=pay" data-permalink=""><span class="icon icon-account"></span>充值</a></li>
</ul>
<div id="summary" class="pane">
<div class="charge-summary">
<h1>总消费额:&nbsp;&nbsp;<span class="total_sum price">0.1361</span><span class="unit">元</span><small><a href="profile" target="_blank">查看帐户余额</a></small></h1>
<a class="summary-item selected"><span class="count">全部&nbsp;(4)</span><span class="sum price">0.133<span class="unit">元</span></span></a>
<a class="summary-item"><span class="count">新购&nbsp;(0)</span><span class="sum price">0<span class="unit">元</span></span></a>
<a class="summary-item"><span class="count">续费&nbsp;(0)</span><span class="sum price">0<span class="unit">元</span></span></a>
</div>
<div class="charge-resources">
<div class="charge-resources-table">
<div class="page">
<div class="pagination">
</div>
</div>
<table class="table table-bordered table-hover">
<thead>
<tr>
<th>
ID
</th>
<th>
状态
</th>
<th class="right">
金额(元)
</th>
<th class="right">
配置
</th>
<th>
创建时间
</th>
<th>
</th>
</tr>
</thead>
<tbody><?php $flag_tmp=1;?><?php if(is_array($array)) foreach($array as $one) { ?><tr>
<td>
<a class="detail" id="detail<?php echo $one['order_id'];?>" href="#view/id/<?php echo $one['order_id'];?>" data-need-pay="<?php echo number_format($one['need_pay'],2);; ?>" data-this-id="<?php echo $one['order_id'];?>" data-detail="<?php if($one['type'] == 1)echo " 新购";else if($one['type'] == 2)echo " 续费";?><?php $data_tmp = json_decode($one['json'],true);echo $data_tmp['cpu']."核/".$data_tmp['mem']."MB/".$data_tmp['bandwidth']."Mbps/".$data_tmp['storage']."GB×".$data_tmp['during'];echo $data_tmp['term']=="yr"?"年":"月";?>" data-is-paid="<?php echo $one['paid'];?>"><?php echo $one['order_id'];?></a>
</td>
<td id="statue<?php echo $one['order_id'];?>"><?php if($one['paid'] == 0) { ?><span class="icon-question-sign"></span> 未支付<?php } elseif($one['paid'] == -1) { ?><span class="icon-remove-sign"></span> 已作废<?php } else { ?><span class="icon-ok-sign"></span> 已支付<?php } ?></td>
<td class="right"><?php echo number_format($one['need_pay'],2);; ?>元</td>
<td class="right"><?php if($one['type'] == 1)echo "<span class=\"iconfa-play\"></span> 新购";else if($one['type'] == 2)echo "<span class=\"iconfa-forward\"></span> 续费";?><?php $data_tmp = json_decode($one['json'],true);echo $data_tmp['cpu']."核/".$data_tmp['mem']."MB/".$data_tmp['bandwidth']."Mbps/".$data_tmp['storage']."GB×".$data_tmp['during'];echo $data_tmp['term']=="yr"?"年":"月";?></span>
</td>
<td class="time"><?php echo date('Y/m/d',strtotime($one['order_time']));?></td>
<td>
<a href="#view/id/<?php echo $one['order_id'];?>" class="link-order-detail" data-this-id="<?php echo $one['order_id'];?>">查看详情</a><?php if($one['paid'] == 0) { ?> <a href="#" class="link-pay" data-this-id="<?php echo $one['order_id'];?>" data-need-pay="<?php echo $one['need_pay'];?>">支付</a>  <a href="#" class="link-cancel" data-this-id="<?php echo $one['order_id'];?>">作废</a><?php } ?>
</td>
</tr><?php $flag_tmp++;?><?php } ?>
                    </tbody>
</table>
<?php if($array_count['0']['total'] > 20 ) { ?>
<div class="btn-group">
<?php echo $nav_str;?>
</div>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="notify" style="">
</div>


<div class="window-overlay" style="display:none">
<div class="modal" style="width: 800px; height: auto; margin-left: -400px; margin-top: -200px; top: 50%;">
<div class="modal-header">
<h4>查看消费详情<span class="title-id"> # 加载中</span><a href="#" class="close"><span class="icon-close icon-Large"></span></a></h4>
</div>
<div class="modal-content" id="charge-records">
<div class="table-inner">
<div class="title">
<h4>总计：<span class="this-price">0.06</span><span class="unit">元</span></h4>
</div>
<div class="page">
<div class="pagination">
</div>
</div>
<table class="table table-bordered">
<thead>
<tr>
<th>
配置
</th>
<th class="right">
金额(元)
</th>
<th class="right">
订单状态
</th>
<th width="30%">
操作
</th>
</tr>
</thead>
<tbody>
<tr>
<td class="conf">
加载中...<br/>
.
</td>
<td class="right">
<span class="price out">– 0.00</span>
</td>
<td class="right">
<span class="ispaid">未支付</span>
</td>
<td class="time">
<a href="#" class="now-pay">支付</a> <a href="#" class="now-drop">作废</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="modal-footer">
</div>
</div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('.item.consumptions').addClass('selected');
jQuery('a.detail').click(function(){
jQuery('.this-price').html(jQuery(this).attr('data-need-pay'));
jQuery('.price.out').html("- "+jQuery(this).attr('data-need-pay'));
jQuery('.title-id').html(" #"+jQuery(this).attr('data-this-id'));
jQuery('.conf').html(jQuery(this).attr('data-detail'));
jQuery(this).attr('data-is-paid')=="1"?(jQuery('.ispaid').html("已支付"),jQuery('a.now-pay').hide(),jQuery('a.now-drop').hide()):(jQuery(this).attr('data-is-paid')=="-1"?(jQuery('.ispaid').html("已作废"),jQuery('a.now-pay').hide(),jQuery('a.now-drop').hide()):(jQuery('.ispaid').html("未支付"),jQuery('a.now-pay').show(),jQuery('a.now-drop').show()));
jQuery('a.now-pay,a.now-drop').attr('data-this-id',jQuery(this).attr('data-this-id'));
jQuery('div.window-overlay').show();

jQuery('a.now-drop').unbind('click').click(function(){
var oid = jQuery(this).attr('data-this-id');
jQuery('.link-cancel[data-this-id="'+oid+'"]').click();
//jQuery('.icon-close').click();
return false;
});

jQuery('a.now-pay').unbind('click').click(function(){
var oid = jQuery(this).attr('data-this-id');
jQuery('.link-pay[data-this-id="'+oid+'"]').click();
//jQuery('.icon-close').click();
return false;
});

//return false;
});
jQuery('.icon-close').click(function(){
jQuery('div.window-overlay').not('#popup_overlay').hide();
location.hash="#";
//return false;
});
jQuery("#uname").html("<?php echo $_G['username'];?>");
jQuery('.order-filter').click(function(){
jQuery('input[aria-controls="listorder"]').val(jQuery(this).html()=="全部"?"":jQuery(this).html()).keyup();
jQuery('.mediamgr_category ul li').removeClass('current');
jQuery(this).parent().addClass('current');
return false;
});
jQuery('.link-cancel').click(function(){
var thisA = jQuery( this );
var oid = thisA.attr('data-this-id');
console.log(oid);
jConfirm('是否要作废此订单?作废后此订单将无法支付.','hexPanel',function(callback){
if(callback)jQuery.post('plugin.php?id=host:host\x26page=save','action=cancel\x26token=<?php echo FORMHASH;?>\x26order_id='+oid,function(data){
if(data == "1"){
thisA.remove();
jQuery('.link-pay[data-this-id="'+oid+'"]').remove();
jQuery( '#statue' + oid ).html( '<span class="iconfa-remove-sign"></span>已作废' );
jQuery('a.detail[data-this-id="'+oid+'"]').attr('data-is-paid','-1');
if(jQuery('.window-overlay:visible').not('#popup_overlay').length > 0)jQuery('a.detail[data-this-id="'+oid+'"]').click();
jAlert('此订单已作废~');
}else{
jAlert('未知错误..');
}
});
});
return false;
});
jQuery('.link-pay').click(function(){
var thisA = jQuery( this );
var oid = thisA.attr('data-this-id');
jConfirm('确认要支付？确认后款项将直接从您账户余额中扣除','hexPanel',function(callback){
if(callback)jQuery.post('plugin.php?id=host:host\x26page=payorder','_csrf_token=<?php echo FORMHASH;?>\x26order_id='+oid,function(data){
//console.log(data);
if(data == "1"){
thisA.remove();
jQuery('.link-cancel[data-this-id="'+oid+'"]').remove();
jQuery( '#statue' + oid ).html( '<span class="iconfa-remove-sign"></span>已支付' );
jQuery('a.detail[data-this-id="'+oid+'"]').attr('data-is-paid','1');
if(jQuery('.window-overlay:visible').not('#popup_overlay').length > 0)jQuery('a.detail[data-this-id="'+oid+'"]').click();
jAlert('支付成功！');
}else if(data == "-3"){
jConfirm('支付失败！余额不足啦！是否需要去充值?','hexPanel',function(callback){
if(callback){
location.href="plugin.php?id=host:host\x26page=pay#!how/"+thisA.attr('data-need-pay');
}
});
}else if(data == "-999"){
jAlert('支付失败！TOKEN校验失败啦！');
}else{
jAlert('支付失败！未知错误！');
}
});
});
return false;
});
jQuery('.link-order-detail').click(function(){
jQuery('#detail'+jQuery(this).attr('data-this-id')).click();
});
if((new RegExp(/\#view\/id\/(20[0-9]{17})/)).exec(location.hash).length>1){
var order_id = (new RegExp(/\#view\/id\/(20[0-9]{17})/)).exec(location.hash)[1];
jQuery('#detail'+order_id).click();
}
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
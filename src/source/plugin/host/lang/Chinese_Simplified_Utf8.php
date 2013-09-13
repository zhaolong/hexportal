<?php 
if(!defined('IN_DISCUZ')){exit ('Access Denied');} 
$lang = array(); 
$lang[undefined_action]="未定义操作，请返回。"; 
$lang[money]="RMB"; 
$lang[mail_subject]="网页寄存通知"; 
$lang[mail_content_apply_page]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
."亲爱的用户，"."<br><br>" 
."感谢阁下选用我们的网站空间服务。您的空间已经开通，以下是您的账户资料，请小心保管。 "
."<br><br>"
."<b>网站空间账户资料</b>"
."<br>" 
."服务计划： #plan# <br>" 
."用户名： #username# <br>" 
."密码： #password# <br>" 
."域名： "."<a href='http://$_POST[domain]'> #domain# </a>"."<br><br>" 
."<b>服务器讯息</b>"."<br>" 
."服务器名： #server# <br>" 
."服务器 IP： #ip# <br>" 
."网站控制台： "."<a href='#cp#'>#cp#</a>"."<br><br>" 
."<b>FTP 资料</b>"."<br>" 
."FTP 服务器： #ip# <br>" 
."用户名： #username# <br>" 
."密码： #password# <br><br>" 
."<b>MySQL 数据库</b>"."<br>" 
."请进入网站站控制后台创建 MySQL数据库。 "."<br><br>" 
."<b>广告码</b> "."<br>" 
."请到 #bbname# 的"."<a href='http://#url#/plugin.php?id=host:host&page=myhost'>我的网站空间</a>"."查看。 "."<br><br><br>" 
."-------------------------------------------------------"."<br>" 
."Best Regards,"."<br>" 
." #bbname# <br>" 
."网站： #siteurl# <br>"; 
$lang[no_host]="您未申请空间,现在转向网站空间计划页。"; 
$lang[hosted]="您已申请空间，不可重复申请!"; 
$lang[no_plan]="计划不存在!"; 
$lang[reseller]="分销空间"; 
$lang[noemalhosting]="网站空间"; 
$lang[stopped]="暂停申请"; 
$lang[fill_all]="请填写所有项目!"; 
$lang[pass_not_match]="两次输入的密码不同!"; 
$lang[must_agree_tos]="你必须同意本站的服务条款!"; 
$lang[ip_limited]="阁下的IP曾经申请过!"; 
$lang[invalid_email]="无效的Email格式!"; 
$lang[cash_not_enough_1]="阁下RMB不够月付，请充值！!"; 
$lang[cash_not_enough_2]="阁下RMB不够半年付，请充值！！!"; 
$lang[cash_not_enough_3]="阁下RMB不够年付，请充值！！"; 
$lang[cash_not_enough_4]="阁下RMB不够两年付，请充值！！"; 
$lang[no_hack_in]="请不要尝试绕过过滤！去充值吧，乖~"; 
$lang[applied_successfully]="申请成功!"; 
$lang[applied_successfully_1]="阁下已成功申请一个月（30天）商业空间！感谢您支持我们的服务。 "; 
$lang[applied_successfully_2]="阁下已成功申请半年（182天）商业空间！感谢您支持我们的服务。 "; 
$lang[applied_successfully_3]="阁下已成功申请一年（365天）商业空间！感谢您支持我们的服务。 "; 
$lang[applied_successfully_4]="阁下已成功申请一年（731天）商业空间！感谢您支持我们的服务。 "; 
$lang[wait_for_check]="管理员会尽快开通阁下的账号，请耐心等候。"; 
$lang[no_host_to_renewal]="阁下尚未申请网站空间,不能续期！！!"; 
$lang[free_no_renewal]="免费产品不用续期"; 
$lang[to_cash_1]="我要延期一个月"; 
$lang[to_cash_1_notice]="为续期一个月，您得消耗相应的钱币或积分,当然消费后不可以退款的，继续么？ "; 
$lang[to_cash_2]="我要延期半年"; 
$lang[to_cash_2_notice]="为续期半年，您得消耗相应的钱币或积分,当然消费后不可以退款的，继续么？ "; 
$lang[to_cash_3]="我要延期一年"; 
$lang[to_cash_3_notice]="为续期一年，您得消耗相应的钱币或积分,当然消费后不可以退款的，继续么？ "; 
$lang[to_cash_4]="我要延期两年"; 
$lang[to_cash_4_notice]="为续期两年，您得消耗相应的钱币或积分,当然消费后不可以退款的，继续么？ "; 
$lang[cash_1_ok]="阁下空间已成功延期30天！感谢您支持我们的服务。"; 
$lang[cash_2_ok]="阁下空间已成功续期半年（182天）！感谢您支持我们的服务。 "; 
$lang[cash_3_ok]="阁下空间已成功续期一年（365天）！感谢您支持我们的服务。 "; 
$lang[cash_4_ok]="阁下空间已成功续期两年（731天）！感谢您支持我们的服务。 "; 
$lang[domain_point_wrong]="域名指向错误"; 
$lang[domain_point_ok]="域名指向正确"; 
$lang[wait_for_check]="等待管理员审核"; 
$lang[apply_fail]="申请失败"; 
$lang[apply_active]="空间已可使用"; 
$lang[host_suspended]="空间已被冻结"; 
$lang[host_terminated]="空间已被删除"; 
$lang[no_forced_ads]="阁下不需要放置广告"; 
$lang[no_this_ticket]="没有此支持Ticket!"; 
$lang[custom_reply]="客户回复"; 
$lang[ticket_submit_ok]="已提交支持Ticket!"; 
$lang[accept_application]="可以申请"; 
$lang[auto_active]="自动开通"; 
$lang[manual_active]="手动开通"; 
$lang[no_tos]="尚未设置服务条约"; 
$lang[support_not_open]="支援中心尚未开放。"; 
$lang[submit_ok]="已提交!"; 
$lang[deleted]="已删除!"; 
$lang[updated]="已更新"; 
$lang[add_ok]="已新增!"; 
$lang[replied]="已回覆!"; 
$lang[add_server_notice]="请先添加服务器!"; 
$lang[wrong_old_pwd]="原密码填写出错!"; 
$lang[email_sent_ok]="成功给所有用户发送了EMAIL"; 
$lang[admin_replied]="管理员回复"; 
$lang[tk_closed]="已关闭"; 
$lang[tk_closed_ok]="已关闭工单"; 
$lang[ads_not_placed]="用户尚未放置广告"; 
$lang[ads_placed]="用户已正确放置广告"; 
$lang[no_ads_forced]="此用户无需放置广告"; 
$lang[affiliate_total]="该用户已经推广了"; 
$lang[active_ok]="已开通用户"; 
$lang[refuse_ok]="已拒绝用户"; 
$lang[mail_ok]="已电邮用户"; 
$lang[suspend_ok]="已封锁用户"; 
$lang[unsuspend_ok]="已解封用户"; 
$lang[terminate_ok]="已终止用户"; 
$lang[delete_ok]="已删除用户"; 
$lang[admin_panel]="管理后台"; 
$lang[add_faq]="新增FAQ"; 
$lang[config_faq]="FAQ设定"; 
$lang[title]="标题:"; 
$lang[title_]="标题"; 
$lang[content]="内容:"; 
$lang[submit]="提交"; 
$lang[reset_]="重设"; 
$lang[time_]="时间:"; 
$lang[add_notice]="新增公告"; 
$lang[config_notice]="公告设定"; 
$lang[add_plan]="新增网站空间方案"; 
$lang[config_plan]="网站空间方案设定"; 
$lang[plan_name]="网站空间方案"; 
$lang[plan_s]="使用的服务器"; 
$lang[plan_space]="空间容量:"; 
$lang[plan_traffic]="每月流量:"; 
$lang[plan_subdomains]="子域名:"; 
$lang[plan_domains]="域名:"; 
$lang[plan_ftp]="Ftp 账号: "; 
$lang[plan_mysql]="MySQL 数据库:"; 
$lang[plan_mail]="EMAIL 账号:"; 
$lang[plan_current_user]="目前使用人数 :"; 
$lang[plan_limit]="限量用户人数 :"; 
$lang[plan_mon_price]="月付:"; 
$lang[plan_semi_anual_price]="半年付:"; 
$lang[plan_anual_price]="年付:"; 
$lang[plan_dou_anual_price]="两年付:"; 
$lang[plan_server]="服务器:"; 
$lang[plan_open]="开放申请?:"; 
$lang[plan_auto]="自动开通?(付费空间必选！):"; 
$lang[plan_reseller]="分销?:"; 
$lang[plan_hide]="隐藏?:"; 
$lang[plan_ads_code]="广告代码(留空则不需要):"; 
$lang[add_server]="新增服务器"; 
$lang[config_server]="服务器设定"; 
$lang[server_name]="服务器名称:"; 
$lang[ip_address]="IP 地址:"; 
$lang[ns_1]="DNS服务 1:"; 
$lang[ns_2]="DNS服务 2:"; 
$lang[control_panel]="控制面板 :"; 
$lang[server_location]="服务器位置:"; 
$lang[a_s_username]="后台登录账号:"; 
$lang[a_s_password]="后台登录密码:"; 
$lang[add_announcement]="新增公告"; 
$lang[config_announcement]="公告设定"; 
$lang[action]="操作"; 
$lang[not_set_announcement]="尚未设定公告。"; 
$lang[edit]="编辑"; 
$lang[del]="删除"; 
$lang[edit_expire_to]="修改过期日期为（修改后略有出入）"; 
$lang[expire_date]="过期日"; 
$lang[welcom_to_admin_panel]="欢迎进入DzWHM管理后台"; 
$lang[welcom_tip]="在后台你可以管理你的用户、服务器和网站空间方案等等。 "; 
$lang[ticket_stat]="你有#tickets# 张等待回复的工单。"; 
$lang[user_inactive_stat]="你有#users# 位等待激活的用户。"; 
$lang[dzwhm_official]="DzWHM官方动态"; 
$lang[dzwhm_official_tip]="读取更多"; 
$lang[free_tip]="您还不是商业授权用户，现在购买商业授权最惠仅要人民币100￥，马上抢购吧！ "; 
$lang[vip_tip]="您好，尊贵的商业用户.如果使用过程中遇到问题,欢迎进入商业用户专版发帖！ "; 
$lang[faq_not_found]="尚未设定FAQ。"; 
$lang[mass_mail]="Email群发"; 
$lang[mail_send]="发送"; 
$lang[back_notice_list]="返回公告列表"; 
$lang[plz_add_plan]="请新增网站空间方案。"; 
$lang[date_]="日期"; 
$lang[tk]="工单"; 
$lang[username]="用户名"; 
$lang[statues]="状态"; 
$lang[urgency]="紧急程度"; 
$lang[reply]="回复"; 
$lang[add_server_tip]="请先新增服务器"; 
$lang[basci_setting]="基本设定"; 
$lang[tos_setting]="服务条约设定"; 
$lang[open_support_center]="开放支持中心:"; 
$lang[not_limiit_ip]="允许IP重复注册:"; 
$lang[admin_uid]="管理员UID :"; 
$lang[im]="QQ/TM:"; 
$lang[email]="Email:"; 
$lang[phone]="Phone:"; 
$lang[admin_act]="管理员操作"; 
$lang[admin_home]="后台首页"; 
$lang[basic_cfg]="基本设置"; 
$lang[admin_user]="管理用户"; 
$lang[userstat]="用户统计"; 
$lang[admin_plan]="空间方案管理"; 
$lang[admin_serv]="服务器设定"; 
$lang[admin_announcement]="公告设定"; 
$lang[admin_ticket]="工单设定"; 
$lang[admin_kb]="知识库设定"; 
$lang[admin_act_other]="其他操作"; 
$lang[admin_cronjob]="CRONJOB作业(可以自动)"; 
$lang[admin_cronjob_tip]="if(!confirm('现在CRON已经可以由常规HTTPGET请求来完成了。 \n这意味着您以后完全不用人工来清空过期的空间了！\n是否要查看全自动CRON教程？ ')){alert('即将打开作业请求窗口，请不要过早关闭，等页面执行一分钟后再关闭！');window.open('./plugin.php?id=host:host&page=cron');}else{window.open('http://www.fen.mu/viewthread.php?tid=2&extra=page%3D1')}";
$lang[admin_tools]="检查工具"; 
$lang[admin_free_notice]="您还不是商业授权用户，现在购买商业授权最惠仅要人民币100￥，马上带您进入商业授权购买中心！ "; 
$lang[admin_buy_vip]="购买商业授权"; 
$lang[no_tk_found]="目前没有任何工单。"; 
$lang[admin_tk_close]="关闭"; 
$lang[no_user_found]="目前没有任何用户"; 
$lang[check_domain_p]="检查域名指向"; 
$lang[check_ads_p]="检查广告放置"; 
$lang[check_aff]="检查推广情况"; 
$lang[apply_date]="申请日期"; 
$lang[used_days]="使用天数"; 
$lang[days]="日"; 
$lang[detail]="详细"; 
$lang[create]="开通"; 
$lang[refuse]="拒绝"; 
$lang[suspend]="冻结"; 
$lang[unsuspend]="解封"; 
$lang[terminate]="删除空间"; 
$lang[delete_]="删除用户"; 
$lang[see_detail]="用户详细资料"; 
$lang[back]="返回"; 
$lang[pass]="密码:"; 
$lang[aff_from]="推荐人:"; 
$lang[applied_stat]="申请人数 :"; 
$lang[sctived_stat]="已开通用户 :"; 
$lang[inactive_stat]="未开通用户 :"; 
$lang[inactive_stat]="已封锁用户 :"; 
$lang[aff_center]="推广中心"; 
$lang[copy_click]="点此复制链接"; 
$lang[no_records]="没有任何推广记录。 "; 
$lang[aff_history]="推广记录"; 
$lang[announcements]="最新公告 "; 
$lang[announcements_none]="目前没有任何公告。 "; 
$lang[app_form]="网站空间申请表单 "; 
$lang[fees]="开通时间及费用:"; 
$lang[fees_1]="月付(30天)------RMB #monprice# 元"; 
$lang[fees_2]="半年付(182天)--RMB #sixmonprice# 元"; 
$lang[fees_3]="年付(365天)----RMB #yrprice# 元"; 
$lang[fees_4]="两年付(731天)--RMB #twoyrprice# 元"; 
$lang[acc_username]="空间账号名称:"; 
$lang[acc_password]="空间账号密码:"; 
$lang[acc_repass]="重新输入密码:"; 
$lang[agree]=" 你是否同意<a href=\"#indexname#\">#bbname#</a><a href=\"plugin.php?id=host:host&page=tos\">的服务条约</a>? "; 
$lang[ip_tip]=" 你的IP地址#ip# 已被记录在案，请洁身自爱。"; 
$lang[renew]="续期"; 
$lang[renew_1]="延期一个月:"; 
$lang[renew_2]="延期六个月:"; 
$lang[renew_3]="延期一年:"; 
$lang[renew_4]="延期两年:"; 
$lang[contact_us]="联系我们"; 
$lang[im_api]="<a title=\"点击这里给QQ #value# 发消息！ \"href=\"javascript:window.open('tencent://message/?uin=#value#&Site=DzDzWHM&Menu=yes');\"><img src=\"http://wpa.qq.com/pa?p=1:#value#:6\"></a> "; 
$lang[email_api]="点击这里给#value# 发伊妹儿！"; 
$lang[no_phone]="对不起。我们不提供电话咨询.<br/>请选择其它联系方式联系我们. "; 
$lang[index_myhost]="我的网站空间"; 
$lang[index_myhost_des]="点此查看您的空间资料"; 
$lang[index_announcements]="最新公告"; 
$lang[index_announcements_des]="查看最新的消息和公告"; 
$lang[index_kb]="知识库"; 
$lang[index_kb_des]="点此查看本站的FAQ"; 
$lang[index_order]="订购空间"; 
$lang[index_order_des]="浏览本站的网站空间计划"; 
$lang[index_servinfo]="服务器讯息"; 
$lang[index_servinfo_des]="查看本站的服务器状态"; 
$lang[index_tickets]="支持中心"; 
$lang[index_tickets_des]="点此查看阁下的支持Ticket"; 
$lang[index_aff]="用户推广"; 
$lang[index_aff_des]="推广我们的服务给所有人"; 
$lang[index_tos]="服务条约"; 
$lang[index_tos_des]="点此查看服务条约"; 
$lang[index_contactus]="售前咨询"; 
$lang[index_contactus_des]="如果有任何售前问题请在这里联系我们"; 
$lang[index_networkissues]="网络问题告示"; 
$lang[index_networkissues_des]="查看现在的或者将来预期的网络相关事件"; 
$lang[no_faq]="目前没有任何FAQ。"; 
$lang[myhost_disk_usage]="空间使用情况:"; 
$lang[myhost_apr]="审批进度:"; 
$lang[myhost_serv_ip]="服务器 IP:"; 
$lang[myhost_ns]="域名服务器:"; 
$lang[myhost_cp]="网站控制面板:"; 
$lang[myhost_ads]="广告代码:"; 
$lang[myhost_ns]="域名服务器:"; 
$lang[plan_under_cons]="正在筹备网站空间计划。"; 
$lang[used]="用户人数 "; 
$lang[max_]="上限"; 
$lang[traffic]="网站流量 ："; 
$lang[domains_p]="可绑定域名 :"; 
$lang[price]="价格 ："; 
$lang[free]="完全免费"; 
$lang[is_ad]="需放置广告 :"; 
$lang[none_serv_watched]="没有伺服器在监控名单。"; 
$lang[m_act]="会员操作"; 
$lang[dzwhm_home]="DzWHM主页"; 
$lang[purch_cash]="充值RMB"; 
$lang[tk_sub]="提交工单"; 
$lang[a_act]="管理员操作"; 
$lang[u_info]="用户信息"; 
$lang[u_info_cash_1]="您账户有RMB"; 
$lang[u_info_cash_2]="元"; 
$lang[add_tk]="提交ticket"; 
$lang[u_info_purc]="充值RMB"; 
$lang[dzwhm_sys_info]="DzWHM系统信息"; 
$lang[dzwhm_sys_info_copy]="Powered by <a href='http://www.fen.mu'>DzWHM v2.04 </a>"; 
$lang[tk_s]="查看ticket"; 
$lang[none_tk]="阁下没有提交支援票。"; 
$lang[detail]="查看"; 
$lang[my_host]="我的空间"; 
$lang[default_]="默认"; 
$lang[mailto]="发Email"; 
$lang[forced_manual]="免费空间不能设置为自动开通！"; 
$lang[forced_auto]="付费空间不能设置为手工开通！"; 
$lang[refresh]="刷新"; 
$lang[networkissues_none]="目前没有发布任何网络问题告示."; 
$lang[add_networkissues]="添加网络问题告示"; 
$lang[config_networkissues]="网络问题设置"; 
//2011-05-31加入loading
$lang[loading]="加载中，请稍候...";

//Cron 

$lang[cron_remind_mail_title]="<急>空间续费提醒！"; 
$lang[cron_remind_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."亲爱的用户，"." 
<br><br>" 
."感谢阁下选用我 
们的网站空间服务。您的空间将于本邮件发送之后3天内到期。 "."<br> 
<br>" 
."<b>请及时充值续 
费。 </b>"."<br>" 
."在您选择放弃我 
们服务15天后，您的网站会被系统彻底删除,"."<br>" 
."Best 
Regards,"."<br>#bbname#<br>" 
."我们的网站： 
#siteurl# <br>"; 

$lang[cron_del_mail_title]="<急>空间停止提醒！"; 
$lang[cron_del_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."亲爱的用户，"." 
<br><br>" 
."感谢阁下选用我 
们的网站空间服务。您的空间将于本邮件发送之时到期。 "."<br><br>" 
."<b>请及时充值续 
费。 </b>"."<br>" 
."15天后，您的网 
站会被系统彻底删除,"."<br>" 
."Best 
Regards,"."<br>#bbname]#<br>" 
."我们的网站： 
#siteurl]#<br>"; 

$lang[cron_deleted_mail_title]="<急>空间删除提醒！"; 
$lang[cron_deleted_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."亲爱的用户，"." 
<br><br>" 
."感谢阁下选用我 
们的网站空间服务。您的空间已于本邮件发送之时删除。 "."<br><br>" 
."<b>您网站的档案 
已经全部被格式化。 </b>"."<br>" 
."欢迎您再次选择 
我们的服务！ "."<br>" 
."Best 
Regards,"."<br>#bbname#<br>" 
."我们的网站： 
#siteurl# <br>"; 

?>
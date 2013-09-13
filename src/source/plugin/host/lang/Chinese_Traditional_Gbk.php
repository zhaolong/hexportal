<?php
if(!defined('IN_DISCUZ')){exit ('Access Denied');}
$lang = array();
$lang[undefined_action]="未定義操作，請返回。"; 
$lang[money]="RMB"; 
$lang[mail_subject]="網頁寄存通知"; 
$lang[mail_content_apply_page]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."親愛的用戶，"."<br><br>" 
."感謝閣下選用我們的網站空間服 
務。您的空間已經開通，以下是您的賬戶資料，請小心保管。 "."<br> 
<br>" 
."<b>網站空間賬戶資料</b>"."<br>" 
."服務計劃： #plan# <br>" 
."用戶名： #username# <br>" 
."密碼： #password# <br>" 
."域名： "."<a 
href='http://$_POST[domain]'> #domain# </a>"."<br><br>" 
."<b>伺服器訊息</b>"."<br>" 
."伺服器名： #server# <br>" 
."伺服器 IP： #ip# <br>" 
."網站控制台： "."<a 
href='#cp#'>#cp#</a>"."<br><br>" 
."<b>FTP 資料</b>"."<br>" 
."FTP 伺服器： #ip# <br>" 
."用戶名： #username# <br>" 
."密碼： #password# <br><br>" 
."<b>MySQL 資料庫</b>"."<br>" 
."請進入網站站控制後台創建 MySQL 
資料庫。 "."<br><br>" 
."<b>廣告碼</b> "."<br>" 
."請到 #bbname# 的"."<a 
href='http://#url#/plugin.php?id=host:host&page=myhost'>我的網站
空間</a>"."查看。 "."<br><br><br>" 
."------------------------------- 
------------------------"."<br>" 
."Best Regards,"."<br>" 
." #bbname# <br>" 
."網站： #siteurl# <br>"; 
$lang[no_host]="您未申請空間,現在轉向網站空間計劃頁。"; 
$lang[hosted]="您已申請空間，不可重複申請!"; 
$lang[no_plan]="計劃不存在!"; 
$lang[reseller]="分銷空間"; 
$lang[noemalhosting]="網站空間"; 
$lang[stopped]="暫停申請"; 
$lang[fill_all]="請填寫所有項目!"; 
$lang[pass_not_match]="兩次輸入的密碼不同!"; 
$lang[must_agree_tos]="你必須同意本站的服務條款!"; 
$lang[ip_limited]="閣下的IP曾經申請過!"; 
$lang[invalid_email]="無效的Email格式!"; 
$lang[cash_not_enough_1]="閣下RMB不夠月付，請充值！!"; 
$lang[cash_not_enough_2]="閣下RMB不夠半年付，請充值！！!"; 
$lang[cash_not_enough_3]="閣下RMB不夠年付，請充值！！"; 
$lang[cash_not_enough_4]="閣下RMB不夠兩年付，請充值！！"; 
$lang[no_hack_in]="請不要嘗試繞過過濾！去充值吧，乖~"; 
$lang[applied_successfully]="申請成功!"; 
$lang[applied_successfully_1]="閣下已成功申請一個月（30天）商業空 
間！感謝您支援我們的服務。 "; 
$lang[applied_successfully_2]="閣下已成功申請半年（182天）商業空 
間！感謝您支援我們的服務。 "; 
$lang[applied_successfully_3]="閣下已成功申請一年（365天）商業空 
間！感謝您支援我們的服務。 "; 
$lang[applied_successfully_4]="閣下已成功申請一年（731天）商業空 
間！感謝您支援我們的服務。 "; 
$lang[wait_for_check]="管理員會盡快開通閣下的賬號，請耐心等候。"; 
$lang[no_host_to_renewal]="閣下尚未申請網站空間,不能續期！！!"; 
$lang[free_no_renewal]="免費產品不用續期"; 
$lang[to_cash_1]="我要延期一個月"; 
$lang[to_cash_1_notice]="為續期一個月，您得消耗相應的錢幣或積分, 
當然消費後不可以退款的，繼續麼？ "; 
$lang[to_cash_2]="我要延期半年"; 
$lang[to_cash_2_notice]="為續期半年，您得消耗相應的錢幣或積分,當 
然消費後不可以退款的，繼續麼？ "; 
$lang[to_cash_3]="我要延期一年"; 
$lang[to_cash_3_notice]="為續期一年，您得消耗相應的錢幣或積分,當 
然消費後不可以退款的，繼續麼？ "; 
$lang[to_cash_4]="我要延期兩年"; 
$lang[to_cash_4_notice]="為續期兩年，您得消耗相應的錢幣或積分,當 
然消費後不可以退款的，繼續麼？ "; 
$lang[cash_1_ok]="閣下空間已成功延期30天！感謝您支援我們的服務。 
"; 
$lang[cash_2_ok]="閣下空間已成功續期半年（182天）！感謝您支援我們 
的服務。 "; 
$lang[cash_3_ok]="閣下空間已成功續期一年（365天）！感謝您支援我們 
的服務。 "; 
$lang[cash_4_ok]="閣下空間已成功續期兩年（731天）！感謝您支援我們 
的服務。 "; 
$lang[domain_point_wrong]="域名指向錯誤"; 
$lang[domain_point_ok]="域名指向正確"; 
$lang[wait_for_check]="等待管理員審核"; 
$lang[apply_fail]="申請失敗"; 
$lang[apply_active]="空間已可使用"; 
$lang[host_suspended]="空間已被凍結"; 
$lang[host_terminated]="空間已被刪除"; 
$lang[no_forced_ads]="閣下不需要放置廣告"; 
$lang[no_this_ticket]="沒有此支援Ticket!"; 
$lang[custom_reply]="客戶回复"; 
$lang[ticket_submit_ok]="已提交支援Ticket!"; 
$lang[accept_application]="可以申請"; 
$lang[auto_active]="自動開通"; 
$lang[manual_active]="手動開通"; 
$lang[no_tos]="尚未設置服務條約"; 
$lang[support_not_open]="支援中心尚未開放。"; 
$lang[submit_ok]="已提交!"; 
$lang[deleted]="已刪除!"; 
$lang[updated]="已更新"; 
$lang[add_ok]="已新增!"; 
$lang[replied]="已回覆!"; 
$lang[add_server_notice]="請先添加伺服器!"; 
$lang[wrong_old_pwd]="原密碼填寫出錯!"; 
$lang[email_sent_ok]="成功給所有用戶發送了EMAIL"; 
$lang[admin_replied]="管理員回复"; 
$lang[tk_closed]="已關閉"; 
$lang[tk_closed_ok]="已關閉支援票"; 
$lang[ads_not_placed]="用戶尚未放置廣告"; 
$lang[ads_placed]="用戶已正確放置廣告"; 
$lang[no_ads_forced]="此用戶無需放置廣告"; 
$lang[affiliate_total]="該用戶已經推廣了"; 
$lang[active_ok]="已開通用戶"; 
$lang[refuse_ok]="已拒絕用戶"; 
$lang[mail_ok]="已電郵用戶"; 
$lang[suspend_ok]="已封鎖用戶"; 
$lang[unsuspend_ok]="已解封用戶"; 
$lang[terminate_ok]="已終止用戶"; 
$lang[delete_ok]="已刪除用戶"; 
$lang[admin_panel]="管理後台"; 
$lang[add_faq]="新增FAQ"; 
$lang[config_faq]="FAQ設定"; 
$lang[title]="標題:"; 
$lang[title_]="標題"; 
$lang[content]="內容:"; 
$lang[submit]="提交"; 
$lang[reset_]="重設"; 
$lang[time_]="時間:"; 
$lang[add_notice]="新增公告"; 
$lang[config_notice]="公告設定"; 
$lang[add_plan]="新增網站空間方案"; 
$lang[config_plan]="網站空間方案設定"; 
$lang[plan_name]="網站空間方案"; 
$lang[plan_s]="使用的伺服器"; 
$lang[plan_space]="空間容量:"; 
$lang[plan_traffic]="每月流量:"; 
$lang[plan_subdomains]="子域名:"; 
$lang[plan_domains]="域名:"; 
$lang[plan_ftp]="Ftp 賬號: "; 
$lang[plan_mysql]="MySQL 資料庫:"; 
$lang[plan_mail]="EMAIL 賬號:"; 
$lang[plan_current_user]="目前使用人數 :"; 
$lang[plan_limit]="限量用戶人數 :"; 
$lang[plan_mon_price]="月付:"; 
$lang[plan_semi_anual_price]="半年付:"; 
$lang[plan_anual_price]="年付:"; 
$lang[plan_dou_anual_price]="兩年付:"; 
$lang[plan_server]="伺服器:"; 
$lang[plan_open]="開放申請?:"; 
$lang[plan_auto]="自動開通?(付費空間必選！):"; 
$lang[plan_reseller]="分銷?:"; 
$lang[plan_hide]="隱藏?:"; 
$lang[plan_ads_code]="廣告代碼(留空則不需要):"; 
$lang[add_server]="新增伺服器"; 
$lang[config_server]="伺服器設定"; 
$lang[server_name]="伺服器名稱:"; 
$lang[ip_address]="IP 地址:"; 
$lang[ns_1]="DNS服務 1:"; 
$lang[ns_2]="DNS服務 2:"; 
$lang[control_panel]="控制面板 :"; 
$lang[server_location]="伺服器位置:"; 
$lang[a_s_username]="後台登錄賬號:"; 
$lang[a_s_password]="後台登錄密碼:"; 
$lang[add_announcement]="新增公告"; 
$lang[config_announcement]="公告設定"; 
$lang[action]="操作"; 
$lang[not_set_announcement]="尚未設定公告。"; 
$lang[edit]="編輯"; 
$lang[del]="刪除"; 
$lang[edit_expire_to]="修改過期日期為（修改後略有出入）"; 
$lang[expire_date]="過期日"; 
$lang[welcom_to_admin_panel]="歡迎進入DzWHM管理後台"; 
$lang[welcom_tip]="在後台你可以管理你的用戶、伺服器和網站空間方案 
等等。 "; 
$lang[ticket_stat]="你有#tickets# 張等待回复的支援票。"; 
$lang[user_inactive_stat]="你有#users# 位等待激活的用戶。"; 
$lang[dzwhm_official]="DzWHM官方動態"; 
$lang[dzwhm_official_tip]="閱讀更多。"; 
$lang[free_tip]="您還不是商業授權用戶，現在購買商業授權最惠僅要人 
民幣100￥，馬上搶購吧！ "; 
$lang[vip_tip]="您好，尊貴的商業用戶.如果使用過程中遇到問題,歡迎 
進入商業用戶專版發帖！ "; 
$lang[faq_not_found]="尚未設定FAQ。"; 
$lang[mass_mail]="Email群發"; 
$lang[mail_send]="發送"; 
$lang[back_notice_list]="返回公告列表"; 
$lang[plz_add_plan]="請新增網站空間方案。"; 
$lang[date_]="日期"; 
$lang[tk]="支援票"; 
$lang[username]="用戶名"; 
$lang[statues]="狀態"; 
$lang[urgency]="緊急程度"; 
$lang[reply]="回复"; 
$lang[add_server_tip]="請先新增伺服器"; 
$lang[basci_setting]="基本設定"; 
$lang[tos_setting]="服務條約設定"; 
$lang[open_support_center]="開放支援中心:"; 
$lang[not_limiit_ip]="允許IP重複註冊:"; 
$lang[admin_uid]="管理員UID :"; 
$lang[im]="QQ/TM:"; 
$lang[email]="Email:"; 
$lang[phone]="Phone:"; 
$lang[admin_act]="管理員操作"; 
$lang[admin_home]="後台首頁"; 
$lang[basic_cfg]="基本設置"; 
$lang[admin_user]="管理用戶"; 
$lang[userstat]="用戶統計"; 
$lang[admin_plan]="空間方案管理"; 
$lang[admin_serv]="伺服器設定"; 
$lang[admin_announcement]="公告設定"; 
$lang[admin_ticket]="支援票設定"; 
$lang[admin_kb]="知識庫設定"; 
$lang[admin_act_other]="其他操作"; 
$lang[admin_cronjob]="CRONJOB作業(可以自動)"; 
$lang[admin_cronjob_tip]="if(!confirm('現在CRON已經可以由常規HTTP 
GET請求來完成了。 \n這意味著您以後完全不用人工來清空過期的空間了！ 
\n是否要查看全自動CRON教程？ ')){alert('即將打開作業請求窗口，請不 
要過早關閉，等頁面執行一分鐘後再關 
閉！ ');window.open('./plugin.php? 
id=host:host&page=cron');}else{window.open('http://www.fen.mu/vie
wthread.php?tid=2&extra=page%3D1')}"; 
$lang[admin_tools]="檢查工具"; 
$lang[admin_free_notice]="您還不是商業授權用戶，現在購買商業授權 
最惠僅要人民幣100￥，馬上帶您進入商業授權購買中心！ "; 
$lang[admin_buy_vip]="購買商業授權"; 
$lang[no_tk_found]="目前沒有任何支援票。"; 
$lang[admin_tk_close]="關閉"; 
$lang[no_user_found]="目前沒有任何用戶"; 
$lang[check_domain_p]="檢查域名指向"; 
$lang[check_ads_p]="檢查廣告放置"; 
$lang[check_aff]="檢查推廣情況"; 
$lang[apply_date]="申請日期"; 
$lang[used_days]="使用天數"; 
$lang[days]="日"; 
$lang[detail]="詳細"; 
$lang[create]="開通"; 
$lang[refuse]="拒絕"; 
$lang[suspend]="凍結"; 
$lang[unsuspend]="解封"; 
$lang[terminate]="刪除空間"; 
$lang[delete_]="刪除用戶"; 
$lang[see_detail]="用戶詳細資料"; 
$lang[back]="返回"; 
$lang[pass]="密碼:"; 
$lang[aff_from]="推薦人:"; 
$lang[applied_stat]="申請人數 :"; 
$lang[sctived_stat]="已開通用戶 :"; 
$lang[inactive_stat]="未開通用戶 :"; 
$lang[inactive_stat]="已封鎖用戶 :"; 
$lang[aff_center]="推廣中心"; 
$lang[copy_click]="點此復制鏈接"; 
$lang[no_records]="沒有任何推廣記錄。 "; 
$lang[aff_history]="推廣記錄"; 
$lang[announcements]="最新公告 "; 
$lang[announcements_none]="目前沒有任何公告。 "; 
$lang[app_form]="網站空間申請表單 "; 
$lang[fees]="開通時間及費用:"; 
$lang[fees_1]="月付(30天)------RMB #monprice# 元"; 
$lang[fees_2]="半年付(182天)--RMB #sixmonprice# 元"; 
$lang[fees_3]="年付(365天)----RMB #yrprice# 元"; 
$lang[fees_4]="兩年付(731天)--RMB #twoyrprice# 元"; 
$lang[acc_username]="空間賬號名稱:"; 
$lang[acc_password]="空間賬號密碼:"; 
$lang[acc_repass]="重新輸入密碼:"; 
$lang[agree]=" 你是否同意<a href=\"#indexname#\">#bbname#</a>　 
<a href=\"plugin.php?id=host:host&page=tos\">的服務條約</a>? "; 
$lang[ip_tip]=" 你的IP地址#ip# 已被記錄在案，請潔身自愛。"; 
$lang[renew]="續期"; 
$lang[renew_1]="延期一個月:"; 
$lang[renew_2]="延期六個月:"; 
$lang[renew_3]="延期一年:"; 
$lang[renew_4]="延期兩年:"; 
$lang[contact_us]="聯繫我們"; 
$lang[im_api]="<a title=\"點擊這裡給QQ #value# 發消息！ \" 
href=\"javascript:window.open('tencent://message/?uin= 
#value#&Site=DzDzWHM&Menu=yes');\"><img 
src=\"http://wpa.qq.com/pa?p=1:#value#:6\"></a> "; 
$lang[email_api]="點擊這裡給#value# 發伊妹兒！"; 
$lang[no_phone]="對不起。我們不提供電話諮詢.<br/>請選擇其它聯繫方 
式聯繫我們. "; 
$lang[index_myhost]="我的網站空間"; 
$lang[index_myhost_des]="點此查看您的空間資料"; 
$lang[index_announcements]="最新公告"; 
$lang[index_announcements_des]="查看最新的消息和公告"; 
$lang[index_kb]="知識庫"; 
$lang[index_kb_des]="點此查看本站的FAQ"; 
$lang[index_order]="訂購空間"; 
$lang[index_order_des]="瀏覽本站的網站空間計劃"; 
$lang[index_servinfo]="伺服器訊息"; 
$lang[index_servinfo_des]="查看本站的伺服器狀態"; 
$lang[index_tickets]="支援中心"; 
$lang[index_tickets_des]="點此查看閣下的支援Ticket"; 
$lang[index_aff]="用戶推廣"; 
$lang[index_aff_des]="推廣我們的服務給所有人"; 
$lang[index_tos]="服務條約"; 
$lang[index_tos_des]="點此查看服務條約"; 
$lang[index_contactus]="售前諮詢"; 
$lang[index_contactus_des]="如果有任何售前問題請在這里聯系我們"; 
$lang[index_networkissues]="網路問題告示"; 
$lang[index_networkissues_des]="查看現在的或者將來預期的網路相關 
事件"; 
$lang[no_faq]="目前沒有任何FAQ。"; 
$lang[myhost_disk_usage]="空間使用情況:"; 
$lang[myhost_apr]="審批進度:"; 
$lang[myhost_serv_ip]="伺服器 IP:"; 
$lang[myhost_ns]="域名伺服器:"; 
$lang[myhost_cp]="網站控制面板:"; 
$lang[myhost_ads]="廣告代碼:"; 
$lang[myhost_ns]="域名伺服器:"; 
$lang[plan_under_cons]="正在籌備網站空間計劃。"; 
$lang[used]="用戶人數 "; 
$lang[max_]="上限"; 
$lang[traffic]="網站流量 ："; 
$lang[domains_p]="可綁定域名 :"; 
$lang[price]="價格 ："; 
$lang[free]="完全免費"; 
$lang[is_ad]="需放置廣告 :"; 
$lang[none_serv_watched]="沒有伺服器在監控名單。"; 
$lang[m_act]="會員操作"; 
$lang[dzwhm_home]="DzWHM主頁"; 
$lang[purch_cash]="充值RMB"; 
$lang[tk_sub]="提交支援票"; 
$lang[a_act]="管理員操作"; 
$lang[u_info]="用戶信息"; 
$lang[u_info_cash_1]="您賬戶有RMB"; 
$lang[u_info_cash_2]="元"; 
$lang[add_tk]="提交ticket"; 
$lang[u_info_purc]="充值RMB"; 
$lang[dzwhm_sys_info]="DzWHM系統信息"; 
$lang[dzwhm_sys_info_copy]="Powered by <a 
href='http://www.fen.mu'>DzWHM v2.01 </a>"; 
$lang[tk_s]="查看ticket"; 
$lang[none_tk]="閣下沒有提交支援票。"; 
$lang[detail]="查看"; 
$lang[my_host]="我的空間";
$lang[default_]="默認";
$lang[mailto]="发Email";
$lang[forced_manual]="免費空間不能設置為自動開通！";
$lang[forced_auto]="付費空間不能設置為手工開通！";
$lang[refresh]="刷新";
$lang[networkissues_none]="目前沒發佈網路問題告示.";
$lang[add_networkissues]="添加網路問題";
$lang[config_networkissues]="網路問題設置";

//Cron

$lang[cron_remind_mail_title]="<急>空间续费提醒！";
$lang[cron_remind_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."亲爱的用户，"."<br><br>"
						."感谢阁下选用我们的网站空间服务。您的空间将于本邮件发送之后3天内到期。"."<br><br>"
						."<b>请及时充值续费。</b>"."<br>"
						."在您选择放弃我们服务15天后，您的网站会被系统彻底删除,"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."我们的网站： #siteurl# <br>";

$lang[cron_del_mail_title]="<急>空间停止提醒！";
$lang[cron_del_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."亲爱的用户，"."<br><br>"
						."感谢阁下选用我们的网站空间服务。您的空间将于本邮件发送之时到期。"."<br><br>"
						."<b>请及时充值续费。</b>"."<br>"
						."15天后，您的网站会被系统彻底删除,"."<br>"
						."Best Regards,"."<br>#bbname]#<br>"										
						."我们的网站： #siteurl]#<br>";

$lang[cron_deleted_mail_title]="<急>空间删除提醒！";
$lang[cron_deleted_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."亲爱的用户，"."<br><br>"
						."感谢阁下选用我们的网站空间服务。您的空间已于本邮件发送之时删除。"."<br><br>"
						."<b>您网站的档案已经全部被格式化。</b>"."<br>"
						."欢迎您再次选择我们的服务！"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."我们的网站： #siteurl# <br>";


?>
<?php
if(!defined('IN_DISCUZ')){exit ('Access Denied');}
$lang = array();
$lang[undefined_action]="undefined action";
$lang[money]="USD";
$lang[mail_subject]="Hosting Account Notify";//Hosting Accunt Notify
$lang[mail_content_apply_page]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
				."Dear Customer,"."<br><br>"//Dear Custom
				."Thank you for choosing our service,your hosting is active and ready for using now,the detail information is below,please store them carefull."."<br><br>"//Thank you for choosing our service,your hosting is acitve and ready for using now,the detail information is bellow,plz store them carfully.
				."<b>Hosting Account Information:</b>"."<br>"
				."Plan: #plan# <br>"
				."Username: #username# <br>"
				."Pawword: #password# <br>"
				."Domain: "."<a href='http://$_POST[domain]'> #domain# </a>"."<br><br>"//domain only can type one so cannot +s
				."<b>Server Information</b>"."<br>"
				."Server: #server# <br>"
				."Server IP: #ip# <br>"
				."Control Panel: "."<a href='#cp#'>#cp#</a>"."<br><br>"
				."<b>FTP Detail:</b>"."<br>"
				."FTP Server: #ip# <br>"
				."Username: #username# <br>"
				."Password: #password# <br><br>"
				."<b>MySQL Database</b>"."<br>"
				."Please create MySQL database via control panel."."<br><br>"
				."<b>Forced Ads code:</b> "."<br>"
				."Please enter #bbname# "."<a href='http://#url#/plugin.php?id=host:host&page=myhost'>My Hosting Account</a>"." To get."."<br><br><br>"
				."-------------------------------------------------------"."<br>"
				."Best Regards,"."<br>"
				." #bbname# <br>"										
				."Website: #siteurl# <br>";
$lang[no_host]="Sorry.There is no hosting for you.Now will tranfer you to the plan page.";
$lang[hosted]="You have applied a hosting,so you may not apply hosting any more!";
$lang[no_plan]="Plan does not exists!";
$lang[reseller]="Reseller";
$lang[noemalhosting]="Hosting";
$lang[stopped]="Stopped";
$lang[fill_all]="All item required!!";
$lang[pass_not_match]="Login Details Incorrect. Please try again.";
$lang[must_agree_tos]="You must agree with our TOS so that you can apply our hosting!";
$lang[ip_limited]="You are using an IP that have applied a hosting,and you may not apply again!";
$lang[invalid_email]="Invalid email format!";
$lang[cash_not_enough_1]="Your money is not enough to pay for a month!";
$lang[cash_not_enough_2]="Your money is not enough to pay for six months!";
$lang[cash_not_enough_3]="Your money is not enough to pay for a year!";
$lang[cash_not_enough_4]="Your money is not enough to pay for two years!";
$lang[no_hack_in]="Please don't try to hijack us.";
$lang[applied_successfully]="Apply successfully!!";
$lang[applied_successfully_1]="You applied a business hosting for a month(30 days),thank you for choosing us!";
$lang[applied_successfully_2]="You applied a business hosting for a half year(182 days),thank you for choosing us!";
$lang[applied_successfully_3]="You applied a business hosting for one year(365 days),thank you for choosing us!";
$lang[applied_successfully_4]="You applied a business hosting for two years(731 days),thank you for choosing us!";
$lang[wait_for_check]="Administrator will check your application and then create your account,please wait without worry.";
$lang[no_host_to_renewal]="You don't have a hosting account so you may not renew.!";
$lang[free_no_renewal]="You cannot renew for a free product.";
$lang[to_cash_1]="renew a month";
$lang[to_cash_1_notice]="To renew a month,you will pay money for this action,and it may not get back,sure and continue?";
$lang[to_cash_2]="renew half year";
$lang[to_cash_2_notice]="To renew half year,you will pay money for this action,and it may not get back,sure and continue?";
$lang[to_cash_3]="renew one year";
$lang[to_cash_3_notice]="To renew one year,you will pay money for this action,and it may not get back,sure and continue?";
$lang[to_cash_4]="renew two years";
$lang[to_cash_4_notice]="To renew two years,you will pay money for this action,and it may not get back,sure and continue?";
$lang[cash_1_ok]="You have renew 30days for your hosting account,thank you for choosing us.";
$lang[cash_2_ok]="You have renew 182days for your hosting account,thank you for choosing us.";
$lang[cash_3_ok]="You have renew 365days for your hosting account,thank you for choosing us.";
$lang[cash_4_ok]="You have renew 731days for your hosting account,thank you for choosing us.";
$lang[domain_point_wrong]="Domain point wrong";
$lang[domain_point_ok]="Domain point correct";
$lang[wait_for_check]="waitting for admin's check";
$lang[apply_fail]="apply failed";
$lang[apply_active]="ready to use";
$lang[host_suspended]="suspended";
$lang[host_terminated]="terminated";
$lang[no_forced_ads]="you may not put any ads";
$lang[no_this_ticket]="Ticket not found!";
$lang[custom_reply]="customer replied";
$lang[ticket_submit_ok]="Ticket submited!";
$lang[accept_application]="accept";
$lang[auto_active]="auto";
$lang[manual_active]="manual";
$lang[no_tos]="TOS does not set current.";
$lang[support_not_open]="Support center does not open";//Suppoer
$lang[submit_ok]="Submited!";
$lang[deleted]="Deleted!";
$lang[updated]="Updated";
$lang[add_ok]="Add ok!";
$lang[replied]="Replied!";
$lang[add_server_notice]="Please add server first!";
$lang[wrong_old_pwd]="Wrong old password!";
$lang[email_sent_ok]="Email sent to everyone you choosing";
$lang[admin_replied]="Admin replied";
$lang[tk_closed]="closed";
$lang[tk_closed_ok]="Closed ticket";
$lang[ads_not_placed]="Ads does not put with this user.";
$lang[ads_placed]="Ads put correctly with this user.";
$lang[no_ads_forced]="no forced ads for him.";
$lang[affiliate_total]="affliate grade for him:";
$lang[active_ok]="actived uer";
$lang[refuse_ok]="refused user";
$lang[mail_ok]="Email sent.";
$lang[suspend_ok]="Suspended user.";
$lang[unsuspend_ok]="Unsuspended user.";
$lang[terminate_ok]="Terminated user";
$lang[delete_ok]="Deleted user";
$lang[admin_panel]="Admin panel";
$lang[add_faq]="New FAQ";
$lang[config_faq]="FAQ setting";
$lang[title]="title:";
$lang[title_]="title";
$lang[content]="content:";
$lang[submit]="submit";
$lang[reset_]="reset";
$lang[time_]="time:";
$lang[add_notice]="New announcement";
$lang[config_notice]="Announcement setting";
$lang[add_plan]="New plan";
$lang[config_plan]="Plan setting";
$lang[plan_name]="Plan";
$lang[plan_s]="Server";
$lang[plan_space]="Disk:";
$lang[plan_traffic]="Monthly Traffic:";
$lang[plan_subdomains]="Subdomains:";
$lang[plan_domains]="Domains:";
$lang[plan_ftp]="FTP account: ";
$lang[plan_mysql]="MySQL database:";
$lang[plan_mail]="Email account:";
$lang[plan_current_user]="Current user :";
$lang[plan_limit]="Limit user :";
$lang[plan_mon_price]="month:";
$lang[plan_semi_anual_price]="semi-annual:";
$lang[plan_anual_price]="annual:";
$lang[plan_dou_anual_price]="2 Year:";
$lang[plan_server]="server:";
$lang[plan_open]="open register?:";
$lang[plan_auto]="auto open?(paid hosting required):";
$lang[plan_reseller]="reseller?:";
$lang[plan_hide]="hide?:";
$lang[plan_ads_code]="ads code(empty means need not):";
$lang[add_server]="New server";
$lang[config_server]="Server setting";
$lang[server_name]="Server:";
$lang[ip_address]="IP address:";
$lang[ns_1]="DNS 1:";
$lang[ns_2]="DNS 2:";
$lang[control_panel]="ControlPanel :";
$lang[server_location]="Server location:";
$lang[a_s_username]="Admin username:";
$lang[a_s_password]="Admin password:";
$lang[add_announcement]="New Announcement";
$lang[config_announcement]="Announcement setting";
$lang[action]="action";
$lang[not_set_announcement]="There is no announcement current.";
$lang[edit]="edit";
$lang[del]="delete";
$lang[edit_expire_to]="Change its expire date(little miss):";
$lang[expire_date]="expire date";
$lang[welcom_to_admin_panel]="Welcome to admin panel of DzWHM";
$lang[welcom_tip]="You may manage your customs and plans";
$lang[ticket_stat]="There are #tickets# ticket(s) to deal with.";
$lang[user_inactive_stat]="There are #users# user(s) to check.";
$lang[dzwhm_official]="DzWHM official activities";
$lang[dzwhm_official_tip]="Read more activities.";
$lang[free_tip]="You are not VIP now,it only cost USD $20,come on and buy now!";
$lang[vip_tip]="Hello VIP,is something confusing,please enter VIP forum to post!";
$lang[faq_not_found]="There is no FAQ current.";
$lang[mass_mail]="Mass Email";
$lang[mail_send]="send";
$lang[back_notice_list]="Back to list";
$lang[plz_add_plan]="Plz add plan first";
$lang[date_]="date";
$lang[tk]="ticket";
$lang[username]="Username";
$lang[statues]="Status";
$lang[urgency]="Urgency";
$lang[reply]="Reply";
$lang[add_server_tip]="Plz add server first!";
$lang[basci_setting]="Basic setting";
$lang[tos_setting]="TOS setting";
$lang[open_support_center]="open ticket:";
$lang[not_limiit_ip]="not limit IP:";
$lang[admin_uid]="Admin UID :";
$lang[im]="MSN:";
$lang[email]="Email:";
$lang[phone]="Phone:";
$lang[admin_act]="Admin action";
$lang[admin_home]="Admin home";
$lang[basic_cfg]="Basic";
$lang[admin_user]="Users";
$lang[userstat]="Userstat";
$lang[admin_plan]="Plans";
$lang[admin_serv]="Servers";
$lang[admin_announcement]="Announcements";
$lang[admin_ticket]="Ticket";
$lang[admin_kb]="FAQ";
$lang[admin_ni]="Network Issues";
$lang[admin_act_other]="other";
$lang[admin_cronjob]="Cronjob";
$lang[admin_cronjob_tip]="if(!confirm('You may don't do cron manual,because you can finish it via normal Http requst,\n wanna to see demo?')){alert('Cronjob window will bee open soon,please don't close it too early.');window.open('./plugin.php?id=host:host&page=cron');}else{window.open('http://www.fen.mu/viewthread.php?tid=2&extra=page%3D1')}";
$lang[admin_tools]="Tools";
$lang[admin_free_notice]="You are not VIP current,buy now only $20 USD!";
$lang[admin_buy_vip]="Buy VIP";
$lang[no_tk_found]="No ticket current.";
$lang[admin_tk_close]="Close";
$lang[no_user_found]="No user current.";
$lang[check_domain_p]="Check domain pointer";
$lang[check_ads_p]="Check ads";
$lang[check_aff]="Check affliates";
$lang[apply_date]="Apply date";
$lang[used_days]="Used";
$lang[days]="Day(s)";
$lang[detail]="detail";
$lang[create]="Accept";
$lang[refuse]="Refuse";
$lang[suspend]="Suspend";
$lang[unsuspend]="Unsuspend";
$lang[terminate]="Terminate";
$lang[delete_]="Delete";
$lang[see_detail]="User detail";
$lang[back]="Back";
$lang[pass]="Password:";
$lang[aff_from]="invitor:";
$lang[applied_stat]="Applied :";
$lang[sctived_stat]="Acitved :";
$lang[inactive_stat]="Inactived :";
$lang[inactive_stat]="Suspended :";
$lang[aff_center]="Affliates Center";
$lang[copy_click]="Click to copy";
$lang[no_records]="No affliates records ";
$lang[aff_history]="Affliates records";
$lang[announcements]="Announcements ";
$lang[announcements_none]="No Announcements current. ";
$lang[app_form]="Application form ";
$lang[fees]="Cycles and feed:";
$lang[fees_1]="monthly(30DAYS)------USD #monprice#";
$lang[fees_2]="semi-anual(182DAYS)--USD #sixmonprice#";
$lang[fees_3]="anual(365DAYS)----USD #yrprice#";
$lang[fees_4]="dou-anual(731DAYS)--USD #twoyrprice#";
$lang[acc_username]="Account username:";
$lang[acc_password]="Account password:";
$lang[acc_repass]="Retype password:";
$lang[agree]=" Do you agree with <a href=\"#indexname#\">#bbname#</a>'s <a href=\"plugin.php?id=host:host&page=tos\">TOS</a>? ";
$lang[ip_tip]="Your IP #ip# have beed recorded.";
$lang[renew]="renew";
$lang[renew_1]="renew a month:";
$lang[renew_2]="renew six month:";
$lang[renew_3]="renew one year:";
$lang[renew_4]="renew two years:";
$lang[contact_us]="Contact us";
$lang[im_api]="#value#";
$lang[email_api]="Click to send mail to #value#!";
$lang[no_phone]="Sorry,we don't accept phone contact.<br/>please choose another. ";
$lang[index_myhost]="My Hosting";
$lang[index_myhost_des]="click to see your hosting detail";
$lang[index_announcements]="Announcements";
$lang[index_announcements_des]="see latest announcements";
$lang[index_kb]="Knowledgebase";
$lang[index_kb_des]="click to see FAQ";
$lang[index_order]="Order";
$lang[index_order_des]="compare our hosting plans";
$lang[index_servinfo]="Server information";
$lang[index_servinfo_des]="click to see status of our server";
$lang[index_tickets]="Support Center";
$lang[index_tickets_des]="click to see your ticket";
$lang[index_aff]="Affliates";
$lang[index_aff_des]="affliates our service";
$lang[index_tos]="Term of service";
$lang[index_tos_des]="click to see tos";
$lang[index_contactus]="Contact Us";
$lang[index_contactus_des]="if anything confusing,plz contact us.";
$lang[index_networkissues]="Network Issues";
$lang[index_networkissues_des]="networkissues of these days";
$lang[no_faq]="No FAQ current.";
$lang[myhost_disk_usage]="Hoting disk usage:";
$lang[myhost_apr]="Statu:";
$lang[myhost_serv_ip]="Server IP:";
$lang[myhost_ns]="DNS Server:";
$lang[myhost_cp]="Control Panel:";
$lang[myhost_ads]="Ads code:";
$lang[plan_under_cons]="Plans under construction.";
$lang[used]="User total ";
$lang[max_]="max user";
$lang[traffic]="traffic ";
$lang[domains_p]="allow domains :";
$lang[price]="price ";
$lang[free]="Free";
$lang[is_ad]="Forced Ads :";
$lang[none_serv_watched]="No server watched.";
$lang[m_act]="member action";
$lang[dzwhm_home]="DzWHM home";
$lang[purch_cash]="Purchase cash";
$lang[tk_sub]="Submit ticket";
$lang[a_act]="Admin action";
$lang[u_info]="User info";
$lang[u_info_cash_1]="Cash of you";
$lang[u_info_cash_2]="USD";
$lang[add_tk]="Submit ticket";
$lang[u_info_purc]="Add cash";
$lang[dzwhm_sys_info]="DzWHM System info";
$lang[dzwhm_sys_info_copy]="Powered by <a href='http://www.fen.mu'>DzWHM v2.01 </a>";
$lang[tk_s]="My ticket";
$lang[none_tk]="You have never submited ticket yet.";
$lang[detail]="see detail";
$lang[my_host]="My hoting";
$lang[default_]="Default";
$lang[mailto]="email";
$lang[forced_manual]="Free hosting may not create account auto!";
$lang[forced_auto]="Paid hosting must create account auto!";
$lang[refresh]="Refresh";
$lang[networkissues_none]="No Network Issues current.";
$lang[add_networkissues]="New NetworkIssues";
$lang[config_networkissues]="NetworkIssues Setting";

//Cron

$lang[cron_remind_mail_title]="<urgency>Hosting Account Renew Notify";
$lang[cron_remind_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."Thank you for choosing our service,But your Hosting account will be expired after 3 days."."<br><br>"
						."<b>Please renew it in time.</b>"."<br>"
						."after its expire date for 15 days,you archives will be deleted,"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."Our website: #siteurl# <br>";

$lang[cron_del_mail_title]="<urgency>Hosting Account Expired Notify";
$lang[cron_del_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."Thank you for choosing our service,But your Hosting account have been expired when the mail sent."."<br><br>"
						."<b>Please renew it in time.</b>"."<br>"
						."or after its expire date for 15 days,you archives will be deleted,"."<br>"
						."Best Regards,"."<br>#bbname]#<br>"										
						."Our website: #siteurl# <br>";

$lang[cron_deleted_mail_title]="<urgency>Hosting Account Deleted Notify";
$lang[cron_deleted_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."Thank you for choosing our service,But your Hosting account have been deleted when the mail sent."."<br><br>"
						."<b>Your archives on the hosting have been deleted.</b>"."<br>"
						."We wish you choosing our service again"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."Our website: #siteurl# <br>";
?>
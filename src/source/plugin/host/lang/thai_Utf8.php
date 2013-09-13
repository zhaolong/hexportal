<?php
if(!defined('IN_DISCUZ')){exit ('Access Denied');}
$lang = array();
$lang[undefined_action]="การทำงานส่วนนี้ไม่ได้ถูกกำหนดไว้, กรุณาย้อนกลับ";
$lang[money]="บาท";
$lang[mail_subject]="ประกาศจากผู้ให้บริการโฮสติ้ง";
$lang[mail_content_apply_page]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
				."เรียนผู้ใช้บริการ"."<br><br>"
				."ขอบคุณที่วางใจใช้บริการเว็บโฮสติ้งของเรา.พื้นที่โฮสติ้งของท่านพร้อมใช้งานแล้ว โดยมีรายละเอียดการใช้งานดังนี้"."<br><br>"
				."<b>รายละเอียดพื้นที่โฮสติ้ง</b>"."<br>"
				."แพคเกจของท่านคือ: #plan# <br>"
				."ชื่อผู้ใช้: #username# <br>"
				."รหัสผ่าน: #password# <br>"
				."โดเมน: "."<a href='http://$_POST[domain]'> #domain# </a>"."<br><br>"
				."<b>รายละเอียด Server</b>"."<br>"
				."ชื่อ Server #server# <br>"
				."Server IP: #ip# <br>"
				."Control Panel: "."<a href='#cp#'>#cp#</a>"."<br><br>"
				."<b>รายละเอียด FTP</b>"."<br>"
				."FTP Server: #ip# <br>"
				."ชื่อผู้ใช้: #username# <br>"
				."รหัสผ่าน: #password# <br><br>"
				."<b>MySQL Database</b>"."<br>"
				."กรุณาเข้าสู่ ControlPanel เพื่อสร้างฐานข้อมูล MySQL"."<br><br>"
				."<b>โค๊ดโปรโมท</b> "."<br>"
				."ไปที่ #bbname# "."<a href='http://#url#/plugin.php?id=host:host&page=myhost'>พื้นทีของฉัน</a>"."ดู"."<br><br><br>"
				."-------------------------------------------------------"."<br>"
				."ขอแสดงความนับถือ,"."<br>"
				." #bbname# <br>"										
				."Website: #siteurl# <br>";
$lang[no_host]="ท่านยังไม่ได้สั่งซื้อแพคเกจใดๆ,กำลังพาท่านไปที่หน้าแสดงแพคเกจเพื่อทำการสั่งซื้อ";
$lang[hosted]="คุณได้สั่งซื้อพื้นที่นี้ไปแล้ว ไม่สามารถทำซ้ำได้!";
$lang[no_plan]="แพคเกจนี้ไม่มีอยู่ในระบบ!";
$lang[reseller]="พื้นที่สำหรับจำหน่าย";
$lang[noemalhosting]="พื้นที่ใช้งาน";
$lang[stopped]="ระงับการสมัคร";
$lang[fill_all]="กรุณากรอกข้อมูลในรายการทั้งหมด!";
$lang[pass_not_match]="รหัสผ่านทั้งสองช่องไม่ตรงกัน!";
$lang[must_agree_tos]="คุณต้องยอมรับข้อตกลงของเว็บไซต์ในการให้บริการ!";
$lang[ip_limited]="IP ของท่านมีการใช้งานเกินกำหนด!";
$lang[invalid_email]="รูปแบบอีเมล์ไม่ถูกต้อง!";
$lang[cash_not_enough_1]="เงินในระบบไม่พอที่จะชำระค่าบริการรายเดือน กรุณาเติมเงิน!";
$lang[cash_not_enough_2]="เงินในระบบไม่พอที่จะชำระค่าบริการ กรุณาเติมเงิน!";
$lang[cash_not_enough_3]="เงินในระบบไม่พอที่จะชำระค่าบริการ กรุณาเติมเงิน";
$lang[cash_not_enough_4]="จำนวนเงินในระบบน้อยกว่ากำหนด กรุณาเติมเงิน";
$lang[no_hack_in]="กรุณาอย่าพยายามที่จะหลีกเลี่ยงตัวกรอง! ในการเติมเงิน~";
$lang[applied_successfully]="การสั่งซื้อเสร็จสมบูรณ์!";
$lang[applied_successfully_1]="คุณได้สั่งซื้อพื้นที่โฮสติ้งรายเดือน (30วัน)เรียบร้อยแล้ว, ขอบคุณที่วางใจใช้บริการของเรา";
$lang[applied_successfully_2]="คุณได้สั่งซื้อพื้นที่โฮสติ้งราย6เดือน (182วัน)เรียบร้อยแล้ว, ขอบคุณที่วางใจใช้บริการของเรา";
$lang[applied_successfully_3]="คุณได้สั่งซื้อพื้นที่โฮสติ้งรายเปี (365วัน)เรียบร้อยแล้ว, ขอบคุณที่วางใจใช้บริการของเรา";
$lang[applied_successfully_4]="คุณได้สั่งซื้อพื้นที่โฮสติ้งราย2ปี (731วัน)เรียบร้อยแล้ว, ขอบคุณที่วางใจใช้บริการของเรา";
$lang[wait_for_check]="ผู้ให้บริการจะทำการเปิด Accountให้คุณเร็วๆนี้, โปรดรอการติดต่อกลับ";
$lang[no_host_to_renewal]="ท่านยังไม่มีพื้นที่เว็บในระบบ,ไม่สามารถต่ออายุได้!";
$lang[free_no_renewal]="แพคเกจฟรี ไม่จำเป็นต้องต่ออายุ";
$lang[to_cash_1]="ต้องการต่ออายุอีก1เดือน";
$lang[to_cash_1_notice]="ในการต่ออายุ1เดือนระบบจะทำการหักเงินของท่านทันทีโดยไม่สามารถเรียกคืนได้,จะดำเนินการต่อหรือไม่";
$lang[to_cash_2]="ต้องการต่ออายุอีก6เดือน";
$lang[to_cash_2_notice]="ในการต่ออายุ6เดือนระบบจะทำการหักเงินของท่านทันทีโดยไม่สามารถเรียกคืนได้,จะดำเนินการต่อหรือไม่";
$lang[to_cash_3]="ต้องการต่ออายุอีก1ปี";
$lang[to_cash_3_notice]="ในการต่ออายุ1ปีระบบจะทำการหักเงินของท่านทันทีโดยไม่สามารถเรียกคืนได้,จะดำเนินการต่อหรือไม่";
$lang[to_cash_4]="ต้องการต่ออายุอีก2ปี";
$lang[to_cash_4_notice]="ในการต่ออายุ2ปีระบบจะทำการหักเงินของท่านทันทีโดยไม่สามารถเรียกคืนได้,จะดำเนินการต่อหรือไม่";
$lang[cash_1_ok]="ระบบได้ทำการต่ออายุให้ท่าน30วันเรียบร้อยแล้ว. ขอบคุณที่ใช้บริการ";
$lang[cash_2_ok]="ระบบได้ทำการต่ออายุให้ท่าน182วันเรียบร้อยแล้ว. ขอบคุณที่ใช้บริการ";
$lang[cash_3_ok]="ระบบได้ทำการต่ออายุให้ท่าน365วันเรียบร้อยแล้ว. ขอบคุณที่ใช้บริการ";
$lang[cash_4_ok]="ระบบได้ทำการต่ออายุให้ท่าน731วันเรียบร้อยแล้ว. ขอบคุณที่ใช้บริการ";
$lang[domain_point_wrong]="การตกำหนดค่าโดเมนไม่ถูกต้อง";
$lang[domain_point_ok]="การกำหนดค่าโดเมนถูกต้อง";
$lang[wait_for_check]="รอการตรวจสอบจากผู้ดูแลระบบ";
$lang[apply_fail]="การดำเนินการล้มเหลว";
$lang[apply_active]="สามารถใช้งานได้";
$lang[host_suspended]="พื้นที่ถูกระงับการใช้งานชั่วคราว";
$lang[host_terminated]="พื้นที่ถูกลบออกจากระบบแล้ว";
$lang[no_forced_ads]="คุณไม่จำเป็นต้องวางโฆษณา";
$lang[no_this_ticket]="Without this supportTicket!";
$lang[custom_reply]="Customer Reply";
$lang[ticket_submit_ok]="Ticket submitted to support!";
$lang[accept_application]="สามารถสมัครได้";
$lang[auto_active]="เปิดใช้งานอัตโนมัติ";
$lang[manual_active]="รอการอนุมัติ";
$lang[no_tos]="ยังไม่ได้กำหนดเงื่อนไขการให้บริการ";
$lang[support_not_open]="ฝ่ายบริการยังไม่เปิดให้บริการ";
$lang[submit_ok]="ดำเนินการเรียบร้อย!";
$lang[deleted]="ลบ!";
$lang[updated]="อัพเดท";
$lang[add_ok]="ดำเนินการแล้ว!";
$lang[replied]="ตอบกลับแล้ว!";
$lang[add_server_notice]="กรุณาเพิ่ม Server!";
$lang[wrong_old_pwd]="กรอกรหัสผ่านเดิมผิดพลาด!";
$lang[email_sent_ok]="ดำเนินการส่งอีเมล์ถึงผู้ใช้ทุกท่านแล้ว";
$lang[admin_replied]="ผู้ดูแลระบบตอบกลับ";
$lang[tk_closed]="ปิด";
$lang[tk_closed_ok]="คำสั่งปิดการทำงาน";
$lang[ads_not_placed]="ผู้ใช้ยังไม่ได้วางโฆษณา";
$lang[ads_placed]="ผู้ใช้วางโฆษณาเรียบร้อยแล้ว";
$lang[no_ads_forced]="ผู้ใช้คนนี้ไม่ได้วางโฆษณา";
$lang[affiliate_total]="ผู้ใช้นี้ได้เลื่อนตำแหน่ง";
$lang[active_ok]="The user has already opened";
$lang[refuse_ok]="ได้ปฏิเสธไปยังผู้ใช้";
$lang[mail_ok]="ผู้ใช้ E-mailได้รับการ";
$lang[suspend_ok]="ผู้ใช้ที่ถูกบล็อก";
$lang[unsuspend_ok]="ผู้ใช้ได้รับการเปิดขึ้นใหม่";
$lang[terminate_ok]="ยกเลิกการใช้งานถาวร";
$lang[delete_ok]="ผู้ใช้ถูกลบแล้ว";
$lang[admin_panel]="ผู้ดูแลระบบ";
$lang[add_faq]="เพิ่มFAQ";
$lang[config_faq]="ตั้งค่าFAQ";
$lang[title]="ชื่อ:";
$lang[title_]="ชื่อ";
$lang[content]="เนื้อหา:";
$lang[submit]="submit";
$lang[reset_]="Reset";
$lang[time_]="เวลา:";
$lang[add_notice]="เพิ่มประกาศ";
$lang[config_notice]="ตั้งค่าประกาศ";
$lang[add_plan]="เพิ่มแพคเกจ";
$lang[config_plan]="ตั้งค่าแพคเกจ";
$lang[plan_name]="ชื่อแพคเกจ";
$lang[plan_s]="ใช้ server";
$lang[plan_space]="Space:";
$lang[plan_traffic]="อัตรารับส่งข้อมูลต่อเดือน:";
$lang[plan_subdomains]="Subdomain:";
$lang[plan_domains]="ชื่อโดเมน:";
$lang[plan_ftp]="Ftp Account: ";
$lang[plan_mysql]="MySQL Database:";
$lang[plan_mail]="EMAIL Account:";
$lang[plan_current_user]="จำนวนที่ใช้ในปัจจุบัน :";
$lang[plan_limit]="จำกัดจำนวนผู้ใช้ :";
$lang[plan_mon_price]="ราคาต่อเดือน:";
$lang[plan_semi_anual_price]="ราคาต่อ6เดือน:";
$lang[plan_anual_price]="ราคาต่อปี:";
$lang[plan_dou_anual_price]="ราคา2ปี:";
$lang[plan_server]="Servers:";
$lang[plan_open]="เปิดจำหน่าย?:";
$lang[plan_auto]="เปิดอัตโนมัติ?(เฉพาะพื้นที่ที่ต้องชำระค่าบริการ):";
$lang[plan_reseller]="ตัวแทนจำหน่าย?:";
$lang[plan_hide]="ซ่อน?:";
$lang[plan_ads_code]="รหัสโฆษณา(ไม่จำเป็นต้องกรอก):";
$lang[add_server]="เพิ่ม Server";
$lang[config_server]="ตั้งค่า Server";
$lang[server_name]="ชื่อ Server:";
$lang[ip_address]="IP Address:";
$lang[ns_1]="NameServer 1:";
$lang[ns_2]="NameServer 2:";
$lang[control_panel]="ระบบควบคุม";
$lang[server_location]="ที่ตั้งServer";
$lang[a_s_username]="จัดการผู้ใช้:";
$lang[a_s_password]="รหัสผ่าน:";
$lang[add_announcement]="เพิ่มประกาศ";
$lang[config_announcement]="ตั้งค่าประกาศ";
$lang[action]="เปิดใช้งาน";
$lang[not_set_announcement]="ยังไม่ได้ตั้งค่าประกาศ";
$lang[edit]="แก้ไข";
$lang[del]="ลบ";
$lang[edit_expire_to]="แก้ไขวันหมดอายุ(แก้ไขเล็กน้อย)";
$lang[expire_date]="วันหมดอายุ";
$lang[welcom_to_admin_panel]="ยินดีต้อนรับสู่ระบบแอดมิน DzWHM";
$lang[welcom_tip]="ในส่วนนี้คุณสามารถจัดการระบบต่างๆเช่น server, แพคเกจต่างๆ และผู้ใช้พื้นที่ได้โดยง่าย";
$lang[ticket_stat]="คุณมี #tickets# ใบสั่งงานเพื่อรอการตอบกลับ";
$lang[user_inactive_stat]="คุณมี #users# ผู้ใช้ที่รอการอนุมัติ";
$lang[dzwhm_official]="ข่าวสารจากDzWHM";
$lang[dzwhm_official_tip]="ติดตามข่าวสารของ DzWHM จากเว็บผู้ผลิตได้ที่นี่";
$lang[free_tip]="คุณยังไม่ได้รับอนุญาตให้ใช้งานเชิงธุระกิจ,คุณสามารถซื้อลิขสิทธิ์ได้ในราคาพิเศษ,สั่งซื้อทันที!";
$lang[vip_tip]="สวัสดีคุณลูกค้าผู้มีเกียรติ.หากท่านพบปัญหาในการใช้งาน,เรายินดีต้อนรับสู่หมวดผู้ใช้เชืงธุระกิจ";
$lang[faq_not_found]="ยังไม่ได้ตั้งค่า FAQ";
$lang[mass_mail]="ส่งข้อความหาลูกค้าในระบบ";
$lang[mail_send]="ส่ง";
$lang[back_notice_list]="กลับไปยังรายการประกาศ";
$lang[plz_add_plan]="กรุณาเพิ่มแพคเกจพื้นที่เว็บไซต์";
$lang[date_]="วันที่";
$lang[tk]="ใบสั่งซื้อ";
$lang[username]="ชื่อผู้ใช้";
$lang[statues]="สถานะ";
$lang[urgency]="ความสำคัญ";
$lang[reply]="ตอบกลับ";
$lang[add_server_tip]="กรุณาเพิ่ม Server";
$lang[basci_setting]="ตั้งค่าเบื้องต้น";
$lang[tos_setting]="ตั้งค่าข้อกำหนดการให้บริการ";
$lang[open_support_center]="เปิดศูนย์บริการ:";
$lang[not_limiit_ip]="จำกัด การลงทะเบียนต่อIP:";
$lang[admin_uid]="แอดมินUID :";
$lang[im]="MSN:";
$lang[email]="Email:";
$lang[phone]="Phone:";
$lang[admin_act]="เมนูผู้ดูแลระบบ";
$lang[admin_home]="หน้าหลักการจัดการระบบ";
$lang[basic_cfg]="ตั้งค่าเบื้องต้น";
$lang[admin_user]="การจัดการผู้ใช้";
$lang[userstat]="สถิติผู้ใช้งาน";
$lang[admin_plan]="จัดการพื้นที่ในแพคเกจ";
$lang[admin_serv]="ตั้งค่า Server";
$lang[admin_announcement]="ตั้งค่าข่าวประกาศ";
$lang[admin_ticket]="การสั่งซื้อสนับสนุนบริการ";
$lang[admin_kb]="ตั้งค่าหมวดปัญหาและการแก้ไข";
$lang[admin_ni]="ปัญหาด้านระบบเคลือข่าย";
$lang[admin_act_other]="การดำเนินการอื่นๆ";
$lang[admin_cronjob]="Cronjob";
$lang[admin_cronjob_tip]="if(!confirm('You may don't do cron manual,because you can finish it via normal Http requst,\n wanna to see demo?')){alert('Cronjob window will bee open soon,please don't close it too early.');window.open('./plugin.php?id=host:host&page=cron');}else{window.open('http://www.fen.mu/viewthread.php?tid=2&extra=page%3D1')}";
$lang[admin_tools]="เครื่องมือ";
$lang[admin_free_notice]="คุณไม่ใช่สมาชิก VIP, สมัครสมาชิค VIP เพื่อรับสิทธิพิเศษได้ทันที";
$lang[admin_buy_vip]="สมัคร VIP";
$lang[no_tk_found]="ยังไม่มีใบสั่งงาน.";
$lang[admin_tk_close]="Close";
$lang[no_user_found]="ไม่มีผู้ใช้ในระบบ";
$lang[check_domain_p]="ตรวจสอบชื่อโดเมนที่ระบุ";
$lang[check_ads_p]="ตรวจสอบการจัดตำแหน่งโฆษณา";
$lang[check_aff]="ตรวจสอบเงื่อนไขโปรโมชั่น";
$lang[apply_date]="วันที่สมัคร";
$lang[used_days]="วันใช้งาน";
$lang[days]="วันที่";
$lang[detail]="รายละเอียด";
$lang[create]="เปิด";
$lang[refuse]="ปฏิเสธ";
$lang[suspend]="ระงับการใช้งาน";
$lang[unsuspend]="ยกเลิกระงับการใช้งาน";
$lang[terminate]="ลบพื้นที่";
$lang[delete_]="ลบผู้ใช้";
$lang[see_detail]="รายละเอียดผู้ใช้";
$lang[back]="ย้อนกลับ";
$lang[pass]="รหัสผ่าน:";
$lang[aff_from]="แนะนำ:";
$lang[applied_stat]="จำนวนผู้สมัคร :";
$lang[sctived_stat]="จำนวนผู้ใช้งาน :";
$lang[inactive_stat]="ผู้ใช้ที่ยังไม่ได้เปิดใช้งาน :";
$lang[inactive_stat1]="ผู้ใช้ที่ถูกระงับการใช้งาน :";
$lang[aff_center]="ระบบต่ออายุ :";
$lang[copy_click]="คลิ๊กเพื่อทำการ Copy Link";
$lang[no_records]="ยังไม่มีการส่งเสริมการขาย ";
$lang[aff_history]="บันทึกรายการส่งเสริมการขาย";
$lang[announcements]="ประกาศ ";
$lang[announcements_none]="ไม่มีข่าวประกาศ ";
$lang[app_form]="แบบฟอร์มการสมัครพื้นที่เว็บ ";
$lang[fees]="ค่าใช้จ่ายในการเปิดใช้งาน:";
$lang[fees_1]="ชำระรายเดือน(30วัน)------บาท #monprice#  ";
$lang[fees_2]="ชำระราย6เดือน(182วัน)--บาท #sixmonprice#  ";
$lang[fees_3]="ชำระรายปี(365วัน)----บาท #yrprice#  ";
$lang[fees_4]="ชำระราย2ปี(731วัน)--บาท #twoyrprice#  ";
$lang[acc_username]="ชื่อผู้ใช้:";
$lang[acc_password]="รหัสผ่าน:";
$lang[acc_repass]="ใส่รหัสผ่านอีกครั้ง:";
$lang[agree]=" ยอมรับข้อตกลงของ<a href=\"#indexname#\">#bbname#</a>และ<a href=\"plugin.php?id=host:host&page=tos\">เงื่อนไขการให้บริการ</a>? ";
$lang[ip_tip]=" IPของคุณ #ip# เคยลงทะเบียนมาก่อนแล้ว,กรุณากลับมาใหม่ภายหลัง";
$lang[renew]="ต่ออายุ:";
$lang[renew_1]="ต่ออายุ1เดือน:";
$lang[renew_2]="ต่ออายุ6เดือน:";
$lang[renew_3]="ต่ออายุ1ปี:";
$lang[renew_4]="ต่ออายุ2ปี:";
$lang[contact_us]="ติดต่อเรา";
$lang[im_api]="<a title=\"ติดต่อทาง MSN #value# \" href=\"javascript:window.open('msnim:add?contact=#value#');\">#value#</a> ";
$lang[email_api]="ติดต่อทาง E-Mail #value# ";
$lang[no_phone]="เราไม่ได้ให้คำปรึกษาทางโทรศัพท์.<br/>โปรดเลือกติดต่อเราทางอื่น. ";
$lang[index_myhost]="ส่วนบริการลูกค้า";
$lang[index_myhost_des]="คลิ๊กที่นี่เพื่อดูข้อมูลการใช้บริการของคุณ";
$lang[index_announcements]="ข่าวประกาศ";
$lang[index_announcements_des]="ดูข่าวประกาศล่าสุด";
$lang[index_kb]="ปัญหาที่พบและการแก้ไข";
$lang[index_kb_des]="คลิ๊กที่นี่เพื่อดูปัญหาที่พบบ่อยและการแก้ไข";
$lang[index_order]="การสั่งซื้อบริการโฮสติ้ง";
$lang[index_order_des]="ดูรายละเอียดแพคเกจต่างๆของเรา";
$lang[index_servinfo]="ข้อมูลเซิร์ฟเวอร์";
$lang[index_servinfo_des]="ดูสถานะเซิร์ฟเวอร์ของเว็บไซต์นี้";
$lang[index_tickets]="ศูนย์บริการลูกค้า";
$lang[index_tickets_des]="ติดตามการแก้ปัญหา/การสนับสนุนบริการได้ที่นี่";
$lang[index_aff]="พันธมิตรธุรกิจ";
$lang[index_aff_des]="ส่งรายการส่งเสริมการขายหรือแนะนำบริการของเรา";
$lang[index_tos]="เงื่อนไขการให้บริการ";
$lang[index_tos_des]="คลิ๊กเพื่ออ่านเงื่อนไขการให้บริการ";
$lang[index_contactus]="ติดต่อผู้ให้บริการ";
$lang[index_contactus_des]="หากคุณมีข้อสงสัยใด ๆ โปรดติดต่อเราที่นี่";
$lang[index_networkissues]="แจ้งการปรับปรุง";
$lang[index_networkissues_des]="ดูสถานะปัจจุบันของระบบเขื่อข่ายและ Server";
$lang[no_faq]="มีไม่มีคำถามที่พบบ่อย";
$lang[myhost_disk_usage]="พื้นที่ที่ถูกใช้งาน:";
$lang[myhost_apr]="ยืนยันการทำงาน:";
$lang[myhost_serv_ip]="Server IP:";
$lang[myhost_ns]="DNS:";
$lang[myhost_cp]="ControlPanel:";
$lang[myhost_ads]="รหัสโฆษณา:";
$lang[plan_under_cons]="แพคเกจพื้นที่เว็บอยู่ระหว่างการเตรียมความพร้อม";
$lang[used]="จำนวนผู้ใช้งาน ";
$lang[max_]="จำกัดจำนวน";
$lang[traffic]="อัตรารับส่งข้อมูล :";
$lang[domains_p]="จำนวนโดเมน :";
$lang[price]="ราคา :";
$lang[free]="ฟรี";
$lang[is_ad]="ต้องวางโฆษณา :";
$lang[none_serv_watched]="ไม่พบ Server ในระบบ";
$lang[m_act]="เมนูสมาชิก:";
$lang[dzwhm_home]="หน้าหลัก DzWHM";
$lang[purch_cash]="เติมเงิน";
$lang[tk_sub]="ส่งคำสั่งงาน";
$lang[a_act]="จัดการระบบ";
$lang[u_info]="ข้อมูลผู้ใช้";
$lang[u_info_cash_1]="บัญชีของท่านมีเงินในระบบ";
$lang[u_info_cash_2]="บาท";
$lang[add_tk]="ส่งใบสั่งงาน";
$lang[u_info_purc]="เติมเงินเข้าระบบ";
$lang[dzwhm_sys_info]="ระบบจัดการเว็บโฮสติ้ง DzWHM";
$lang[dzwhm_sys_info_copy]="Powered by <a href='http://www.fen.mu'>DzWHM v2.01 </a>";
$lang[tk_s]="ดูใบสั่งงาน";
$lang[none_tk]="คุณยังไม่ได้ส่งใบสั่งงาน";
$lang[detail]="ดูรายละเอียด";
$lang[my_host]="พื้นที่ของฉัน";
$lang[default_]="Default";
$lang[mailto]="email";
$lang[forced_manual]="พื้นที่ฟรีไม่สามารถสร้างพื้นที่แบบอัตโนมัติได้!";
$lang[forced_auto]="พื้นที่แบบชำระค่าบริการสามารถสร้างพืีนที่ได้โดยอัตโนมัติ!";
$lang[refresh]="Refresh";
$lang[networkissues_none]="ยังไม่มีประกาศแจ้งปัญหาระบบเครือข่าย.";
$lang[add_networkissues]="เพิ่มการแจ้งประกาศปัญหาด้านระบบเครือข่าย";
$lang[config_networkissues]="ตั้งค่าปัญหาด้านระบบเครือข่าย";

//Cron

$lang[cron_remind_mail_title]="<urgency>แจ้งการต่ออายุพื้นที่โฮสติ้ง";
$lang[cron_remind_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."เรียนผู้ใช้บริการ,"."<br><br>"
						."ขอบคุณที่วางใจใช้บริการของเรา,ขณะนี้ พื้นที่โฮสติ้งของท่านจะถึงกำหนดหมดอายุใน 3 วันนี้."."<br><br>"
						."<b>เพื่อการใช้งานที่ต่อเนื่อง กรุณาต่ออายุก่อนถึงกำหนด.</b>"."<br>"
						."ซึ่งหากหมดอายุเกิน 15 วัน พื้นที่ของท่านจะถูกลบออกจากระบบโดยถาวร,"."<br>"
						."ขอแสดงความนับถือ,"."<br>#bbname#<br>"										
						."ผู้ให้บรการโฮสติ้ง: #siteurl# <br>";

$lang[cron_del_mail_title]="<urgency>แจ้งพื้นที่โฮสติ้งหมดอายุ";
$lang[cron_del_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."เรียนผู้ใช้บริการ,"."<br><br>"
						."ขอบคุณที่วางใจใช้บริการของเรา,ขณะนี้ พื้นที่โฮสติ้งของท่านได้หมดอายุการใช้งานแล้ว หลังจากที่ท่านได้รับเมล์ฉบับนี้."."<br><br>"
						."<b>หากท่านต้อการใช้งานพื่นที่โฮสติ้ง กรุณาต่ออายุทันที.</b>"."<br>"
						."ซึ่งหากหมดอายุเกิน 15 วัน พื้นที่ของท่านจะถูกลบออกจากระบบโดยถาวร,"."<br>"
						."ขอแสดงความนับถือ,"."<br>#bbname]#<br>"										
						."ผู้ให้บรการโฮสติ้ง: #siteurl# <br>";

$lang[cron_deleted_mail_title]="<urgency>แจ้งพื้นที่โฮสติ้งถูกลบออกจากระบบ";
$lang[cron_deleted_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."เรียนผู้ใช้บริการ,"."<br><br>"
						."ขอบคุณที่วางใจใช้บริการของเรา,ขณะนี้ พื้นที่โฮสติ้งของท่านได้ถูกลบออกจากระบบแล้ว หลังจากที่ท่านได้รับเมล์ฉบับนี้."."<br><br>"
						."<b>โดยระบบได้ทำการลบข้อมูลและพื้นที่ต่างๆของท่านทั้งหมดเรียบร้อยแล้ว.</b>"."<br>"
						."เราหวังว่าโอกาสหน้าท่านจะกลับมาใช้บริการของเราอีกครั้ง"."<br>"
						."ขอแสดงความนับถือ,"."<br>#bbname#<br>"										
						."ผู้ให้บริการโฮสติ้ง: #siteurl# <br>";
?>
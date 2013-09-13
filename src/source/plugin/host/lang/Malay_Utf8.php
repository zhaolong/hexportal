<?php
if(!defined('IN_DISCUZ')){exit ('Access Denied');}
$lang = array();
$lang[undefined_action]="tindakan Undefined, sila kembali.";
$lang[money]="MYR";
$lang[mail_subject]="Beritahu Akaun Hosting";
$lang[mail_content_apply_page]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
				."Dear pengguna,"."<br><br>"
				."Thank you for choosing our service,your hosting is active and ready for using now,the detail information is below,please store them carefull."."<br><br>"
				."<b>Maklumat Akaun Hosting:</b>"."<br>"
				."Rencana: #plan# <br>"
				."Username: #username# <br>"
				."Kata laluan: #password# <br>"
				."Domain: "."<a href='http://$_POST[domain]'> #domain# </a>"."<br><br>"
				."<b>Information Server</b>"."<br>"
				."Server: #pelayan# <br>"
				."Server IP: #ip# <br>"
				."Control Panel: "."<a href='#cp#'>#cp#</a>"."<br><br>"
				."<b>FTP Detail:</b>"."<br>"
				."FTP Server: #ip# <br>"
				."Username: #username# <br>"
				."Kata laluan: #password# <br><br>"
				."<b>MySQL Database</b>"."<br>"
				."Sila membuat database MySQL melalui control panel."."<br><br>"
				."<b>Iklan Paksa kod:</b> "."<br>"
				."Sila masukkan #bbname# "."<a href='http://#url#/plugin.php?id=host:host&page=myhost'>My Akaun Hosting</a>"." Lihat."."<br><br><br>"
				."-------------------------------------------------------"."<br>"
				."Best Regards,"."<br>"
				." #bbname# <br>"										
				."Laman web: #siteurl# <br>";
$lang[no_host]="Maaf. Tidak ada hosting bagi anda. Sekarang akan mengalihkan anda ke Laman rencana";
$lang[hosted]="Anda telah melaksanakan sebuah hosting, sehingga anda mungkin tidak berlaku hosting lagi!";
$lang[no_plan]="Rencana tidak ada!";
$lang[reseller]="Reseller";
$lang[noemalhosting]="Hosting";
$lang[stopped]="Suspend aplikasi";
$lang[fill_all]="Sila mengisi semua item!!";
$lang[pass_not_match]="Masuk Butiran salah. Sila cuba lagi.";
$lang[must_agree_tos]="Anda harus setuju dengan TOS kami sehingga anda boleh menggunakan hosting kami!";
$lang[ip_limited]="Anda menggunakan IP yang telah melaksanakan sebuah hosting, dan anda mungkin tidak berlaku lagi!";
$lang[invalid_email]="Format e-mel tidak sah!";
$lang[cash_not_enough_1]="wang anda tidak cukup untuk membayar satu bulan!";
$lang[cash_not_enough_2]="wang anda tidak cukup untuk membayar selama enam bulan!";
$lang[cash_not_enough_3]="wang anda tidak cukup untuk membayar selama setahun!";
$lang[cash_not_enough_4]="wang anda tidak cukup untuk membayar selama dua tahun!";
$lang[no_hack_in]="Tolong jangan cuba untuk merampas kami.";
$lang[applied_successfully]="Guna berjaya!!";
$lang[applied_successfully_1]="Anda menerapkan perniagaan hosting untuk sebulan (30 hari), terima kasih telah memilih kami!";
$lang[applied_successfully_2]="Anda menerapkan perniagaan hosting untuk setengah tahun (182 hari), terima kasih telah memilih kami!";
$lang[applied_successfully_3]="Anda menerapkan perniagaan hosting untuk satu tahun (365 hari), terima kasih telah memilih kami!";
$lang[applied_successfully_4]="Anda menerapkan perniagaan hosting untuk dua tahun (731 hari), terima kasih telah memilih kami!";
$lang[wait_for_check]="Administrator akan menyemak aplikasi anda dan kemudian membuat akaun anda, sila tunggu tanpa bimbang.";
$lang[no_host_to_renewal]="Anda tidak mempunyai akaun hosting sehingga anda tidak memperbaharui.!";
$lang[free_no_renewal]="Anda tidak boleh mengemas kini untuk sebuah produk percuma.";
$lang[to_cash_1]="perpanjang bulan";
$lang[to_cash_1_notice]="Untuk memperbaharui sebulan, anda akan membayar wang untuk tindakan ini, dan mungkin tidak kembali, yakin dan terus?";
$lang[to_cash_2]="perpanjang setengah tahun";
$lang[to_cash_2_notice]="Untuk memperbaharui setengah tahun, anda akan membayar wang untuk tindakan ini, dan mungkin tidak kembali, yakin dan terus?";
$lang[to_cash_3]="perpanjang satu tahun";
$lang[to_cash_3_notice]="Untuk memperbaharui satu tahun, anda akan membayar wang untuk tindakan ini, dan mungkin tidak kembali, yakin dan terus?";
$lang[to_cash_4]="perpanjang dua tahun";
$lang[to_cash_4_notice]="Untuk memperbaharui dua tahun, anda akan membayar wang untuk tindakan ini, dan mungkin tidak kembali, yakin dan terus?";
$lang[cash_1_ok]="Anda mempunyai perpanjang 30 hari untuk akaun hosting anda, terima kasih telah memilih kami.";
$lang[cash_2_ok]="Anda telah mengemas kini 182 hari untuk akaun hosting anda, terima kasih telah memilih kami.";
$lang[cash_3_ok]="Anda telah mengemas kini 365 hari untuk akaun hosting anda, terima kasih telah memilih kami.";
$lang[cash_4_ok]="Anda telah mengemas kini 731 hari untuk akaun hosting anda, terima kasih telah memilih kami.";
$lang[domain_point_wrong]="Domain point salah";
$lang[domain_point_ok]="Domain point betul";
$lang[wait_for_check]="Tunggu ulasan pentadbir";
$lang[apply_fail]="gagal melaksanakan";
$lang[apply_active]="Siap untuk digunakan";
$lang[host_suspended]="bergantung";
$lang[host_terminated]="dihentikan";
$lang[no_forced_ads]="tidak perlu menempatkan iklan";
$lang[no_this_ticket]="Tiket tidak dijumpai!";
$lang[custom_reply]="pelanggan menjawab";
$lang[ticket_submit_ok]="Telah disampaikan Tiket!!";
$lang[accept_application]="Diterima";
$lang[auto_active]="auto";
$lang[manual_active]="manual";
$lang[no_tos]="TOS belum ditetapkan.";
$lang[support_not_open]="Sokongan pusat tidak membuka";
$lang[submit_ok]="Submitted!";
$lang[deleted]="Dihapuskan!";
$lang[updated]="Dikemaskini";
$lang[add_ok]="Ditambah!";
$lang[replied]="Menjawab!";
$lang[add_pelayan_notice]="Sila menambah pelayan pertama!";
$lang[wrong_old_pwd]="Salah lama kata laluan!";
$lang[email_sent_ok]="E-mel yang sudah dihantar ke semua orang";
$lang[admin_replied]="Admin menjawab";
$lang[tk_closed]="tertutup";
$lang[tk_closed_ok]="Tertutup tiket";
$lang[ads_not_placed]="Iklan tidak meletakkan dengan pengguna ini.";
$lang[ads_placed]="Iklan menempatkan benar dengan pengguna ini.";
$lang[no_ads_forced]="Pengguna ini tidak meletakkan iklan.";
$lang[Afiliasi_total]="Pengguna sudah mempromosikan:";
$lang[active_ok]="pengguna aktif";
$lang[refuse_ok]="menolak pengguna";
$lang[mail_ok]="Email dihantar.";
$lang[suspend_ok]="Pengguna Diblokir.";
$lang[unsuspend_ok]="Pengguna telah dibuka kembali.";
$lang[terminate_ok]="Dihentikan pengguna";
$lang[delete_ok]="Dihapuskan pengguna";
$lang[admin_panel]="Admin panel";
$lang[add_faq]="FAQ Baru";
$lang[config_faq]="Tatacara FAQ";
$lang[title]="Tajuk:";
$lang[title_]="Tajuk";
$lang[content]="isi:";
$lang[submit]="Submitted";
$lang[reset_]="Kembalikan";
$lang[time_]="Masa:";
$lang[add_notice]="Pengumuman Baru";
$lang[config_notice]="Pengumuman tatacara";
$lang[add_plan]="Baru rencana";
$lang[config_plan]="Rencana tatacara";
$lang[plan_name]="Rencana";
$lang[plan_s]="Server";
$lang[plan_space]="Disk:";
$lang[plan_traffic]="Traffic Bulanan:";
$lang[plan_subdomains]="Subdomain:";
$lang[plan_domains]="Domain:";
$lang[plan_ftp]="FTP akaun: ";
$lang[plan_mysql]="MySQL database:";
$lang[plan_mail]="Email akaun:";
$lang[plan_current_user]="Lancar pengguna :";
$lang[plan_limit]="Membatasi user :";
$lang[plan_mon_price]="bulan:";
$lang[plan_semi_anual_price]="semi-tahunan:";
$lang[plan_anual_price]="tahunan:";
$lang[plan_dou_anual_price]="dua tahun:";
$lang[plan_pelayan]="pelayan:";
$lang[plan_open]="buka register?:";
$lang[plan_auto]="auto buka?(hosting berbayar diperlukan):";
$lang[plan_reseller]="reseller?:";
$lang[plan_hide]="sembunyikan?:";
$lang[plan_ads_code]="kod iklan(Kosong maksud tidak perlu):";
$lang[add_pelayan]="Server baru";
$lang[config_pelayan]="Tetapan pelayan";
$lang[pelayan_name]="Server:";
$lang[ip_address]="IP address:";
$lang[ns_1]="DNS 1:";
$lang[ns_2]="DNS 2:";
$lang[control_panel]="ControlPanel :";
$lang[pelayan_location]="Lokasi pelayan:";
$lang[a_s_username]="Admin username:";
$lang[a_s_password]="Admin kata laluan:";
$lang[add_announcement]="Pengumuman Baru";
$lang[config_announcement]="Pengumuman tatacara";
$lang[action]="Operasi";
$lang[not_set_announcement]="Perhatikan belum ditetapkan.";
$lang[edit]="Sunting";
$lang[del]="memadam";
$lang[edit_expire_to]="Tukar tarikh jatuh tempo:";
$lang[expire_date]="Tarikh tamat";
$lang[welcom_to_admin_panel]="Selamat Datang ke panel admin bagi DzWHM";
$lang[welcom_tip]="Anda boleh menguruskan kebiasaan anda dan rencana";
$lang[ticket_stat]="Ada #tickets# tiket menunggu jawapan";
$lang[user_inactive_stat]="Ada #users# user untuk menyemak.";
$lang[dzwhm_official]="DzWHM kegiatan rasmi";
$lang[dzwhm_official_tip]="Baca kegiatan yang lebih.";
$lang[free_tip]="You are not VIP now,it only cost USD $20,come on and buy now!";
$lang[vip_tip]="Halo VIP, adakah masalah? Sila masuk forum VIP ke posting!";
$lang[faq_not_found]="Tidak ada FAQ lancar.";
$lang[mass_mail]="Mass Email";
$lang[mail_send]="menghantar";
$lang[back_notice_list]="Kembali ke senarai";
$lang[plz_add_plan]="menambah rencana pertama";
$lang[date_]="Tarikh";
$lang[tk]="tiket";
$lang[username]="Username";
$lang[statues]="Status";
$lang[urgency]="Urgensi";
$lang[reply]="Balas";
$lang[add_pelayan_tip]="menambah pelayan pertama!";
$lang[basci_setting]="Tetapan Asas";
$lang[tos_setting]="TOS tatacara";
$lang[open_support_center]="buka tiket:";
$lang[not_limiit_ip]="tidak menyekat IP:";
$lang[admin_uid]="Admin UID :";
$lang[im]="MSN:";
$lang[email]="Email:";
$lang[phone]="Phone:";
$lang[admin_act]="Operasi admin";
$lang[admin_home]="Rumah admin";
$lang[basic_cfg]="Asas";
$lang[admin_user]="Pengguna";
$lang[userstat]="Pengguna Statistik";
$lang[admin_plan]="Rencana";
$lang[admin_serv]="Pelayan";
$lang[admin_announcement]="Pengumuman";
$lang[admin_ticket]="Tiket";
$lang[admin_kb]="FAQ";
$lang[admin_ni]="Masalah network";
$lang[admin_act_other]="lain";
$lang[admin_cronjob]="Cronjob";
$lang[admin_cronjob_tip]="kalau(!confirm('Anda mungkin tidak melakukan manual cron, kerana anda boleh menyelesaikannya melalui requst Http biasa,\n ingin melihat demo?')){alert('Cronjob tetingkap akan terbuka nanti , jangan tertutup dekat early.');window.open('./plugin.php?id=host:host&page=cron');}else{window.open('http://www.fen.mu/viewthread.php?tid=2&extra=page%3D1')}";
$lang[admin_tools]="Alat";
$lang[admin_free_notice]="Anda bukan VIP , membeli USD sekarang hanya $ 20USD!";
$lang[admin_buy_vip]="beli VIP";
$lang[no_tk_found]="Tidak ada tiket.";
$lang[admin_tk_close]="Tutup";
$lang[no_user_found]="Tidak ada pengguna pada saat ini.";
$lang[check_domain_p]="Semak domain pointer";
$lang[check_ads_p]="Semak ads";
$lang[check_aff]="Semak Afiliasi";
$lang[apply_date]="Tarikh permohonan";
$lang[used_days]="Digunakan";
$lang[days]="tarikh";
$lang[detail]="detail";
$lang[create]="Buka";
$lang[refuse]="Menolak";
$lang[suspend]="Menangguhkan";
$lang[unsuspend]="Unsuspend";
$lang[terminate]="Menamatkan";
$lang[delete_]="Padam";
$lang[see_detail]="Pengguna detail";
$lang[back]="Kembali";
$lang[pass]="Kata laluan:";
$lang[aff_from]="Pengundang:";
$lang[applied_stat]="Diterapkan :";
$lang[sctived_stat]="Aktif :";
$lang[inactive_stat]="Tidak Aktif :";
$lang[inactive_stat]="Bergantung :";
$lang[aff_center]="Pusat Afiliasi";
$lang[copy_click]="Klik untuk menyalin";
$lang[no_records]="tidak ada promosi record";
$lang[aff_history]="Afilias nota";
$lang[announcements]="Pengumuman ";
$lang[announcements_none]="Tidak ada Pengumuman pada saat ini. ";
$lang[app_form]="borang aplikasi ";
$lang[fees]="Terbuka masa dan kos:";
$lang[fees_1]="bulan(30DAYS)------MYR #monprice#";
$lang[fees_2]="semi-tahun(182DAYS)--MYR #sixmonprice#";
$lang[fees_3]="tahun(365DAYS)----MYR #yrprice#";
$lang[fees_4]="dou-tahun(731DAYS)--MYR #twoyrprice#";
$lang[acc_username]="Akaun username:";
$lang[acc_password]="Akaun kata laluan:";
$lang[acc_repass]="Taip semula kata laluan:";
$lang[agree]=" Adakah anda bersetuju dengan <a href=\"#indexname#\">#bbname#</a>'s <a href=\"plugin.php?id=host:host&page=tos\">TOS</a>? ";
$lang[ip_tip]="IP anda #ip# telah direkodkan.";
$lang[renew]="perpanjang";
$lang[renew_1]="perpanjang bulan:";
$lang[renew_2]="perpanjang enam bulan:";
$lang[renew_3]="perpanjang satu tahun:";
$lang[renew_4]="perpanjang tduo tahun:";
$lang[contact_us]="Hubungi kami";
$lang[im_api]="#value#";
$lang[email_api]="Klik untuk kirim email ke #value#!";
$lang[no_phone]="Maaf, kami tidak menerima kenalan telefon.<br/>sila pilih yang lain. ";
$lang[index_myhost]="My Hosting";
$lang[index_myhost_des]="klik untuk melihat detail hosting anda";
$lang[index_announcements]="Pengumuman";
$lang[index_announcements_des]="lihat pengumuman terbaru";
$lang[index_kb]="Knowledge Base";
$lang[index_kb_des]="klik untuk melihat FAQ";
$lang[index_order]="Pesanan";
$lang[index_order_des]="membandingkan rencana kami hosting";
$lang[index_servinfo]="Maklumat pelayan";
$lang[index_servinfo_des]="klik untuk melihat status pelayan kami";
$lang[index_tickets]="Support Center";
$lang[index_tickets_des]="klik untuk melihat tiket anda";
$lang[index_aff]="Afiliasi";
$lang[index_aff_des]="Afiliasi our service";
$lang[index_tos]="Perjanjian Perkhidmatan";
$lang[index_tos_des]="klik untuk melihat tos";
$lang[index_contactus]="Hubungi Kami";
$lang[index_contactus_des]="Jika anda mempunyai sebarang soalan pra-jualan, sila hubungi kami.";
$lang[index_networkissues]="Masalah network";
$lang[index_networkissues_des]="Masalah rangkaian hari ini";
$lang[no_faq]="tidak ada FAQ pada saat ini.";
$lang[myhost_disk_usage]="Hosting penggunaan kapasiti:";
$lang[myhost_apr]="Statu:";
$lang[myhost_serv_ip]="Server IP:";
$lang[myhost_ns]="DNS Server:";
$lang[myhost_cp]="Control Panel:";
$lang[myhost_ads]="Ads kod:";
$lang[plan_under_cons]="Plans sedang dibina.";
$lang[used]="Jumlah penggunal ";
$lang[max_]="max pengguna";
$lang[traffic]="lalu lintas ";
$lang[domains_p]="dibenarkan domain :";
$lang[price]="harga ";
$lang[free]="percuma";
$lang[is_ad]="Iklan Paksa :";
$lang[none_serv_watched]="Tidak ada pelayan mengawasi.";
$lang[m_act]="Members untuk beroperasi";
$lang[dzwhm_home]="DzWHM home";
$lang[purch_cash]="Pembelian tunai";
$lang[tk_sub]="Hantar tiket";
$lang[a_act]="Admin operasi";
$lang[u_info]="Maklumat Pengguna";
$lang[u_info_cash_1]="Akaun anda ada MYR";
$lang[u_info_cash_2]="MYR";
$lang[add_tk]="hantar tiket";
$lang[u_info_purc]="tambah cash";
$lang[dzwhm_sys_info]="DzWHM Sistem maklumat";
$lang[dzwhm_sys_info_copy]="Powered by <a href='http://www.fen.mu'>DzWHM v2.01 </a>";
$lang[tk_s]="tiket saya";
$lang[none_tk]="Anda tidak menghantar tiket support";
$lang[detail]="lihat detail";
$lang[my_host]="My hoting";
$lang[default_]="Default";
$lang[mailto]="email";
$lang[forced_manual]="Hosting percuma tidak boleh membuat auto!";
$lang[forced_auto]="Hosting berbayar perlu membuat auto!";
$lang[refresh]="Menyegarkan";
$lang[networkissues_none]="Tidak network Isu pada saat ini.";
$lang[add_networkissues]="Masalah network";
$lang[config_networkissues]="network Isu Tetapan";

//Cron

$lang[cron_remind_mail_title]="<urgency>Hosting Akaun Beritahu Renew";
$lang[cron_remind_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."Terima kasih telah memilih perkhidmatan kami, Tapi Hosting akaun anda akan berakhir selepas 3 hari."."<br><br>"
						."<b>Sila memperbaharuinya pada waktunya.</b>"."<br>"
						."selepas tarikh jatuh tempoh selama 15 hari, anda akan dihapuskan arkib,"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."Our website: #siteurl# <br>";

$lang[cron_del_mail_title]="<urgency>Akaun Hosting kadaluarsa Beritahu";
$lang[cron_del_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."terima kasih telah memilih perkhidmatan kami, Tapi Hosting akaun anda telah berakhir apabila e-mel yang dihantar."."<br><br>"
						."<b>Please renew it in time.</b>"."<br>"
						."selepas tarikh jatuh tempoh selama 15 hari, anda akan dihapuskan arkib,"."<br>"
						."Best Regards,"."<br>#bbname]#<br>"										
						."Our website: #siteurl# <br>";

$lang[cron_deleted_mail_title]="<urgency>Akaun Hosting Beritahu Padam";
$lang[cron_deleted_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."Dear custom,"."<br><br>"
						."Terima kasih telah memilih perkhidmatan kami, Tapi Hosting akaun anda telah dihapuskan apabila e-mel yang dihantar."."<br><br>"
						."<b>Arkib anda di hosting telah dihapuskan.</b>"."<br>"
						."Kami berharap anda memilih perkhidmatan kami lagi"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."Our website: #siteurl# <br>";
?>
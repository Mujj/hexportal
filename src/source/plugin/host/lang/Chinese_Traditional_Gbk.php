<?php
if(!defined('IN_DISCUZ')){exit ('Access Denied');}
$lang = array();
$lang[undefined_action]="δ���x������Ո���ء�"; 
$lang[money]="RMB"; 
$lang[mail_subject]="�W퓼Ĵ�֪ͨ"; 
$lang[mail_content_apply_page]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."�H�۵��Ñ���"."<br><br>" 
."���x�w���x���҂��ľWվ���g�� 
�ա����Ŀ��g�ѽ��_ͨ�������������~���Y�ϣ�ՈС�ı��ܡ� "."<br> 
<br>" 
."<b>�Wվ���g�~���Y��</b>"."<br>" 
."����Ӌ���� #plan# <br>" 
."�Ñ����� #username# <br>" 
."�ܴa�� #password# <br>" 
."������ "."<a 
href='http://$_POST[domain]'> #domain# </a>"."<br><br>" 
."<b>�ŷ���ӍϢ</b>"."<br>" 
."�ŷ������� #server# <br>" 
."�ŷ��� IP�� #ip# <br>" 
."�Wվ����̨�� "."<a 
href='#cp#'>#cp#</a>"."<br><br>" 
."<b>FTP �Y��</b>"."<br>" 
."FTP �ŷ����� #ip# <br>" 
."�Ñ����� #username# <br>" 
."�ܴa�� #password# <br><br>" 
."<b>MySQL �Y�ώ�</b>"."<br>" 
."Ո�M��Wվվ������̨���� MySQL 
�Y�ώ졣 "."<br><br>" 
."<b>�V��a</b> "."<br>" 
."Ո�� #bbname# ��"."<a 
href='http://#url#/plugin.php?id=host:host&page=myhost'>�ҵľWվ
���g</a>"."�鿴�� "."<br><br><br>" 
."------------------------------- 
------------------------"."<br>" 
."Best Regards,"."<br>" 
." #bbname# <br>" 
."�Wվ�� #siteurl# <br>"; 
$lang[no_host]="��δ��Ո���g,�F���D��Wվ���gӋ��퓡�"; 
$lang[hosted]="������Ո���g���������}��Ո!"; 
$lang[no_plan]="Ӌ��������!"; 
$lang[reseller]="���N���g"; 
$lang[noemalhosting]="�Wվ���g"; 
$lang[stopped]="��ͣ��Ո"; 
$lang[fill_all]="Ո������Ŀ!"; 
$lang[pass_not_match]="�ɴ�ݔ����ܴa��ͬ!"; 
$lang[must_agree_tos]="����ͬ�Ȿվ�ķ��՗l��!"; 
$lang[ip_limited]="�w�µ�IP������Ո�^!"; 
$lang[invalid_email]="�oЧ��Email��ʽ!"; 
$lang[cash_not_enough_1]="�w��RMB�����¸���Ո��ֵ��!"; 
$lang[cash_not_enough_2]="�w��RMB������긶��Ո��ֵ����!"; 
$lang[cash_not_enough_3]="�w��RMB�����긶��Ո��ֵ����"; 
$lang[cash_not_enough_4]="�w��RMB������긶��Ո��ֵ����"; 
$lang[no_hack_in]="Ո��Ҫ�Lԇ�@�^�^�V��ȥ��ֵ�ɣ���~"; 
$lang[applied_successfully]="��Ո�ɹ�!"; 
$lang[applied_successfully_1]="�w���ѳɹ���Ոһ���£�30�죩�̘I�� 
�g�����x��֧Ԯ�҂��ķ��ա� "; 
$lang[applied_successfully_2]="�w���ѳɹ���Ո���꣨182�죩�̘I�� 
�g�����x��֧Ԯ�҂��ķ��ա� "; 
$lang[applied_successfully_3]="�w���ѳɹ���Ոһ�꣨365�죩�̘I�� 
�g�����x��֧Ԯ�҂��ķ��ա� "; 
$lang[applied_successfully_4]="�w���ѳɹ���Ոһ�꣨731�죩�̘I�� 
�g�����x��֧Ԯ�҂��ķ��ա� "; 
$lang[wait_for_check]="����T���M���_ͨ�w�µ��~̖��Ո���ĵȺ�"; 
$lang[no_host_to_renewal]="�w����δ��Ո�Wվ���g,�����m�ڣ���!"; 
$lang[free_no_renewal]="���M�aƷ�����m��"; 
$lang[to_cash_1]="��Ҫ����һ����"; 
$lang[to_cash_1_notice]="���m��һ���£����������������X�Ż�e��, 
��Ȼ���M�᲻�����˿�ģ��^�m�N�� "; 
$lang[to_cash_2]="��Ҫ���ڰ���"; 
$lang[to_cash_2_notice]="���m�ڰ��꣬���������������X�Ż�e��,�� 
Ȼ���M�᲻�����˿�ģ��^�m�N�� "; 
$lang[to_cash_3]="��Ҫ����һ��"; 
$lang[to_cash_3_notice]="���m��һ�꣬���������������X�Ż�e��,�� 
Ȼ���M�᲻�����˿�ģ��^�m�N�� "; 
$lang[to_cash_4]="��Ҫ���ڃ���"; 
$lang[to_cash_4_notice]="���m�ڃ��꣬���������������X�Ż�e��,�� 
Ȼ���M�᲻�����˿�ģ��^�m�N�� "; 
$lang[cash_1_ok]="�w�¿��g�ѳɹ�����30�죡���x��֧Ԯ�҂��ķ��ա� 
"; 
$lang[cash_2_ok]="�w�¿��g�ѳɹ��m�ڰ��꣨182�죩�����x��֧Ԯ�҂� 
�ķ��ա� "; 
$lang[cash_3_ok]="�w�¿��g�ѳɹ��m��һ�꣨365�죩�����x��֧Ԯ�҂� 
�ķ��ա� "; 
$lang[cash_4_ok]="�w�¿��g�ѳɹ��m�ڃ��꣨731�죩�����x��֧Ԯ�҂� 
�ķ��ա� "; 
$lang[domain_point_wrong]="����ָ���e�`"; 
$lang[domain_point_ok]="����ָ�����_"; 
$lang[wait_for_check]="�ȴ�����T����"; 
$lang[apply_fail]="��Ոʧ��"; 
$lang[apply_active]="���g�ѿ�ʹ��"; 
$lang[host_suspended]="���g�ѱ����Y"; 
$lang[host_terminated]="���g�ѱ��h��"; 
$lang[no_forced_ads]="�w�²���Ҫ���ÏV��"; 
$lang[no_this_ticket]="�]�д�֧ԮTicket!"; 
$lang[custom_reply]="�͑��ظ�"; 
$lang[ticket_submit_ok]="���ύ֧ԮTicket!"; 
$lang[accept_application]="������Ո"; 
$lang[auto_active]="�Ԅ��_ͨ"; 
$lang[manual_active]="�ք��_ͨ"; 
$lang[no_tos]="��δ�O�÷��՗l�s"; 
$lang[support_not_open]="֧Ԯ������δ�_�š�"; 
$lang[submit_ok]="���ύ!"; 
$lang[deleted]="�фh��!"; 
$lang[updated]="�Ѹ���"; 
$lang[add_ok]="������!"; 
$lang[replied]="�ѻظ�!"; 
$lang[add_server_notice]="Ո������ŷ���!"; 
$lang[wrong_old_pwd]="ԭ�ܴa����e!"; 
$lang[email_sent_ok]="�ɹ��o�����Ñ��l����EMAIL"; 
$lang[admin_replied]="����T�ظ�"; 
$lang[tk_closed]="���P�]"; 
$lang[tk_closed_ok]="���P�]֧ԮƱ"; 
$lang[ads_not_placed]="�Ñ���δ���ÏV��"; 
$lang[ads_placed]="�Ñ������_���ÏV��"; 
$lang[no_ads_forced]="���Ñ��o����ÏV��"; 
$lang[affiliate_total]="ԓ�Ñ��ѽ��ƏV��"; 
$lang[active_ok]="���_ͨ�Ñ�"; 
$lang[refuse_ok]="�Ѿܽ^�Ñ�"; 
$lang[mail_ok]="����]�Ñ�"; 
$lang[suspend_ok]="�ѷ��i�Ñ�"; 
$lang[unsuspend_ok]="�ѽ���Ñ�"; 
$lang[terminate_ok]="�ѽKֹ�Ñ�"; 
$lang[delete_ok]="�фh���Ñ�"; 
$lang[admin_panel]="������̨"; 
$lang[add_faq]="����FAQ"; 
$lang[config_faq]="FAQ�O��"; 
$lang[title]="���}:"; 
$lang[title_]="���}"; 
$lang[content]="����:"; 
$lang[submit]="�ύ"; 
$lang[reset_]="���O"; 
$lang[time_]="�r�g:"; 
$lang[add_notice]="��������"; 
$lang[config_notice]="�����O��"; 
$lang[add_plan]="�����Wվ���g����"; 
$lang[config_plan]="�Wվ���g�����O��"; 
$lang[plan_name]="�Wվ���g����"; 
$lang[plan_s]="ʹ�õ��ŷ���"; 
$lang[plan_space]="���g����:"; 
$lang[plan_traffic]="ÿ������:"; 
$lang[plan_subdomains]="������:"; 
$lang[plan_domains]="����:"; 
$lang[plan_ftp]="Ftp �~̖: "; 
$lang[plan_mysql]="MySQL �Y�ώ�:"; 
$lang[plan_mail]="EMAIL �~̖:"; 
$lang[plan_current_user]="Ŀǰʹ���˔� :"; 
$lang[plan_limit]="�����Ñ��˔� :"; 
$lang[plan_mon_price]="�¸�:"; 
$lang[plan_semi_anual_price]="���긶:"; 
$lang[plan_anual_price]="�긶:"; 
$lang[plan_dou_anual_price]="���긶:"; 
$lang[plan_server]="�ŷ���:"; 
$lang[plan_open]="�_����Ո?:"; 
$lang[plan_auto]="�Ԅ��_ͨ?(���M���g���x��):"; 
$lang[plan_reseller]="���N?:"; 
$lang[plan_hide]="�[��?:"; 
$lang[plan_ads_code]="�V����a(���Մt����Ҫ):"; 
$lang[add_server]="�����ŷ���"; 
$lang[config_server]="�ŷ����O��"; 
$lang[server_name]="�ŷ������Q:"; 
$lang[ip_address]="IP ��ַ:"; 
$lang[ns_1]="DNS���� 1:"; 
$lang[ns_2]="DNS���� 2:"; 
$lang[control_panel]="������� :"; 
$lang[server_location]="�ŷ���λ��:"; 
$lang[a_s_username]="��̨����~̖:"; 
$lang[a_s_password]="��̨����ܴa:"; 
$lang[add_announcement]="��������"; 
$lang[config_announcement]="�����O��"; 
$lang[action]="����"; 
$lang[not_set_announcement]="��δ�O�����档"; 
$lang[edit]="��݋"; 
$lang[del]="�h��"; 
$lang[edit_expire_to]="�޸��^�����ڞ飨�޸������г��룩"; 
$lang[expire_date]="�^����"; 
$lang[welcom_to_admin_panel]="�gӭ�M��DzWHM������̨"; 
$lang[welcom_tip]="����̨����Թ�������Ñ����ŷ����;Wվ���g���� 
�ȵȡ� "; 
$lang[ticket_stat]="����#tickets# ���ȴ��ظ���֧ԮƱ��"; 
$lang[user_inactive_stat]="����#users# λ�ȴ�������Ñ���"; 
$lang[dzwhm_official]="DzWHM�ٷ��ӑB"; 
$lang[dzwhm_official_tip]="��x���ࡣ"; 
$lang[free_tip]="��߀�����̘I�ڙ��Ñ����F��ُ�I�̘I�ڙ���݃HҪ�� 
���100�����R�ϓ�ُ�ɣ� "; 
$lang[vip_tip]="���ã����F���̘I�Ñ�.���ʹ���^�����������},�gӭ 
�M���̘I�Ñ􌣰�l���� "; 
$lang[faq_not_found]="��δ�O��FAQ��"; 
$lang[mass_mail]="EmailȺ�l"; 
$lang[mail_send]="�l��"; 
$lang[back_notice_list]="���ع����б�"; 
$lang[plz_add_plan]="Ո�����Wվ���g������"; 
$lang[date_]="����"; 
$lang[tk]="֧ԮƱ"; 
$lang[username]="�Ñ���"; 
$lang[statues]="��B"; 
$lang[urgency]="�o���̶�"; 
$lang[reply]="�ظ�"; 
$lang[add_server_tip]="Ո�������ŷ���"; 
$lang[basci_setting]="�����O��"; 
$lang[tos_setting]="���՗l�s�O��"; 
$lang[open_support_center]="�_��֧Ԯ����:"; 
$lang[not_limiit_ip]="���SIP���}�]��:"; 
$lang[admin_uid]="����TUID :"; 
$lang[im]="QQ/TM:"; 
$lang[email]="Email:"; 
$lang[phone]="Phone:"; 
$lang[admin_act]="����T����"; 
$lang[admin_home]="��̨���"; 
$lang[basic_cfg]="�����O��"; 
$lang[admin_user]="�����Ñ�"; 
$lang[userstat]="�Ñ��yӋ"; 
$lang[admin_plan]="���g��������"; 
$lang[admin_serv]="�ŷ����O��"; 
$lang[admin_announcement]="�����O��"; 
$lang[admin_ticket]="֧ԮƱ�O��"; 
$lang[admin_kb]="֪�R���O��"; 
$lang[admin_act_other]="��������"; 
$lang[admin_cronjob]="CRONJOB���I(�����Ԅ�)"; 
$lang[admin_cronjob_tip]="if(!confirm('�F��CRON�ѽ������ɳ�ҎHTTP 
GETՈ�������ˡ� \n�@��ζ����������ȫ�����˹�������^�ڵĿ��g�ˣ� 
\n�Ƿ�Ҫ�鿴ȫ�Ԅ�CRON�̳̣� ')){alert('�������_���IՈ�󴰿ڣ�Ո�� 
Ҫ�^���P�]����������һ��������P 
�]�� ');window.open('./plugin.php? 
id=host:host&page=cron');}else{window.open('http://www.fen.mu/vie
wthread.php?tid=2&extra=page%3D1')}"; 
$lang[admin_tools]="�z�鹤��"; 
$lang[admin_free_notice]="��߀�����̘I�ڙ��Ñ����F��ُ�I�̘I�ڙ� 
��݃HҪ�����100�����R�ώ����M���̘I�ڙ�ُ�I���ģ� "; 
$lang[admin_buy_vip]="ُ�I�̘I�ڙ�"; 
$lang[no_tk_found]="Ŀǰ�]���κ�֧ԮƱ��"; 
$lang[admin_tk_close]="�P�]"; 
$lang[no_user_found]="Ŀǰ�]���κ��Ñ�"; 
$lang[check_domain_p]="�z������ָ��"; 
$lang[check_ads_p]="�z��V�����"; 
$lang[check_aff]="�z���ƏV��r"; 
$lang[apply_date]="��Ո����"; 
$lang[used_days]="ʹ���씵"; 
$lang[days]="��"; 
$lang[detail]="Ԕ��"; 
$lang[create]="�_ͨ"; 
$lang[refuse]="�ܽ^"; 
$lang[suspend]="���Y"; 
$lang[unsuspend]="���"; 
$lang[terminate]="�h�����g"; 
$lang[delete_]="�h���Ñ�"; 
$lang[see_detail]="�Ñ�Ԕ���Y��"; 
$lang[back]="����"; 
$lang[pass]="�ܴa:"; 
$lang[aff_from]="���]��:"; 
$lang[applied_stat]="��Ո�˔� :"; 
$lang[sctived_stat]="���_ͨ�Ñ� :"; 
$lang[inactive_stat]="δ�_ͨ�Ñ� :"; 
$lang[inactive_stat]="�ѷ��i�Ñ� :"; 
$lang[aff_center]="�ƏV����"; 
$lang[copy_click]="�c�ˏ���朽�"; 
$lang[no_records]="�]���κ��ƏVӛ䛡� "; 
$lang[aff_history]="�ƏVӛ�"; 
$lang[announcements]="���¹��� "; 
$lang[announcements_none]="Ŀǰ�]���κι��档 "; 
$lang[app_form]="�Wվ���g��Ո��� "; 
$lang[fees]="�_ͨ�r�g���M��:"; 
$lang[fees_1]="�¸�(30��)------RMB #monprice# Ԫ"; 
$lang[fees_2]="���긶(182��)--RMB #sixmonprice# Ԫ"; 
$lang[fees_3]="�긶(365��)----RMB #yrprice# Ԫ"; 
$lang[fees_4]="���긶(731��)--RMB #twoyrprice# Ԫ"; 
$lang[acc_username]="���g�~̖���Q:"; 
$lang[acc_password]="���g�~̖�ܴa:"; 
$lang[acc_repass]="����ݔ���ܴa:"; 
$lang[agree]=" ���Ƿ�ͬ��<a href=\"#indexname#\">#bbname#</a>�� 
<a href=\"plugin.php?id=host:host&page=tos\">�ķ��՗l�s</a>? "; 
$lang[ip_tip]=" ���IP��ַ#ip# �ѱ�ӛ��ڰ���Ո�����Ԑۡ�"; 
$lang[renew]="�m��"; 
$lang[renew_1]="����һ����:"; 
$lang[renew_2]="����������:"; 
$lang[renew_3]="����һ��:"; 
$lang[renew_4]="���ڃ���:"; 
$lang[contact_us]="�M�҂�"; 
$lang[im_api]="<a title=\"�c���@�e�oQQ #value# �l��Ϣ�� \" 
href=\"javascript:window.open('tencent://message/?uin= 
#value#&Site=DzDzWHM&Menu=yes');\"><img 
src=\"http://wpa.qq.com/pa?p=1:#value#:6\"></a> "; 
$lang[email_api]="�c���@�e�o#value# �l���Ã���"; 
$lang[no_phone]="�������҂����ṩ�Ԓ�Jԃ.<br/>Ո�x�������M�� 
ʽ�M�҂�. "; 
$lang[index_myhost]="�ҵľWվ���g"; 
$lang[index_myhost_des]="�c�˲鿴���Ŀ��g�Y��"; 
$lang[index_announcements]="���¹���"; 
$lang[index_announcements_des]="�鿴���µ���Ϣ�͹���"; 
$lang[index_kb]="֪�R��"; 
$lang[index_kb_des]="�c�˲鿴��վ��FAQ"; 
$lang[index_order]="ӆُ���g"; 
$lang[index_order_des]="�g�[��վ�ľWվ���gӋ��"; 
$lang[index_servinfo]="�ŷ���ӍϢ"; 
$lang[index_servinfo_des]="�鿴��վ���ŷ�����B"; 
$lang[index_tickets]="֧Ԯ����"; 
$lang[index_tickets_des]="�c�˲鿴�w�µ�֧ԮTicket"; 
$lang[index_aff]="�Ñ��ƏV"; 
$lang[index_aff_des]="�ƏV�҂��ķ��սo������"; 
$lang[index_tos]="���՗l�s"; 
$lang[index_tos_des]="�c�˲鿴���՗l�s"; 
$lang[index_contactus]="��ǰ�Jԃ"; 
$lang[index_contactus_des]="������κ���ǰ���}Ո���@��ϵ�҂�"; 
$lang[index_networkissues]="�W·���}��ʾ"; 
$lang[index_networkissues_des]="�鿴�F�ڵĻ��ߌ����A�ڵľW·���P 
�¼�"; 
$lang[no_faq]="Ŀǰ�]���κ�FAQ��"; 
$lang[myhost_disk_usage]="���gʹ����r:"; 
$lang[myhost_apr]="�����M��:"; 
$lang[myhost_serv_ip]="�ŷ��� IP:"; 
$lang[myhost_ns]="�����ŷ���:"; 
$lang[myhost_cp]="�Wվ�������:"; 
$lang[myhost_ads]="�V����a:"; 
$lang[myhost_ns]="�����ŷ���:"; 
$lang[plan_under_cons]="���ڻI��Wվ���gӋ����"; 
$lang[used]="�Ñ��˔� "; 
$lang[max_]="����"; 
$lang[traffic]="�Wվ���� ��"; 
$lang[domains_p]="�ɽ������� :"; 
$lang[price]="�r�� ��"; 
$lang[free]="��ȫ���M"; 
$lang[is_ad]="����ÏV�� :"; 
$lang[none_serv_watched]="�]���ŷ����ڱO�����Ρ�"; 
$lang[m_act]="���T����"; 
$lang[dzwhm_home]="DzWHM���"; 
$lang[purch_cash]="��ֵRMB"; 
$lang[tk_sub]="�ύ֧ԮƱ"; 
$lang[a_act]="����T����"; 
$lang[u_info]="�Ñ���Ϣ"; 
$lang[u_info_cash_1]="���~����RMB"; 
$lang[u_info_cash_2]="Ԫ"; 
$lang[add_tk]="�ύticket"; 
$lang[u_info_purc]="��ֵRMB"; 
$lang[dzwhm_sys_info]="DzWHMϵ�y��Ϣ"; 
$lang[dzwhm_sys_info_copy]="Powered by <a 
href='http://www.fen.mu'>DzWHM v2.01 </a>"; 
$lang[tk_s]="�鿴ticket"; 
$lang[none_tk]="�w�]���ύ֧ԮƱ��"; 
$lang[detail]="�鿴"; 
$lang[my_host]="�ҵĿ��g";
$lang[default_]="Ĭ�J";
$lang[mailto]="��Email";
$lang[forced_manual]="���M���g�����O�Þ��Ԅ��_ͨ��";
$lang[forced_auto]="���M���g�����O�Þ��ֹ��_ͨ��";
$lang[refresh]="ˢ��";
$lang[networkissues_none]="Ŀǰ�]�l�ѾW·���}��ʾ.";
$lang[add_networkissues]="��ӾW·���}";
$lang[config_networkissues]="�W·���}�O��";

//Cron

$lang[cron_remind_mail_title]="<��>�ռ��������ѣ�";
$lang[cron_remind_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."�װ����û���"."<br><br>"
						."��л����ѡ�����ǵ���վ�ռ�������Ŀռ佫�ڱ��ʼ�����֮��3���ڵ��ڡ�"."<br><br>"
						."<b>�뼰ʱ��ֵ���ѡ�</b>"."<br>"
						."����ѡ��������Ƿ���15���������վ�ᱻϵͳ����ɾ��,"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."���ǵ���վ�� #siteurl# <br>";

$lang[cron_del_mail_title]="<��>�ռ�ֹͣ���ѣ�";
$lang[cron_del_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."�װ����û���"."<br><br>"
						."��л����ѡ�����ǵ���վ�ռ�������Ŀռ佫�ڱ��ʼ�����֮ʱ���ڡ�"."<br><br>"
						."<b>�뼰ʱ��ֵ���ѡ�</b>"."<br>"
						."15���������վ�ᱻϵͳ����ɾ��,"."<br>"
						."Best Regards,"."<br>#bbname]#<br>"										
						."���ǵ���վ�� #siteurl]#<br>";

$lang[cron_deleted_mail_title]="<��>�ռ�ɾ�����ѣ�";
$lang[cron_deleted_mail_content]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
						."�װ����û���"."<br><br>"
						."��л����ѡ�����ǵ���վ�ռ�������Ŀռ����ڱ��ʼ�����֮ʱɾ����"."<br><br>"
						."<b>����վ�ĵ����Ѿ�ȫ������ʽ����</b>"."<br>"
						."��ӭ���ٴ�ѡ�����ǵķ���"."<br>"
						."Best Regards,"."<br>#bbname#<br>"										
						."���ǵ���վ�� #siteurl# <br>";


?>
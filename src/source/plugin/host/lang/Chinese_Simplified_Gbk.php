<?php 
if(!defined('IN_DISCUZ')){exit ('Access Denied');} 
$lang = array(); 
$lang[undefined_action]="δ����������뷵�ء�"; 
$lang[money]="RMB"; 
$lang[mail_subject]="��ҳ�Ĵ�֪ͨ"; 
$lang[mail_content_apply_page]="<img src='#url#/static/image/common/logo.gif' />"."<br><br>"
."�װ����û���"."<br><br>" 
."��л����ѡ�����ǵ���վ�ռ�������Ŀռ��Ѿ���ͨ�������������˻����ϣ���С�ı��ܡ� "
."<br><br>"
."<b>��վ�ռ��˻�����</b>"
."<br>" 
."����ƻ��� #plan# <br>" 
."�û����� #username# <br>" 
."���룺 #password# <br>" 
."������ "."<a href='http://$_POST[domain]'> #domain# </a>"."<br><br>" 
."<b>������ѶϢ</b>"."<br>" 
."���������� #server# <br>" 
."������ IP�� #ip# <br>" 
."��վ����̨�� "."<a href='#cp#'>#cp#</a>"."<br><br>" 
."<b>FTP ����</b>"."<br>" 
."FTP �������� #ip# <br>" 
."�û����� #username# <br>" 
."���룺 #password# <br><br>" 
."<b>MySQL ���ݿ�</b>"."<br>" 
."�������վվ���ƺ�̨���� MySQL���ݿ⡣ "."<br><br>" 
."<b>�����</b> "."<br>" 
."�뵽 #bbname# ��"."<a href='http://#url#/plugin.php?id=host:host&page=myhost'>�ҵ���վ�ռ�</a>"."�鿴�� "."<br><br><br>" 
."-------------------------------------------------------"."<br>" 
."Best Regards,"."<br>" 
." #bbname# <br>" 
."��վ�� #siteurl# <br>"; 
$lang[no_host]="��δ����ռ�,����ת����վ�ռ�ƻ�ҳ��"; 
$lang[hosted]="��������ռ䣬�����ظ�����!"; 
$lang[no_plan]="�ƻ�������!"; 
$lang[reseller]="�����ռ�"; 
$lang[noemalhosting]="��վ�ռ�"; 
$lang[stopped]="��ͣ����"; 
$lang[fill_all]="����д������Ŀ!"; 
$lang[pass_not_match]="������������벻ͬ!"; 
$lang[must_agree_tos]="�����ͬ�Ȿվ�ķ�������!"; 
$lang[ip_limited]="���µ�IP���������!"; 
$lang[invalid_email]="��Ч��Email��ʽ!"; 
$lang[cash_not_enough_1]="����RMB�����¸������ֵ��!"; 
$lang[cash_not_enough_2]="����RMB�������긶�����ֵ����!"; 
$lang[cash_not_enough_3]="����RMB�����긶�����ֵ����"; 
$lang[cash_not_enough_4]="����RMB�������긶�����ֵ����"; 
$lang[no_hack_in]="�벻Ҫ�����ƹ����ˣ�ȥ��ֵ�ɣ���~"; 
$lang[applied_successfully]="����ɹ�!"; 
$lang[applied_successfully_1]="�����ѳɹ�����һ���£�30�죩��ҵ�ռ䣡��л��֧�����ǵķ��� "; 
$lang[applied_successfully_2]="�����ѳɹ�������꣨182�죩��ҵ�ռ䣡��л��֧�����ǵķ��� "; 
$lang[applied_successfully_3]="�����ѳɹ�����һ�꣨365�죩��ҵ�ռ䣡��л��֧�����ǵķ��� "; 
$lang[applied_successfully_4]="�����ѳɹ�����һ�꣨731�죩��ҵ�ռ䣡��л��֧�����ǵķ��� "; 
$lang[wait_for_check]="����Ա�ᾡ�쿪ͨ���µ��˺ţ������ĵȺ�"; 
$lang[no_host_to_renewal]="������δ������վ�ռ�,�������ڣ���!"; 
$lang[free_no_renewal]="��Ѳ�Ʒ��������"; 
$lang[to_cash_1]="��Ҫ����һ����"; 
$lang[to_cash_1_notice]="Ϊ����һ���£�����������Ӧ��Ǯ�һ����,��Ȼ���Ѻ󲻿����˿�ģ�����ô�� "; 
$lang[to_cash_2]="��Ҫ���ڰ���"; 
$lang[to_cash_2_notice]="Ϊ���ڰ��꣬����������Ӧ��Ǯ�һ����,��Ȼ���Ѻ󲻿����˿�ģ�����ô�� "; 
$lang[to_cash_3]="��Ҫ����һ��"; 
$lang[to_cash_3_notice]="Ϊ����һ�꣬����������Ӧ��Ǯ�һ����,��Ȼ���Ѻ󲻿����˿�ģ�����ô�� "; 
$lang[to_cash_4]="��Ҫ��������"; 
$lang[to_cash_4_notice]="Ϊ�������꣬����������Ӧ��Ǯ�һ����,��Ȼ���Ѻ󲻿����˿�ģ�����ô�� "; 
$lang[cash_1_ok]="���¿ռ��ѳɹ�����30�죡��л��֧�����ǵķ���"; 
$lang[cash_2_ok]="���¿ռ��ѳɹ����ڰ��꣨182�죩����л��֧�����ǵķ��� "; 
$lang[cash_3_ok]="���¿ռ��ѳɹ�����һ�꣨365�죩����л��֧�����ǵķ��� "; 
$lang[cash_4_ok]="���¿ռ��ѳɹ��������꣨731�죩����л��֧�����ǵķ��� "; 
$lang[domain_point_wrong]="����ָ�����"; 
$lang[domain_point_ok]="����ָ����ȷ"; 
$lang[wait_for_check]="�ȴ�����Ա���"; 
$lang[apply_fail]="����ʧ��"; 
$lang[apply_active]="�ռ��ѿ�ʹ��"; 
$lang[host_suspended]="�ռ��ѱ�����"; 
$lang[host_terminated]="�ռ��ѱ�ɾ��"; 
$lang[no_forced_ads]="���²���Ҫ���ù��"; 
$lang[no_this_ticket]="û�д�֧��Ticket!"; 
$lang[custom_reply]="�ͻ��ظ�"; 
$lang[ticket_submit_ok]="���ύ֧��Ticket!"; 
$lang[accept_application]="��������"; 
$lang[auto_active]="�Զ���ͨ"; 
$lang[manual_active]="�ֶ���ͨ"; 
$lang[no_tos]="��δ���÷�����Լ"; 
$lang[support_not_open]="֧Ԯ������δ���š�"; 
$lang[submit_ok]="���ύ!"; 
$lang[deleted]="��ɾ��!"; 
$lang[updated]="�Ѹ���"; 
$lang[add_ok]="������!"; 
$lang[replied]="�ѻظ�!"; 
$lang[add_server_notice]="������ӷ�����!"; 
$lang[wrong_old_pwd]="ԭ������д����!"; 
$lang[email_sent_ok]="�ɹ��������û�������EMAIL"; 
$lang[admin_replied]="����Ա�ظ�"; 
$lang[tk_closed]="�ѹر�"; 
$lang[tk_closed_ok]="�ѹرչ���"; 
$lang[ads_not_placed]="�û���δ���ù��"; 
$lang[ads_placed]="�û�����ȷ���ù��"; 
$lang[no_ads_forced]="���û�������ù��"; 
$lang[affiliate_total]="���û��Ѿ��ƹ���"; 
$lang[active_ok]="�ѿ�ͨ�û�"; 
$lang[refuse_ok]="�Ѿܾ��û�"; 
$lang[mail_ok]="�ѵ����û�"; 
$lang[suspend_ok]="�ѷ����û�"; 
$lang[unsuspend_ok]="�ѽ���û�"; 
$lang[terminate_ok]="����ֹ�û�"; 
$lang[delete_ok]="��ɾ���û�"; 
$lang[admin_panel]="�����̨"; 
$lang[add_faq]="����FAQ"; 
$lang[config_faq]="FAQ�趨"; 
$lang[title]="����:"; 
$lang[title_]="����"; 
$lang[content]="����:"; 
$lang[submit]="�ύ"; 
$lang[reset_]="����"; 
$lang[time_]="ʱ��:"; 
$lang[add_notice]="��������"; 
$lang[config_notice]="�����趨"; 
$lang[add_plan]="������վ�ռ䷽��"; 
$lang[config_plan]="��վ�ռ䷽���趨"; 
$lang[plan_name]="��վ�ռ䷽��"; 
$lang[plan_s]="ʹ�õķ�����"; 
$lang[plan_space]="�ռ�����:"; 
$lang[plan_traffic]="ÿ������:"; 
$lang[plan_subdomains]="������:"; 
$lang[plan_domains]="����:"; 
$lang[plan_ftp]="Ftp �˺�: "; 
$lang[plan_mysql]="MySQL ���ݿ�:"; 
$lang[plan_mail]="EMAIL �˺�:"; 
$lang[plan_current_user]="Ŀǰʹ������ :"; 
$lang[plan_limit]="�����û����� :"; 
$lang[plan_mon_price]="�¸�:"; 
$lang[plan_semi_anual_price]="���긶:"; 
$lang[plan_anual_price]="�긶:"; 
$lang[plan_dou_anual_price]="���긶:"; 
$lang[plan_server]="������:"; 
$lang[plan_open]="��������?:"; 
$lang[plan_auto]="�Զ���ͨ?(���ѿռ��ѡ��):"; 
$lang[plan_reseller]="����?:"; 
$lang[plan_hide]="����?:"; 
$lang[plan_ads_code]="������(��������Ҫ):"; 
$lang[add_server]="����������"; 
$lang[config_server]="�������趨"; 
$lang[server_name]="����������:"; 
$lang[ip_address]="IP ��ַ:"; 
$lang[ns_1]="DNS���� 1:"; 
$lang[ns_2]="DNS���� 2:"; 
$lang[control_panel]="������� :"; 
$lang[server_location]="������λ��:"; 
$lang[a_s_username]="��̨��¼�˺�:"; 
$lang[a_s_password]="��̨��¼����:"; 
$lang[add_announcement]="��������"; 
$lang[config_announcement]="�����趨"; 
$lang[action]="����"; 
$lang[not_set_announcement]="��δ�趨���档"; 
$lang[edit]="�༭"; 
$lang[del]="ɾ��"; 
$lang[edit_expire_to]="�޸Ĺ�������Ϊ���޸ĺ����г��룩"; 
$lang[expire_date]="������"; 
$lang[welcom_to_admin_panel]="��ӭ����DzWHM�����̨"; 
$lang[welcom_tip]="�ں�̨����Թ�������û�������������վ�ռ䷽���ȵȡ� "; 
$lang[ticket_stat]="����#tickets# �ŵȴ��ظ��Ĺ�����"; 
$lang[user_inactive_stat]="����#users# λ�ȴ�������û���"; 
$lang[dzwhm_official]="DzWHM�ٷ���̬"; 
$lang[dzwhm_official_tip]="��ȡ����"; 
$lang[free_tip]="����������ҵ��Ȩ�û������ڹ�����ҵ��Ȩ��ݽ�Ҫ�����100�������������ɣ� "; 
$lang[vip_tip]="���ã�������ҵ�û�.���ʹ�ù�������������,��ӭ������ҵ�û�ר�淢���� "; 
$lang[faq_not_found]="��δ�趨FAQ��"; 
$lang[mass_mail]="EmailȺ��"; 
$lang[mail_send]="����"; 
$lang[back_notice_list]="���ع����б�"; 
$lang[plz_add_plan]="��������վ�ռ䷽����"; 
$lang[date_]="����"; 
$lang[tk]="����"; 
$lang[username]="�û���"; 
$lang[statues]="״̬"; 
$lang[urgency]="�����̶�"; 
$lang[reply]="�ظ�"; 
$lang[add_server_tip]="��������������"; 
$lang[basci_setting]="�����趨"; 
$lang[tos_setting]="������Լ�趨"; 
$lang[open_support_center]="����֧������:"; 
$lang[not_limiit_ip]="����IP�ظ�ע��:"; 
$lang[admin_uid]="����ԱUID :"; 
$lang[im]="QQ/TM:"; 
$lang[email]="Email:"; 
$lang[phone]="Phone:"; 
$lang[admin_act]="����Ա����"; 
$lang[admin_home]="��̨��ҳ"; 
$lang[basic_cfg]="��������"; 
$lang[admin_user]="�����û�"; 
$lang[userstat]="�û�ͳ��"; 
$lang[admin_plan]="�ռ䷽������"; 
$lang[admin_serv]="�������趨"; 
$lang[admin_announcement]="�����趨"; 
$lang[admin_ticket]="�����趨"; 
$lang[admin_kb]="֪ʶ���趨"; 
$lang[admin_act_other]="��������"; 
$lang[admin_cronjob]="CRONJOB��ҵ(�����Զ�)"; 
$lang[admin_cronjob_tip]="if(!confirm('����CRON�Ѿ������ɳ���HTTPGET����������ˡ� \n����ζ�����Ժ���ȫ�����˹�����չ��ڵĿռ��ˣ�\n�Ƿ�Ҫ�鿴ȫ�Զ�CRON�̳̣� ')){alert('��������ҵ���󴰿ڣ��벻Ҫ����رգ���ҳ��ִ��һ���Ӻ��ٹرգ�');window.open('./plugin.php?id=host:host&page=cron');}else{window.open('http://www.fen.mu/viewthread.php?tid=2&extra=page%3D1')}";
$lang[admin_tools]="��鹤��"; 
$lang[admin_free_notice]="����������ҵ��Ȩ�û������ڹ�����ҵ��Ȩ��ݽ�Ҫ�����100�������ϴ���������ҵ��Ȩ�������ģ� "; 
$lang[admin_buy_vip]="������ҵ��Ȩ"; 
$lang[no_tk_found]="Ŀǰû���κι�����"; 
$lang[admin_tk_close]="�ر�"; 
$lang[no_user_found]="Ŀǰû���κ��û�"; 
$lang[check_domain_p]="�������ָ��"; 
$lang[check_ads_p]="��������"; 
$lang[check_aff]="����ƹ����"; 
$lang[apply_date]="��������"; 
$lang[used_days]="ʹ������"; 
$lang[days]="��"; 
$lang[detail]="��ϸ"; 
$lang[create]="��ͨ"; 
$lang[refuse]="�ܾ�"; 
$lang[suspend]="����"; 
$lang[unsuspend]="���"; 
$lang[terminate]="ɾ���ռ�"; 
$lang[delete_]="ɾ���û�"; 
$lang[see_detail]="�û���ϸ����"; 
$lang[back]="����"; 
$lang[pass]="����:"; 
$lang[aff_from]="�Ƽ���:"; 
$lang[applied_stat]="�������� :"; 
$lang[sctived_stat]="�ѿ�ͨ�û� :"; 
$lang[inactive_stat]="δ��ͨ�û� :"; 
$lang[inactive_stat]="�ѷ����û� :"; 
$lang[aff_center]="�ƹ�����"; 
$lang[copy_click]="��˸�������"; 
$lang[no_records]="û���κ��ƹ��¼�� "; 
$lang[aff_history]="�ƹ��¼"; 
$lang[announcements]="���¹��� "; 
$lang[announcements_none]="Ŀǰû���κι��档 "; 
$lang[app_form]="��վ�ռ������ "; 
$lang[fees]="��ͨʱ�估����:"; 
$lang[fees_1]="�¸�(30��)------RMB #monprice# Ԫ"; 
$lang[fees_2]="���긶(182��)--RMB #sixmonprice# Ԫ"; 
$lang[fees_3]="�긶(365��)----RMB #yrprice# Ԫ"; 
$lang[fees_4]="���긶(731��)--RMB #twoyrprice# Ԫ"; 
$lang[acc_username]="�ռ��˺�����:"; 
$lang[acc_password]="�ռ��˺�����:"; 
$lang[acc_repass]="������������:"; 
$lang[agree]=" ���Ƿ�ͬ��<a href=\"#indexname#\">#bbname#</a><a href=\"plugin.php?id=host:host&page=tos\">�ķ�����Լ</a>? "; 
$lang[ip_tip]=" ���IP��ַ#ip# �ѱ���¼�ڰ���������԰���"; 
$lang[renew]="����"; 
$lang[renew_1]="����һ����:"; 
$lang[renew_2]="����������:"; 
$lang[renew_3]="����һ��:"; 
$lang[renew_4]="��������:"; 
$lang[contact_us]="��ϵ����"; 
$lang[im_api]="<a title=\"��������QQ #value# ����Ϣ�� \"href=\"javascript:window.open('tencent://message/?uin=#value#&Site=DzDzWHM&Menu=yes');\"><img src=\"http://wpa.qq.com/pa?p=1:#value#:6\"></a> "; 
$lang[email_api]="��������#value# �����ö���"; 
$lang[no_phone]="�Բ������ǲ��ṩ�绰��ѯ.<br/>��ѡ��������ϵ��ʽ��ϵ����. "; 
$lang[index_myhost]="�ҵ���վ�ռ�"; 
$lang[index_myhost_des]="��˲鿴���Ŀռ�����"; 
$lang[index_announcements]="���¹���"; 
$lang[index_announcements_des]="�鿴���µ���Ϣ�͹���"; 
$lang[index_kb]="֪ʶ��"; 
$lang[index_kb_des]="��˲鿴��վ��FAQ"; 
$lang[index_order]="�����ռ�"; 
$lang[index_order_des]="�����վ����վ�ռ�ƻ�"; 
$lang[index_servinfo]="������ѶϢ"; 
$lang[index_servinfo_des]="�鿴��վ�ķ�����״̬"; 
$lang[index_tickets]="֧������"; 
$lang[index_tickets_des]="��˲鿴���µ�֧��Ticket"; 
$lang[index_aff]="�û��ƹ�"; 
$lang[index_aff_des]="�ƹ����ǵķ����������"; 
$lang[index_tos]="������Լ"; 
$lang[index_tos_des]="��˲鿴������Լ"; 
$lang[index_contactus]="��ǰ��ѯ"; 
$lang[index_contactus_des]="������κ���ǰ��������������ϵ����"; 
$lang[index_networkissues]="���������ʾ"; 
$lang[index_networkissues_des]="�鿴���ڵĻ��߽���Ԥ�ڵ���������¼�"; 
$lang[no_faq]="Ŀǰû���κ�FAQ��"; 
$lang[myhost_disk_usage]="�ռ�ʹ�����:"; 
$lang[myhost_apr]="��������:"; 
$lang[myhost_serv_ip]="������ IP:"; 
$lang[myhost_ns]="����������:"; 
$lang[myhost_cp]="��վ�������:"; 
$lang[myhost_ads]="������:"; 
$lang[myhost_ns]="����������:"; 
$lang[plan_under_cons]="���ڳﱸ��վ�ռ�ƻ���"; 
$lang[used]="�û����� "; 
$lang[max_]="����"; 
$lang[traffic]="��վ���� ��"; 
$lang[domains_p]="�ɰ����� :"; 
$lang[price]="�۸� ��"; 
$lang[free]="��ȫ���"; 
$lang[is_ad]="����ù�� :"; 
$lang[none_serv_watched]="û���ŷ����ڼ��������"; 
$lang[m_act]="��Ա����"; 
$lang[dzwhm_home]="DzWHM��ҳ"; 
$lang[purch_cash]="��ֵRMB"; 
$lang[tk_sub]="�ύ����"; 
$lang[a_act]="����Ա����"; 
$lang[u_info]="�û���Ϣ"; 
$lang[u_info_cash_1]="���˻���RMB"; 
$lang[u_info_cash_2]="Ԫ"; 
$lang[add_tk]="�ύticket"; 
$lang[u_info_purc]="��ֵRMB"; 
$lang[dzwhm_sys_info]="DzWHMϵͳ��Ϣ"; 
$lang[dzwhm_sys_info_copy]="Powered by <a href='http://www.fen.mu'>DzWHM v2.04 </a>"; 
$lang[tk_s]="�鿴ticket"; 
$lang[none_tk]="����û���ύ֧ԮƱ��"; 
$lang[detail]="�鿴"; 
$lang[my_host]="�ҵĿռ�"; 
$lang[default_]="Ĭ��"; 
$lang[mailto]="��Email"; 
$lang[forced_manual]="��ѿռ䲻������Ϊ�Զ���ͨ��"; 
$lang[forced_auto]="���ѿռ䲻������Ϊ�ֹ���ͨ��"; 
$lang[refresh]="ˢ��"; 
$lang[networkissues_none]="Ŀǰû�з����κ����������ʾ."; 
$lang[add_networkissues]="������������ʾ"; 
$lang[config_networkissues]="������������"; 

//Cron 

$lang[cron_remind_mail_title]="<��>�ռ��������ѣ�"; 
$lang[cron_remind_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."�װ����û���"." 
<br><br>" 
."��л����ѡ���� 
�ǵ���վ�ռ�������Ŀռ佫�ڱ��ʼ�����֮��3���ڵ��ڡ� "."<br> 
<br>" 
."<b>�뼰ʱ��ֵ�� 
�ѡ� </b>"."<br>" 
."����ѡ������� 
�Ƿ���15���������վ�ᱻϵͳ����ɾ��,"."<br>" 
."Best 
Regards,"."<br>#bbname#<br>" 
."���ǵ���վ�� 
#siteurl# <br>"; 

$lang[cron_del_mail_title]="<��>�ռ�ֹͣ���ѣ�"; 
$lang[cron_del_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."�װ����û���"." 
<br><br>" 
."��л����ѡ���� 
�ǵ���վ�ռ�������Ŀռ佫�ڱ��ʼ�����֮ʱ���ڡ� "."<br><br>" 
."<b>�뼰ʱ��ֵ�� 
�ѡ� </b>"."<br>" 
."15��������� 
վ�ᱻϵͳ����ɾ��,"."<br>" 
."Best 
Regards,"."<br>#bbname]#<br>" 
."���ǵ���վ�� 
#siteurl]#<br>"; 

$lang[cron_deleted_mail_title]="<��>�ռ�ɾ�����ѣ�"; 
$lang[cron_deleted_mail_content]="<img 
src='#url#/static/image/common/logo.gif' />"."<br><br>" 
."�װ����û���"." 
<br><br>" 
."��л����ѡ���� 
�ǵ���վ�ռ�������Ŀռ����ڱ��ʼ�����֮ʱɾ���� "."<br><br>" 
."<b>����վ�ĵ��� 
�Ѿ�ȫ������ʽ���� </b>"."<br>" 
."��ӭ���ٴ�ѡ�� 
���ǵķ��� "."<br>" 
."Best 
Regards,"."<br>#bbname#<br>" 
."���ǵ���վ�� 
#siteurl# <br>"; 

?>
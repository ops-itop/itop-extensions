<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2015 Vladimir Kunin <v.b.kunin@gmail.com>
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('RU RU', 'Russian', 'Russian', array(
  'Class:Announcement' => 'Обявление',
  'Class:Announcement+' => 'Обявление на портале',
  'Class:Announcement/Attribute:org_id' => 'Организация',
  'Class:Announcement/Attribute:org_id+' => '',
  'Class:Announcement/Attribute:org_name' => 'Организация',
  'Class:Announcement/Attribute:org_name+' => '',
  'Class:Announcement/Attribute:title' => 'Заголовок',
  'Class:Announcement/Attribute:title+' => 'Заголовок объявления',
  'Class:Announcement/Attribute:description' => 'Текст',
  'Class:Announcement/Attribute:description+' => 'Текст объявления',
  'Class:Announcement/Attribute:start_date' => 'Начало в',
  'Class:Announcement/Attribute:start_date+' => 'Дата начала показа объявления',
  'Class:Announcement/Attribute:end_date' => 'Окончание в',
  'Class:Announcement/Attribute:end_date+' => 'Дата окончания показа объявления',
  'Class:Announcement/Attribute:status' => 'Статус',
  'Class:Announcement/Attribute:status+' => 'Статус объявления',
  'Class:Announcement/Attribute:status/Value:active' => 'Активно',
  'Class:Announcement/Attribute:status/Value:active+' => '',
  'Class:Announcement/Attribute:status/Value:inactive' => 'Неактивно',
  'Class:Announcement/Attribute:status/Value:inactive+' => '',
  'Class:Announcement/Attribute:message_type' => 'Тип',
  'Class:Announcement/Attribute:message_type+' => 'Определяет внешний вид объявления',
  'Class:Announcement/Attribute:message_type/Value:message_info' => 'Нейтральное',
  'Class:Announcement/Attribute:message_type/Value:message_info+' => '',
  'Class:Announcement/Attribute:message_type/Value:message_ok' => 'Положительное',
  'Class:Announcement/Attribute:message_type/Value:message_ok+' => '',
  'Class:Announcement/Attribute:message_type/Value:message_error' => 'Отрицательное',
  'Class:Announcement/Attribute:message_type/Value:message_error+' => '',
  'Class:Announcement/Attribute:customers_list' => 'Заказчики',
  'Class:Announcement/Attribute:customers_list+' => 'Организации-заказчики, пользователи которых увидят это объявление',

  'Class:lnkAnnouncementToCustomer' => 'Связь Обявление/Заказчик',
  'Class:lnkAnnouncementToCustomer+' => 'Связь Обявление/Заказчик',
  'Class:lnkAnnouncementToCustomer/Attribute:announcement_id' => 'Объявление',
  'Class:lnkAnnouncementToCustomer/Attribute:announcement_id+' => '',
  'Class:lnkAnnouncementToCustomer/Attribute:announcement_name' => 'Объявление',
  'Class:lnkAnnouncementToCustomer/Attribute:announcement_name+' => '',
  'Class:lnkAnnouncementToCustomer/Attribute:customer_org_id' => 'Заказчик',
  'Class:lnkAnnouncementToCustomer/Attribute:customer_org_id+' => '',
  'Class:lnkAnnouncementToCustomer/Attribute:customer_org_name' => 'Заказчик',
  'Class:lnkAnnouncementToCustomer/Attribute:customer_org_name+' => '',

  'Menu:NewAnnouncement' => 'Создать объявление',
  'Menu:ActiveAnnouncements' => 'Активные объявления',
  'Menu:ActiveAnnouncements+' => 'Активные объявления (отображаются сейчас)',
  'Menu:AllAnnouncements' => 'Все объявления',
  'Menu:AllAnnouncements+' => 'Все объявления',
));
?>
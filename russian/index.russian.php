<?php
// Version: 1.0; index

global $forum_copyright;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'ru_RU.utf8';
$txt['lang_dictionary'] = 'ru';
$txt['lang_spelling'] = 'американский';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;
// Number format.
$txt['number_format'] = '1,234.00';

$txt['sunday'] = 'Воскресенье';
$txt['monday'] = 'Понедельник';
$txt['tuesday'] = 'Вторник';
$txt['wednesday'] = 'Среда';
$txt['thursday'] = 'Четверг';
$txt['friday'] = 'Пятница';
$txt['saturday'] = 'Суббота';

$txt['sunday_short'] = 'Вс.';
$txt['monday_short'] = 'Пн.';
$txt['tuesday_short'] = 'Вт.';
$txt['wednesday_short'] = 'Ср.';
$txt['thursday_short'] = 'Чт.';
$txt['friday_short'] = 'Пт.';
$txt['saturday_short'] = 'Сб.';

$txt['january'] = 'Январь';
$txt['february'] = 'Февраль';
$txt['march'] = 'Март';
$txt['april'] = 'Апрель';
$txt['may'] = 'Май';
$txt['june'] = 'Июнь';
$txt['july'] = 'Июль';
$txt['august'] = 'Август';
$txt['september'] = 'Сентябрь';
$txt['october'] = 'Октябрь';
$txt['november'] = 'Ноябрь';
$txt['december'] = 'Декабрь';

$txt['january_titles'] = 'Январь';
$txt['february_titles'] = 'Февраль';
$txt['march_titles'] = 'Март';
$txt['april_titles'] = 'Апрель';
$txt['may_titles'] = 'Май';
$txt['june_titles'] = 'Июнь';
$txt['july_titles'] = 'Июль';
$txt['august_titles'] = 'Август';
$txt['september_titles'] = 'Сентябрь';
$txt['october_titles'] = 'Октябрь';
$txt['november_titles'] = 'Ноябрь';
$txt['december_titles'] = 'Декабрь';

$txt['january_short'] = 'Янв';
$txt['february_short'] = 'Фев';
$txt['march_short'] = 'Мар';
$txt['april_short'] = 'Апр';
$txt['may_short'] = 'Май';
$txt['june_short'] = 'Июн';
$txt['july_short'] = 'Июл';
$txt['august_short'] = 'Авг';
$txt['september_short'] = 'Сен';
$txt['october_short'] = 'Окт';
$txt['november_short'] = 'Ноя';
$txt['december_short'] = 'Дек';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Let's get all the main menu strings in one place.
$txt['home'] = 'Начало';
$txt['community'] = 'Сообщество';
// Sub menu labels
$txt['help'] = 'Помощь';
$txt['search'] = 'Поиск';
$txt['calendar'] = 'Календарь';
$txt['members'] = 'Пользователи';
$txt['recent_posts'] = 'Последние сообщения';

$txt['admin'] = 'Админка';
// Sub menu labels
$txt['errlog'] = 'Логи ошибок';
$txt['package'] = 'Менеджер пакетов';
$txt['edit_permissions'] = 'Права доступа';
$txt['modSettings_title'] = 'Свойства и параметры';

$txt['moderate'] = 'Модерация';
// Sub menu labels
$txt['modlog_view'] = 'Логи модерации';
$txt['mc_emailerror'] = 'Неодобренные адреса эл. почты';
$txt['mc_reported_posts'] = 'Уведомления';
$txt['mc_unapproved_attachments'] = 'Неодобренные вложения';
$txt['mc_unapproved_poststopics'] = 'Неодобренные сообщения и темы';

$txt['pm_short'] = 'Личные сообщения';
// Sub menu labels
$txt['pm_menu_read'] = 'Входящие';
$txt['pm_menu_send'] = 'Отправить сообщение';

$txt['account_short'] = 'Мой аккаунт';
// Sub menu labels
$txt['profile'] = 'Профиль';
$txt['summary'] = 'Основная информация';
$txt['theme'] = 'Внешний вид форума';
$txt['account'] = 'Настройки аккаунта';
$txt['forumprofile'] = 'Настройки профиля';

$txt['view_unread_category'] = 'Новые сообщения';
$txt['view_replies_category'] = 'Новые ответы';

$txt['login'] = 'Вход';
$txt['register'] = 'Регистрация';
$txt['logout'] = 'Выход';
// End main menu strings.

$txt['save'] = 'Сохранить';

$txt['modify'] = 'Изменить';
$txt['forum_index'] = '%1$s - Главная страница';
$txt['board_name'] = 'Название раздела';
$txt['posts'] = 'сообщений';

$txt['member_postcount'] = 'Сообщений';
$txt['no_subject'] = '(Нет темы)';
$txt['view_profile'] = 'Просмотр профиля';
$txt['guest_title'] = 'Гость';
$txt['author'] = 'Автор';
$txt['on'] = 'от';
$txt['remove'] = 'Удалить';
$txt['start_new_topic'] = 'Новая тема';

// Use numeric entities in the below string.
$txt['username'] = 'Имя пользователя';
$txt['password'] = 'Пароль';

$txt['username_no_exist'] = 'Такого пользователя не существует.';
$txt['no_user_with_email'] = 'Пользователя с таким e-mail не существует.';

$txt['board_moderator'] = 'Модератор';
$txt['remove_topic'] = 'Удалить тему';
$txt['topics'] = 'тем';
$txt['modify_msg'] = 'Редактировать сообщение';
$txt['name'] = 'Имя';
$txt['email'] = 'E-mail';
$txt['user_email_address'] = 'E-mail';
$txt['subject'] = 'Тема';
$txt['message'] = 'Сообщение';
$txt['redirects'] = 'Переходов';

$txt['choose_pass'] = 'Пароль';
$txt['verify_pass'] = 'Подтвердите пароль';
$txt['position'] = 'Группа';

$txt['profile_of'] = 'Просмотр профиля';
$txt['total'] = 'Всего';
$txt['posts_made'] = 'Сообщений';
$txt['topics_made'] = 'тем';
$txt['website'] = 'Сайт';
$txt['contact'] = 'Обратная связь';
$txt['warning_status'] = 'Статус предупреждения';
$txt['user_warn_watch'] = 'Пользователь в модераторском списке наблюдения';
$txt['user_warn_moderate'] = 'Сообщение пользователя поставлено в очередь для одобрения';
$txt['user_warn_mute'] = 'Пользователь забанен из-за сообщения';
$txt['warn_watch'] = 'Под наблюдением';
$txt['warn_moderate'] = 'Модерируемый';
$txt['warn_mute'] = 'Запрещено оставлять сообщения';
$txt['warning_issue'] = 'Предупреждение';

$txt['message_index'] = 'Сообщения';
$txt['news'] = 'Новости';
$txt['page'] = 'Страница';
$txt['prev'] = 'предыдущий';
$txt['next'] = 'следующий';

$txt['post'] = 'Отправить';
$txt['error_occurred'] = 'Ошибка';
$txt['send_error_occurred'] = 'В случае ошибки, <a href="{href}">пожалуйста кликните ещё раз</a>.';
$txt['require_field'] = 'Это обязательное поле';
$txt['started_by'] = 'Автор';
$txt['topic_started_by'] = 'Автор %1$s';
$txt['topic_started_by_in'] = 'Автор %1$s в %2$s';
$txt['replies'] = 'Ответов';
$txt['last_post'] = 'Последний ответ';
$txt['first_post'] = 'Первый ответ';
$txt['last_poster'] = 'Автор последнего ответа';

// @todo - Clean this up a bit. See notes in template.
// Just moved a space, so the output looks better when things break to an extra line.
$txt['last_post_message'] = '<span class="lastpost_link">%2$s </span><span class="board_lastposter">от %1$s</span><span class="board_lasttime"><strong>Последний ответ: </strong>%3$s</span>';
$txt['boardindex_total_posts'] = '%1$s Сообщений в %2$s темах %3$s пользователей';
$txt['show'] = 'Показать';
$txt['hide'] = 'Скрыть';
$txt['sort_by'] = 'Сортировать по';
$txt['sort_asc'] = 'Сортировать по возрастанию';
$txt['sort_desc'] = 'Сортировать по убыванию';

$txt['admin_login'] = 'Вход администратора';
// Use numeric entities in the below string.
$txt['topic'] = 'Тема';
$txt['help'] = 'Помощь';
$txt['notify'] = 'Уведомлять';
$txt['unnotify'] = 'Не уведомлять';
$txt['notify_request'] = 'Хотите получать уведомление по e-mail при появлении новых ответов в этой теме?';
// Use numeric entities in the below string.
$txt['regards_team'] = "С уважением,\nThe {forum_name_html_unsafe} Команда.";
$txt['notify_replies'] = 'Уведомить о новых ответах';
$txt['move_topic'] = 'Переместить тему';
$txt['move_to'] = 'Переместить в';
$txt['pages'] = 'Страницы';
$txt['users_active'] = 'Пользователи за последние %1$d минут';
$txt['personal_messages'] = 'Личные сообщения';
$txt['reply_quote'] = 'Процитировать';
$txt['reply'] = 'Ответ';
$txt['reply_number'] = 'Ответ #%1$s';
$txt['approve'] = 'Одобрить';
$txt['unapprove'] = 'Неодобренные';
$txt['approve_all'] = 'одобрить все';
$txt['awaiting_approval'] = 'Ожидают одобрения';
$txt['attach_awaiting_approve'] = 'Вложения, ожидающие одобрения';
$txt['post_awaiting_approval'] = 'Обратите внимание: Данное сообщение ожидает одобрения модератора.';
$txt['there_are_unapproved_topics'] = 'В данном разделе ожидают одобрения %1$s тем и %2$s сообщений. <a href="%3$s">Нажмите здесь для просмотра</a>.';
$txt['send_message'] = 'Отправить сообщение';

$txt['msg_alert_no_messages'] = 'Для вас нет сообщений';
$txt['msg_alert_one_message'] = 'у вас <a href="%1$s">1 сообщение</a>';
$txt['msg_alert_many_message'] = 'у вас <a href="%1$s">%2$d сообщений</a>';
$txt['msg_alert_one_new'] = '1 новый';
$txt['msg_alert_many_new'] = '%1$d новых';
$txt['remove_message'] = 'Удалить сообщение';

$txt['topic_alert_none'] = 'Нет сообщений...';
$txt['pm_alert_none'] = 'Нет сообщений...';

$txt['online_users'] = 'Сейчас на форуме'; //Deprecated
$txt['online_now'] = 'Сейчас на форуме';
$txt['personal_message'] = 'Личное сообщение';
$txt['jump_to'] = 'Перейти в';
$txt['go'] = 'Вперед!';
$txt['are_sure_remove_topic'] = 'Уверены, что хотите удалить эту тему?';
$txt['yes'] = 'Да';
$txt['no'] = 'Нет';

// @todo this string seems a good candidate for deprecation
$txt['search_on'] = 'от';

$txt['search'] = 'Поиск';
$txt['all'] = 'Все';
$txt['search_entireforum'] = 'По всему форуму';
$txt['search_thisbrd'] = 'Этот раздел';
$txt['search_thistopic'] = 'Эта тема';
$txt['search_members'] = 'Пользователи';

$txt['back'] = 'Назад';
$txt['continue'] = 'Продолжить';
$txt['password_reminder'] = 'Напомнить пароль';
$txt['topic_started'] = 'Тема начата';
$txt['title'] = 'Название';
$txt['post_by'] = 'Отправлено';
$txt['welcome_newest_member'] = 'Приветствуем %1$s, нашего нового пользователя.';
$txt['admin_center'] = 'Центр администрирования';
$txt['admin_session_active'] = 'У вас открыта сессия администратора. Мы рекомендуем <strong><a class="strong" href="%1$s">её закрыть</a></strong> как только вы закончите решать задачи администратора.';
$txt['admin_maintenance_active'] = 'Ваш форум находится на обслуживании, только админы могут в него войти. Не забудьте <strong><a class="strong" href="%1$s">выйти из режима обслуживания</a></strong> как только вы закончите свои задачи.';
$txt['query_command_denied'] = 'Возникли ошибки в  MySQL, проверьте процедуру установки';
$txt['query_command_denied_guests'] = 'Возможно, что-то случилось с базой данных форума. Это временная проблема, возвращайтесь чуть позже и попробуйте снова. Если увидите это сообщение снова, обратитесь к администратору.';
$txt['query_command_denied_guests_msg'] = 'команда %1$s отклонена базой данных';
$txt['last_edit_by'] = '<span class="lastedit">Последнее редактирование</span>: %1$s by %2$s';
$txt['notify_deactivate'] = 'Хотите отключить уведомление для этой темы?';

$txt['location'] = 'Расположение';
$txt['gender'] = 'Пол';
$txt['personal_text'] = 'Подпись под аватаром';
$txt['date_registered'] = 'Дата регистрации';

$txt['recent_view'] = 'Смотреть последние сообщения';
$txt['is_recent_updated'] = '%1$s самая последняя обновлённая тема';

$txt['male'] = 'Мужской';
$txt['female'] = 'Женский';

$txt['error_invalid_characters_username'] = 'Неверный символ в имени пользователя.';

$txt['welcome_guest'] = 'Приветствуем, <strong>Гость</strong>. Пожалуйста <a href="{login_url}">залогиньтесь</a>.';
$txt['welcome_guest_register'] = 'Приветствуем на <strong>{forum_name}</strong>. Пожалуйста <a href="{login_url}">залогиньтесь</a> или <a href="{register_url}">зарегистрируйтесь</a>.';
$txt['welcome_guest_activate'] = '<br />Вам не пришло <a href="{activate_url}">письмо активации</a>?';

// @todo the following to sprintf
$txt['hello_member'] = 'Здравствуйте,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Добро пожаловать,';
$txt['select_destination'] = 'Пожалуйста, выберите назначение';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Автор';

$txt['icon_smiley'] = 'Улыбающийся';
$txt['icon_angry'] = 'Злой';
$txt['icon_cheesy'] = 'Веселый';
$txt['icon_laugh'] = 'Смеющийся';
$txt['icon_sad'] = 'Грустный';
$txt['icon_wink'] = 'Подмигивающий';
$txt['icon_grin'] = 'Усмешка';
$txt['icon_shocked'] = 'Шокированный';
$txt['icon_cool'] = 'Крутой';
$txt['icon_huh'] = 'Непонимающий';
$txt['icon_rolleyes'] = 'Строит глазки';
$txt['icon_tongue'] = 'Показывает язык';
$txt['icon_embarrassed'] = 'Обеспокоенный';
$txt['icon_lips'] = 'Рот на замке';
$txt['icon_undecided'] = 'В замешательстве';
$txt['icon_kiss'] = 'Целующий';
$txt['icon_cry'] = 'Плачущий';
$txt['icon_angel'] = 'Безопасный';

$txt['moderator'] = 'Модератор';
$txt['moderators'] = 'Модераторы';

$txt['views'] = 'Просмотров';
$txt['new'] = 'Новая';
$txt['no_redir'] = 'Переходов с %1$s';

$txt['view_all_members'] = 'Все пользователи';
$txt['view'] = 'Смотреть';

$txt['viewing_members'] = 'Список от %1$s до %2$s';
$txt['of_total_members'] = 'Всего: %1$s';

$txt['forgot_your_password'] = 'Забыли пароль?';

$txt['date'] = 'Дата';
// Use numeric entities in the below string.
$txt['from'] = 'От';
$txt['to'] = 'Кому';

$txt['board_topics'] = 'тем';
$txt['members_title'] = 'Пользователи';
$txt['members_list'] = 'Список пользователей';
$txt['new_posts'] = 'Новые сообщения';
$txt['old_posts'] = 'Нет новых сообщений';
$txt['redirect_board'] = 'Перенаправление';
$txt['redirect_board_to'] = 'Перенаправление %1$s';

$txt['sendtopic_send'] = 'Отправить';
$txt['report_sent'] = 'Ваша жалоба успешно отправлена.';
$txt['topic_sent'] = 'Ваше сообщение успешно отправлено.';

$txt['time_offset'] = 'Часовой пояс';
$txt['or'] = 'или';

$txt['mention'] = 'Мнения';
$txt['notifications'] = 'Уведомления';

$txt['your_ban'] = 'Извините %1$s, вы забанены и не можете оставлять сообщения на форуме!';
$txt['your_ban_expires'] = 'Ваш бан истекает %1$s.';
$txt['your_ban_expires_never'] = 'Вы забанены навсегда.';
$txt['ban_continue_browse'] = 'Вы можете продолжать пользоваться форумом как гость.';

$txt['mark_as_read'] = 'Отметить все сообщения прочитанными';
$txt['mark_these_as_read'] = 'Отметить ЭТИ сообщения как прочитанные';

$txt['locked_topic'] = 'Заблокированная тема';
$txt['normal_topic'] = 'Обычная тема';
$txt['participation_caption'] = 'Тема с вашими ответами';

$txt['print'] = 'Печать';
$txt['topic_summary'] = 'Сообщения в этой теме';
$txt['not_applicable'] = 'нет данных';
$txt['name_in_use'] = 'мя %1$s уже используется другим пользователем.';

$txt['total_members'] = 'Всего пользователей';
$txt['total_posts'] = 'Всего сообщений';
$txt['total_topics'] = 'Всего тем';

$txt['mins_logged_in'] = 'Продолжительность сессии';

$txt['preview'] = 'Предварительный просмотр';
$txt['always_logged_in'] = 'Запомнить';

$txt['logged'] = 'Записан';
// Use numeric entities in the below string.
$txt['ip'] = 'IP адрес';

$txt['www'] = 'WWW';
$txt['link'] = 'Ссылка';

$txt['by'] = 'от'; //Deprecated

$txt['hours'] = 'часов';
$txt['minutes'] = 'минут';
$txt['seconds'] = 'секунд';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Час';
$txt['days_word'] = 'дней';

$txt['newest_member'] = ', наш новый пользователь.'; //Deprecated

$txt['search_for'] = 'Поиск';
$txt['search_match'] = 'Соответствует';

$txt['maintain_mode_on'] = 'Форум находится на техобслуживании.';

$txt['read'] = 'Прочитано'; //Deprecated
$txt['times'] = 'раз'; //Deprecated
$txt['read_one_time'] = 'Прочитано 1 раз';
$txt['read_many_times'] = 'Прочитано %1$d раз';

$txt['forum_stats'] = 'Статистика форума';
$txt['latest_member'] = 'Последний пользователь';
$txt['total_cats'] = 'Всего категорий';
$txt['latest_post'] = 'Последнее сообщение';

$txt['here'] = 'Нажмите здесь';
$txt['you_have_no_msg'] = 'Для вас нет сообщений';
$txt['you_have_one_msg'] = 'У вас есть 1 сообщение...<a href="%1$s">Кликните сюда для просмотра it</a>';
$txt['you_have_many_msgs'] = 'У вас естьYou\'ve %2$d сообщений...<a href="%1$s">Кликните сюда для просмотра them</a>';

$txt['total_boards'] = 'Всего разделов';

$txt['print_page'] = 'Печать страницы';
$txt['print_page_text'] = 'Только текст';
$txt['print_page_images'] = 'Текст с изображениями';

$txt['valid_email'] = 'E-mail должен быть существующим.';

$txt['info_center_title'] = '%1$s - Информационный центр';

$txt['send_topic'] = 'Поделиться темой';
$txt['unwatch'] = 'Не просмотренные';
$txt['watch'] = 'Просмотренные';

$txt['sendtopic_title'] = 'Отправка ссылки на тему &quot;%1$s&quot; другу или знакомому';
$txt['sendtopic_sender_name'] = 'Ваше имя';
$txt['sendtopic_sender_email'] = 'Ваш e-mail';
$txt['sendtopic_receiver_name'] = 'Имя получателя';
$txt['sendtopic_receiver_email'] = 'E-mail получателя';
$txt['sendtopic_comment'] = 'Добавить комментарий';

$txt['allow_user_email'] = 'Разрешить пользователям связываться с вами по e-mail';

$txt['check_all'] = 'Выделить все';

// Use numeric entities in the below string.
$txt['database_error'] = 'Ошибка базы данных';
$txt['try_again'] = 'Пожалуйста, повторите ещё раз. Если ошибка продолжает повторяться, обратитесь к администратору.';
$txt['file'] = 'Файл';
$txt['line'] = 'Строка';

// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'ElkArte обнаружил и пытается автоматически исправить ошибку в базе данных. Если проблема осталась или продолжают приходить уведомления, пожалуйста, обратитесь к хостеру.';
$txt['database_error_versions'] = '<strong>Примечание:</strong> Версия вашей базы данных %1$s.';
$txt['template_parse_error'] = 'Ошибка шаблона!';
$txt['template_parse_error_message'] = 'Возможно, что-то случилось с системой шаблонов на форуме. Это временная проблема, возвращайтесь чуть позже и попробуйте снова. Если увидите это сообщение снова, обратитесь к администратору.<br /><br />Кроме того, можете попробовать <a href="javascript:location.reload();">обновить страницу</a>.';
$txt['template_parse_error_details'] = 'Возникли проблемы с загрузкой <span class="tt"><strong>%1$s</strong></span> шаблона или языкового файла. Пожалуйста, проверьте синтаксис и попробуйте снова - помните, одинарные кавычки (<span class="tt">\'</span>) должны быть закрыты обратной косой чертой (<span class="tt">\\</span>). Больше информации в PHP-файле по ссылке <a href="%2$s%1$s">получив к нему доступ</a>.<br /><br />Вы также можете попробовать <a href="javascript:location.reload();">перегрузить эту страницу</a> или <a href="%3$s">использовать стандартную тему</a>.';
$txt['template_parse_undefined'] = 'Произошло неизвестная ошибка во время парсинга этого шаблона';

$txt['today'] = 'Сегодня в %1$s';
$txt['yesterday'] = 'Вчера в %1$s';

// Relative times
$txt['rt_now'] = 'только что';
$txt['rt_minute'] = 'Минуту назад';
$txt['rt_minutes'] = '%s минут назад';
$txt['rt_hour'] = 'Час назад';
$txt['rt_hours'] = '%s часов назад';
$txt['rt_day'] = 'день назад';
$txt['rt_days'] = '%s дней назад';
$txt['rt_week'] = 'Неделю назад';
$txt['rt_weeks'] = '%s недель назад';
$txt['rt_month'] = 'Месяц назад';
$txt['rt_months'] = '%s месяцев назад';
$txt['rt_year'] = 'год назад';
$txt['rt_years'] = '%s лет назад';

$txt['new_poll'] = 'Новое голосование';
$txt['poll_question'] = 'Вопрос';
$txt['poll_question_options'] = 'Вопросы и ответы';
$txt['poll_vote'] = 'Голосовать';
$txt['poll_total_voters'] = 'Проголосовало пользователей';
$txt['draft_saved_on'] = 'Черновик был сохранён';
$txt['poll_results'] = 'Посмотреть результаты';
$txt['poll_lock'] = 'Заблокировать голосование';
$txt['poll_unlock'] = 'Разблокировать голосование';
$txt['poll_edit'] = 'Редактировать голосование';
$txt['poll'] = 'Голосование';
$txt['one_day'] = '1 день';
$txt['one_week'] = '1 неделя';
$txt['two_weeks'] = '2 недели';
$txt['one_month'] = '1 месяц';
$txt['two_months'] = '2 месяца';
$txt['forever'] = 'Навсегда';
$txt['quick_login_dec'] = 'Введите логин, пароль и время сессии';
$txt['one_hour'] = '1 час';
$txt['moved'] = 'Перенесено';
$txt['moved_why'] = 'Пожалуйста, укажите причину перемещения данной темы.';
$txt['board'] = 'Раздел';
$txt['in'] = 'в';
$txt['sticky_topic'] = 'Прикрепленная тема';
$txt['split'] = 'РАЗРЫВ';

$txt['delete'] = 'Удалить';

$txt['kilobyte'] = 'Кб';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[Подробная статистика]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Код';
$txt['code_select'] = '[Выделить]';
$txt['quote_from'] = 'Цитата';
$txt['quote'] = 'Цитата';
$txt['quote_new'] = 'Новая тема';
$txt['follow_ups'] = 'Следуйте за';
$txt['topic_derived_from'] = 'Тема создана %1$s';
$txt['edit'] = 'Редактировать';
$txt['quick_edit'] = 'Быстрое редактирование';
$txt['post_options'] = 'Ещё';

$txt['set_sticky'] = 'Прикрепить тему';
$txt['set_nonsticky'] = 'Открепить тему';
$txt['set_lock'] = 'Заблокировать тему';
$txt['set_unlock'] = 'Разблокировать тему';

$txt['search_advanced'] = 'Расширенный поиск';
$txt['search_simple'] = 'Скрыть дополнительные опции';

$txt['security_risk'] = 'РИСК БЕЗОПАСНОСТИ:';
$txt['not_removed'] = 'Вы не удалили %1$s';
$txt['not_removed_extra'] = '%1$s резервная копия of %2$s которая не была создана ElkArte. Кто-то пытался получить несанкционированный доступ к данным вашего форума. Вы должны немедленно её удалить.';
$txt['generic_warning'] = 'Предупреждение';
$txt['agreement_missing'] = 'Вы требует от новых пользователей принять соглашение о регистрации, однако файл (agreement.txt) не существует.';

$txt['new_version_updates'] = 'Вы только что обновили!';
$txt['new_version_updates_text'] = '<a href="{admin_url};area=credits#latest_updates">Кликните здесь, чтобы увидеть что нового в этой версии ElkArte!</a>!';

$txt['cache_writable'] = 'Директория для кэширования не доступна для записи - это значительно снизит производительность работы форума.';

$txt['page_created_full'] = 'Страница сгенерирована за %1$.3f секунд. Запросов: %2$d .';

$txt['report_to_mod_func'] = 'Используйте эту функцию для информирования модераторов и администраторов об оскорбительных сообщениях.<br /><em>Пожалуйста, обратите внимание на то, что ваш e-mail будет показан модераторам.</em>';

$txt['online'] = 'Онлайн';
$txt['member_is_online'] = '%1$s в сети';
$txt['offline'] = 'Оффлайн';
$txt['member_is_offline'] = '%1$s вне сети';
$txt['pm_online'] = 'Личное сообщение (Онлайн)';
$txt['pm_offline'] = 'Личное сообщение (Оффлайн)';
$txt['status'] = 'Статус';

$txt['skip_nav'] = 'Перейти к основному содержанию';
$txt['go_up'] = 'Вверх';
$txt['go_down'] = 'Вниз';

$forum_copyright = '<a href="http://www.elkarte.net" title="ElkArte Forum" target="_blank" class="new_win">powered by %1$s</a> | <a href="{credits_url}" title="Credits" target="_blank" class="new_win">credits</a>';

$txt['birthdays'] = 'Дни рождения:';
$txt['events'] = 'События:';
$txt['birthdays_upcoming'] = 'Ближайшие дни рождения:';
$txt['events_upcoming'] = 'Ближайшие события:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Праздники:';
$txt['calendar_month'] = 'Месяц:';
$txt['calendar_year'] = 'Год:';
$txt['calendar_day'] = 'День:';
$txt['calendar_event_title'] = 'Название события';
$txt['calendar_event_options'] = 'Настройки события';
$txt['calendar_post_in'] = 'Отправить в:';
$txt['calendar_edit'] = 'Редактировать событие';
$txt['event_delete_confirm'] = 'Удалить это событие?';
$txt['event_delete'] = 'Удалить событие';
$txt['calendar_post_event'] = 'Добавить событие';
$txt['calendar'] = 'Календарь';
$txt['calendar_link'] = 'Ссылка на календарь';
$txt['calendar_upcoming'] = 'Календарь предстоящих событий';
$txt['calendar_today'] = 'Текущие события';
$txt['calendar_week'] = 'Неделя';
$txt['calendar_week_title'] = 'Неделя %1$d из %2$d';
$txt['calendar_numb_days'] = 'Количество дней:';
$txt['calendar_how_edit'] = 'как отредактировать это событие?';
$txt['calendar_link_event'] = 'Ссылка на событие';
$txt['calendar_confirm_delete'] = 'Уверены, что хотите удалить это событие?';
$txt['calendar_linked_events'] = 'Ссылки на связанные события';
$txt['calendar_click_all'] = 'нажмите сюда для просмотра %1$s';

$txt['moveTopic1'] = 'Выберите тему для перенаправления';
$txt['moveTopic2'] = 'Изменить название темы';
$txt['moveTopic3'] = 'Новая тема';
$txt['moveTopic4'] = 'Изменить название темы в каждом сообщении';
$txt['move_topic_unapproved_js'] = 'Предупреждение! Данная тема не одобрена.\\n\\nНе рекомендуется создавать тему перенаправления, если вы сразу не одобрите тему.';
$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Тема была перемещена в [BOARD]

[TOPIC LINK]';
$txt['movetopic_redirect'] = 'Перенаправить к перемещённой теме';
$txt['movetopic_expires'] = 'Автоматически удалять тему для перенаправления';

$txt['merge_to_topic_id'] = 'ID темы, с которой объединить';
$txt['split_topic'] = 'Разделить тему';
$txt['merge'] = 'Объединить тему';
$txt['subject_new_topic'] = 'Название для новой темы';
$txt['split_this_post'] = 'Отделить только это сообщение.';
$txt['split_after_and_this_post'] = 'Отделить это и последующие сообщения.';
$txt['select_split_posts'] = 'Отделить выделенные сообщения.';

$txt['splittopic_notification'] = 'Размещать сообщение, когда тема разделяется';
$txt['splittopic_default'] = 'Одно или более сообщений в этой теме были перемещены в  [BOARD]⏎ ⏎ [TOPIC LINK]';
$txt['splittopic_move'] = 'Переместить новую тему в другой раздел';

$txt['new_topic'] = 'Новая тема';
$txt['split_successful'] = 'Тема успешно разделена на две.';
$txt['origin_topic'] = 'Исходная тема';
$txt['please_select_split'] = 'Пожалуйста, выберите сообщения, которые необходимо отделить.';
$txt['merge_successful'] = 'Темы успешно объединены.';
$txt['new_merged_topic'] = 'Новая объединенная тема';
$txt['topic_to_merge'] = 'Тема для объединения';
$txt['target_board'] = 'Раздел для новой темы';
$txt['target_topic'] = 'Объединить с темой';
$txt['merge_confirm'] = 'Уверены, что хотите объединить тему?';
$txt['with'] = 'с';
$txt['merge_desc'] = 'Эта функция объединяет две темы в одну. Сообщения будут упорядочены по дате. Самое раннее сообщение будет первым в объединённой теме.';

$txt['theme_template_error'] = 'Невозможно загрузить \'%1$s\' шаблон.';
$txt['theme_language_error'] = 'Невозможно загрузить \'%1$s\' языковой файл.';

$txt['parent_boards'] = 'Подразделы';

$txt['smtp_no_connect'] = 'Ошибка подключения к SMTP серверу';
$txt['smtp_port_ssl'] = 'Неверно указан SMTP порт; Для SSL серверов он должен быть 465.';
$txt['smtp_bad_response'] = 'Не могу получить ответ с почтового сервера';
$txt['smtp_error'] = 'Проблема с отправкой почты. Ошибка: ';
$txt['mail_send_unable'] = 'Невозможно отправить почту по указанному адресу \'%1$s\'';

$txt['mlist_search'] = 'Поиск пользователей';
$txt['mlist_search_again'] = 'Искать снова'; // @deprecated since 1.0.4
$txt['mlist_search_email'] = 'E-mail';
$txt['mlist_search_group'] = 'Группа';
$txt['mlist_search_name'] = 'Имена';
$txt['mlist_search_website'] = 'Сайт';
$txt['mlist_search_results'] = 'Искать';
$txt['mlist_search_by'] = '%1$s';

$txt['attach_downloaded'] = 'скачано %1$d раз';
$txt['attach_viewed'] = 'просмотрено %1$d раз';

$txt['settings'] = 'Настройки';
$txt['never'] = 'Никогда';
$txt['more'] = 'еще';

$txt['hostname'] = 'Хост';
$txt['you_are_post_banned'] = 'Извините, %1$s, но вы забанены и поэтому не можете использовать систему личных сообщений.';
$txt['ban_reason'] = 'Причина';

$txt['add_poll'] = 'Добавить голосование';
$txt['poll_options6'] = 'Можно выбрать %1$s вариантов ответа.';
$txt['poll_remove'] = 'Удалить голосование';
$txt['poll_remove_warn'] = 'Уверены, что хотите удалить голосование?';
$txt['poll_results_expire'] = 'Результаты будут показаны после окончания голосования';
$txt['poll_expires_on'] = 'Голосование заканчивается';
$txt['poll_expired_on'] = 'Голосование закончилось';
$txt['poll_change_vote'] = 'Удалить голос';
$txt['poll_return_vote'] = 'Настройка голосования';
$txt['poll_cannot_see'] = 'В данный момент просмотреть результаты голосования невозможно.';

$txt['quick_mod_approve'] = 'Одобрить выделенные';
$txt['quick_mod_remove'] = 'Удалить выделенные';
$txt['quick_mod_lock'] = 'Блокировка/Разблокировка выделенного';
$txt['quick_mod_sticky'] = 'Прикрепить/Открепить выделенные';
$txt['quick_mod_move'] = 'Переместить выделенные в';
$txt['quick_mod_merge'] = 'Соединить выделенные';
$txt['quick_mod_markread'] = 'Пометить выделенные как прочитанные';
$txt['quick_mod_go'] = 'Вперед!';
$txt['quickmod_confirm'] = 'Уверены?';

$txt['spell_check'] = 'Проверка орфографии';

$txt['quick_reply'] = 'Быстрый ответ';
$txt['quick_reply_warning'] = 'Внимание! Тема заблокирована, только администраторы и модераторы могут в ней отвечать';
$txt['quick_reply_verification'] = 'После отправки сообщения произойдёт перенаправление на страницу полного ответа, чтобы подтвердить его %1$s.';
$txt['quick_reply_verification_guests'] = '(требуется для всех гостей)';
$txt['quick_reply_verification_posts'] = '(требуется для всех пользователей у которых менее %1$d сообщений)';
$txt['wait_for_approval'] = 'Обратите внимание: данное сообщение не будет отображаться, пока модератор не одобрит его.';

$txt['notification_enable_board'] = 'Уверены, что хотите получать уведомления при создании новых тем в данном разделе форума?';
$txt['notification_disable_board'] = 'Отключить уведомление?';
$txt['notification_enable_topic'] = 'Уверены, что хотите получать уведомления при появлении новых ответов в этой теме?';
$txt['notification_disable_topic'] = 'Отключить уведомление?';

$txt['report_to_mod'] = 'Сообщить модератору';
$txt['issue_warning_post'] = 'Сделать предупреждение';

$txt['like_post'] = 'Лайк';
$txt['unlike_post'] = 'Анлайк';
$txt['likes'] = 'Лайки';
$txt['liked_by'] = 'Лайкнуто';
$txt['liked_you'] = 'Вы';
$txt['liked_more'] = 'еще';
$txt['likemsg_are_you_sure'] = 'Вам уже понравилось это сообщение, вы уверены, что хотите удалить ваш лайк?';

$txt['unread_topics_visit'] = 'Непрочитанные темы с последнего посещения';
$txt['unread_topics_visit_none'] = 'Нет непрочитанных сообщений с вашего последнего визита. <a href="{unread_all_url}" class="linkbutton">Кликните здесь чтобы увидеть все непрочитанные сообщения</a>';
$txt['unread_topics_all'] = 'Все непрочитанные темы';
$txt['unread_replies'] = 'Темы с непрочитанными ответами';

$txt['who_title'] = 'Кто онлайн';
$txt['who_and'] = ' и ';
$txt['who_viewing_topic'] = ' просматривают эту тему.';
$txt['who_viewing_board'] = ' просматривают этот раздел.';
$txt['who_member'] = 'Пользователь';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 5';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'Гость';
$txt['guests'] = 'Гостей';
$txt['user'] = 'Пользователь';
$txt['users'] = 'Пользователей';
$txt['hidden'] = 'Скрытых';
// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Скрытых';
$txt['buddy'] = 'Друг';
$txt['buddies'] = 'Друзей';
$txt['most_online_ever'] = 'Максимум онлайн за все время';
$txt['most_online_today'] = 'Максимум онлайн сегодня';

$txt['merge_select_target_board'] = 'Выбрать раздел для объединённой темы';
$txt['merge_select_poll'] = 'Выбрать голосование, для объединённой темы';
$txt['merge_topic_list'] = 'Выбрать темы для объединения';
$txt['merge_select_subject'] = 'Название объединённой темы';
$txt['merge_custom_subject'] = 'Выбрать название';
$txt['merge_enforce_subject'] = 'Изменить тему у всех сообщений';
$txt['merge_include_notifications'] = 'Включить уведомления?';
$txt['merge_check'] = 'Объединить?';
$txt['merge_no_poll'] = 'Нет голосования';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Иконка';
$txt['message_icon'] = 'Иконка сообщения';

$txt['smileys_current'] = 'Текущий набор смайлов';
$txt['smileys_none'] = 'Нет смайлов';
$txt['smileys_forum_board_default'] = 'Форум/Раздел по умолчанию';

$txt['search_results'] = 'Результаты поиска';
$txt['search_no_results'] = 'Извините, ничего не найдено';

$txt['totalTimeLogged2'] = ' дней, ';
$txt['totalTimeLogged3'] = ' часов и ';
$txt['totalTimeLogged4'] = ' минут.';
$txt['totalTimeLogged5'] = 'д ';
$txt['totalTimeLogged6'] = 'ч ';
$txt['totalTimeLogged7'] = 'м';

$txt['approve_thereis'] = '<b>Внимание!</b> Ожидает одобрения:'; //Deprecated
$txt['approve_thereare'] = '<b>Внимание!</b> Ожидают одобрения:'; //Deprecated
$txt['approve_member'] = '1'; //Deprecated
$txt['approve_members'] = 'пользователи'; //Deprecated
$txt['approve_members_waiting'] = 'ожидают одобрения'; //Deprecated
$txt['approve_one_member_waiting'] = 'Сейчас <a href="%1$s">один пользователь </a> ожидает одобрения.';
$txt['approve_many_members_waiting'] = 'Сейчас <a href="%1$s">%2$d пользователей</a> ожидают одобрения.';

$txt['notifyboard_turnon'] = 'Хотите получать уведомления о новых темах в этом разделе?';
$txt['notifyboard_turnoff'] = 'Не хотите получать уведомления о новых темах в этом разделе?';

$txt['find_members'] = 'Поиск пользователей';
$txt['find_username'] = 'Отображаемое имя, имя пользователя или e-mail';
$txt['find_buddies'] = 'Отображать только друзей?';
$txt['find_wildcards'] = 'Доступные символы для поиска по маске: *, ?';
$txt['find_no_results'] = 'Ничего не найдено';
$txt['find_results'] = 'Результаты';
$txt['find_close'] = 'Закрыть';

$txt['quickmod_delete_selected'] = 'Удалить выбранные';
$txt['quickmod_split_selected'] = 'Разделить выделенное';

$txt['show_personal_messages_heading'] = 'Новые сообщения';
$txt['show_personal_messages'] = 'У вас <strong>%1$s</strong> непрочитанных персональных сообщений в ящике.<br /><br /><a href="%2$s">Зайдите в свой ящик</a>';

$txt['help_popup'] = 'Небольшая потеря? Позвольте мне объяснить:';

$txt['previous_next_back'] = 'предыдущая тема';
$txt['previous_next_forward'] = 'следующая тема';

$txt['upshrink_description'] = 'Свернуть/Развернуть';

$txt['mark_unread'] = 'Отметить непрочитанной';

$txt['ssi_not_direct'] = 'Пожалуйста, не обращайтесь напрямую к файлу SSI.php через адрес (URL). Возможно, вы захотите использовать путь (%1$s) или добавить ?ssi_function=something.';
$txt['ssi_session_broken'] = 'SSI.php не может загрузить сессию! Возможно, это проблема связана с выходом или другими функциями. Пожалуйста, убедитесь что SSI.php вставлен в самом начале перед всеми другими скриптами!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Предварительный просмотр';
$txt['preview_fetch'] = 'Ожидание предварительного просмотра...';
$txt['pm_error_while_submitting'] = 'Следующие ошибки возникли при попытке отправки сообщения:';
$txt['warning_while_submitting'] = 'Что-то случилось, проверьте это здесь:';
$txt['error_while_submitting'] = 'Необходимо исправить следующую ошибку или ошибки, прежде чем продолжать:';
$txt['error_old_topic'] = 'Предупреждение: в данной теме не было сообщений более %1$d дней.<br />Если не уверены, что хотите ответить, то лучше создайте новую тему.';

$txt['split_selected_posts'] = 'Выбранные сообщения';
$txt['split_selected_posts_desc'] = 'Ниже находятся сообщения, формирующие тему после разделения.';
$txt['split_reset_selection'] = 'снять выделение';

$txt['modify_cancel'] = 'Отменить';
$txt['mark_read_short'] = 'Пометить прочитанными';

$txt['hello_member_ndt'] = 'Здравствуйте,';

$txt['unapproved_posts'] = 'Неодобренные сообщения (Тем: %1$d, Сообщений: %2$d)';

$txt['ajax_in_progress'] = 'Загружается...';

$txt['mod_reports_waiting'] = 'В настоящее время отчет %1$d у модератора на рассмотрении.';

$txt['new_posts_in_category'] = 'Кликните, чтобы увидеть новые сообщения в %1$s';
$txt['verification'] = 'Визуальная проверка';
$txt['visual_verification_hidden'] = 'Пожалуйста, оставьте это поле пустым';
$txt['visual_verification_description'] = 'Наберите символы, которые изображены на картинке';
$txt['visual_verification_sound'] = 'Прослушать';
$txt['visual_verification_request_new'] = 'Запросить другое изображение';

// @todo Send email strings - should move?
$txt['send_email'] = 'Отправить e-mail';
$txt['send_email_disclosed'] = 'Обратите внимание: ваш адрес будет виден получателю.';
$txt['send_email_subject'] = 'Тема сообщения';

$txt['ignoring_user'] = 'Вы игнорируете данного пользователя.';
$txt['show_ignore_user_post'] = '<em>[Показать сообщение.]</em>';

$txt['spider'] = 'Паук';
$txt['spiders'] = 'Пауков';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Скачано';
$txt['filesize'] = 'Размер файла';
$txt['subscribe_webslice'] = 'Добавить веб-фрагмент в браузер';

// Restore topic
$txt['restore_topic'] = 'Восстановить тему';
$txt['restore_message'] = 'Восстановить сообщение';
$txt['quick_mod_restore'] = 'Восстановить выделенные сообщения';

// Editor prompt.
$txt['prompt_text_email'] = 'Введите электронный адрес.';
$txt['prompt_text_ftp'] = 'Введите FTP адрес.';
$txt['prompt_text_url'] = 'Введите адрес ссылки.';
$txt['prompt_text_img'] = 'Ведите местонахождение картинки.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Удалить';

// Bad Behavior
$txt['badbehavior_blocked'] = '<a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a> заблокировал %1$s попыток доступа за последние 7 дней.';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Шаблонов: ';
$txt['debug_subtemplates'] = 'Дополнительных шаблонов: ';
$txt['debug_language_files'] = 'Языковых файлов: ';
$txt['debug_stylesheets'] = 'Файлов стилей: ';
$txt['debug_javascript'] = 'Скрипты:';
$txt['debug_files_included'] = 'Подключено файлов: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'показать';
$txt['debug_cache_hits'] = 'Попаданий в кэш: ';
$txt['debug_cache_seconds_bytes'] = '%1$s сек. - %2$s байт';
$txt['debug_cache_seconds_bytes_total'] = '%1$s сек. для %2$s байт';
$txt['debug_queries_used'] = 'Запросов в БД: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Запросов в БД: %1$d, %2$d предупреждений.';
$txt['debug_query_in_line'] = 'файл <em>%1$s</em>, строка <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'длительность %1$s сек.';
$txt['debug_query_which_took_at'] = 'что заняло %1$s сек. и запросов: %2$s.';
$txt['debug_show_queries'] = '[Показать запросы]';
$txt['debug_hide_queries'] = '[Скрыть запросы]';
$txt['debug_tokens'] = 'Токены:';
$txt['debug_browser'] = 'ID браузера:';
$txt['debug_hooks'] = 'Вызвано хуками:';
$txt['debug_system_type'] = 'Система:';
$txt['debug_server_load'] = 'Сервер загрузки:';
$txt['debug_script_mem_load'] = 'Скрипт использования памяти:';
$txt['debug_script_cpu_load'] = 'Скрипт времени CPU (пользователь/система):';

// Video embedding
$txt['preview_image'] = 'Превью видео';
$txt['ctp_video'] = 'Один клик для проигрывания видео, два - для загрузки';
$txt['hide_video'] = 'Показать/Скрыть видео';
$txt['youtube'] = 'YouTube видео:';
$txt['vimeo'] = 'Vimeo видео:';
$txt['dailymotion'] = 'Dailymotion видео:';

// Spoiler BBC
$txt['spoiler'] = 'Спойлер (кликнуть чтобы показать/скрыть)';

$txt['ok_uppercase'] = 'ОК';

// Title of box for warnings that admins should see
$txt['admin_warning_title'] = 'Предупреждение';

$txt['via'] = 'через';
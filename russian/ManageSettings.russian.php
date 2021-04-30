<?php
// Version: 1.0; ManageSettings

$txt['modSettings_desc'] = 'This page allows you to change the settings of features and basic options in your forum.  Please see the <a href="%1$s">theme settings</a> for more options.  Click the help icons for more information about a setting.';
$txt['security_settings_desc'] = 'В данном разделе можно выставить настройки безопасности и модерирования форума, включая настройки антиспама.';
$txt['modification_settings_desc'] = 'Данный раздел содержит настройки модов, установленных на форуме';

$txt['modification_no_misc_settings'] = 'There are no add-ons installed that have added any settings to this area yet.';

$txt['allow_guestAccess'] = 'Разрешить гостям просматривать форум';
$txt['userLanguage'] = 'Разрешить пользователям выбирать язык форума';
$txt['allow_editDisplayName'] = 'Разрешить пользователям изменять отображаемое имя';
$txt['allow_hideOnline'] = 'Разрешить пользователям скрывать свой онлайн-статус';
$txt['titlesEnable'] = 'Разрешить надпись над аватаром';
$txt['enable_buddylist'] = 'Разрешить список друзей/игнорируемых';
$txt['enable_unwatch'] = 'Enable unwatching of topics';
$txt['default_personal_text'] = 'Default personal text';
$txt['default_personal_text_note'] = 'Personal text to assign to newly registered members.';
$txt['time_format'] = 'Формат времени по умолчанию';
$txt['setting_time_offset'] = 'Разница во времени <div class="smalltext">(изменяется и в профилях пользователей.)</div>';
$txt['setting_time_offset_note'] = '(added to the member specific option)';
$txt['setting_default_timezone'] = 'Временная зона сервера';
$txt['failed_login_threshold'] = 'Количество неудачных попыток входа';
$txt['loginHistoryDays'] = 'Days to keep login history';
$txt['lastActive'] = 'Время, в течение которого пользователь считается активным';
$txt['trackStats'] = 'Включить подробную статистику';
$txt['hitStats'] = 'Включить статистику просмотров (статистика должна быть включена)';
$txt['enableCompressedOutput'] = 'Использовать сжатие трафика';
$txt['disableTemplateEval'] = 'Отключить проверку шаблонов темы оформления';
$txt['databaseSession_enable'] = 'Хранить сессии в базе данных';
$txt['databaseSession_loose'] = 'Разрешать браузерам возвращаться на кэшированную страницу';
$txt['databaseSession_lifetime'] = 'Продолжительность сессии в секундах:';
$txt['enableErrorLogging'] = 'Включить протоколирование ошибок';
$txt['enableErrorQueryLogging'] = 'Включать в лог ошибок текст SQL-запроса к базе данных';
$txt['pruningOptions'] = 'Разрешить выполнять очистку логов';
$txt['pruneErrorLog'] = 'Remove error log entries older than';
$txt['pruneModLog'] = 'Remove moderation log entries older than';
$txt['pruneBanLog'] = 'Remove ban hit log entries older than';
$txt['pruneReportLog'] = 'Remove report to moderator log entries older than';
$txt['pruneScheduledTaskLog'] = 'Remove scheduled task log entries older than';
$txt['pruneSpiderHitLog'] = 'Remove search engine hit logs older than';
$txt['pruneBadbehaviorLog'] = 'Remove Bad Behavior logs older than';
$txt['cookieTime'] = 'Default login cookies length';
$txt['localCookies'] = 'Enable local storage of cookies';
$txt['localCookies_note'] = '(SSI won\'t work well with this on)';
$txt['globalCookies'] = 'Use subdomain independent cookies';
$txt['globalCookies_note'] = '(turn off local cookies first!)';
$txt['globalCookiesDomain'] = 'Main domain used for subdomain independent cookies';
$txt['globalCookiesDomain_note'] = '(enable subdomain independent cookies first!<br />The domain could be for example: "website.com" or "website.co.uk" without http:// or slashes)';
$txt['invalid_cookie_domain'] = 'The domain introduced seems to be invalid, please check it and save again.';
$txt['secureCookies'] = 'Force cookies to be secure';
$txt['secureCookies_note'] = '(This only applies if you are using HTTPS - don\'t use otherwise!)';
$txt['httponlyCookies'] = 'Force cookies to be made accessible only through the HTTP protocol';
$txt['httponlyCookies_note'] = '(Cookies won\'t be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks.)';
$txt['admin_session_lifetime'] = 'Number of minutes an admin session stays active';
$txt['auto_admin_session'] = 'Automatically start an admin session on logon';
$txt['securityDisable'] = 'Отключить проверку пароля при входе в админку';
$txt['securityDisable_moderate'] = 'Disable moderation security';
$txt['send_validation_onChange'] = 'Требовать одобрения учётной записи после смены электронного адреса';
$txt['approveAccountDeletion'] = 'Запрашивать одобрение админа при удалении пользователем своего аккаунта';
$txt['autoOptMaxOnline'] = 'Maximum users online when optimizing';
$txt['autoFixDatabase'] = 'Автоматически восстанавливать поврежденные таблицы';
$txt['allow_disableAnnounce'] = 'Разрешить пользователям отказываться от уведомлений форума';
$txt['disallow_sendBody'] = 'Не отправлять текст сообщения в уведомлениях';
$txt['jquery_source'] = 'Source for the jQuery Library';
$txt['jquery_local'] = 'Локаль';
$txt['jquery_cdn'] = 'Google CDN';
$txt['jquery_auto'] = 'Auto';
$txt['jquery_version'] = 'Enter the version level to use eg 1.11.1';
$txt['jquery_default'] = 'Specify a version of jQuery to use with ElkArte';
$txt['jqueryui_default'] = 'Specify a version of jQueryUI to use with ElkArte';
$txt['jquery_custom_after'] = 'Local copy looks for jquery-<strong>X.XX.X</strong>.min.js';
$txt['jqueryui_custom_after'] = 'Local copy looks for jquery-ui-<strong>X.XX.X</strong>.min.js';
$txt['minify_css_js'] = 'Minify Javascript and CSS files';
$txt['enable_contactform'] = 'Enable contact form';
$txt['contact_form_disabled'] = 'Запретить';
$txt['contact_form_registration'] = 'Show only at registration';
$txt['contact_form_menu'] = 'Show in the menu';
$txt['queryless_urls'] = 'Search engine friendly URLs';
$txt['queryless_urls_note'] = 'Apache/Lighttpd only';
$txt['queryless_urls_work'] = 'This feature will work on your server.';
$txt['queryless_urls_notwork'] = 'This feature will not work on your server.';
$txt['enableReportPM'] = 'Разрешить жалобы на личные сообщения';
$txt['antispam_PM'] = 'Personal Message Limits';
$txt['max_pm_recipients'] = 'Maximum number of recipients allowed in a personal message';
$txt['max_pm_recipients_note'] = '(0 for no limit, admins are exempt)';
$txt['compactTopicPagesEnable'] = 'Ограничить количество отображаемых страниц';
$txt['contiguous_page_display'] = 'Формат отображения нескольких страниц:';
$txt['to_display'] = 'для отображения';
$txt['todayMod'] = 'Разрешить функцию &quot;Сегодня&quot;';
$txt['today_disabled'] = 'Запретить';
$txt['today_only'] = 'Только Сегодня';
$txt['yesterday_today'] = 'Сегодня и Вчера';
$txt['relative_time'] = 'Relative Time';
$txt['onlineEnable'] = 'Отображать статус онлайн/оффлайн в сообщениях пользователей';
$txt['enableVBStyleLogin'] = 'Показывать форму быстрой авторизации на каждой странице';
$txt['defaultMaxMembers'] = 'Количество пользователей на страницу (в списке пользователей)';
$txt['displayMemberNames'] = 'Display the member\'s name instead of "My Account" on the profile account button';
$txt['timeLoadPageEnable'] = 'Отображать время, затраченное на создание страницы';
$txt['disableHostnameLookup'] = 'Не отображать названия хостов пользователей';
$txt['who_enabled'] = 'Отображать список "Сейчас на форуме"';
$txt['meta_keywords'] = 'Meta keywords associated with forum';
$txt['meta_keywords_note'] = 'For search engines. Leave blank for default.';
$txt['settings_error'] = 'Warning: Updating of Settings.php failed, the settings cannot be saved.';
$txt['core_settings_saved'] = 'The settings were successfully saved';

$txt['karmaMode'] = 'Функция кармы';
$txt['karma_options'] = 'Отменить|Отображать общую карму|Отображать отдельно плюс/минус';
$txt['karmaMinPosts'] = 'Минимальное количество сообщений для изменения кармы пользователей';
$txt['karmaWaitTime'] = 'Время ожидания в часах';
$txt['karmaTimeRestrictAdmins'] = 'Ограничить администраторов временем ожидания';
$txt['karmaDisableSmite'] = 'Disable the ability for memebers to smite';
$txt['karmaLabel'] = 'Название кармы';
$txt['karmaApplaudLabel'] = 'Метка для прибавления кармы';
$txt['karmaSmiteLabel'] = 'Метка для уменьшения кармы';

$txt['likes_enabled'] = 'Enable Likes';
$txt['likeMinPosts'] = 'Set the minimum number of posts a member needs in order to like a post';
$txt['likeWaitTime'] = 'Set wait time period in minutes';
$txt['likeWaitCount'] = 'Set the maximum number of likes/unlikes the member can do in the above time period';
$txt['likeRestrictAdmins'] = 'Restrict administrators to limits';
$txt['likeAllowSelf'] = 'Allow members to like their own posts';
$txt['likeDisplayLimit'] = 'Set the maximum number of "liked by" names to display in the topic view, 0 for no limit, -1 to disable';

$txt['caching_information'] = 'ElkArte supports caching through the use of accelerators. The currently supported accelerators include:
<ul class="bbc_list">
	<li>APC</li>
	<li>eAccelerator</li>
	<li>Turck MMCache</li>
	<li>Memcached</li>
	<li>Zend Platform/Performance Suite (Not Zend Optimizer)</li>
	<li>XCache</li>
</ul>
Caching will work best if you have PHP compiled with one of the above optimizers, or have memcache available. If you do not have any optimizer installed file based caching will be used.';
$txt['detected_accelerators'] = 'The following accelerators have been detected: <strong class="success">%1$s</strong>';

$txt['cache_enable'] = 'Уровень кэширования';
$txt['cache_off'] = 'Кэширование отключено';
$txt['cache_level1'] = 'Уровень 1 (Рекомендуется)';
$txt['cache_level2'] = 'Уровень 2';
$txt['cache_level3'] = 'Уровень 3 (Не рекомендуется)';
$txt['cache_memcached'] = 'Настройка Memcache:';
$txt['cache_accelerator'] = 'Caching Accelerator';
$txt['cache_uid'] = 'Cache Accelerator Userid';
$txt['cache_password'] = 'Cache Accelerator Password';
$txt['default_cache'] = 'File based caching';
$txt['apc_cache'] = 'APC';
$txt['eAccelerator_cache'] = 'eAccelerator';
$txt['mmcache_cache'] = 'Turck MMCache';
$txt['memcached_cache'] = 'Memcached';
$txt['zend_cache'] = 'Zend Platform/Performance Suite';
$txt['xcache_cache'] = 'XCache';
$txt['cache_conflict'] = 'You are using PHP\'s opcache with ElkArte\'s file based caching.  For best results you should blacklist ElkArte\'s cache directory (' . CACHEDIR . '/*) using the opcache.blacklist_filename directive.';

$txt['loadavg_warning'] = '<span class="error">Обратите внимание: приведенные ниже настройки необходимо изменять с осторожностью. Установка для любого из этих параметров слишком низкого значения может привести к полной <strong>неработоспособности</strong> форума! Текущая средняя нагрузка: <strong>%01.2f</strong></span>';
$txt['loadavg_enable'] = 'Включить балансировку нагрузки по среднему значению (load averages)';
$txt['loadavg_auto_opt'] = 'Порог для отключения автоматической оптимизации базы данных';
$txt['loadavg_search'] = 'Порог для отключения поиска';
$txt['loadavg_allunread'] = 'Порог для отключения функции "Все непрочитанные сообщения"';
$txt['loadavg_unreadreplies'] = 'Порог для отключения функции "Непрочитанные ответы"';
$txt['loadavg_show_posts'] = 'Порог для отключения функции "Показать сообщения пользователя"';
$txt['loadavg_userstats'] = 'Threshold to disabling showing user statistics';
$txt['loadavg_bbc'] = 'Threshold to disabling BBC formatting when showing posts';
$txt['loadavg_forum'] = 'Порог для <strong>полного</strong> отключения форума';
$txt['loadavg_disabled_windows'] = '<span class="error">Балансировка нагрузки не поддерживается Windows-серверами.</span>';
$txt['loadavg_disabled_conf'] = '<span class="error">Балансировка нагрузки отключена в настройках вашего хостинга.</span>';

$txt['setting_password_strength'] = 'Требования к длине пароля пользователей';
$txt['setting_password_strength_low'] = 'Низкое &mdash; минимум 4 символа';
$txt['setting_password_strength_medium'] = 'Medium - cannot contain user name';
$txt['setting_password_strength_high'] = 'Высокое &mdash; сочетание различных символов';
$txt['setting_enable_password_conversion'] = 'Allow password hash conversion';

$txt['antispam_Settings'] = 'Борьба со спамом';
$txt['antispam_Settings_desc'] = 'Здесь можно настроить и активировать проверку контрольным кодом для защиты форума от ботов и спама.';
$txt['setting_reg_verification'] = 'Требовать проверку на странице регистрации';
$txt['posts_require_captcha'] = 'Количество сообщений, до достижения которого требуется проверка кодом';
$txt['posts_require_captcha_desc'] = '(0 &mdash; без ограничений, на модераторов не распространяется)';
$txt['search_enable_captcha'] = 'Использовать код проверки при поиске гостями';
$txt['setting_guests_require_captcha'] = 'Гости смогут воспользоваться поиском только после прохождения проверки';
$txt['setting_guests_require_captcha_desc'] = '(Устанавливается автоматически, если ниже указано минимальное количество сообщений)';
$txt['guests_report_require_captcha'] = 'Гости должны проходить визуальную проверку при каждой отправке сообщения';

$txt['badbehavior_title'] = 'Bad Behavior Settings';
$txt['badbehavior_details'] = 'Детали';
$txt['badbehavior_desc'] = 'Bad Behavior is designed to run as early as possible to throw out spam bots before they have the opportunity to vandalize your site or even to scrape your pages for email addresses and forms to fill out.<br />Bad Behavior also blocks many email address harvesters, resulting in less email spam, and many automated Web site cracking tools, helping to improve your Web site\'s overall security.';
$txt['badbehavior_wl_desc'] = 'Inappropriate whitelisting WILL expose you to spam, or cause Bad Behavior to stop functioning entirely! <strong>DO NOT WHITELIST</strong> unless you are 100% CERTAIN that you should and know what you are doing.';
$txt['badbehavior_enabled'] = 'Enable Bad Behavior Checking';
$txt['badbehavior_enabled_desc'] = 'Check to enable Bad Behavior protection on your site.';
$txt['badbehavior_strict'] = 'Enable Strict Operating Mode';
$txt['badbehavior_logging'] = 'Enable Logging';
$txt['badbehavior_offsite_forms'] = 'Allow Offsite Forms';
$txt['badbehavior_verbose'] = 'Enable Verbose Logging';
$txt['badbehavior_verbose_desc'] = 'It is recommended to leave Verbose mode off';
$txt['badbehavior_httpbl_key'] = 'http:BL API Key';
$txt['badbehavior_httpbl_key_invalid'] = 'The supplied http:BL API Key is not valid';
$txt['badbehavior_httpbl_threat'] = 'http:BL Threat Level';
$txt['badbehavior_httpbl_threat_desc'] = '(default 25)';
$txt['badbehavior_httpbl_maxage'] = 'http:BL Maximum Age';
$txt['badbehavior_httpbl_maxage_desc'] = '(default 30)';
$txt['badbehavior_eucookie'] = 'Check to enable EU Cookie Handling';
$txt['badbehavior_reverse_proxy'] = 'Enable Reverse Proxy';
$txt['badbehavior_reverse_proxy_header'] = 'Reverse Proxy Header';
$txt['badbehavior_reverse_proxy_header_desc'] = '(default X-Forwarded-For)';
$txt['badbehavior_reverse_proxy_addresses'] = 'Reverse Proxy Addresses';
$txt['badbehavior_default_on'] = '(default on)';
$txt['badbehavior_default_off'] = '(default off)';
$txt['badbehavior_whitelist_title'] = 'Whitelisting Options';
$txt['badbehavior_postcount_wl'] = 'Whitelist users over a certain post count';
$txt['badbehavior_postcount_wl_desc'] = '(0 to disable)';
$txt['badbehavior_ip_wl'] = 'Whitelist by IP address';
$txt['badbehavior_ip_wl_desc'] = 'IP Address (CIDR Format 127.0.0.1 or 127.0.0.0/24)';
$txt['badbehavior_ip_wl_add'] = 'Add another IP address';
$txt['badbehavior_useragent_wl'] = 'Whitelist by User Agent string';
$txt['badbehavior_useragent_wl_desc'] = 'Example: Mozilla/4.0 (It\'s me, let me in)';
$txt['badbehavior_useragent_wl_add'] = 'Add another User Agent string';
$txt['badbehavior_url_wl'] = 'Whitelist by URL';
$txt['badbehavior_url_wl_desc'] = 'Example: /subscriptions.php';
$txt['badbehavior_url_wl_add'] = 'Add another URL';
$txt['badbehavior_wl_comment'] = 'Comment';

$txt['configure_emptyfield'] = 'Verification Empty Field';
$txt['configure_emptyfield_desc'] = '<span class="smalltext">Below you can enable the empty field verification method.  This will insert a hidden field that should stay empty which will be used to trick spam bots into erroneously posting information. Although this can be used alone, it\'s best enabled with the CAPTCHA verification.</span>';
$txt['enable_emptyfield'] = 'Enable empty field verification';
$txt['configure_verification_means'] = 'Настройка метода проверки кодом';
$txt['setting_qa_verification_number'] = 'Количество проверочных вопросов';
$txt['setting_qa_verification_number_desc'] = '(0 &mdash; запретить; или введите количество)';
$txt['configure_verification_means_desc'] = '<span class="smalltext">Включение проверки антиспама требуется для отсеивания различных ботов при вводе данных. Помните, что пользователь будет вынужден пройти <em>ВСЕ</em> включенные проверки.</span>';
$txt['setting_visual_verification_num_chars'] = 'Number of characters in the verification image';
$txt['setting_visual_verification_type'] = 'Сложность изображения визуальной проверки';
$txt['setting_visual_verification_type_desc'] = 'Более сложное изображение тяжелее обходить и ботам и людям';
$txt['setting_image_verification_off'] = 'Нет';
$txt['setting_image_verification_vsimple'] = 'Очень простое &mdash; Обычный текст на изображении';
$txt['setting_image_verification_simple'] = 'Простое &mdash; Цветные символы, без шума';
$txt['setting_image_verification_medium'] = 'Среднее &mdash; Накладывать шум и линии на цветные символы';
$txt['setting_image_verification_high'] = 'Высокое &mdash; Наклонные символы, со значительными шумами и линиями';
$txt['setting_image_verification_extreme'] = 'Очень высокое &mdash; Наклонные символы, шум, линии и блоки';
$txt['setting_image_verification_sample'] = 'Пример';
$txt['setting_image_verification_nogd'] = '<strong>Обратите внимание:</strong> так как на данном сервере не установлена библиотека GD, то настройки сложности ничего не изменят.';
$txt['setup_verification_questions'] = 'Проверочные вопросы';
$txt['setup_verification_questions_desc'] = '<span class="smalltext">Если хотите, чтобы пользователи отвечали на проверочные вопросы для отсеивания ботов, то введите вопросы и ответы на них в таблице ниже. Можно использовать BB-теги для форматирования вопросов, они не учитываются системой. Ответы от пользователей буду приниматься в регистронезависимом виде.</span>';
$txt['setup_verification_question'] = 'Вопрос';
$txt['setup_verification_answer'] = 'Ответ';
$txt['setup_verification_add_more'] = 'Добавить еще один вопрос';
$txt['setup_verification_add_more_answers'] = 'Add another answer';

$txt['moderation_settings'] = 'Настройки системы предупреждений';
$txt['setting_warning_enable'] = 'Разрешить систему предупреждения пользователей';
$txt['warning_enable'] = '<strong>User Warning System</strong><br />This feature enables members of the admin and moderation team to issue warnings to members - and to use a members warning level to determine the actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define which groups may assign warnings to members. Warning levels can be adjusted from a member\'s profile.';
$txt['setting_warning_watch'] = 'Warning level for user watch';
$txt['setting_warning_watch_note'] = 'The user warning level after which a user watch is put in place - 0 to disable.';
$txt['setting_warning_moderate'] = 'Warning level for post moderation';
$txt['setting_warning_moderate_note'] = 'The user warning level after which a user has all posts moderated - 0 to disable.';
$txt['setting_warning_mute'] = 'Warning level for user muting';
$txt['setting_warning_mute_note'] = 'The user warning level after which a user cannot post any further - 0 to disable.';
$txt['setting_user_limit'] = 'Maximum user warning points per day';
$txt['setting_user_limit_note'] = 'This value is the maximum amount of warning points a single moderator can assign to a user in a 24 hour period - 0 for no limit.';
$txt['setting_warning_decrement'] = 'Warning points that are decreased every 24 hours';
$txt['setting_warning_decrement_note'] = 'Only applies to users not warned within last 24 hours - set to 0 to disable.';
$txt['setting_warning_show'] = 'Users who can see warning status';
$txt['setting_warning_show_note'] = 'Determines who can see the warning level of users on the forum.';
$txt['setting_warning_show_mods'] = 'Только модераторы';
$txt['setting_warning_show_user'] = 'Модераторы и предупреждаемые пользователи';
$txt['setting_warning_show_all'] = 'Все пользователи';

$txt['signature_settings'] = 'Настройка подписей';
$txt['signature_settings_desc'] = 'Use the settings on this page to decide how member signatures should be treated.';
$txt['signature_settings_warning'] = 'Note that settings are not applied to existing signatures by default.<br /><a class="button_submit" href="%1$s">Run the process now</a>';
$txt['signature_settings_applied'] = 'The updated rules have been applied to the existing signatures.';
$txt['signature_enable'] = 'Разрешить подписи';
$txt['signature_max_length'] = 'Maximum allowed characters';
$txt['signature_max_lines'] = 'Maximum amount of lines';
$txt['signature_max_images'] = 'Maximum image count';
$txt['signature_max_images_note'] = '(0 for no max - excludes smileys)';
$txt['signature_allow_smileys'] = 'Разрешать смайлы в подписях';
$txt['signature_max_smileys'] = 'Maximum smiley count';
$txt['signature_max_image_width'] = 'Maximum width of signature images (pixels)';
$txt['signature_max_image_height'] = 'Maximum height of signature images (pixels)';
$txt['signature_max_font_size'] = 'Maximum font size allowed in signatures (pixels)';
$txt['signature_bbc'] = 'Разрешить BB-теги';

$txt['groups_pm_send'] = 'Member groups allowed to send personal messages';
$txt['pm_posts_verification'] = 'Post count under which users must pass verification when sending personal messages';
$txt['pm_posts_verification_note'] = '(0 for no limit, admins are exempt)';
$txt['pm_posts_per_hour'] = 'Number of personal messages a user may send in an hour';
$txt['pm_posts_per_hour_note'] = '(0 &mdash; без ограничений, на модераторов не распространяется)';

$txt['custom_profile_title'] = 'Расширенные поля';
$txt['custom_profile_desc'] = 'В данном разделе можно создавать индивидуальные поля профиля с учетом требований данного форума.';
$txt['custom_profile_active'] = 'Активировать';
$txt['custom_profile_order'] = 'Field Order';
$txt['custom_profile_fieldname'] = 'Название поля';
$txt['custom_profile_fieldtype'] = 'Тип поля';
$txt['custom_profile_make_new'] = 'Новое поле';
$txt['custom_profile_none'] = 'Ни одного поля пока не создано!';
$txt['custom_profile_icon'] = 'Иконка';
$txt['custom_profile_sort'] = 'To change the order of the custom fields, simply drag and drop it to the location you want.';

$txt['custom_profile_type_text'] = 'Текст';
$txt['custom_profile_type_url'] = 'Адрес (URL)';
$txt['custom_profile_type_date'] = 'Дата';
$txt['custom_profile_type_email'] = 'E-mail';
$txt['custom_profile_type_color'] = 'Цвет';
$txt['custom_profile_type_textarea'] = 'Многострочный текст';
$txt['custom_profile_type_select'] = 'Список выбора';
$txt['custom_profile_type_radio'] = 'Выбор варианта';
$txt['custom_profile_type_check'] = 'Переключатель';
$txt['custom_profile_reordered'] = 'Profile fields successfully reordered';

$txt['custom_add_title'] = 'Добавить поле профиля';
$txt['custom_edit_title'] = 'Изменить поле профиля';
$txt['custom_edit_general'] = 'Настройки отображения';
$txt['custom_edit_input'] = 'Настройки ввода';
$txt['custom_edit_advanced'] = 'Расширенные настройки';
$txt['custom_edit_name'] = 'Название';
$txt['custom_edit_desc'] = 'Описание';
$txt['custom_edit_profile'] = 'Раздел профиля';
$txt['custom_edit_profile_desc'] = 'Раздел профиля для изменения настроек.';
$txt['custom_edit_profile_none'] = 'Нет';
$txt['custom_edit_registration'] = 'Отображать при регистрации';
$txt['custom_edit_registration_disable'] = 'Нет';
$txt['custom_edit_registration_allow'] = 'Да';
$txt['custom_edit_registration_require'] = 'Да, обязательное';
$txt['custom_edit_display'] = 'Отображать при просмотре темы';
$txt['custom_edit_memberlist'] = 'Show on Member List View';
$txt['custom_edit_picktype'] = 'Тип поля';

$txt['custom_edit_max_length'] = 'Максимальная длина';
$txt['custom_edit_max_length_desc'] = '(0 &mdash; без ограничений)';
$txt['custom_edit_dimension'] = 'Измерение';
$txt['custom_edit_dimension_row'] = 'Рядов';
$txt['custom_edit_dimension_col'] = 'Столбцов';
$txt['custom_edit_bbc'] = 'Разрешить BB-теги';
$txt['custom_edit_options'] = 'Настройки';
$txt['custom_edit_options_desc'] = 'Оставьте поле выбора пустым для удаления. Будет выбран параметр по умолчанию.';
$txt['custom_edit_options_more'] = 'Дополнительно';
$txt['custom_edit_options_no_default'] = 'Не следует задавать значение по умолчанию.';
$txt['custom_edit_default'] = 'Значение по умолчанию';
$txt['custom_edit_active'] = 'Активное';
$txt['custom_edit_active_desc'] = 'Если не выбрать, данное поле никому отображаться не будет.';
$txt['custom_edit_privacy'] = 'Права на изменение и просмотр';
$txt['custom_edit_privacy_desc'] = 'Кто может просматривать и изменять данное поле.';
$txt['custom_edit_privacy_all'] = 'Пользователи могут просматривать, владелец изменять';
$txt['custom_edit_privacy_see'] = 'Пользователи могут просматривать, только администратор может изменять';
$txt['custom_edit_privacy_owner'] = 'Пользователи не видят это поле; владелец и администраторы могут изменять';
$txt['custom_edit_privacy_none'] = 'Данное поле видно только администратору';
$txt['custom_edit_can_search'] = 'Выдается в поиске';
$txt['custom_edit_can_search_desc'] = 'Can this field be searched from the members list?';
$txt['custom_edit_mask'] = 'Маска';
$txt['custom_edit_mask_desc'] = 'Текстовым полям можно задать маску для проверки вводимых данных.';
$txt['custom_edit_mask_email'] = 'Проверка e-mail';
$txt['custom_edit_mask_number'] = 'Числовая';
$txt['custom_edit_mask_nohtml'] = 'Без HTML';
$txt['custom_edit_mask_regex'] = 'Регулярные выражения в маске (Для экспертов)';
$txt['custom_edit_enclose'] = 'Показывать с дополнительным текстом (По желанию)';
$txt['custom_edit_enclose_desc'] = '<strong>Настоятельно</strong> рекомендуется использовать маску для проверки вводимых данных.';

$txt['custom_edit_placement'] = 'Выберите размещение';
$txt['custom_edit_placement_standard'] = 'Стандартное (с названием поля)';
$txt['custom_edit_placement_withicons'] = 'Рядом с иконками';
$txt['custom_edit_placement_abovesignature'] = 'Над подписью';
$txt['custom_profile_placement'] = 'Размещение';
$txt['custom_profile_placement_standard'] = 'Стандартное';
$txt['custom_profile_placement_withicons'] = 'Рядом с иконками';
$txt['custom_profile_placement_abovesignature'] = 'Над подписью';

// Use numeric entities in the string below!
$txt['custom_edit_delete_sure'] = 'Уверены, что хотите удалить это поле? Все текущие данные пользователей будут потеряны!';

$txt['standard_profile_title'] = 'Стандартные поля';
$txt['standard_profile_field'] = 'Поле';

$txt['core_settings_welcome_msg'] = 'Добро пожаловать на ваш новый форум';
$txt['core_settings_welcome_msg_desc'] = 'Для начала предлагаем выбрать, какие возможности форума необходимо включить. Выбирайте только то, что действительно необходимо!'; // don't scream from the beginning :P
$txt['core_settings_item_cd'] = 'Календарь';
$txt['core_settings_item_cd_desc'] = 'Возможность просматривать и создавать события, дни рождения и многое другое.';
$txt['core_settings_item_dr'] = 'Черновики';
$txt['core_settings_item_dr_desc'] = 'Enabling this feature will allow users to save drafts of their posts so they can return later to post them.';
$txt['core_settings_item_cp'] = 'Расширенные поля профиля';
$txt['core_settings_item_cp_desc'] = 'Возможность скрывать стандартные поля профиля, добавлять дополнительные поля при регистрации и создавать новые поля профиля для форума.';
$txt['core_settings_item_ih'] = 'Integration Hooks Management';
$txt['core_settings_item_ih_desc'] = 'This feature allows you to enable or disable any integration hooks added by addons. Changing hooks can prevent your forum from working properly, so use this feature only if you know what you are doing.';
$txt['core_settings_item_k'] = 'Карма';
$txt['core_settings_item_k_desc'] = 'Возможность отображать популярность (или уровень доверия) пользователей. Если разрешено, пользователи cмогут изменять карму друг другу.';
$txt['core_settings_item_pe'] = 'Post by Email Management';
$txt['core_settings_item_pe_desc'] = 'This will allow users of your forum to reply to emailed notifications and personal messages and have them post directly as a reply to the appropriate thread or PM.  This provides a familiar mailing list feeling.  Use of this functionality will require additional setup steps on your hosting provider.';
$txt['core_settings_item_l'] = 'Лайки';
$txt['core_settings_item_l_desc'] = 'Likes is a feature that allows members to like a post to show their approval and popularity of the message content.';
$txt['core_settings_item_ml'] = 'Логи модерации';
$txt['core_settings_item_ml_desc'] = 'Возможность протоколировать все действия модераторов на форуме.';
$txt['core_settings_item_pm'] = 'Премодерация сообщений';
$txt['core_settings_item_pm_desc'] = 'Сообщения и темы от конкретных пользователей или групп в выбранных разделах будут публиковаться только после проверки и одобрения. После включения данной возможности настройте соответствующие права доступа.';
$txt['core_settings_item_ps'] = 'Платная подписка';
$txt['core_settings_item_ps_desc'] = 'Возможность менять членство в группах, а также изменять права доступа с помощью денежных перечислений.';
$txt['core_settings_item_rg'] = 'Генератор отчетов';
$txt['core_settings_item_rg_desc'] = 'Возможность создавать отчеты (которые можно распечатать) с перечислением текущих настроек форума.';
$txt['core_settings_item_sp'] = 'Поисковые системы';
$txt['core_settings_item_sp_desc'] = 'Возможность отслеживать активность поисковых систем на форуме.';
$txt['core_settings_item_w'] = 'Система предупреждений';
$txt['core_settings_item_w_desc'] = 'Возможность выдавать пользователям предупреждения, с дальнейшим автоматическим ограничением некоторых прав пользователей, в зависимости от увеличения уровня выданных им предупреждений. Обратите внимание: функция &laquo;Премодерация сообщений&raquo; должна быть включена.';
$txt['core_settings_switch_on'] = 'Нажмите для включения';
$txt['core_settings_switch_off'] = 'Нажмите для отключения';
$txt['core_settings_enabled'] = 'Включено';
$txt['core_settings_disabled'] = 'Выключено';

$txt['languages_lang_name'] = 'Название языка';
$txt['languages_locale'] = 'Локаль';
$txt['languages_default'] = 'Выбран';
$txt['languages_users'] = 'Пользователей';
$txt['language_settings_writable'] = 'Предупреждение: Settings.php не доступен для записи, настройки языка по умолчанию не будут сохранены.';
$txt['edit_languages'] = 'Изменить языки';
$txt['lang_file_not_writable'] = '<strong>Предупреждение:</strong> Главный языковой файл (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['lang_entries_not_writable'] = '<strong>Предупреждение:</strong> Языковой файл который вы пытаетесь изменить (%1$s) не доступен для записи. Вы должны сделать его записываемым до внесения изменений.';
$txt['languages_ltr'] = 'Справа налево';

$txt['add_language'] = 'Добавить язык';
$txt['add_language_elk'] = 'Download from ElkArte Languages Repository';
$txt['add_language_elk_browse'] = 'Наберите название языка для поиска или оставьте пустым для отображения всех доступных';
$txt['add_language_elk_install'] = 'Установить';
$txt['add_language_elk_found'] = 'Следующие языки были найдены. Нажмите на ссылку "Установить" для установки необходимого языка, после чего воспользуетесь менеджером пакетов для установки.';
$txt['add_language_error_no_response'] = 'The ElkArte site is not responding. Please try again later.';
$txt['add_language_error_no_files'] = 'Файлов не найдено.';
$txt['add_language_elk_desc'] = 'Описание';
$txt['add_language_elk_utf8'] = 'UTF-8';
$txt['add_language_elk_version'] = 'Версия';

$txt['edit_language_entries_primary'] = 'Ниже приведены настройки для главного языка. Важно выставить правильную локаль &mdash; для Linux-серверов, обычно, ru_RU.CP1251 или ru_RU.UTF8';
$txt['edit_language_entries'] = 'Изменить языковые переменные';
$txt['edit_language_entries_file'] = 'Выберите переменную для изменения';
$txt['languages_dictionary'] = 'Словарь';
$txt['languages_spelling'] = 'Проверка орфографии';
$txt['languages_for_pspell'] = 'Это для <a href="http://www.php.net/function.pspell-new" target="_blank" class="new_win">pSpell</a> &mdash; если установлено';
$txt['languages_rtl'] = 'Включить режим &quot;Справа налево&quot;';

$txt['lang_file_desc_index'] = 'Общие строки';
$txt['lang_file_desc_EmailTemplates'] = 'Шаблоны сообщений';

$txt['languages_download'] = 'Скачать языковой пакет';
$txt['languages_download_note'] = 'Эта страница содержит список всех файлов, которые содержатся в языковом пакете, и некоторую полезную информацию о каждом из них. Все отмеченные файлы будут скопированы.';
$txt['languages_download_info'] = '<strong>Note:</strong>
	<ul class="normallist">
		<li>The file status &quot;Not Writable&quot; means the system will not be able to copy this file to the directory at the present and you must make the destination writable either using an FTP client or by filling in your details at the bottom of the page.</li>
		<li>The Version information for a file displays the last forum version which it was updated for. If it is indicated in green then this is a newer version than you have at current, amber indicates it\'s the same version number as at current, red indicates you have a newer version installed than contained in the pack.</li>
		<li>In case a file already exists on your forum, the &quot;Already Exists&quot; column will have one of two values: &quot;Identical&quot; indicates that the file already exists in an identical form and does not need to be overwritten. &quot;Different&quot; means that the contents vary in some way and overwriting is probably the optimum solution.</li>
	</ul>';

$txt['languages_download_main_files'] = 'Главные файлы';
$txt['languages_download_theme_files'] = 'Файлы темы оформления';
$txt['languages_download_filename'] = 'Имя файла';
$txt['languages_download_dest'] = 'Путь';
$txt['languages_download_writable'] = 'Записываемая';
$txt['languages_download_version'] = 'Версия';
$txt['languages_download_older'] = 'Установленная версия файлов новее, перезапись не рекомендуется.';
$txt['languages_download_exists'] = 'Уже существует';
$txt['languages_download_exists_same'] = 'Одинаковые';
$txt['languages_download_exists_different'] = 'Другой';
$txt['languages_download_copy'] = 'Копировать';
$txt['languages_download_not_chmod'] = 'Вы не можете продолжить процесс установки, пока выделенные файлы не станут записываемыми.';
$txt['languages_download_illegal_paths'] = 'Пакет содержит неверные пути установки. Пожалуйста, свяжитесь с Simple Machines';
$txt['languages_download_complete'] = 'Установка завершена';
$txt['languages_download_complete_desc'] = 'Языковой пакет успешно установлен. Пожалуйста, нажмите <a href="%1$s">сюда</a> для возврата на страницу языков';
$txt['languages_delete_confirm'] = 'Вы действительно хотите удалить этот языковой пакет?';

$txt['setting_frame_security'] = 'Frame Security Options';
$txt['setting_frame_security_SAMEORIGIN'] = 'Allow Same Origin';
$txt['setting_frame_security_DENY'] = 'Deny all frames';
$txt['setting_frame_security_DISABLE'] = 'Запретить';

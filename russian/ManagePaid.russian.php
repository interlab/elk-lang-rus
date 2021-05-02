<?php
// Version: 1.1; ManagePaid

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'Доллар США ($)';
$txt['eur'] = 'Евро (&euro;)';
$txt['gbp'] = 'Английский фунт стерлингов (&pound;)';
$txt['other'] = 'Другая';

$txt['paid_username'] = 'Имя пользователя';

$txt['paid_subscriptions_desc'] = 'В данном разделе можно добавить, удалить или изменить способ платной подписки на данном форуме.';
$txt['paid_subs_settings'] = 'Настройки';
$txt['paid_subs_settings_desc'] = 'Здесь можно изменить способ оплаты для ваших пользователей.';
$txt['paid_subs_view'] = 'Просмотр подписки';
$txt['paid_subs_view_desc'] = 'Здесь можно просмотреть все доступные подписки.';

// Setting type strings.
$txt['paid_enabled'] = 'Разрешить платную подписку';
$txt['paid_enabled_desc'] = 'Для использования платных подписок на этом форуме данная функция должна быть включена.';
$txt['paid_email'] = 'Посылать уведомления';
$txt['paid_email_desc'] = 'Информировать администратора при изменении подписки.';
$txt['paid_email_to'] = 'E-mail для сообщений';
$txt['paid_email_to_desc'] = 'Список адресов, разделенных запятыми &mdash; на эти адреса будут рассылаться уведомления.';
$txt['paidsubs_test'] = 'Разрешить тестовый режим';
$txt['paidsubs_test_desc'] = 'Перевод всех подписок в &quot;тестовый&quot; режим, в котором вся оплата будет производиться в песочнице PayPal. Не следует включать, если не знаете, что делаете!';
$txt['paidsubs_test_confirm'] = 'Вы действительно хотите включить режим тестирования?';
$txt['paid_email_no'] = 'Не отправлять никаких уведомлений';
$txt['paid_email_error'] = 'Сообщать об ошибках подписки';
$txt['paid_email_all'] = 'Уведомлять обо всех изменениях подписки';
$txt['paid_currency'] = 'Выбор валюты';
$txt['paid_currency_code'] = 'Код валюты';
$txt['paid_currency_code_desc'] = 'Используемый код для оплаты';
$txt['paid_currency_symbol'] = 'Символьное обозначение';
$txt['paid_currency_symbol_desc'] = 'Используйте запись вида \'%1.2f\', чтобы указать расположение чисел перед символами валюты. Например, $%1.2f, %1.2fDM&nbsp;и&nbsp;т.&nbsp;д.';

$txt['paypal_email'] = 'Электронный адрес PayPal';
$txt['paypal_email_desc'] = 'Оставьте пустым, если не хотите использовать PayPal.';

$txt['authorize_id'] = 'ID установки Authorize.net';
$txt['authorize_id_desc'] = 'Установочный ID генерируется сервером Authorize.net. Оставьте пустым, если не используете Authorize.net';
$txt['authorize_transid'] = 'ID транзакции Authorize.NetD';

$txt['2co_id'] = '2checkout.com Install ID';
$txt['2co_id_desc'] = 'Установочный ID генерируется сервером 2co.com. Оставьте пустым, если не используете 2co.com';
$txt['2co_password'] = '2checkout.com Секретное Слово';
$txt['2co_password_desc'] = 'Ваше секретное слово для сервера 2checkout.';
$txt['2co_password_wrong'] = 'Your 2checkout секретное слово не принято.';

$txt['paid_settings_save'] = 'Сохранить';

$txt['paid_note'] = '<strong class="alert">Note:</strong><br />For subscriptions to be automatically updated for your users, you
	will need to setup a return URL for each of your payment methods. For all payment types, this return URL should be set as:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>{board_url}/subscriptions.php</strong><br /><br />
	You can edit the link for PayPal directly <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">by clicking here</a>.<br />
	For the other gateways (if installed) you can normally find it in your customer panels, usually under the term &quot;Return URL&quot; or &quot;Callback URL&quot;.';

// View subscription strings.
$txt['paid_name'] = 'Название';
$txt['paid_status'] = 'Статус';
$txt['paid_cost'] = 'Стоимость';
$txt['paid_duration'] = 'Продолжительность';
$txt['paid_active'] = 'Активное';
$txt['paid_pending'] = 'Ожидает оплаты';
$txt['paid_finished'] = 'Истекшая';
$txt['paid_total'] = 'Всего';
$txt['paid_is_active'] = 'Активирован';
$txt['paid_none_yet'] = 'Пока нет ни одной подписки.';
$txt['paid_none_ordered'] = 'У Вас нет подписок.';
$txt['paid_payments_pending'] = 'Платежи в процессе';
$txt['paid_order'] = 'Расположение';

$txt['yes'] = 'Да';
$txt['no'] = 'Нет';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Добавить новую подписку';
$txt['paid_edit_subscription'] = 'Изменить подписку';
$txt['paid_delete_subscription'] = 'Удалить подписку';

$txt['paid_mod_name'] = 'Название подписки';
$txt['paid_mod_desc'] = 'Описание';
$txt['paid_mod_reminder'] = 'E-mail адрес для напоминаний';
$txt['paid_mod_reminder_desc'] = 'За сколько дней отсылать напоминание о заканчивающейся подписке. (в днях, 0 &mdash; запретить)';
$txt['paid_mod_email'] = 'E-mail при завершении подписки';
$txt['paid_mod_email_desc'] = 'Обозначения: {NAME} &mdash; имя пользователя; {FORUM} &mdash; название форума. Тема сообщения должна быть указана в первой строке. Оставьте пустым для отключения уведомлений.';
$txt['paid_mod_cost_usd'] = 'Стоимость (в долларах США)';
$txt['paid_mod_cost_eur'] = 'Стоимость (в евро)';
$txt['paid_mod_cost_gbp'] = 'Стоимость (в английских фунтах)';
$txt['paid_mod_cost_blank'] = 'Оставьте поле пустым, чтобы не предлагать эту валюту.';
$txt['paid_mod_span'] = 'Продолжительность подписки';
$txt['paid_mod_span_days'] = 'дней';
$txt['paid_mod_span_weeks'] = 'недель';
$txt['paid_mod_span_months'] = 'месяцев';
$txt['paid_mod_span_years'] = 'лет';
$txt['paid_mod_active'] = 'Активное';
$txt['paid_mod_active_desc'] = 'Подписка должна быть активирована для новых присоединившихся пользователей.';
$txt['paid_mod_prim_group'] = 'Основная группа для подписчиков';
$txt['paid_mod_prim_group_desc'] = 'Группа, в которую пользователи попадут после подписки.';
$txt['paid_mod_add_groups'] = 'Дополнительные группы';
$txt['paid_mod_add_groups_desc'] = 'Дополнительные группы для добавления пользователей после подписки.';
$txt['paid_mod_no_group'] = 'Не изменять';
$txt['paid_mod_edit_note'] = 'Обратите внимание: настройки для группы с существующими подписчиками НЕ могут быть изменены!';
$txt['paid_mod_delete_warning'] = '<strong>ПРЕДУПРЕЖДЕНИЕ</strong><br /><br />При удалении этих подписок все подписанные на них пользователи потеряют предоставленные по подпискам права. Если уверены в том, что делаете, то просто отключите подписки, не удаляя их.<br />';
$txt['paid_mod_repeatable'] = 'Разрешить пользователям автоматически продлять эту подписку';
$txt['paid_mod_allow_partial'] = 'Разрешить частичную подписку';
$txt['paid_mod_allow_partial_desc'] = 'Если эта опция включена и пользователь меньше, чем нужно &mdash; ему будет предоставлена подписка на оплаченный период времени.';
$txt['paid_mod_fixed_price'] = 'Подписка с фиксированной ценой и продолжительностью';
$txt['paid_mod_flexible_price'] = 'Стоимость подписки зависит от её продолжительности';
$txt['paid_mod_price_breakdown'] = 'Гибкое распределение цен';
$txt['paid_mod_price_breakdown_desc'] = 'Определите стоимость подписки в зависимости от периода её продолжительности. Например, она может стоить 12 долларов в месяц, но только 100 долларов в год. Если не хотите указывать цену за определенный период времени, просто оставьте поле пустым.';
$txt['flexible'] = 'Flexible';

$txt['paid_per_day'] = 'Прайс за день';
$txt['paid_per_week'] = 'Прайс за неделю';
$txt['paid_per_month'] = 'Прайс за месяц';
$txt['paid_per_year'] = 'Прайс за год';
$txt['day'] = 'День';
$txt['week'] = 'Неделя';
$txt['month'] = 'Месяц';
$txt['year'] = 'Год';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Просмотр пользователей';
$txt['view_users_subscribed'] = 'Просмотр пользователей, подписанных на: &quot;%1$s&quot;';
$txt['no_subscribers'] = 'На эту подписку пока никто не подписан.';
$txt['add_subscriber'] = 'Добавить подписчика';
$txt['edit_subscriber'] = 'Изменить подписчика';
$txt['delete_selected'] = 'Удалить выбранные';
$txt['complete_selected'] = 'Завершить выбранные';

// @todo These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Вы действительно хотите удалить все записи о выбранных подписках?';
$txt['complete_are_sure'] = 'Вы действительно хотите завершить выбранные подписки?';

$txt['start_date'] = 'Дата начала';
$txt['end_date'] = 'Дата окончания';
$txt['start_date_and_time'] = 'Дата и время начала';
$txt['end_date_and_time'] = 'Дата и время окончания';
$txt['one_username'] = 'Пожалуйста, введите имя только одного пользователя.';
$txt['minute'] = 'Минута';
$txt['error_member_not_found'] = 'Указанный пользователь не найден';
$txt['member_already_subscribed'] = 'Этот пользователь уже подписан на данную подписку. Редактируйте его существующую подписку.';
$txt['search_sub'] = 'Поиск пользователей';

// Make payment.
$txt['paid_confirm_payment'] = 'Подтвердить платеж';
$txt['paid_confirm_desc'] = 'Для продолжения оплаты, пожалуйста, проверьте данные ниже и нажмите кнопку &quot;Оплатить&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Для оплаты через <a href="http://www.paypal.com">PayPal</a> нажмите на кнопку ниже. Вы будете перенаправлены на сайт PayPal для начала процедуры оплаты.';
$txt['paid_paypal_order'] = 'Оплатить через PayPal';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Для оплаты через <a href="http://www.authorize.net">Authorize.Net</a> нажмите на кнопку ниже. Вы будете перенаправлены на сайт Authorize.Net для начала процедуры оплаты.';
$txt['paid_authorize_order'] = 'Оплатить через Authorize.Net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Для оплаты через <a href="http://www.2co.com">2co.com</a> нажмите на кнопку ниже. Вы будете перенаправлены на сайт 2co.com для начала процедуры оплаты.';
$txt['paid_2co_order'] = 'Оплатить через 2co.com';
$txt['paid_done'] = 'Платеж завершен';
$txt['paid_done_desc'] = 'Благодарим за платеж. После проверки перевода подписка будет активирована.';
$txt['paid_sub_return'] = 'Вернуться назад';
$txt['paid_current_desc'] = 'Ниже перечислены все текущие и предыдущие подписки. Для продления подписки просто выберите её из списка.';
$txt['paid_admin_add'] = 'Добавить эту подписку';

$txt['paid_not_set_currency'] = 'Вы пока не задали валюту. Пожалуйста, сделайте это в настройках, чтобы продолжить.';
$txt['paid_no_cost_value'] = 'Необходимо указать стоимость и продолжительность подписки.';
$txt['paid_all_freq_blank'] = 'Вы должны ввести стоимость по крайней мере одного из четырех периодов подписки.';

// Some error strings.
$txt['paid_no_data'] = 'В скрипте были отправлены неверные данные.';

$txt['paypal_could_not_connect'] = 'Не удалось соединиться с сервером PayPal';
$txt['paypal_currency_unkown'] = 'Код валюты от PayPal (%1$s) не соответствует коду в настройках (%2$s)';
$txt['paid_sub_not_active'] = 'На эту подписку не принимаются новые пользователи!';
$txt['paid_disabled'] = 'Платные подписки в настоящее время отключены.';
$txt['paid_unknown_transaction_type'] = 'Неизвестный тип транзакции.';
$txt['paid_empty_member'] = 'Обработчик подписки не может восстановить ID пользователя';
$txt['paid_could_not_find_member'] = 'Обработчик подписки не может найти пользователя с ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'Обработчик подписок не может найти подписку для пользователя с ID: %1$s, ID подписки: %2$s';
$txt['paid_count_not_find_subscription_log'] = 'Обработчик подписок не может найти запись в журнале подписки для пользователя с ID: %1$s, ID подписки: %2$s';
$txt['paid_count_not_find_outstanding_payment'] = 'Не удалось найти запись о неуплаченном взносе от пользователя с ID: %1$s, ID подписки: %2$s';
$txt['paid_admin_not_setup_gateway'] = 'Извините, но администратор ещё не завершил настройку платных подписок. Пожалуйста, попробуйте позже.';
$txt['paid_make_recurring'] = 'Сделать этот платеж периодическим';

$txt['subscriptions'] = 'Подписки';
$txt['subscription'] = 'Подписка';
$txt['subscribers'] = 'Подписчики';
$txt['paid_subs_desc'] = 'Ниже перечислены все подписки, доступные на этом сайте.';
$txt['paid_subs_none'] = 'В настоящее время нет доступных платных подписок.';

$txt['paid_current'] = 'Существующие подписки';
$txt['pending_payments'] = 'Незавершенные платежи';
$txt['pending_payments_desc'] = 'Данный пользователь пытается внести следующие платежи за подписку, но форумом не было получено подтверждения. Если уверены, что платеж поступил, нажмите кнопку &quot;Принять&quot; в действиях для подписки. Либо можно нажать кнопку &quot;Удалить&quot; для уничтожения всех ссылок по оплате.';
$txt['pending_payments_value'] = 'Значение';
$txt['pending_payments_accept'] = 'Принять';
$txt['pending_payments_remove'] = 'Удалить тему';
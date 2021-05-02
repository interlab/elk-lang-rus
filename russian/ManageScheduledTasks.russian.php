<?php
// Version: 1.1; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Диспетчер задач';
$txt['scheduled_tasks_header'] = 'Все запланированные задачи';
$txt['scheduled_tasks_name'] = 'Название задачи';
$txt['scheduled_tasks_next_time'] = 'Следующий запуск';
$txt['scheduled_tasks_regularity'] = 'Регулярность';
$txt['scheduled_tasks_enabled'] = 'Включено';
$txt['scheduled_tasks_run_now'] = 'Запустить сейчас';
$txt['scheduled_tasks_save_changes'] = 'Сохранить изменения';
$txt['scheduled_tasks_time_offset'] = '<strong>Примечание:</strong>  Все значения времени, указанные ниже, являются временем  <em>сервера</em> и не учитывают настройки смещения времени в панели администратора.';
$txt['scheduled_tasks_were_run'] = 'Все выбранные задачи выполнены';
$txt['scheduled_tasks_were_run_errors'] = 'Во время выполнения запланированных задач произошли следующие ошибки:';

$txt['scheduled_tasks_na'] = 'нет данных';
$txt['scheduled_task_approval_notification'] = 'Уведомления об одобрениях';
$txt['scheduled_task_desc_approval_notification'] = 'Отправка сообщений модераторам об ожидающих одобрения сообщениях.';
$txt['scheduled_task_auto_optimize'] = 'Оптимизировать базу данных';
$txt['scheduled_task_desc_auto_optimize'] = 'Оптимизация базы данных, исправление ошибок.';
$txt['scheduled_task_daily_maintenance'] = 'Ежедневное обслуживание';
$txt['scheduled_task_desc_daily_maintenance'] = 'Ежедневный запуск обслуживания форума — не отключайте.';
$txt['scheduled_task_daily_digest'] = 'Ежедневное уведомление';
$txt['scheduled_task_desc_daily_digest'] = 'Отправление ежедневного обзора подписчикам.';
$txt['scheduled_task_weekly_digest'] = 'Еженедельное уведомление';
$txt['scheduled_task_desc_weekly_digest'] = 'Отправление еженедельного обзора подписчикам.';
$txt['scheduled_task_birthdayemails'] = 'Отправка поздравлений';
$txt['scheduled_task_desc_birthdayemails'] = 'Рассылка поздравлений с днём рождения.';
$txt['scheduled_task_weekly_maintenance'] = 'Еженедельное обслуживание';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Запуск еженедельного обслуживания форума — не отключайте.';
$txt['scheduled_task_paid_subscriptions'] = 'Проверка платной подписки';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Отправка уведомлений о платных подписках и удаление истекших подписок.';
$txt['scheduled_task_remove_topic_redirect'] = 'Удаление переехало: перенаправление тем';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Удаляет уведомления темы «MOVED:», указанные при создании перемещенного уведомления.';
$txt['scheduled_task_remove_temp_attachments'] = 'Удалить временные файлы вложений';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Удаляет временные файлы, созданные при прикреплении файла к сообщению, которое по какой-либо причине не было переименовано или удалено ранее.';
$txt['scheduled_task_remove_old_drafts'] = 'Удалить старые черновики';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Удаляет черновики старше, чем количество дней, определенное в настройках черновика на панели администратора.';
$txt['scheduled_task_remove_old_followups'] = 'Удалить старые последующие записи';
$txt['scheduled_task_desc_remove_old_followups'] = 'Удаляет последующие записи, все еще присутствующие в базе данных, но указывающие на несуществующие темы.';
$txt['scheduled_task_maillist_fetch_IMAP'] = 'Получать электронные письма из IMAP';
$txt['scheduled_task_desc_maillist_fetch_IMAP'] = 'Получает электронные письма для функции списка рассылки из IMAP и обрабатывает их.';
$txt['scheduled_task_user_access_mentions'] = 'Доступ: Пользовательские упоминания';
$txt['scheduled_task_desc_user_access_mentions'] = 'Убедитесь, что пользователи имеют доступ к каждому форуму и, соответственно, установите доступ к соответствующим ссылкам.';

$txt['scheduled_task_reg_starting'] = 'Начинать в %1$s';
$txt['scheduled_task_reg_repeating'] = 'повторять каждые %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'минут';
$txt['scheduled_task_reg_unit_h'] = 'час';
$txt['scheduled_task_reg_unit_d'] = 'день (дней)';
$txt['scheduled_task_reg_unit_w'] = 'неделю';

$txt['scheduled_task_edit'] = 'Изменение задачи';
$txt['scheduled_task_edit_repeat'] = 'Повторять задачу каждые';
$txt['scheduled_task_edit_pick_unit'] = 'выберите единицу';
$txt['scheduled_task_edit_interval'] = 'Интервал';
$txt['scheduled_task_edit_start_time'] = 'Время запуска';
$txt['scheduled_task_edit_start_time_desc'] = 'Часы:минуты';
$txt['scheduled_task_time_offset'] = 'Обратите внимание: время запуска задачи должно указываться с учетом текущего времени сервера: %1$s';

$txt['scheduled_view_log'] = 'Просмотр логов';
$txt['scheduled_log_empty'] = 'Логов задач нет.';
$txt['scheduled_log_time_run'] = 'Когда выполнена';
$txt['scheduled_log_time_taken'] = 'Результат';
$txt['scheduled_log_time_taken_seconds'] = '%1$d сек.';
$txt['scheduled_log_completed'] = 'Задача завершена';
$txt['scheduled_log_empty_log'] = 'Удалить все';
$txt['scheduled_log_empty_log_confirm'] = 'Вы уверены, что хотите полностью очистить журнал?';
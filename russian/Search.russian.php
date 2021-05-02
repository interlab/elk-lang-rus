<?php
// Version: 1.1; Search

$txt['set_parameters'] = 'Параметры поиска';
$txt['choose_board'] = 'Выберите раздел, в котором будет производиться поиск';
$txt['all_words'] = 'Содержащее все слова';
$txt['any_words'] = 'Содержащее любые слова';
$txt['by_user'] = 'По пользователю';

$txt['search_post_age'] = 'По давности';
$txt['search_between'] = 'между';
$txt['search_and'] = 'и';
$txt['search_options'] = 'Настройки';
$txt['search_show_complete_messages'] = 'Отображать результаты в виде сообщений';
$txt['search_subject_only'] = 'Искать только в названиях тем';
$txt['search_relevance'] = 'Совпадение';
$txt['search_date_posted'] = 'Дата';
$txt['search_order'] = 'Сортировка результатов';
$txt['search_orderby_relevant_first'] = 'Наиболее подходящие результаты первыми';
$txt['search_orderby_large_first'] = 'Наибольшие темы первыми';
$txt['search_orderby_small_first'] = 'Наименьшие темы первыми';
$txt['search_orderby_recent_first'] = 'Последние темы первыми';
$txt['search_orderby_old_first'] = 'Старые темы первыми';
$txt['search_visual_verification_label'] = 'Визуальная проверка';
$txt['search_visual_verification_desc'] = 'Для использования поиска введите код с изображения, пожалуйста.';

$txt['search_specific_topic'] = 'Искать сообщения только в теме';

$txt['groups_search_posts'] = 'Группы пользователей с доступом к функции поиска';
$txt['search_dropdown'] = 'Включить выпадающий список быстрого поиска';
$txt['search_results_per_page'] = 'Максимум результатов на страницу';
$txt['search_weight_frequency'] = 'Релевантность поиска по количеству сообщений в теме';
$txt['search_weight_age'] = 'Релевантность поиска по возрасту последних сообщений';
$txt['search_weight_length'] = 'Релевантность поиска по величине темы';
$txt['search_weight_subject'] = 'Релевантность поиска по названию темы';
$txt['search_weight_first_message'] = 'Релевантность поиска по содержащимся первым сообщениям';
$txt['search_weight_sticky'] = 'Релевантность поиска по прикрепленным темам';
$txt['search_weight_likes'] = 'Относительный вес поиска по темам лайков';

$txt['search_settings_desc'] = 'Здесь можно изменять обычные настройки поиска.';
$txt['search_settings_title'] = 'Настройки поиска';

$txt['search_weights_desc'] = 'Здесь можно изменять индивидуальные компоненты оценки совпадения по поиску.';
$txt['search_weights_sphinx'] = 'Чтобы обновить весовые коэффициенты с помощью Sphinx, вы должны сгенерировать и установить новый файл sphinx.conf.';
$txt['search_weights_title'] = 'Релевантность поиска';
$txt['search_weights_total'] = 'Всего';
$txt['search_weights_save'] = 'Сохранить';

$txt['search_method_desc'] = 'Здесь можно установить параметры поиска.';
$txt['search_method_title'] = 'Метод поиска';
$txt['search_method_save'] = 'Сохранить';
$txt['search_method_messages_table_space'] = 'Размер сообщений в базе данных';
$txt['search_method_messages_index_space'] = 'Размер индексов в базе данных';
$txt['search_method_kilobytes'] = 'Кб';
$txt['search_method_fulltext_index'] = 'Полнотекстовое индексирование';
$txt['search_method_no_index_exists'] = 'не созданы';
$txt['search_method_fulltext_create'] = 'Создать полнотекстовый индекс';
$txt['search_method_fulltext_cannot_create'] = 'невозможно создать индексы, максимальная длина сообщения &mdash; 65535, либо тип таблицы отличается от MyISAM';
$txt['search_method_index_already_exists'] = 'уже созданы';
$txt['search_method_fulltext_remove'] = 'удалить';
$txt['search_method_index_partial'] = 'уже созданы';
$txt['search_index_custom_resume'] = 'продолжить';

// These strings are used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Для использования полнотекстового поиска нужно создать полнотекстовые индексы.';
$txt['search_index_custom_warning'] = 'Для использования выборочного поиска нужно создать выборочные индексы!';

$txt['search_index'] = 'Поисковое индексирование';
$txt['search_index_none'] = 'Не использовать индексирование';
$txt['search_index_custom'] = 'Выборочное индексирование';
$txt['search_index_label'] = 'Индексы';
$txt['search_index_size'] = 'Размер';
$txt['search_index_create_custom'] = 'Создать пользовательский индекс';
$txt['search_index_custom_remove'] = 'Удалить пользовательский индекс';

$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Чтобы настроить параметры Sphinx, используйте <a class="linkbutton" href="{managesearch_url}">Configure Sphinx</a>';
$txt['search_index_sphinxql'] = 'SphinxQL';
$txt['search_index_sphinxql_desc'] = 'Чтобы настроить параметры SphinxQL, используйте <a class="linkbutton" href="{managesearch_url}">Configure Sphinx</a>';

$txt['search_force_index'] = 'Искать только по индексам';
$txt['search_match_words'] = 'Только слова целиком';
$txt['search_max_results'] = 'Максимум результатов для отображения';
$txt['search_max_results_disable'] = '(0 &mdash; без ограничений)';
$txt['search_floodcontrol_time'] = 'Время между отправкой поисковых запросов от одного пользователя';
$txt['search_floodcontrol_time_desc'] = '(0 &mdash; без ограничений, в секундах)';

$txt['additional_search_engines'] = 'Дополнительные поисковые системы';
$txt['setup_search_engine_add_more'] = 'Добавить еще одну поисковую систему';

$txt['search_create_index'] = 'Создание индексирования';
$txt['search_create_index_why'] = 'Для чего нужно поисковое индексирование?';
$txt['search_create_index_start'] = 'Создать';
$txt['search_predefined'] = 'Предустановленный профиль';
$txt['search_predefined_small'] = 'Малоразмерное индексирование';
$txt['search_predefined_moderate'] = 'Среднеразмерное индексирование';
$txt['search_predefined_large'] = 'Большеразмерное индексирование';
$txt['search_create_index_continue'] = 'Продолжить';
$txt['search_create_index_not_ready'] = 'В настоящее время ElkArte создает поисковый индекс ваших сообщений. Чтобы избежать перегрузки вашего сервера, процесс был временно приостановлен. Это должно автоматически продолжаться через несколько секунд. Если это не так, пожалуйста, нажмите «Продолжить» ниже.';
$txt['search_create_index_progress'] = 'Выполнено';
$txt['search_create_index_done'] = 'Индексы созданы!';
$txt['search_create_index_done_link'] = 'Продолжить';
$txt['search_double_index'] = 'Для вашей таблицы сообщений созданы индексы двух разных типов. Для улучшения производительности рекомендуется удалить индексы неиспользуемого типа индексирования.';

$txt['search_error_indexed_chars'] = 'Неверное число символов индексации. Как минимум 3 символа необходимы для индексации.';
$txt['search_error_max_percentage'] = 'Неверный процент отсеивания слов. Используйте значение около 5%.';
$txt['error_string_too_long'] = 'Искомое слово должно быть длиннее %1$d символов.';

$txt['search_warning_ignored_word'] = 'Это слово было проигнорировано в вашем запросе, потому что оно слишком короткое';
$txt['search_warning_ignored_words'] = 'Эти слова были проигнорированы в вашем запросе, потому что они слишком короткие';

$txt['search_adjust_query'] = 'Уточните параметры поиска';
$txt['search_adjust_submit'] = 'Повторить поиск';
$txt['search_did_you_mean'] = 'Возможно, вы ищете';

$txt['search_example'] = '<em>Например: </em> &laquo;Доктор Хаус&raquo; &mdash; сериал';

$txt['search_engines_description'] = 'Здесь можно установить уровень слежения за активностью поисковых ботов на форуме, а также просмотреть логи посещений.';
$txt['spider_mode'] = 'Уровень отслеживания в поисковых системах';
$txt['spider_mode_note'] = 'Обратите внимание, что более высокий уровень отслеживания увеличивает потребность в ресурсах сервера.';
$txt['spider_mode_off'] = 'Запретить';
$txt['spider_mode_standard'] = 'Стандартный';
$txt['spider_mode_high'] = 'Модерация';
$txt['spider_mode_vhigh'] = 'Агрессивный';
$txt['spider_settings_desc'] = 'Вы можете изменить настройки для отслеживания пауков ПС с этой страницы. Обратите внимание: если вы хотите включить автоматическое удаление журналов посещений, вы можете настроить это <a href="%1$s">здесь</a>.';

$txt['spider_group'] = 'Применить ограничительные разрешения от группы';
$txt['spider_group_note'] = 'Включите, чтобы вы могли остановить пауков ПС, индексирующих некоторые страницы.';
$txt['spider_group_none'] = 'Запретить';

$txt['show_spider_online'] = 'Отображение пауков в списке &laquo;Кто онлайн&raquo;';
$txt['show_spider_online_no'] = 'Ни для кого';
$txt['show_spider_online_summary'] = 'Показывать количество пауков';
$txt['show_spider_online_detail'] = 'Показывать детали о пауках';
$txt['show_spider_online_detail_admin'] = 'Показывать всю инфу, но только админам';

$txt['spider_name'] = 'Название паука';
$txt['spider_last_seen'] = 'Последнее посещение';
$txt['spider_last_never'] = 'Никогда';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'IP адреса';
$txt['spiders_add'] = 'Добавить нового паука';
$txt['spiders_edit'] = 'Изменить паука';
$txt['spiders_remove_selected'] = 'Удалить выбранные';
$txt['spider_remove_selected_confirm'] = 'Вы уверены, что хотите удалить этих пауков ПС? \\\\ n \\\\ n Все связанные статистические данные также будут удалены!';
$txt['spiders_no_entries'] = 'Ни одного паука не добавлено.';

$txt['add_spider_desc'] = 'На этой странице можно изменять параметры пауков. Если user agent / IP адрес гостя будут совпадать с введенными ниже, то он будет опознан как паук поисковой системы и действия его будут записаны согласно настройкам форума.';
$txt['spider_name_desc'] = 'Имя паука, под которым он будет записан.';
$txt['spider_agent_desc'] = 'User agent, связанный с этим пауком.';
$txt['spider_ip_info_desc'] = 'Список IP адресов, связанных с этим пауком.';

$txt['spider_time'] = 'Время';
$txt['spider_viewing'] = 'Просмотров';
$txt['spider_logs_empty'] = 'Записей не найдено.';
$txt['spider_logs_info'] = 'Обратите внимание, что регистрация всех действий паука будет записываться только при установке &quot;высокого&quot; или &quot;очень высокого&quot; уровня слежения. Детализация по всем действиям будет производиться только при &quot;очень высоком&quot; уровне слежения.';
$txt['spider_disabled'] = 'Запретить';
$txt['spider_log_empty_log'] = 'Удалить все';
$txt['spider_log_empty_log_confirm'] = 'Вы уверены, что хотите полностью очистить журнал';

$txt['spider_logs_delete'] = 'Удалить записи';
$txt['spider_logs_delete_older'] = 'Удалить все записи старше, чем %1$s дней.';
$txt['spider_logs_delete_submit'] = 'Удалить';

$txt['spider_stats_delete_older'] = 'Удалите всю статистику пауков ПС из пауков, не виденных в %1$s дней.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Уверены, что хотите удалить все записи?';

$txt['spider_stats_select_month'] = 'Перейти к месяцу';
$txt['spider_stats_page_hits'] = 'Хитов';
$txt['spider_stats_no_entries'] = 'На данный момент нет статистики по посещениям пауков.';

// strings for setting up sphinx search
$txt['sphinx_test_not_selected'] = 'Вы еще не решили использовать Sphinx или SphinxQL в качестве метода поиска';
$txt['sphinx_test_passed'] = 'Все тесты прошли успешно, система смогла подключиться к демону поиска sphinx с помощью Sphinx API.';
$txt['sphinxql_test_passed'] = 'Все тесты прошли успешно, система смогла подключиться к демону поиска sphinx с помощью команд SphinxQL.';
$txt['sphinx_test_connect_failed'] = 'Невозможно подключиться к демону Sphinx. Убедитесь, что он работает и настроен правильно. Поиск Sphinx не будет работать, пока вы не исправите проблему.';
$txt['sphinxql_test_connect_failed'] = 'Невозможно получить доступ к SphinxQL. Убедитесь, что ваш sphinx.conf имеет отдельную директиву listen для порта SphinxQL. SphinxQL поиск не будет работать, пока вы не исправите проблему';
$txt['sphinx_test_api_missing'] = 'Файл sphinxapi.php отсутствует в вашем каталоге «sources». Вам необходимо скопировать этот файл из дистрибутива Sphinx. Поиск Sphinx не будет работать, пока вы не исправите проблему.';
$txt['sphinx_description'] = 'Используйте этот интерфейс для предоставления деталей доступа вашему поисковому демону Sphinx. <strong>Эти настройки используются только для создания</strong> исходного файла конфигурации sphinx.conf, который вам необходимо сохранить в вашем каталоге конфигурации Sphinx (обычно это / usr / local / etc или / etc / sphinxsearch). Как правило, приведенные ниже параметры можно не трогать, однако они предполагают, что программное обеспечение Sphinx было установлено в / usr / local и использует / var / sphinx для хранения данных поискового индекса. Чтобы поддерживать Sphinx в актуальном состоянии, вы должны использовать задание cron для обновления индексов, иначе новое или удаленное содержимое не будет отражено в результатах поиска. Файл конфигурации определяет два индекса: <br /><br/><strong>elkarte_delta_index</strong>, индекс, который хранит только последние изменения и может вызываться часто. <strong>elkarte_base_index</strong>, индекс, который хранит полную базу данных и должен вызываться реже. Пример: <br /><span class="tt">10 3 * * * / usr / local / bin / indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_base_index<br />0 * * * * / usr / local / bin / indexer --config / usr / Local / etc / sphinx.conf --rotate elkarte_delta_index</span>';
$txt['sphinx_index_prefix'] = 'Префикс индекса:';
$txt['sphinx_index_prefix_desc'] = 'Это префикс для базовых и дельта-индексов. <br />По умолчанию используется elkarte, и двумя индексами будут elkarte_base_index и elkarte_delta_index. Sphinx подключится к elkarte_index (prefix_index). Если вы измените это, убедитесь, что используете правильный префикс в вашей задаче cron.';
$txt['sphinx_index_data_path'] = 'Путь к данным индекса:';
$txt['sphinx_index_data_path_desc'] = 'Это путь, который содержит файлы индекса поиска, используемые Sphinx.<br />Он <strong> должен</strong> существовать и быть доступным для чтения и записи индексатором Sphinx и демоном поиска.';
$txt['sphinx_log_file_path'] = 'Путь к файлу журнала:';
$txt['sphinx_log_file_path_desc'] = 'Путь к серверу, который будет содержать файлы журнала, созданные Sphinx.<br />Этот каталог должен существовать на вашем сервере и должен быть доступен для записи демону и индексатору поиска Sphinx.';
$txt['sphinx_stop_word_path'] = 'Путь к стоп-словам:';
$txt['sphinx_stop_word_path_desc'] = 'Путь сервера к списку стоп-слов (оставьте пустым, если нет списка стоп-слов).';
$txt['sphinx_memory_limit'] = 'Ограничение памяти для индексатора Sphinx:';
$txt['sphinx_memory_limit_desc'] = 'Максимальный объем памяти (ОЗУ), которую индексатору разрешено использовать.';
$txt['sphinx_searchd_server'] = 'Поиска сервера демонов:';
$txt['sphinx_searchd_server_desc'] = 'Адрес сервера, на котором работает поисковый демон. Это должно быть действительное имя хоста или IP-адрес. <br />Если не задано, будет использоваться localhost.';
$txt['sphinx_searchd_port'] = 'Поиск порта демона:';
$txt['sphinx_searchd_port_desc'] = 'Порт, на котором будет слушать поисковый демон.';
$txt['sphinx_searchd_qlport'] = 'Порт демона Sphinx QL:';
$txt['sphinx_searchd_qlport_desc'] = 'Порт, на котором поисковый демон будет прослушивать запросы SphinxQL.';
$txt['sphinx_max_matches'] = 'Максимальное количество совпадений:';
$txt['sphinx_max_matches_desc'] = 'Максимальное количество совпадений, которое вернет поисковый демон.';
$txt['sphinx_create_config'] = 'Создать конфигурацию Sphinx';
$txt['sphinx_test_connection'] = 'Тестовое соединение с демоном Sphinx';
<?php
// Version: 1.0; Search

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
$txt['search_dropdown'] = 'Enable the Quick Search dropdown';
$txt['search_results_per_page'] = 'Максимум результатов на страницу';
$txt['search_weight_frequency'] = 'Релевантность поиска по количеству сообщений в теме';
$txt['search_weight_age'] = 'Релевантность поиска по возрасту последних сообщений';
$txt['search_weight_length'] = 'Релевантность поиска по величине темы';
$txt['search_weight_subject'] = 'Релевантность поиска по названию темы';
$txt['search_weight_first_message'] = 'Релевантность поиска по содержащимся первым сообщениям';
$txt['search_weight_sticky'] = 'Релевантность поиска по прикрепленным темам';

$txt['search_settings_desc'] = 'Здесь можно изменять обычные настройки поиска.';
$txt['search_settings_title'] = 'Настройки поиска';

$txt['search_weights_desc'] = 'Здесь можно изменять индивидуальные компоненты оценки совпадения по поиску.';
$txt['search_weights_sphinx'] = 'To update weight factors with Sphinx, you must generate and install a new sphinx.conf file.';
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
$txt['search_method_fulltext_create'] = 'создать';
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
$txt['search_index_create_custom'] = 'создать';
$txt['search_index_custom_remove'] = 'удалить';

$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'To adjust Sphinx settings, use [<a href="{managesearch_url}">Configure Sphinx</a>]';
$txt['search_index_sphinxql'] = 'SphinxQL';
$txt['search_index_sphinxql_desc'] = 'To adjust SphinxQL settings, use [<a href="{managesearch_url}">Configure Sphinx</a>]';

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
$txt['search_create_index_not_ready'] = 'ElkArte is currently creating a search index of your messages. To avoid overloading your server, the process has been temporarily paused. It should automatically continue in a few seconds. If it doesn\'t, please click continue below.';
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
$txt['spider_mode'] = 'Search Engine Tracking Level';
$txt['spider_mode_note'] = 'Note higher level tracking increases server resource requirement.';
$txt['spider_mode_off'] = 'Запретить';
$txt['spider_mode_standard'] = 'Стандартный';
$txt['spider_mode_high'] = 'Модерация';
$txt['spider_mode_vhigh'] = 'Агрессивный';
$txt['spider_settings_desc'] = 'You can change settings for spider tracking from this page. Note, if you wish to <a href="%1$s">enable automatic pruning of the hit logs you can set this up here</a>';

$txt['spider_group'] = 'Apply restrictive permissions from group';
$txt['spider_group_note'] = 'To enable you to stop spiders indexing some pages.';
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
$txt['spider_remove_selected_confirm'] = 'Are you sure you want to remove these spiders?\\n\\nAll associated statistics will also be deleted!';
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
$txt['spider_log_empty_log_confirm'] = 'Are you sure you want to completely clear the log';

$txt['spider_logs_delete'] = 'Удалить записи';
$txt['spider_logs_delete_older'] = 'Delete all entries older than %1$s days.';
$txt['spider_logs_delete_submit'] = 'Удалить';

$txt['spider_stats_delete_older'] = 'Delete all spider statistics from spiders not seen in %1$s days.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Уверены, что хотите удалить все записи?';

$txt['spider_stats_select_month'] = 'Перейти к месяцу';
$txt['spider_stats_page_hits'] = 'Хитов';
$txt['spider_stats_no_entries'] = 'На данный момент нет статистики по посещениям пауков.';

// strings for setting up sphinx search
$txt['sphinx_test_not_selected'] = 'You have not yet selected to use Sphinx or SphinxQL as your Search Method';
$txt['sphinx_test_passed'] = 'All tests were successful, the system was able to connect to the sphinx search daemon using the Sphinx API.';
$txt['sphinxql_test_passed'] = 'All tests were successful, the system was able to connect to the sphinx search daemon using SphinxQL commands.';
$txt['sphinx_test_connect_failed'] = 'Unable to connect to the Sphinx daemon. Make sure it is running and configured properly. Sphinx search will not work until you fix the problem.';
$txt['sphinxql_test_connect_failed'] = 'Unable to access SphinxQL. Make sure your sphinx.conf has a separate listen directive for the SphinxQL port. SphinxQL search will not work until you fix the problem';
$txt['sphinx_test_api_missing'] = 'The sphinxapi.php file is missing in your &quot;sources&quot; directory. You need to copy this file from the Sphinx distribution. Sphinx search will not work until you fix the problem.';
$txt['sphinx_description'] = 'Use this interface to supply the access details to your Sphinx search daemon. <strong>These settings are only used to create</strong> an initial sphinx.conf configuration file which you will need to save in your Sphinx configuration directory (typically /usr/local/etc). Generally the options below can be left untouched, however they assume that the Sphinx software was installed in /usr/local and use /var/sphinx for the search index data storage. In order to keep Sphinx up to date, you must use a cron job to update the indexes, otherwise new or deleted content will not be reflected in  the search results. The configuration file defines two indexes:<br /><br/><strong>elkarte_delta_index</strong>, an index that only stores recent changes and can be called frequently. <strong>elkarte_base_index</strong>, an index that stores the full database and should be called less frequently. Example:<br /><span class="tt">10 3 * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_base_index<br />0 * * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_delta_index</span>';
$txt['sphinx_index_data_path'] = 'Index data path:';
$txt['sphinx_index_data_path_desc'] = 'This is the path that contains the search index files used by Sphinx.<br />It <strong>must</strong> exist and be accessible for reading and writing by the Sphinx indexer and search daemon.';
$txt['sphinx_log_file_path'] = 'Log file path:';
$txt['sphinx_log_file_path_desc'] = 'Server path that will contain the log files created by Sphinx.<br />This directory must exist on your server and must be writable by the sphinx search daemon and indexer.';
$txt['sphinx_stop_word_path'] = 'Stopword path:';
$txt['sphinx_stop_word_path_desc'] = 'The server path to the stopword list (leave empty for no stopword list).';
$txt['sphinx_memory_limit'] = 'Sphinx indexer memory limit:';
$txt['sphinx_memory_limit_desc'] = 'The maximum amount of (RAM) memory the indexer is allowed to use.';
$txt['sphinx_searchd_server'] = 'Search daemon server:';
$txt['sphinx_searchd_server_desc'] = 'Address of the server running the search daemon. This must be a valid host name or IP address.<br />If not set, localhost will be used.';
$txt['sphinx_searchd_port'] = 'Search daemon port:';
$txt['sphinx_searchd_port_desc'] = 'Port on which the search daemon will listen.';
$txt['sphinx_searchd_qlport'] = 'Sphinx QL daemon port:';
$txt['sphinx_searchd_qlport_desc'] = 'Port on which the search daemon will listen for SphinxQL queries.';
$txt['sphinx_max_matches'] = 'Maximum # matches:';
$txt['sphinx_max_matches_desc'] = 'Maximum amount of matches the search daemon will return.';
$txt['sphinx_create_config'] = 'Create Sphinx config';
$txt['sphinx_test_connection'] = 'Test connection to Sphinx daemon';

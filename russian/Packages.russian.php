<?php

// Version: 1.0; Packages

$txt['package_proceed'] = 'Выполнить';
$txt['package_id'] = 'ID';
$txt['list_file'] = 'Список файлов в пакете';
$txt['files_archive'] = 'Файлы в архиве';
$txt['package_browse'] = 'Обзор';
$txt['add_server'] = 'Добавить сервер';
$txt['server_name'] = 'Название сервера';
$txt['serverurl'] = 'Адрес (URL)';
$txt['no_packages'] = 'Пакеты модификаций отсутствуют.';
$txt['download'] = 'Сохранить';
$txt['download_success'] = 'Пакет успешно загружен';
$txt['package_downloaded_successfully'] = 'Пакет был успешно загружен';
$txt['package_manager'] = 'Менеджер пакетов';
$txt['install_mod'] = 'Install Add-on';
$txt['uninstall_mod'] = 'Uninstall Add-on';
$txt['no_adds_installed'] = 'No addons currently installed';
$txt['uninstall'] = 'Удаление мода';
$txt['delete_list'] = 'Delete Add-on List';
$txt['package_delete_list_warning'] = 'Are you sure you wish to clear the installed addons list?';

$txt['package_manager_desc'] = 'From this easy to use interface, you can download and install addons for use on your forum.';
$txt['installed_packages_desc'] = 'В этом разделе можно просмотреть установленные на форуме пакеты модификаций, либо удалить те, которые больше не нужны.';
$txt['download_packages_desc'] = 'From this section you can add or remove package servers, browse for packages, or download new packages from servers.';
$txt['package_servers_desc'] = 'From this easy to use interface, you can manage your package servers and download addon archives on your forum.';
$txt['upload_packages_desc'] = 'From this section you can upload a package file from your local computer directly to the forum.';

$txt['upload_new_package'] = 'Upload new package';
$txt['view_and_remove'] = 'View and remove installed packages';
$txt['modification_package'] = 'Add-on packages';
$txt['avatar_package'] = 'Avatar packages';
$txt['language_package'] = 'Language packages';
$txt['unknown_package'] = 'Other packages';
$txt['smiley_package'] = 'Smiley packages';
$txt['use_avatars'] = 'Добавить аватары';
$txt['add_languages'] = 'Добавить язык';
$txt['list_files'] = 'Просмотреть файлы';
$txt['package_type'] = 'Тип пакета';
$txt['extracting'] = 'Извлечение';
$txt['avatars_extracted'] = 'The avatars have been installed, you should now be able to use them.';
$txt['language_extracted'] = 'The language pack has been installed, you can now enable its use in the language settings area of your admin control panel.';

$txt['mod_name'] = 'Add-on Name';
$txt['mod_version'] = 'Версия';
$txt['mod_author'] = 'Автор';
$txt['author_website'] = 'Страница автора';
$txt['package_no_description'] = 'No description given';
$txt['package_description'] = 'Описание';
$txt['file_location'] = 'Download';
$txt['bug_location'] = 'Issue tracker';
$txt['support_location'] = 'Support';
$txt['mod_hooks'] = 'No source edits';
$txt['mod_date'] = 'Last updated';
$txt['mod_section_count'] = 'Browse the (%1d) addons in this section';

// Package Server strings
$txt['package_current'] = '(%s <em>You have the Current version %s</em>)';
$txt['package_update'] = '(%s <em>An update for your %s version is available</em>)';
$txt['package_installed'] = 'installed';
$txt['package_downloaded'] = 'downloaded';

$txt['package_installed_key'] = 'Installed addons:';
$txt['package_installed_current'] = 'Последняя версия';
$txt['package_installed_old'] = 'Устаревшая версия';
$txt['package_installed_warning1'] = 'This package is already installed, and no upgrade was found.';
$txt['package_installed_warning2'] = 'Вы должны удалить старую версию пакета или попросить автора выпустить обновление для вашей версии.';
$txt['package_installed_warning3'] = 'Пожалуйста, не забывайте делать резервное копирование файлов и базы данных перед установкой/удалением любых модификаций.';
$txt['package_installed_extract'] = 'Извлечение пакета';
$txt['package_installed_done'] = 'Пакет был успешно установлен. Теперь можно использовать предоставляемые им функции или изменения.';
$txt['package_installed_redirecting'] = 'Перенаправление...';
$txt['package_installed_redirect_go_now'] = 'Перейти';
$txt['package_installed_redirect_cancel'] = 'Вернуться в менеджер пакетов';

$txt['package_upgrade'] = 'Обновить';
$txt['package_uninstall_readme'] = 'Описание при удалении';
$txt['package_install_readme'] = 'Информация о пакете';
$txt['package_install_license'] = 'License';
$txt['package_install_type'] = 'Тип';
$txt['package_install_action'] = 'Файл';
$txt['package_install_desc'] = 'Описание';
$txt['install_actions'] = 'Установочные действия';
$txt['perform_actions'] = 'This will perform the following actions:';
$txt['corrupt_compatible'] = 'The package you are trying to download or install is either corrupt or not compatible with this version of the software.';
$txt['package_create'] = 'Создать';
$txt['package_move'] = 'Перемещение';
$txt['package_delete'] = 'Удалить';
$txt['package_extract'] = 'Извлечение';
$txt['package_file'] = 'Файл';
$txt['package_tree'] = 'директории';
$txt['execute_modification'] = 'Изменение файла';
$txt['execute_code'] = 'Выполнение кода';
$txt['execute_database_changes'] = 'Execute file';
$txt['execute_hook_add'] = 'Add Hook';
$txt['execute_hook_remove'] = 'Remove Hook';
$txt['execute_hook_action'] = 'Adapting hook %1$s';
$txt['package_requires'] = 'Requires Modification';
$txt['package_check_for'] = 'Check for installation:';
$txt['execute_credits_add'] = 'Add Credits';
$txt['execute_credits_action'] = 'Credits: %1$s';

$txt['package_install_actions'] = 'Действия при установке пакета';
$txt['package_will_fail_title'] = 'Error in package %1$s';
$txt['package_will_fail_warning'] = 'At least one error was encountered during a test %1$s of this package.<br />It is <strong>strongly</strong> recommended that you do not continue with %1$s unless you know what you are doing, and have made a backup very recently.<br /><br />This error may be caused by a conflict between the package you\'re trying to install and another package you have already installed, an error in the package, a package which requires another package that you have not installed yet, or a package designed for another version of the software.';
$txt['package_will_fail_unknown_action'] = 'The package is trying to perform an unknown action: %1$s';
// Don't use entities in the below string.
$txt['package_will_fail_popup'] = 'Are you sure you wish to continue installing this addon, even though it will not install successfully?';
$txt['package_will_fail_popup_uninstall'] = 'Are you sure you wish to continue uninstalling this addon, even though it will not uninstall successfully?';
$txt['package_install'] = 'installation';
$txt['package_uninstall'] = 'removal';
$txt['package_install_now'] = 'Install now';
$txt['package_uninstall_now'] = 'Uninstall now';
$txt['package_other_themes'] = 'Install in other themes';
$txt['package_other_themes_uninstall'] = 'UnInstall in other themes';
$txt['package_other_themes_desc'] = 'To use this addon in themes other than the default, the package manager needs to make additional changes to the other themes. If you\'d like to install this addon in the other themes, please select these themes below.';
// Don't use entities in the below string.
$txt['package_theme_failure_warning'] = 'По крайней мере, одна ошибка возникла при тестовой установке пакета в эту тему оформления. Уверены, что хотите продолжить установку?';

$txt['package_bytes'] = 'байт';

$txt['package_action_missing'] = '<strong class="error">Файл не найден</strong>';
$txt['package_action_error'] = '<strong class="error">Ошибка</strong>';
$txt['package_action_failure'] = '<strong class="error">Неудачно</strong>';
$txt['package_action_success'] = '<strong>Успешно</strong>';
$txt['package_action_skipping'] = '<strong>Пропустить файл</strong>';

$txt['package_uninstall_actions'] = 'Действия при удалении пакета';
$txt['package_uninstall_done'] = 'The package has been successfully uninstalled.';
$txt['package_uninstall_cannot'] = 'This package cannot be uninstalled, because there is no uninstaller.<br /><br />Please contact the addon author for more information.';

$txt['package_install_options'] = 'Настройки установки';
$txt['package_install_options_desc'] = 'Set various options for how the package manager installs addons, including backups and ftp access';
$txt['package_install_options_ftp_why'] = 'Используя FTP-интерфейс менеджера пакетов, можно вручную выставить права на запись необходимым файлам.<br />Здесь можно указать стандартные значения вашего сервера.';
$txt['package_install_options_ftp_server'] = 'FTP сервер';
$txt['package_install_options_ftp_port'] = 'Порт';
$txt['package_install_options_ftp_user'] = 'Имя пользователя';
$txt['package_install_options_make_backups'] = 'Создавать резервные копии файлов с тильдой (~) в конце имени файла.';
$txt['package_install_options_make_full_backups'] = 'Create an entire backup (excluding smileys, avatars and attachments) of the ElkArte install.';

$txt['package_ftp_necessary'] = 'Необходимая информация FTP';
$txt['package_ftp_why'] = 'Some of the files the package manager needs to modify are not writable.  This needs to be changed by logging into FTP and using it to chmod or create the files and directories.  Your FTP information may be temporarily cached for proper operation of the package manager. Note you can also do this manually using an FTP client - <a href="#" onclick="%1$s">to view a list of the affected files please click here</a>.';
$txt['package_ftp_why_file_list'] = 'Следующим файлам нужны права на запись для продолжения установки:';
$txt['package_ftp_why_download'] = 'In order to download packages, the packages directory, and any files in it, must be writable.  Currently the system does not have the needed permissions to write to this directory.  The package manager can use your FTP information to attempt to fix this problem.';
$txt['package_ftp_server'] = 'FTP сервер';
$txt['package_ftp_port'] = 'Порт';
$txt['package_ftp_username'] = 'Имя пользователя';
$txt['package_ftp_password'] = 'Пароль';
$txt['package_ftp_path'] = 'Local path to ElkArte';
$txt['package_ftp_test'] = 'Тестировать';
$txt['package_ftp_test_connection'] = 'Протестировать соединение';
$txt['package_ftp_test_success'] = 'Связь с FTP сервером установлена.';
$txt['package_ftp_test_failed'] = 'Не могу соединится с сервером.';
$txt['package_ftp_bad_server'] = 'Не могу соединится с сервером.';

// For a break, use \\n instead of <br />... and don't use entities.
$txt['package_delete_bad'] = 'Пакет, который вы пытаетесь удалить, установлен на форуме. Если удалить сам пакет, то в дальнейшем будет невозможно удалить мод.\\n\\nУверены?';

$txt['package_examine_file'] = 'Просмотреть файлы в пакете';
$txt['package_file_contents'] = 'Просмотреть файл';

$txt['package_upload_title'] = 'Загрузить пакет';
$txt['package_upload_select'] = 'Пакет для загрузки';
$txt['package_upload'] = 'Загрузить';
$txt['package_uploaded_success'] = 'Загрузка пакета';
$txt['package_uploaded_successfully'] = 'Пакет успешно загружен';

$txt['package_modification_malformed'] = 'Malformed or invalid addon file.';
$txt['package_modification_missing'] = 'Файл не найден.';
$txt['package_no_zlib'] = 'Извините, конфигурация PHP вашего хостинга не поддерживает библиотеку <strong>zlib</strong>. Без поддержки zlib менеджер пакетов работать не может. Пожалуйста, обратитесь к своему хостеру.';

$txt['package_cleanperms_title'] = 'Изменение прав';
$txt['package_cleanperms_desc'] = 'Здесь можно изменить права файлов, используемых форумом.';
$txt['package_cleanperms_type'] = 'Изменить права файлов на форуме';
$txt['package_cleanperms_standard'] = 'Только стандартные файлы имеют права на запись.';
$txt['package_cleanperms_free'] = 'Все файлы имеют права на запись.';
$txt['package_cleanperms_restrictive'] = 'Минимум файлов имеют права на запись.';
$txt['package_cleanperms_go'] = 'Изменить';

$txt['package_download_by_url'] = 'Загрузить пакет модификаций по адресу';
$txt['package_download_filename'] = 'Название файла';
$txt['package_download_filename_info'] = 'Используйте, если адрес не заканчивается именем файла.<br />Например: index.php?mod=5';

$txt['package_db_uninstall'] = 'Remove all data associated with this addon.';
$txt['package_db_uninstall_details'] = 'Детали';
$txt['package_db_uninstall_actions'] = 'Checking this option will result in the following actions';
$txt['package_db_remove_table'] = 'Удалить таблицу &quot;%1$s&quot;';
$txt['package_db_remove_column'] = 'Удалить столбец &quot;%2$s&quot; из &quot;%1$s&quot;';
$txt['package_db_remove_index'] = 'Удалить индекс &quot;%1$s&quot; из &quot;%2$s&quot;';

$txt['package_emulate_install'] = 'Install Emulating:';
$txt['package_emulate_uninstall'] = 'Uninstall Emulating:';

// Operations.
$txt['operation_find'] = 'Найти ';
$txt['operation_replace'] = 'Заменить ';
$txt['operation_after'] = 'Добавить после ';
$txt['operation_before'] = 'Добавить перед ';
$txt['operation_title'] = 'Операция';
$txt['operation_ignore'] = 'Игнорировать ошибки';
$txt['operation_invalid'] = 'Выбранная операция &mdash; неправильная.';

$txt['package_file_perms_desc'] = 'Вы можете использовать данный раздел для просмотра статуса (chmod) файлов и папок на вашем форуме. Обратите внимание: это относится только к ключевым файлам и папкам форума. Используйте FTP-клиент для дополнительных параметров.';
$txt['package_file_perms_name'] = 'File/Directory Name';
$txt['package_file_perms_status'] = 'Текущий статус';
$txt['package_file_perms_new_status'] = 'Новый статус';
$txt['package_file_perms_status_read'] = 'Прочитано';
$txt['package_file_perms_status_write'] = 'Запись';
$txt['package_file_perms_status_execute'] = 'Исполнение';
$txt['package_file_perms_status_custom'] = 'Специальные';
$txt['package_file_perms_status_no_change'] = 'Без изменений';
$txt['package_file_perms_writable'] = 'Записываемая';
$txt['package_file_perms_not_writable'] = 'Незаписываемая';
$txt['package_file_perms_chmod'] = 'chmod';
$txt['package_file_perms_more_files'] = 'Дополнительные файлы';

$txt['package_file_perms_change'] = 'Изменить права на файлы';
$txt['package_file_perms_predefined'] = 'Использовать предустановленный профиль прав';
$txt['package_file_perms_predefined_note'] = 'Note that this only applies the predefined profile to key directories and files.';
$txt['package_file_perms_apply'] = 'Применить индивидуальные настройки прав доступа.';
$txt['package_file_perms_custom'] = 'Если будет выбран &quot;Специальный профиль&quot; используйте следующие значения chmod';
$txt['package_file_perms_pre_restricted'] = 'Ограниченный &mdash; минимум файлов записываемые';
$txt['package_file_perms_pre_standard'] = 'Стандартный &mdash; ключевые файлы записываемые';
$txt['package_file_perms_pre_free'] = 'Свободный &mdash; все файлы записываемые';
$txt['package_file_perms_ftp_details'] = 'На большинстве серверов изменение прав на файлы возможно только при использовании FTP. Пожалуйста, введите данные для соединения.';
$txt['package_file_perms_ftp_retain'] = 'Note, the system will only retain the password information temporarily to aid operation of the package manager.';
$txt['package_file_perms_go'] = 'Изменить';

$txt['package_file_perms_applying'] = 'Применить изменения';
$txt['package_file_perms_items_done'] = '%1$d из %2$d элементов завершено';
$txt['package_file_perms_skipping_ftp'] = '<strong>Внимание:</strong> При подключении к FTP-серверу возникли ошибки, связанные с отсутствием необходимых прав доступа. Вероятно, вы ошиблись при вводе параметров подключения к FTP &mdash; пожалуйста, проверьте результаты по завершении и повторите подключение, в случае необходимости.';

$txt['package_file_perms_dirs_done'] = '%1$d из %2$d папок готовы';
$txt['package_file_perms_files_done'] = '%1$d из %2$d файлов готовы в текущей папке';

$txt['chmod_value_invalid'] = 'Вы пытаетесь ввести неправильное значение chmod. Chmod должен быть между 0444 и 0777';

$txt['package_restore_permissions'] = 'Restore file permissions';
$txt['package_restore_permissions_desc'] = 'The following file permissions were changed in order to install the selected package(s). You can return these files back to their original status by clicking &quot;Restore&quot; below.';
$txt['package_restore_permissions_restore'] = 'Восстановить сообщение';
$txt['package_restore_permissions_filename'] = 'Имя файла';
$txt['package_restore_permissions_orig_status'] = 'Оригинальный статус';
$txt['package_restore_permissions_cur_status'] = 'Текущий статус';
$txt['package_restore_permissions_result'] = 'Результат';
$txt['package_restore_permissions_pre_change'] = '%1$s (%3$s)';
$txt['package_restore_permissions_post_change'] = '%2$s (%3$s &mdash; было %2$s)';
$txt['package_restore_permissions_action_skipped'] = '<em>Пропущено</em>';
$txt['package_restore_permissions_action_success'] = '<span class="success">Success</span>';
$txt['package_restore_permissions_action_failure'] = '<span class="error">С ошибками</span>';
$txt['package_restore_permissions_action_done'] = 'An attempt to restore the selected files back to their original permissions has been completed, the results can be seen below. If a change failed, or for a more detailed view of file permissions, please see the <a href="%1$s">File Permissions</a> section.';

$txt['package_file_perms_warning'] = 'Пожалуйста, обратите внимание';
$txt['package_file_perms_warning_desc'] = '
	Be careful when changing file permissions from this section - incorrect permissions can adversely affect the operation of your forum!<br />
	On some server configurations selecting the wrong permissions may stop the forum from operating.<br />
	Certain directories such as <em>attachments</em> need to be writable to use that functionality.<br />
	This functionality is mainly applicable on non-Windows based servers - it will not work as expected on Windows in regards to permission flags.<br />
	Before proceeding make sure you have an FTP client installed in case you do make an error and need to FTP into the server to remedy it.';

$txt['package_confirm_view_package_content'] = 'Уверены что хотите увидеть содержимое пакета расположенного по адресу:<br /><br />%1$s';
$txt['package_confirm_proceed'] = 'Выполнить';
$txt['package_confirm_go_back'] = 'Вернуться';

$txt['package_readme_default'] = 'По умолчанию';
$txt['package_available_readme_language'] = 'Доступные языки описания:';
$txt['package_license_default'] = 'По умолчанию';
$txt['package_available_license_language'] = 'Available License Languages:';

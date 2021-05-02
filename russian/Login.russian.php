<?php
// Version: 1.1; Login

// Registration agreement page.
$txt['registration_agreement'] = 'Регистрационное соглашение';
$txt['registration_privacy_policy'] = 'Политика конфиденциальности';
$txt['agreement_agree'] = 'Я принимаю соглашение';
$txt['agreement_no_agree'] = 'Я не принимаю условия соглашения.';
$txt['policy_agree'] = 'Я принимаю условия политики конфиденциальности.';
$txt['policy_no_agree'] = 'Я не принимаю условия политики конфиденциальности.';
$txt['agreement_agree_coppa_above'] = 'Я принимаю соглашение и я старше %1$d лет';
$txt['agreement_agree_coppa_below'] = 'Я принимаю соглашение и я младше %1$d лет';
$txt['agree_coppa_above'] = 'Я принимаю соглашение и я старше %1$d лет';
$txt['agree_coppa_below'] = 'Я принимаю соглашение и я младше %1$d лет';

// Registration form.
$txt['registration_form'] = 'Регистрационная форма';
$txt['error_too_quickly'] = 'Вы прошли процесс регистрации слишком быстро, быстрее, чем это возможно для человека. Пожалуйста, подождите некоторое время и попробуйте снова.';
$txt['error_token_verification'] = 'Токен не верифицирован. Пожалуйста, попробуйте ещё раз';
$txt['need_username'] = 'Вы не ввели имя пользователя.';
$txt['no_password'] = 'Вы не ввели пароль.';
$txt['improper_password'] = 'Вводимый пароль слишком длинный';
$txt['incorrect_password'] = 'Неверный пароль';
$txt['openid_not_found'] = 'Идентификатор OpenID не обнаружен.';
$txt['maintain_mode'] = 'Техническое обслуживание';
$txt['registration_successful'] = 'Регистрация прошла успешно';
$txt['valid_email_needed'] = 'Пожалуйста, введите действительный email, %1$s.';
$txt['required_info'] = 'Необходимая информация';
$txt['additional_information'] = 'Дополнительная информация';
$txt['warning'] = 'Внимание!';
$txt['only_members_can_access'] = 'Только зарегистрированные пользователи имеют доступ в этот раздел.';
$txt['login_below'] = 'Пожалуйста, войдите.';
$txt['login_below_or_register'] = 'Пожалуйста, войдите или <a href="%1$s">зарегистрируйтесь</a> c %2$s';
$txt['checkbox_agreement'] = 'Я принимаю соглашение';
$txt['checkbox_privacypol'] = 'Я принимаю политику конфиденциальности';
$txt['confirm_request_accept_agreement'] = 'Вы уверены, что хотите заставить всех участников принять соглашение?';
$txt['confirm_request_accept_privacy_policy'] = 'Вы уверены, что хотите заставить всех участников согласиться с политикой конфиденциальности?';

$txt['login_hash_error'] = 'Политика паролей была изменена. <br />Пожалуйста, смените пароль.';

$txt['ban_register_prohibited'] = 'Извините, но для вас регистрация запрещена.';
$txt['under_age_registration_prohibited'] = 'Извините, но пользователям, не достигшим %1$s лет, не разрешено регистрироваться на этом форуме.';

$txt['activate_account'] = 'Активация учётной записи';
$txt['activate_success'] = 'Ваша учётная запись успешно активирована. Можете войти на форум.';
$txt['activate_not_completed1'] = 'Перед тем как сможете войти, ваш e-mail должен быть проверен.';
$txt['activate_not_completed2'] = 'Отправить повторно письмо для активации?';
$txt['activate_after_registration'] = 'Благодарим за регистрацию. Через несколько минут придёт письмо с ссылкой для активации учётной записи.';
$txt['invalid_userid'] = 'Пользователь не существует';
$txt['invalid_activation_code'] = 'Неправильный код активации';
$txt['invalid_activation_username'] = 'Имя пользователя или email';
$txt['invalid_activation_new'] = 'Если при регистрации был указан неправильный email, напишите новый и укажите свой пароль.';
$txt['invalid_activation_new_email'] = 'Новый email';
$txt['invalid_activation_password'] = 'Старый пароль';
$txt['invalid_activation_resend'] = 'Отправить повторно код активации';
$txt['invalid_activation_known'] = 'Если знаете код активации, пожалуйста, укажите его здесь.';
$txt['invalid_activation_retry'] = 'Код активации';
$txt['invalid_activation_submit'] = 'Активировать';

$txt['coppa_no_concent'] = 'Администратор ещё не получил согласия на вашу регистрацию от родителей/опекуна.';
$txt['coppa_need_more_details'] = 'Нужны подробные детали?';

$txt['awaiting_delete_account'] = 'Ваша учётная запись была отмечена на удаление!<br />Если хотите восстановить её, пожалуйста, реактивируйте свою учётную запись, отметив &quot;Активировать мою учётную запись&quot; и войдите снова.';
$txt['undelete_account'] = 'Активировать мою учётную запись';

$txt['in_maintain_mode'] = 'Форум находится на Техническом Обслуживании.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Пожалуйста, сначала прочитайте соглашение.';
$txt['register_passwords_differ_js'] = 'Пароли не совпадают!';
$txt['register_did_you'] = 'Ты имел в виду';

$txt['approval_after_registration'] = 'Благодарим за регистрацию. Вы сможете использовать свою учётную запись после того как её проверит и одобрит администратор, о чём вы получите уведомление.';

$txt['admin_settings_desc'] = 'Здесь можно изменить настройки, связанные с регистрацией новых пользователей.';

$txt['setting_enableOpenID'] = 'Разрешить пользователям использовать OpenID для регистрации';

$txt['setting_registration_method'] = 'Метод регистрации для новых пользователей';
$txt['setting_registration_disabled'] = 'Регистрация запрещена';
$txt['setting_registration_standard'] = 'Мгновенная регистрация';
$txt['setting_registration_activate'] = 'Активация по e-mail';
$txt['setting_registration_approval'] = 'Одобрение пользователя';
$txt['setting_notify_new_registration'] = 'Уведомлять администратора при регистрации новых пользователей';
$txt['setting_force_accept_agreement'] = 'Участникам согласиться с соглашением, когда оно изменилось';
$txt['force_accept_privacy_policy'] = 'Участникам согласиться с политикой конфиденциальности, когда она изменилась';
$txt['setting_send_welcomeEmail'] = 'Отправлять приветствие новым пользователям';
$txt['setting_show_DisplayNameOnRegistration'] = 'Разрешить пользователям вводить свое имя';

$txt['setting_coppaAge'] = 'Минимальный возраст пользователя для успешной регистрации';
$txt['setting_coppaAge_desc'] = '(0 &mdash; запретить)';
$txt['setting_coppaType'] = 'Действия, выполняемые при регистрации пользователя моложе указанного возраста';
$txt['setting_coppaType_reject'] = 'Отменить регистрацию';
$txt['setting_coppaType_approval'] = 'Запросить подтверждение у родителей/опекуна';
$txt['setting_coppaPost'] = 'E-mail, на который должно быть прислано одобрение о разрешении регистрации';
$txt['setting_coppaPost_desc'] = 'Только предупредить, если пользователь моложе установленного возраста';
$txt['setting_coppaFax'] = 'Номер факса, на который должно быть прислано одобрение о разрешении регистрации';
$txt['setting_coppaPhone'] = 'Ваш контактный номер для связи с родителями';

$txt['admin_register'] = 'Регистрация нового пользователя';
$txt['admin_register_desc'] = 'Здесь можно вручную зарегистрировать новых пользователей и, при желании, отправить им их регистрационные данные.';
$txt['admin_register_username'] = 'Имя пользователя';
$txt['admin_register_email'] = 'E-mail';
$txt['admin_register_password'] = 'Пароль';
$txt['admin_register_username_desc'] = 'Имя нового пользователя';
$txt['admin_register_email_desc'] = 'Электронный адрес пользователя';
$txt['admin_register_password_desc'] = 'Пароль нового пользователя';
$txt['admin_register_email_detail'] = 'Отправить новый пароль пользователю';
$txt['admin_register_email_detail_desc'] = 'Требуется верный e-mail';
$txt['admin_register_email_activate'] = 'Требовать активации учётной записи';
$txt['admin_register_group'] = 'Основная группа';
$txt['admin_register_group_desc'] = 'Группа, к которой будет принадлежать новый пользователь';
$txt['admin_register_group_none'] = '(нет основной группы)';
$txt['admin_register_done'] = 'Пользователь %1$s успешно зарегистрирован!';

$txt['coppa_title'] = 'Форум с ограничением по возрасту';
$txt['coppa_after_registration'] = 'Спасибо за регистрацию на форуме Thank you for registering with {forum_name_html_safe}.<br /><br />Но, так как вам меньше {MINIMUM_AGE} лет, мы должны получить от ваших родителей или опекуна разрешение, чтобы вы могли использовать этот форум. Чтобы активировать учётную запись, пожалуйста, распечатайте эту форму:';
$txt['coppa_form_link_popup'] = 'Открыть форму в новом окне';
$txt['coppa_form_link_download'] = 'Загрузить форму как текстовый файл';
$txt['coppa_send_to_one_option'] = 'Попроси родителей/опекунов заполнить форму:';
$txt['coppa_send_to_two_options'] = 'Попроси родителей/опекунов отправить заполненную форму на e-mail или факс, указанные ниже:';
$txt['coppa_send_by_post'] = 'Отправить по следующему адресу:';
$txt['coppa_send_by_fax'] = 'Отправить факс по следующему номеру:';
$txt['coppa_send_by_phone'] = 'Альтернатива: пусть родители позвонят администратору форума по телефону {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Форма одобрения для регистрации на {forum_name_html_safe}';
$txt['coppa_form_address'] = 'Адрес';
$txt['coppa_form_date'] = 'Дата';
$txt['coppa_form_body'] = 'Я {PARENT_NAME},<br /><br />разрешаю {CHILD_NAME} (имя ребенка) зарегистрироваться на форуме:{forum_name_html_safe}, с именем пользователя: {USER_NAME}.<br /><br />Я понимаю, что введенная личная информация {USER_NAME} может быть показана другим пользователям форума.<br /><br />Подпись:<br />{PARENT_NAME} (Родитель/Опекун).';

$txt['visual_verification_sound_again'] = 'Проиграть снова';
$txt['visual_verification_sound_close'] = 'Закрыть окно';
$txt['visual_verification_sound_direct'] = 'Проблемы с прослушиванием? Попробуйте прямую ссылку для прослушивания';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'Имя пользователя доступно';
$txt['registration_username_unavailable'] = 'Имя пользователя не доступно';
$txt['registration_username_check'] = 'Проверить доступность имени пользователя';
$txt['registration_password_short'] = 'Пароль слишком короткий';
$txt['registration_password_reserved'] = 'Ваш пароль содержит имя пользователя/e-mail';
$txt['registration_password_numbercase'] = 'Пароль должен содержать большие и маленькие буквы, а также цифры';
$txt['registration_password_no_match'] = 'Пароли не совпадают';
$txt['registration_password_valid'] = 'Пароль правильный';

$txt['registration_errors_occurred'] = 'Следующие ошибки были обнаружены при регистрации. Пожалуйста, исправьте их:';

$txt['authenticate_label'] = 'Способ авторизации';
$txt['authenticate_password'] = 'Пароль';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'Адрес авторизации OpenID';
$txt['otp_required'] = 'Одноразовый пароль необходим для того, чтобы войти!';
$txt['disable_otp'] = 'Отключить двухфакторную аутентификацию.';

// Contact form
$txt['admin_contact_form'] = 'Свяжитесь с администраторами';
$txt['contact_your_message'] = 'Ваше сообщение';
$txt['errors_contact_form'] = 'Следующие ошибки возникли во время вашего запроса';
$txt['contact_subject'] = 'Гость послал вам сообщение';
$txt['contact_thankyou'] = 'Спасибо за ваше сообщение. Кто-то свяжется с вами как можно скорее.';

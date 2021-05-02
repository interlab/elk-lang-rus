<?php
// Version: 1.1; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additional_params: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.

// Do not use block comments in this file, they will have special meaning.

global $txtBirthdayEmails;

$txt['scheduled_approval_email_topic'] = 'Следующие темы ожидают одобрения:';
$txt['scheduled_approval_email_msg'] = 'Следующие сообщения ожидают одобрения:';
$txt['scheduled_approval_email_attach'] = 'Следующие вложения ожидают одобрения:';
$txt['scheduled_approval_email_event'] = 'Следующие события ожидают одобрения:';

/**
	@additional_params: resend_activate_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONCODE:  The code needed to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['resend_activate_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_activate_message_body'] = 'Благодарим Вас за регистрацию на {FORUMNAME}. Ваше имя пользователя: {USERNAME}. Если вы забыли свой пароль, вы можете сбросить его, посетив {FORGOTPASSWORDLINK}.

Прежде чем вы сможете войти, вы должны сначала активировать свою учетную запись, выбрав следующую ссылку:

{ACTIVATIONLINK}

Если у вас возникнут проблемы с активацией, перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код \'{ACTIVATIONCODE}\'.

{REGARDS}';

/**
	@additional_params: resend_pending_message
		REALNAME: The display name for the member receiving the email.
		USERNAME:  The user name for the member receiving the email.
	@description:
*/
$txt['resend_pending_message_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['resend_pending_message_body'] = 'Здравствуйте, {REALNAME}, ваш запрос на регистрацию на {FORUMNAME} был получен.

Имя пользователя, под которым вы зарегистрировались - {USERNAME}.

Прежде чем вы сможете войти и начать пользоваться форумом, ваш запрос будет рассмотрен и утвержден. Когда это произойдет, вы получите другое письмо с этого адреса.

{REGARDS}';

/**
	@additional_params: mc_group_approve
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was accepted into.
	@description: The request to join a particular membergroup has been accepted.
*/
$txt['mc_group_approve_subject'] = 'Утверждение членства в группе';
$txt['mc_group_approve_body'] = '{USERNAME},

Мы рады сообщить вам, что ваша заявка на присоединение к группе \'{GROUPNAME}\' на {FORUMNAME} была принята, и ваша учетная запись была обновлена ​​для включения этой новой группы участников.

{REGARDS}
';

/**
	@additional_params: mc_group_reject
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
	@description: The request to join a particular membergroup has been rejected.
*/
$txt['mc_group_reject_subject'] = 'Отказ в членстве в группе';
$txt['mc_group_reject_body'] = '{USERNAME},

Мы приносим извинения за то, что ваша заявка на присоединение к группе \'{GROUPNAME}\' на {FORUMNAME} была отклонена.

{REGARDS}';

/**
	@additional_params: mc_group_reject_reason
		USERNAME: The user name for the member receiving the email.
		GROUPNAME: The name of the membergroup that the user was rejected from.
		REASON: Reason for the rejection.
	@description: The request to join a particular membergroup has been rejected with a reason given.
*/
$txt['mc_group_reject_reason_subject'] = 'Отказ в членстве в группе';
$txt['mc_group_reject_reason_body'] = '{USERNAME},

Мы приносим извинения за то, что ваша заявка на присоединение к группе \'{GROUPNAME}\' на {FORUMNAME} была отклонена.

Это связано со следующей причиной: {REASON}

{REGARDS}';

/**
	@additional_params: admin_approve_accept
		NAME: The display name of the member.
		USERNAME: The user name for the member receiving the email.
		PROFILELINK: The URL of the profile page.
		FORGOTPASSWORDLINK: The URL of the "forgot password" page.
	@description:
*/
$txt['admin_approve_accept_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_accept_body'] = 'Добро пожаловать, {NAME}

Ваша учетная запись была активирована вручную администратором, и теперь вы можете войти и пост. Ваше имя пользователя: {USERNAME}. Если вы забыли свой пароль, вы можете изменить его в {FORGOTPASSWORDLINK}

{REGARDS}';

/**
	@additional_params: admin_approve_activation
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_activation_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_approve_activation_body'] = 'Добро пожаловать, {USERNAME}!

Ваш аккаунт на {FORUMNAME} был одобрен администратором форума. Прежде чем вы сможете войти, вы должны сначала активировать свою учетную запись, выбрав следующую ссылку:

{ACTIVATIONLINK}

Если у вас возникнут проблемы с активацией, перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код \'{ACTIVATIONCODE}\'.

{REGARDS}';

/**
	@additional_params: admin_approve_reject
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_reject_subject'] = 'Регистрация отклонена';
$txt['admin_approve_reject_body'] = '{USERNAME},

К сожалению, ваша заявка на присоединение к {FORUMNAME} была отклонена.


{REGARDS}';

/**
	@additional_params: admin_approve_delete
		USERNAME: The user name for the member receiving the email.
	@description:
*/
$txt['admin_approve_delete_subject'] = 'Аккаунт удален';
$txt['admin_approve_delete_body'] = '{USERNAME},

Ваша учетная запись в {FORUMNAME} была удалена. Это может быть потому, что вы никогда не активировали свою учетную запись, и в этом случае вы сможете снова зарегистрироваться.

{REGARDS}
';

/**
	@additional_params: admin_approve_remind
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_approve_remind_subject'] = 'Напоминание о регистрации';
$txt['admin_approve_remind_body'] = '{USERNAME},
Вы по-прежнему не активировали свою учетную запись на {FORUMNAME}.

Пожалуйста, используйте ссылку ниже, чтобы активировать свой аккаунт:
{ACTIVATIONLINK}

Если у вас есть какие-либо проблемы с активацией, пожалуйста, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код - "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params:
		USERNAME: The user name for the member receiving the email.
		ACTIVATIONLINK:  The url link to activate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE: The activation code.
	@description:
*/
$txt['admin_register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин - {USERNAME}, пароль - {PASSWORD}.

Прежде чем вы сможете войти, вы должны сначала активировать свою учетную запись, по ссылке:

{ACTIVATIONLINK}

Если у вас есть какие-либо проблемы с активацией, пожалуйста, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код - "{ACTIVATIONCODE}".

{REGARDS}';

$txt['admin_register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['admin_register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин - {USERNAME}, пароль - {PASSWORD}.

{REGARDS}';

/**
	@additional_params: new_announcement
		TOPICSUBJECT: The subject of the topic being announced.
		MESSAGE: The message body of the first post of the announced topic.
		TOPICLINK: A link to the topic being announced.
	@description:
*/
$txt['new_announcement_subject'] = 'Новое объявление: {TOPICSUBJECT}';
$txt['new_announcement_body'] = '{MESSAGE}

Чтобы отказаться от подписки на эти объявления, войдите на форум и снимите флажок «Получать уведомления о форумах и важные уведомления по электронной почте». в вашем профиле.

Вы можете просмотреть полное объявление, перейдя по этой ссылке:
{TOPICLINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_body_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_once_body_body'] = 'Новый ответ, \'{TOPICSUBJECT}\', был написан на форуме, который вы смотрите.

Вы можете посмотреть его тут:
{TOPICLINK}

Могут быть опубликованы другие ответы, но вы не будете получать больше уведомлений по электронной почте, пока не вернетесь на форуми не прочитаете некоторые из них...

Текст ответа показан ниже:
{MESSAGE}

Отмените подписку на новые ответы на этой теме, используя эту ссылку:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_once
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_once_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_once_body'] = 'Новое сообщение, \'{TOPICSUBJECT}\' было написано на форуме, которую вы смотрите

Вы можете увидеть сообщение здесь:
{TOPICLINK}

Могут быть опубликованы другие сообщения, но вы не будете получать больше уведомлений по электронной почте, пока не вернетесь к форуму и не прочитаете некоторые из них.

Отмените подписку на новые темы на этом форуме, используя эту ссылку:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards_body
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		MESSAGE: This is the body of the message.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_body_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body_body'] = 'Новое сообщение, \'{TOPICSUBJECT}\', было сделано на форуме, который вы смотрите.

Смотрите здесь
{TOPICLINK}

Текст сообщения:
{MESSAGE}

Отмените подписку на новые темы на этом форуме, используя эту ссылку:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notify_boards
		TOPICSUBJECT: The subject of the topic causing the notification
		TOPICLINK: A link to the topic.
		UNSUBSCRIBELINK: Link to unsubscribe from notifications.
	@description:
*/
$txt['notify_boards_subject'] = 'Новая тема: {TOPICSUBJECT}';
$txt['notify_boards_body'] = 'Новое сообщение, \'{TOPICSUBJECT}\', опубликовано в теме .

Вы можете посмотреть его здесь
{TOPICLINK}

Отпишитесь от темы:
{UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: request_membership
		RECPNAME: The name of the person receiving the email
		APPYNAME: The name of the person applying for group membership
		GROUPNAME: The name of the group being applied to.
		REASON: The reason given by the applicant for wanting to join the group.
		MODLINK: Link to the group moderation page.
	@description:
*/
$txt['request_membership_subject'] = 'Новая групповая заявка
';
$txt['request_membership_body'] = '{RECPNAME},

{APPYNAME} Пользователь запросил членство в группе {GROUPNAME}. Пользователь указал следующую причину:

{REASON}

Вы можете одобрить или отклонить эту заявку, нажав на ссылку ниже:

{MODLINK}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		PROFILE_LINK: Link to profile of member receiving email where can renew.
		SUBSCRIPTION: Name of the subscription.
		END_DATE: Date it expires.
	@description:
*/
$txt['paid_subscription_reminder_subject'] = 'Срок действия подписки истекает на {FORUMNAME}';
$txt['paid_subscription_reminder_body'] = '{REALNAME},

Срок действия подписки, на которую вы подписаны на {FORUMNAME}, истекает. Если при отмене подписки, которую вы выбрали для автоматического продления, вам не нужно предпринимать никаких действий - в противном случае вы можете рассмотреть возможность подписки еще раз. Подробности ниже

Подписка: {SUBSCRIPTION}
Дата истечения: {END_DATE}

Чтобы редактировать свои подписки, посетите следующий URL:
{PROFILE_LINK}

{REGARDS}';

/**
	@additional_params: activate_reactivate
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
	@description:
*/
$txt['activate_reactivate_subject'] = 'С возвращением на {FORUMNAME}';
$txt['activate_reactivate_body'] = 'Для повторной проверки вашего адреса электронной почты ваша учетная запись была деактивирована. Нажмите на следующую ссылку, чтобы активировать его снова:
{ACTIVATIONLINK}

Если у вас возникли проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и используйте код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		REMINDLINK: The link to reset the password.
		IP: The IP address of the requester.
		MEMBERNAME:
	@description:
*/
$txt['forgot_password_subject'] = 'Новый пароль для {FORUMNAME}';
$txt['forgot_password_body'] = 'Уважаемый {REALNAME},
Это письмо было отправлено, поскольку функция «Забыли пароль» была применена к вашей учетной записи. Чтобы установить новый пароль, нажмите следующую ссылку:
{REMINDLINK}

IP: {IP}
Логин: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: forgot_password
		REALNAME: The real (display) name of the person receiving the reminder.
		IP: The IP address of the requester.
		OPENID: The members OpenID identity.
	@description:
*/
$txt['forgot_openid_subject'] = 'Напоминание OpenID для {FORUMNAME}';
$txt['forgot_openid_body'] = 'Уважаемый {REALNAME},
Это письмо было отправлено, поскольку функция «Забыл OpenID» была применена к вашей учетной записи. Ниже приведен OpenID, с которым связана ваша учетная запись:
{OPENID}

IP: {IP}
Логин: {MEMBERNAME}

{REGARDS}';

/**
	@additional_params: scheduled_approval
		REALNAME: The real (display) name of the person receiving the email.
		BODY: The generated body of the mail.
	@description:
*/
$txt['scheduled_approval_subject'] = 'Сводка сообщений на утверждение на форуме {FORUMNAME}';
$txt['scheduled_approval_body'] = '{REALNAME},

В этом письме содержится список всех элементов, ожидающих одобрения на {FORUMNAME}.

{BODY}

Пожалуйста, войдите на форум, чтобы просмотреть эти пункты:
{SCRIPTURL}

{REGARDS}';

/**
	@additional_params: send_topic
		TOPICSUBJECT: The subject of the topic being sent.
		SENDERNAME: The name of the member sending the topic.
		RECPNAME: The name of the person receiving the email.
		TOPICLINK: A link to the topic being sent.
	@description:
*/
$txt['send_topic_subject'] = 'Тема: {TOPICSUBJECT} (От: {SENDERNAME})';
$txt['send_topic_body'] = 'Уважаемый {RECPNAME},
Я хочу, чтобы вы проверили "{TOPICSUBJECT}" на {FORUMNAME}.  Чтобы просмотреть его, пожалуйста, нажмите на эту ссылку:

{TOPICLINK}

Спасибо,

{SENDERNAME}';

/**
	@additional_params: send_topic_comment
		TOPICSUBJECT: The subject of the topic being sent.
		SENDERNAME: The name of the member sending the topic.
		RECPNAME: The name of the person receiving the email.
		TOPICLINK: A link to the topic being sent.
		COMMENT: A comment left by the sender.
	@description:
*/
$txt['send_topic_comment_subject'] = 'Тема: {TOPICSUBJECT} (От: {SENDERNAME})';
$txt['send_topic_comment_body'] = 'Уважаемые {RECPNAME},
Я хочу, чтобы вы проверили "{TOPICSUBJECT}" на {FORUMNAME}.  Чтобы просмотреть его, пожалуйста, нажмите на эту ссылку:

{TOPICLINK}

Также был добавлен комментарий по этой теме:
{COMMENT}

Спасибо,

{SENDERNAME}';

/**
	@additional_params: send_email
		EMAILSUBJECT: The subject the user wants to email.
		EMAILBODY: The body the user wants to email.
		SENDERNAME: The name of the member sending the email.
		RECPNAME: The name of the person receiving the email.
	@description:
*/
$txt['send_email_subject'] = '{EMAILSUBJECT}';
$txt['send_email_body'] = '{EMAILBODY}';

/**
	@additional_params: report_to_moderator
		TOPICSUBJECT: The subject of the reported post.
		POSTERNAME: The report post's author's name.
		REPORTERNAME: The name of the person reporting the post.
		TOPICLINK: The url of the post that is being reported.
		REPORTLINK: The url of the moderation center report.
		COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
	@description: When a user reports a post this email is sent out to moderators and admins of that board.
*/
$txt['report_to_moderator_subject'] = 'Жалоба на сообщение: {TOPICSUBJECT} от {POSTERNAME}';
$txt['report_to_moderator_body'] = 'Следующий пост,, "{TOPICSUBJECT}" от {POSTERNAME} пожаловался {REPORTERNAME} 

Тема: {TOPICLINK}
Центр модерации: {REPORTLINK}

К жалобе дан следующий комментарий:
{COMMENT}

{REGARDS}';

/**
	@additional_params: change_password
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
	@description:
*/
$txt['change_password_subject'] = 'Информация о новом пароле';
$txt['change_password_body'] = 'Здравствуйте {USERNAME},

Ваши данные для входа на {FORUMNAME} были изменены сбросом пароля.

Логин "{USERNAME}" и пароль теперь "{PASSWORD}".

Вы можете изменить его после входа в систему, перейдя на страницу профиля или посетив эту страницу после входа в систему.:
{SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин - {USERNAME}, если вы забыли пароль, пройдите по ссылке - {FORGOTPASSWORDLINK}.

Прежде чем вы сможете войти, вы должны сначала активировать свою учетную запись, по ссылке:

{ACTIVATIONLINK}

Если у вас есть какие-либо проблемы с активацией, пожалуйста, посетите {ACTIVATIONLINKWITHOUTCODE} и введите код - "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: register_activate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
		ACTIVATIONLINK:  The url link to reactivate the member's account.
		ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
		ACTIVATIONCODE:  The code needed to reactivate the member's account.
	@description:
*/
$txt['register_openid_activate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_openid_activate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин -  {USERNAME}. Вы выбрали аутентификацию, используя следующую идентификацию OpenID:
{OPENID}

Прежде чем вы сможете войти, вам сначала нужно активировать свою учетную запись. Для этого перейдите по этой ссылке:

{ACTIVATIONLINK}

Если у вас возникнут проблемы с активацией, посетите {ACTIVATIONLINKWITHOUTCODE} и используйте код "{ACTIVATIONCODE}".

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		COPPALINK:  The url link to the coppa form.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_coppa_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_coppa_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин - {USERNAME}. Если вы забыли свой пароль, вы можете изменить его по адресу {FORGOTPASSWORDLINK}

Прежде чем вы сможете войти в систему, администратору требуется согласие вашего родителя / опекуна на вступление в сообщество. Вы можете получить больше информации по ссылке ниже:

{COPPALINK}

{REGARDS}';

/**
	@additional_params: register_coppa
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
		COPPALINK:  The url link to the coppa form.
	@description:
*/
$txt['register_openid_coppa_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_openid_coppa_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин -  {USERNAME}.

Вы выбрали аутентификацию, используя идентификацию OpenID:
{OPENID}

Прежде чем вы сможете войти в систему, администратору требуется согласие вашего родителя / опекуна на вступление в сообщество. Вы можете получить больше информации по ссылке ниже:

{COPPALINK}

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваше имя пользователя {USERNAME}. Если вы забыли свой пароль, вы можете изменить его на {FORGOTPASSWORDLINK}

{REGARDS}';

/**
	@additional_params: register_immediate
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
	@description:
*/
$txt['register_openid_immediate_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_openid_immediate_body'] = 'Спасибо за регистрацию на {FORUMNAME}. Ваш логин - {USERNAME}.

Вы выбрали аутентификацию, используя следующую идентификацию OpenID:
{OPENID}

Вы можете обновить свой профиль, посетив эту страницу после входа в систему:

{SCRIPTURL}?action=profile

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		PASSWORD: The password for the member.
		FORGOTPASSWORDLINK: The url to the "forgot password" page.
	@description:
*/
$txt['register_pending_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_pending_body'] = 'Здравствуйте, {REALNAME}, ваша регистрация на {FORUMNAME} получена.

Ваш логин - {USERNAME}. Если вы забыли пароль, воспользуйтесь ссылкой - {FORGOTPASSWORDLINK}

Прежде чем вы сможете войти и начать использовать форум, ваш запрос будет рассмотрен и утвержден. Когда это произойдет, вы получите еще одно письмо с этого адреса.

{REGARDS}';

/**
	@additional_params: register_pending
		REALNAME: The display name for the member receiving the email.
		USERNAME: The user name for the member receiving the email.
		OPENID: The openID identity for the member.
	@description:
*/
$txt['register_openid_pending_subject'] = 'Добро пожаловать на {FORUMNAME}';
$txt['register_openid_pending_body'] = 'Здравствуйте, {REALNAME}, ваш запрос на регистрацию на {FORUMNAME} был получен.

Вы зарегистрировались с логином {USERNAME}.

Вы выбрали аутентификацию, используя следующую идентификацию OpenID:
{OPENID}

Прежде чем вы сможете войти и начать пользоваться форумом, ваш запрос будет рассмотрен и утвержден. Когда это произойдет, вы получите другое письмо с этого адреса.

{REGARDS}';

/**
	@additional_params: notification_reply
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_subject'] = 'Ответ на сообщение: {TOPICSUBJECT}';
$txt['notification_reply_body'] = 'Был опубликован ответ на тему, которую вы просматриваете, пользователем {POSTERNAME}.

Просмотреть: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_reply_body
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_subject'] = 'Ответ на сообщение: {TOPICSUBJECT}';
$txt['notification_reply_body_body'] = 'Был опубликован ответ на тему, которую вы просматриваете, пользователем {POSTERNAME}.

Посмотреть: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

Текст ответа показан ниже:
{MESSAGE}

{REGARDS}';

/**
	@additional_params: notification_reply_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
	@description:
*/
$txt['notification_reply_once_subject'] = 'Ответ на сообщение: {TOPICSUBJECT}';
$txt['notification_reply_once_body'] = 'Был опубликован ответ на тему, которую вы просматриваете, пользователем {POSTERNAME}.

Посмотреть: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

Может быть опубликовано больше ответов, но вы не будете получать больше уведомлений, пока не прочитаете тему.

{REGARDS}';

/**
	@additional_params: notification_reply_body_once
		TOPICSUBJECT:
		POSTERNAME:
		TOPICLINK:
		UNSUBSCRIBELINK:
		MESSAGE:
	@description:
*/
$txt['notification_reply_body_once_subject'] = 'Ответ на сообщение: {TOPICSUBJECT}';
$txt['notification_reply_body_once_body'] = 'Ответ был размещен на темы, которые вы смотрите, от {POSTERNAME}.

Смотреть ответ: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

Текст ответа:
{MESSAGE}

Больше ответов может быть размещено в теме, но вы не получали больше никаких уведомлений, пока вы не читали тему.

{REGARDS}';

/**
	@additional_params: notification_sticky
	@description:
*/
$txt['notification_sticky_subject'] = 'Сообщение закреплено: {TOPICSUBJECT}';
$txt['notification_sticky_body'] = 'Тема, которую вы смотрите, была закреплена пользователем {POSTERNAME}.

Посмотреть тему: {TOPICLINK}

Отписаться от темы, используя эту ссылку: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_lock
	@description:
*/
$txt['notification_lock_subject'] = 'Тема заблокирована: {TOPICSUBJECT}';
$txt['notification_lock_body'] = 'Тема, которую вы смотрите, была заблокирована пользователем {POSTERNAME}.

Посмотреть тему: {TOPICLINK}

Отписаться от темы, используя эту ссылку: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_unlock
	@description:
*/
$txt['notification_unlock_subject'] = 'Тема открыта: {TOPICSUBJECT}';
$txt['notification_unlock_body'] = 'Тема, которую вы смотрите, была закрыта пользователем {POSTERNAME}.

Посмотреть тему: {TOPICLINK}

Отписаться от темы, используя эту ссылку: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_remove
	@description:
*/
$txt['notification_remove_subject'] = 'Тема удалена: {TOPICSUBJECT}';
$txt['notification_remove_body'] = 'Тема, которую вы смотрите, удалил пользователь {POSTERNAME}.

{REGARDS}';

/**
	@additional_params: notification_move
	@description:
*/
$txt['notification_move_subject'] = 'Тема перемещена: {TOPICSUBJECT}';
$txt['notification_move_body'] = 'Тему, которую вы смотрите, была перемещена на другой форум {POSTERNAME}.

Смотреть тему: {TOPICLINK}

Отписаться от темы: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_merged
	@description:
*/
$txt['notification_merge_subject'] = 'Тема объединена: {TOPICSUBJECT}';
$txt['notification_merge_body'] = 'Тема, которую вы смотрите, была объединена с другой темой пользователем {POSTERNAME}.

Посмотреть тему: {TOPICLINK}

Отписаться от темы, используя эту ссылку: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: notification_split
	@description:
*/
$txt['notification_split_subject'] = 'Тема разделена: {TOPICSUBJECT}';
$txt['notification_split_body'] = 'Тема, которую вы смотрите, была разделена пользователем {POSTERNAME}.

Посмотреть тему: {TOPICLINK}

Отписаться от темы, используя эту ссылку: {UNSUBSCRIBELINK}

{REGARDS}';

/**
	@additional_params: admin_notify
		USERNAME:
		PROFILELINK:
	@description:
*/
$txt['admin_notify_subject'] = 'Присоединился новый участник';
$txt['admin_notify_body'] = '{USERNAME} Только что зарегистрировался как новый участник вашего форума. Нажмите на ссылку ниже, чтобы просмотреть их профиль.
.
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: admin_notify_approval
		USERNAME:
		PROFILELINK:
		APPROVALLINK:
	@description:
*/
$txt['admin_notify_approval_subject'] = 'Присоединился новый участник';
$txt['admin_notify_approval_body'] = '{USERNAME} только что зарегистрировался как новый участник вашего форума. Нажмите на ссылку ниже, чтобы посмотреть их профиль.
{PROFILELINK}

Прежде чем этот участник сможет начать постить, он должен сначала подтвердить свою учетную запись. Нажмите на ссылку ниже, чтобы перейти на страницу подтверждения.
{APPROVALLINK}

{REGARDS}';

/**
	@additional_params: admin_attachments_full
		REALNAME:
	@description:
*/
$txt['admin_attachments_full_subject'] = 'Внимание! Каталог вложений почти заполнен.';
$txt['admin_attachments_full_body'] = '{REALNAME},

Каталог вложений в {FORUMNAME} почти полон. Пожалуйста, посетите форум, чтобы решить эту проблему.

Когда каталог вложений достигнет максимально допустимого размера, пользователи не могут продолжать публиковать вложения или загружать пользовательские аватары (если включено).

{REGARDS}';

/**
	@additional_params: admin_backup_database
		BAK_REALNAME: the name of the user doing the backup
	@description:
*/
$txt['admin_backup_database_subject'] = 'Резервное копирование базы данных было сделано
';
$txt['admin_backup_database_body'] = '{REALNAME},

This email is to inform you that {BAK_REALNAME} has just downloaded a backup of the database at {FORUMNAME}.

{REGARDS}';

/**
	@additional_params: editing_theme
		EDIT_REALNAME: the name of the user doing the backup
		FILE_EDITED: the name of the file being modified
		THEME_NAME: the name of the theme
	@description:
*/
$txt['editing_theme_subject'] = 'Редактирование темы
';
$txt['editing_theme_body'] = '{REALNAME},

это письмо просто, чтобы сообщить вам, что {EDIT_REALNAME} будет редактировать файл шаблона:
{FILE_EDITED}
для темы {THEME_NAME} на {FORUMNAME}.

Если вы знаете, что это не так, пожалуйста, расследуйте событие
.

{REGARDS}';

/**
	@additional_params: paid_subscription_refund
		NAME: Subscription title.
		REALNAME: Recipients name
		REFUNDUSER: Username who took out the subscription.
		REFUNDNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_refund_subject'] = 'Возвращаемая платная подписка
 ';
$txt['paid_subscription_refund_body'] = '{REALNAME},

Участник получил возмещение по платной подписке. Ниже приведены подробности этой подписки:

	Подписка: {NAME}
	Логин: {REFUNDNAME} ({REFUNDUSER})
	Дата: {DATE}

Вы можете просмотреть профиль этого участника, нажав на ссылку ниже:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_new
		NAME: Subscription title.
		REALNAME: Recipients name
		SUBEMAIL: Email address of the user who took out the subscription
		SUBUSER: Username who took out the subscription.
		SUBNAME: User's display name who took out the subscription.
		DATE: Today's date.
		PROFILELINK: Link to members profile.
	@description:
*/
$txt['paid_subscription_new_subject'] = 'Новая платная подписка';
$txt['paid_subscription_new_body'] = '{REALNAME},

Участник получил новую платную подписку. Ниже приведены подробности этой подписки

	Подписка: {NAME}
	Логин: {SUBNAME} ({SUBUSER})
	Email: {SUBEMAIL}
	Цена: {PRICE}
	Дата: {DATE}

Профиль подписчика:
{PROFILELINK}

{REGARDS}';

/**
	@additional_params: paid_subscription_error
		ERROR: Error message.
		REALNAME: Recipients name
	@description:
*/
$txt['paid_subscription_error_subject'] = 'Ошибка платной подписки';
$txt['paid_subscription_error_body'] = 'Здравствуйте, {REALNAME},

Следующая ошибка произошла при обработке платной подписки
---------------------------------------------------------------
{ERROR}

{REGARDS}';

/**
	@additional_params: new_pm
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body'] = 'Вы только что получили личное сообщение от {SENDER} на {FORUMNAME}

ПРИМЕЧАНИЕ: Помните, что это просто уведомление. Пожалуйста, не отвечайте на это письмо.

Прочтите это личное сообщение здесь: {READLINK}

Ответьте на это личное сообщение здесь: {REPLYLINK}';

/**
	@additional_params: new_pm_body
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_body'] = 'Вы только что получили личное сообщение от {SENDER} на {FORUMNAME}

ПРИМЕЧАНИЕ: Помните, что это просто уведомление. Пожалуйста, не отвечайте на это письмо.

Сообщение:

{MESSAGE}

Ответьте на это сообщение: {REPLYLINK}';

/**
	@additional_params: new_pm_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		READLINK:  The link to directly access the read page.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_tolist_body'] = '{TOLIST} Вы только что получили личное сообщение от {SENDER} на {FORUMNAME}

ПРИМЕЧАНИЕ: Помните, что это просто уведомление. Пожалуйста, не отвечайте на это письмо.

Прочтите это личное сообщение здесь: {READLINK}

Ответьте на сообщение здесь: {REPLYLINK}';

/**
	@additional_params: new_pm_body_tolist
		SUBJECT: The personal message subject.
		SENDER:  The user name for the member sending the personal message.
		MESSAGE:  The text of the personal message.
		REPLYLINK:  The link to directly access the reply page.
		TOLIST:  The list of users that will receive the personal message.
	@description: A notification email sent to the receivers of a personal message
*/
$txt['new_pm_body_tolist_subject'] = 'Новое личное сообщение: {SUBJECT}';
$txt['new_pm_body_tolist_body'] = '{TOLIST} вы только что получили личное сообщение от {SENDER} на {FORUMNAME}

ПРИМЕЧАНИЕ: Помните, что это просто уведомление. Пожалуйста, не отвечайте на это письмо.

Сообщение:

{MESSAGE}

Ответьте на сообщение: {REPLYLINK}';

/**
	@additional_params: notify_new_buddy
		ACTIONNAME:  The user name of the member adding as buddy.
	@description: A notification email sent to the members that are set as buddy by someone
*/
$txt['notify_new_buddy_subject'] = '{ACTIONNAME} добавил вас, как друга';
$txt['notify_new_buddy_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just added you as a buddy 
at {FORUMNAME}.  

{REGARDS}


You can unsubscribe to further "new buddy" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_new_buddy_digest'] = 'Вы были добавлены в качестве приятеля по:';
$txt['notify_new_buddy_snippet'] = '{ACTIONNAME}';

/**
	@additional_params: notify_new_likemsg
		ACTIONNAME:  The user name of the member that liked the message.
		MSGLINK:  The url to the message liked.
		SUBJECT: The subject of the message
	@description: A notification email sent to the members whose message has been liked
*/
$txt['notify_new_likemsg_subject'] = 'Сообщение получило лайк';
$txt['notify_new_likemsg_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just liked your message 
in the "{SUBJECT}" topic at {FORUMNAME}.  
You can view that message by following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "liked by" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_new_likemsg_digest'] = 'Следующие сообщения понравились:';
$txt['notify_new_likemsg_snippet'] = '{MSGLINK}';

/**
	@additional_params: notify_mentionmem
		ACTIONNAME:  The user name of the member that mentioned someone.
		MSGLINK:  The url to the message where someone has been mentioned.
        SUBJECT: The subject of the message
	@description: A notification email sent to the members mentioned by someone else in a message
*/
$txt['notify_mentionmem_subject'] = 'Вы были упомянуты';
$txt['notify_mentionmem_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} has just mentioned you in a message 
in the "{SUBJECT}" topic at {FORUMNAME}.  
You can view that message by following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "mentioned" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_mentionmem_digest'] = 'You have been mentioned in the following messages:';
$txt['notify_mentionmem_snippet'] = '{MSGLINK}';

/**
	@additional_params: notify_quotedmem
		ACTIONNAME:  The user name of the member that quoted someone's message.
		MSGLINK:  The url to the message where someone has been quoted.
        SUBJECT: The subject of the message
	@description: A notification email sent to the members quoted in someone else message
*/
$txt['notify_quotedmem_subject'] = 'Your message has been quoted';
$txt['notify_quotedmem_body'] = '{REALNAME},

We wanted to let you know that {ACTIONNAME} at {FORUMNAME} has just quoted
your messages in the "{SUBJECT}" topic.  You can view that message by 
following this link:
{MSGLINK}

{REGARDS}


You can unsubscribe to further "quoted message" notifications by using this link:
{UNSUBSCRIBELINK}
';
$txt['notify_quotedmem_digest'] = 'Ваши сообщения были указаны в:';
$txt['notify_quotedmem_snippet'] = '{MSGLINK}';

/**
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/

$txtBirthdayEmails['happy_birthday_subject'] = 'С Днем Рождения от {FORUMNAME}.';
$txtBirthdayEmails['happy_birthday_body'] = 'Здравствуйте, {REALNAME},

Мы здесь, в {FORUMNAME}, хотим поздравить вас с днем ​​рождения. Пусть этот день и следующий год будут полны радости.

{REGARDS}';
$txtBirthdayEmails['happy_birthday_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>';

$txtBirthdayEmails['karlbenson1_subject'] = 'На вашем Дне рождения...
';
$txtBirthdayEmails['karlbenson1_body'] = 'Мы, возможно, послали Вам поздравительную открытку. Мы, возможно, послали ли бы Вам некоторые цветы или пирог.

Но мы не сделали.

Мы, возможно, послали Вам одно из тех автоматически произведенных сообщений, чтобы желать Вам с днем рождения, где мы даже не должны заменить НАЗВАНИЕ ВСТАВКИ.

Но мы это не сделали

Мы написали этот день рождения приветствие только для Вас.

Мы хотели бы пожелать Вам особенный день рождения.

{REGARDS}

//:: Это сообщение было сформировано автоматически:: //';
$txtBirthdayEmails['karlbenson1_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

$txtBirthdayEmails['nite0859_subject'] = 'С Днем Рождения!';
$txtBirthdayEmails['nite0859_body'] = 'Ваши друзья в {FORUMNAME} хотели бы потратить немного времени на поздравление с днем ​​рождения, {REALNAME}. Если вы еще не сделали этого недавно, посетите наше сообщество, чтобы другие имели возможность передать свои теплые пожелания.

Несмотря на то, что сегодня ваш день рождения, {REALNAME}, мы хотели бы напомнить вам, что ваше членство в нашем сообществе до сих пор было для нас лучшим подарком.

С наилучшими пожеланиями,
Сотрудники {FORUMNAME}';
$txtBirthdayEmails['nite0859_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>';

$txtBirthdayEmails['zwaldowski_subject'] = 'Пожелания для {REALNAME}';
$txtBirthdayEmails['zwaldowski_body'] = 'Здравствуйте, {REALNAME},

Еще один год в твоей жизни прошел. Мы в {FORUMNAME} надеемся, что она была наполнена счастьем, и желаем Вам удачи в новом году .

{REGARDS}';
$txtBirthdayEmails['zwaldowski_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>';

$txtBirthdayEmails['geezmo_subject'] = 'С Днем Рождения, {REALNAME}!';
$txtBirthdayEmails['geezmo_body'] = ' Вы знаете, у кого сегодня день рождения, {REALNAME}?

Мы знаем...!

С Днем рождения!

Теперь вы на год старше, но мы надеемся, что вы намного счастливее, чем в прошлом году.

Счастливого вам дня, {REALNAME}!

- От {FORUMNAME}!';
$txtBirthdayEmails['geezmo_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>';

$txtBirthdayEmails['karlbenson2_subject'] = 'Ваше приветствие с Днем Рождения';
$txtBirthdayEmails['karlbenson2_body'] = 'Мы надеемся, что ваш день рождения-  самый лучший облачно ли, солнечно ли, независимо от погоды.
Мы надеемся, у вас лучшие торты ко Дню рождения и удовольствие.

Мы надеемся, что это сообщение вас развеселило, сделало это в прошлом, в то же время, в том же месте, и в следующем году!
.

{REGARDS}';
$txtBirthdayEmails['karlbenson2_author'] = '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>';

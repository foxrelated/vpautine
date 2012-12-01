<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php $aContent = array (
  'menu_core_friends' => 'Друзья',
  'menu_top_friends' => 'Лучшие друзья',
  'menu_online_friends' => 'Друзья Онлайн',
  'create_new_list' => 'Создать список...',
  'edit_lists' => 'Список',
  'view_list' => 'Посмотреть список',
  'user_setting_can_add_friends' => 'Разрешить добавлять друзей?',
  'user_setting_can_add_folders' => 'Разрешить добавлять пользовательские папки?',
  'setting_total_requests_display' => '<title>Число отображаемых предложений дружить</title><info>Сколько предложений дружить должно отображаться, когда пользователь принимает предложения?</info>',
  'menu_all_friends' => 'Мои друзья',
  'menu_pending_requests' => 'Я хочу дружить с...',
  'menu_friend_friends' => 'Друзья',
  'setting_friend_display_limit' => '<title>Лимит отображаемых друзей</title><info>Задает, сколько друзей должно быть отображено в профиле пользователей и на панели.</info>',
  'setting_friend_user_feed_display_limit' => '<title>Число отображаемых друзей (Выбор пользователя)</title><info>Задает, сколько друзей пользователь может выбрать для отображения на своей панели или в профиле.</info>',
  'user_setting_can_remove_friends_from_profile' => 'Можно ли убрать блок друзей из профиля?',
  'user_setting_can_remove_friends_from_dashboard' => 'Можно ли убрать блок друзей из панели?',
  'setting_enable_birthday_notices' => '<title>Разрешить напоминания о днях рождения</title><info>Если опция включена, пользователи видят список приближающихся дней рождения своих друзей.</info>',
  'setting_days_to_check_for_birthday' => '<title>За сколько дней предупреждать о дне рождения</title><info>Эта настройка задает количество дней до дня рождения, когда скрипт должен предупреждать о нем.  Устанавливать слишком большое значение может быть нецелесообразным.  Результаты этой опции не могут быть кэшированы, поэтому она ведет к замедлению работы вашего сайта.  Имейте в виду, что эту опцию можно полностью отменить в настройке friend.enable_birthday_notices</info>',
  'setting_birthdays_cache_time_out' => '<title>Время Сброса Кэша Дней Рождения</title><info>Отображение дней рождения ваших друзей в панели происходит за счет обращений к базе данных, поэтому мы кэшируем их для экономии ресурсов.  Эта настройка содержит значение времени обновления кэша, заданное в часах, т. е. 5 обозначает, что каждые 5 часов обновляется список друзей, чей день рождения состоится в ближайшее время. Это имеет значение для вновь зарегистрированных друзей, чей день рождения состоится в через 1 день.  Эта опция дополняет days_to_check_for_birthday и бесполезна, если отключена опция enable_birthday_notices.</info>',
  'setting_show_empty_birthdays' => '<title>Показывать Пустые Дни Рождения</title><info>Если опция включена, сайт будет показывать блок в панели, независимо от того, есть ли друзья, у которых в ближайшие дни день рождения, или нет.   Отключение опции не дает улучшения производительности, поскольку содержимое уже кэшировано.</info>',
  'menu_birthday_e_cards' => 'Дни рождения',
  'setting_friend_meta_keywords' => '<title>Ключевые слова друзей</title><info>Ключевые слова используются во время связи с модулем друзей.</info>',
  'your_message_has_been_sent' => 'Ваше сообщение отправлено.',
  'friend_request_successfully_sent' => 'Запрос на дружбу успешно отправлен.',
  'you_have_reached_your_limit' => 'Вы достигли лимита.',
  'done' => 'Готово!',
  'top_friends' => 'Лучшие друзья',
  'remove_from_your_top_friends_list' => 'Удалить из списка лучших друзей',
  'add_to_your_top_friends_list' => 'Добавить в список лучших друзей',
  'friends_successfully_moved' => 'Друзья успешно перемещены.',
  'friend_successfully_removed' => 'Друг успешно удален.',
  'friend_lists' => 'Списки друзей',
  'view_all' => 'Все',
  'friends' => 'Друзья',
  'birthdays' => 'Дни рождения друзей',
  'my_friends' => 'Мои друзья',
  'change_my_top_friends' => 'Изменить список лучших друзей',
  'search_friends' => 'Поиск друзей',
  'invalid_friend_list' => 'Некорректный список друзей.',
  'successfully_deleted' => 'Успешно удален.',
  'birthday_e_cards' => 'Дни рождения',
  'friends_request_successfully_deleted' => 'Предложения дружить успешно удалены.',
  'pending_friend_requests' => 'Мои предложения дружить, ожидающие подтверждения',
  'user_link_has_closed_their_friends_section' => '{user_link} закрыл(а) свой раздел друзей.',
  'full_name_s_friends' => '{full_name} - Друзья',
  'full_name_is_on_site_title_and_has_total_friends' => '{full_name} находится на сайте {site_title} и имеет {total} друзей.',
  'full_name_is_connected_with_friends' => '{full_name} связан с {friends}.',
  'sign_up_on_site_title_and_connect_with_full_name_message_full_name_or_add_full_name_as_you' => 'Зарегистрируйтесь на сайте {site_title} и свяжитесь с {full_name}, напишите сообщение {full_name}, или добавьте {full_name} в число друзей.',
  'not_a_valid_user_to_be_friends_with' => 'С этим пользователем нельзя дружить.',
  'you_are_already_friends_with_this_user' => 'Вы уже дружите с этим пользователем.',
  'friends_request' => 'Запрос на дружбу',
  'full_name_added_you_as_a_friend_on_site_title' => '{full_name} добавил вас в друзья на {site_title}.',
  'full_name_added_you_as_a_friend_on_site_title_to_confirm_this_friend_request' => '{full_name} добавил вас в друзья на {site_title}.  Для подтверждения дружбы, перейдите по ссылке ниже: <a href="{link}">{link}</a>',
  'no_friends_requests' => 'Нет предложений дружбы.',
  'friend_requests_total' => 'Запросов на дружбу (<span id="js_request_friend_count_total">{total}</span>)',
  'viewer_image_you_and_owner_image_a_href_user_link_full_name_a_are_now_friends' => '{viewer_image}Вы и {owner_image}<a href="{user_link}">{full_name}</a> теперь друзья.',
  'owner_image_you_and_viewer_image_a_href_friend_link_friend_a_are_now_friends' => '{owner_image}Вы и {viewer_image}<a href="{friend_link}">{friend}</a> теперь друзья.',
  'owner_image_a_href_user_link_full_name_a_and_viewer_image' => '{owner_image}<a href="{user_link}">{full_name}</a> и {viewer_image}<a href="{friend_link}">{friend}</a> теперь друзья.',
  'owner_image_a_href_user_link_full_name_a_and_viewer_image_friends' => '{owner_image}<a href="{user_link}">{full_name}</a> и {viewer_image}<a href="{friend_link}">{friend}</a> теперь друзья.',
  'new_friend' => 'Новый друг',
  'friend_request' => 'Предложение дружить',
  'user_link_wished_you_a_happy_birthday' => '{user_link} поздравляет Вас с Днем рождения.',
  'view_friends' => 'Посмотреть друзей',
  'user_link_asked_to_be_your_friend' => '{user_link} хочет быть вашим другом.',
  'full_name_confirmed_you_as_a_friend_on_site_title' => '{full_name} подтвердил(а) дружбу с вами на сайте {site_title}.',
  'full_name_confirmed_you_as_a_friend_on_site_title_to_view_their_profile' => '{full_name} подтвердил(а) дружбу с вами на сайте {site_title}.  Для просмотра их профиля, проследуйте по ссылке: <a href="{link}">{link}</a>',
  'full_name_wishes_you_a_happy_birthday_on_site_title' => '{full_name} поздравляет Вас с Днем рождения на {site_title}.',
  'full_name_wrote_to_congratulate_you_on_your_birthday_on_site_title' => '{full_name} написал(а) вам поздравление с днем рождения на сайте {site_title}.  Чтобы увидеть это поздравление, проследуйте по ссылке: <a href="{link}">{link}</a>',
  'adding_new_list' => 'Добавление нового списка',
  'updating' => 'Обновление',
  'delete' => 'Удалить',
  'update' => 'Обновить',
  'cancel' => 'Отменить',
  'add' => 'Добавить',
  'total_friend' => '{total} друзей',
  'total_friends' => 'Всего друзей: {total}',
  'friend_requests' => 'Запросы дружить',
  'you_are_now_friends_with_user_link' => 'Теперь друзья с {user_link}.',
  'add_to_a_friend_list' => 'Добавить в список друзей...',
  'lists' => 'Списки...',
  'create_a_new_list' => 'Создать новый список...',
  'create' => 'Создать',
  'show_all_lists' => 'Показать все списки...',
  'user_link_wrote' => '{user_link} написал',
  'accept' => 'Принять',
  'deny' => 'Отказаться',
  'no_birthdays_coming_up' => 'В ближайшие время нет дней рождения.',
  'birthday_e_card' => 'Поздравить с днем рождения электронной открыткой',
  'send_a_birthday_e_card_to_full_name' => 'Отправить открытку с поздравлением Дня Рождения для {full_name}.',
  'send_full_name_a_message' => 'Отправить {full_name} сообщение.',
  '1_day' => '1 день',
  'today' => 'Сегодня!',
  'days_left_days' => '{days_left} дней',
  'message_optional' => 'Сообщение (по желанию)',
  'send_e_card' => 'Отправить открытку',
  'view_friends_online' => 'Друзья онлайн',
  'edit_top_friends' => 'Редактировать лучших друзей',
  'find_friends_by_name_or_email' => 'Поиск друзей по имени или e-mail.',
  'you_have_not_added_any_friends_yet' => 'К сожалению, у Вас пока ещё нет друзей.',
  'search_for_friends' => 'Найти друзей',
  'browse_members' => 'Обзор пользователей',
  'you_have_already_asked_full_name_to_be_your_friend' => 'Вы уже предлагали дружбу {full_name}.',
  'full_name_has_already_asked_to_be_your_friend' => '{full_name} уже предлагал вам дружить.',
  'would_you_like_to_accept_their_request_to_be_friends' => 'Вы хотите принять предложение дружить?',
  'yes' => 'Да',
  'no' => 'Нет',
  'cannot_add_yourself_as_a_friend' => 'Нельзя добавить себя в качестве друга.',
  'you_are_already_friends_with_full_name' => 'Вы уже дружите с {full_name}.',
  'user_link_will_have_to_confirm_that_you_are_friends' => 'Пользователь {user_link} должен подтвердить дружбу.',
  'add_a_personal_message' => 'Написать личное сообщение...',
  'add_a_personal_message_form' => 'Написать личное сообщение',
  'write_your_message_within_250_characters' => 'Напишите сообщение в пределах 250 символов.',
  'add_friend' => 'Добавить друга',
  'search_by_email_full_name_or_user_name' => 'Поиск по e-mail или имени.',
  'view' => 'Показать',
  'all_friends' => 'Мои друзья',
  'online_friends' => 'Друзья Онлайн',
  'friends_list' => 'Список друзей',
  'find' => 'Искать',
  'sorry_no_friends_were_found' => 'К сожалению, у Вас пока (ещё) нет друзей.',
  'use_selected' => 'Использовать Выбранное',
  'save' => 'Сохранить',
  'use_this_image_to_add_friends_to_your_top_friends_list' => 'Используйте следующее изображение, чтобы добавить друзей в лучшие друзья',
  'select' => 'Выбор',
  'none' => 'Никто',
  'all' => 'Все',
  'move_to_list' => 'Переместить в список...',
  'message' => 'Сообщение',
  'age' => 'Возраст',
  'gender' => 'Пол',
  'location' => 'Страна',
  'remove_from_top' => 'Удалить из лучших друзей',
  'add_to_top' => 'Добавить в лучших друзей',
  'toggle' => 'Показать / скрыть подробности',
  'no_friends' => 'Нет друзей.',
  'no_birthday_messages_found' => 'Нет сообщений к дню рождения.',
  'remove_this_friends_request' => 'Удалить это предложение дружбы.',
  'user_link_has_not_added_any_friends' => '{user_link} не имеет с Вами общих друзей.',
  'browse_other_members' => 'Обзор других участников',
  'in_order_to_view_this_item_posted_by_user_link_you_need_to_be_on_their_friends_list' => 'Для просмотра этой темы, размещенной пользователем {user_link}, вам нужно быть в списке друзей.',
  'send_a_friends_request_to_full_name' => 'Послать предложение дружить {full_name}',
  'thank_you_for_your_request_to_join_our_group_your_membership_will_first_have_to_be_approved' => 'Спасибо за ваш запрос на присоединение к нашей группе. Ваше членство должно быть одобрено.',
  'successfully_deleted_the_group' => 'Группа успешно удалена.',
  'group_invitation_successfully_sent' => 'Приглашение в группу успешно отправлено!',
  'top' => 'Лучшие друзья',
  'online' => 'Онлайн',
  'there_are_no_pending_friends_requests' => 'Нет заявок на дружбу, ожидающих подтверждения.',
  'mutual_friends' => 'Общие друзья',
  '1_friend_in_common' => '1 общий друг',
  'total_friends_in_common' => '{total} общих друзей',
  'friends_online' => 'Друзья онлайн',
  'suggestions' => 'Предложения',
  'add_to_friends' => 'Добавить в друзья',
  'friend_suggestions' => 'Предложения дружбы',
  'mutual_friends_will_be_listed_here' => 'Взаимные друзья указаны здесь.',
  'videos' => 'Видеозаписи',
  'that_s_you' => 'Это ты!',
  'the_following_users_are_already_a_member_of_our_community' => 'Следующие пользователи уже есть в нашем сообществе',
  'requests' => 'Заявки на дружбу, ожидающие Вашего подтверждения',
  'you_do_not_have_any_friends_requests_at_the_moment' => 'К сожалению, желающих с Вами дружить пока нет.',
  'menu_friends_requests' => 'Со мной хотят дружить',
  'view_friend_request_id' => 'Смотреть предложения о дружбе: #{id}',
  'viewing_friends_request_id' => 'Смотрит предложения о дружбе: #{id}',
  'you_have_denied_user_link_s_friends_request' => 'Вы отказали в предложении дружить пользователю {user_link}.',
  'search_for_members' => 'Поиск пользователей',
  'search_for_your_friends' => 'Искать ваших друзей',
  'total_friends_block' => 'Всего друзей',
  'we_can_t_create_an_empty_list' => 'Невозможно создать пустой список.',
  'provide_a_name_for_your_list' => 'Укажите заголовок вашего списка.',
  'accepting_friends_request' => 'Принятие предложения дружбы',
  'no_friends_online' => 'Нет друзей онлайн.',
  'select_all' => 'Выбрать все',
  'unselect_all' => 'Снять все',
  'setting_friend_suggestion_search_total' => 'Предложение <title> Друзья Друзья Проверить графа </ TITLE> <info> При выполнении поиска, чтобы найти друг предложения для своих участников, она будет вытащить X количество пользователей, где X является числовое значение, сколько друзей для поиска. </info>',
  'setting_enable_friend_suggestion' => '<title>Предложения друзей</title><info>Включите эту функцию, если вы хотите видеть, кто посещал вашу страницу.  Вы можете контролировать критерии поиска.  Эта опция требует много дополнительных ресурсов сервера для выполнения такого поиска.   Каждый результат поиска кэшируется на X минут (вы можете задавать X).  <b>Примечание:</b> Эта опция является экспериментальной и пока не является стабильной. </info>',
  'setting_friend_suggestion_timeout' => '<title>Обновить предложения друзей</title><info></info>',
  'setting_friend_suggestion_user_based' => '<title>Проверять страну и город</title><info>Включите эту функцию чтобы принимать предложения о дружбе ваших пользователей основываясь на стране и городе, где они живут.</info>',
  'we_are_unable_to_find_any_friends_to_suggest_at_this_time_once_we_do_you_will_be_notified_within_our_dashboard' => 'У вас нет ни одного предложения о дружбе. Как только они появятся, мы сообщим вам об этом в вашем профиле.',
  'finding_another_suggestion' => 'Поиск других предложений...',
  'hide_this_suggestion' => 'Скрыть это предложение',
  'friend' => 'Друг',
  'hide' => 'Скрыть',
  'unselect' => 'Отменить',
  'optional' => '(Опционально)',
  'user_setting_total_folders' => 'Сколько папок друзей можно создавать  (Введите ноль (без кавычек) если разрешено без лимитное количество)',
  'no_search_results_found' => 'Поиск не дал результатов',
  'no_friends_found' => 'У вас пока нет друзей.',
  'search' => 'Поиск',
  'loading' => 'Загрузка...',
  'setting_hide_denied_requests_from_pending_list' => '<title>Скрыть запрещенные запросы из списка</title><info>If enabled, friend requests that were denied will be hidden from the Pending Friend Requests list.</info>',
  'cannot_select_this_user' => '(На основании прав доступа эти пользователи не могут быть выбраны.)',
  'menu_friend_sent_ecards_a441eadc1389cdf0ffe6c4f8babdd66e' => 'Отправить открытку',
  'invoices' => 'Счета',
  'id' => 'Id',
  'status' => 'Статус',
  'price' => 'Цена',
  'date' => 'Дата',
  'sent_to' => 'Отправленные',
  'you_do_not_have_any_invoices' => 'У вас нет счетов',
  'sent_from' => 'От',
  'created' => 'Созданные',
  'paid' => 'Подтвержденные',
  'setting_allow_blocked_user_to_friend_request' => '<title>Allow Friend Requests from Blocked users</title><info>If userA blocks userB, should userB be able to send a friend request to userA?</info>',
  'setting_friend_cache_limit' => '<title>Friends Cache Limit</title><info>Certain features on the site pick up on the users friends list especially when running a search for a friend. In order to provide a "live" feel to search results we cache in advance X (where X is this settings value) number of friends in memory. Making it easier for users to find their friends instantly.</info>',
  'no_new_requests' => 'Нет новых запросов.',
  'moderate' => 'На модерации',
  'relationship_request' => 'Запрос отношений',
  '1_mutual_friend' => '1 общий друг',
  'total_mutual_friends' => '{total} общих друга',
  'view_more' => 'Посмотреть больше',
  'send_a_message' => 'Отправить сообщение',
  'view_profile' => 'Просмотр профиля',
  'see_all_friend_requests' => 'Посмотреть все запросы',
  'search_friends_dot_dot_dot' => 'Поиск друзей...',
  'newest_friends' => 'Новые друзья',
  'by_first_name' => 'По имени',
  'custom_order' => 'Произвольный порядок',
  'list_successfully_deleted' => 'Список успешно удален.',
  'incoming_requests' => 'Со мной хотят дружить',
  'pending_requests' => 'Я хочу дружить',
  'you_have_1_new_friend_request' => 'У вас есть 1 запрос дружбы',
  'you_have_total_new_friend_requests' => 'У вас есть {total} новых запросов дружбы',
  'delete_list' => 'Удалить список',
  'edit_name' => 'Изменить имя',
  'display_on_profile' => 'Показать в профиле',
  'remove_from_profile' => 'Удалить из профиля',
  'change_order' => 'Изменить порядок',
  'remove_this_friend' => 'Удалить этого друга',
  'enter_the_name_of_your_custom_friends_list' => 'Введите название списка друзей.',
  'submit' => 'Создать',
  'remove_friend' => 'Удалить друга',
  'list_successfully_created' => 'Список успешно создан.',
  'successfully_added_this_list_to_your_profile' => 'Успешно добавил этот список в свой профиль.',
  'profile_friend_lists' => 'Списки друзей',
  'order_successfully_saved' => 'Заказ успешно сохранен',
  'list_order' => 'Список заказов',
  'you_must_enable_dnd_mode' => 'Необходимо включить режим DND.',
  'block_was_deleted' => 'Блок был удален',
  'cant_delete_it' => 'Не удается удалить',
  'tomorrow' => 'Завтра',
  'after_tomorrow' => 'Послезавтра',
  'today_normal' => 'Сегодня',
  'and' => 'и',
  'full_name_added_you_as_a_friend' => '{full_name} добавил вас в друзья',
  'gets_a_full_list_of_friends_for_a_specific_user' => 'Получает полный список друзей для конкретного пользователя. Если вы не сдали # {user_id} мы будем возвращать информацию о пользователе, которые в настоящее время прошли идентификацию',
  'checks_if_2_users_are_friends_or_not' => 'Проверка, являются друзьями или нет. Если вы не сдали # {user_id} мы будем возвращать информацию о пользователе, который в настоящее время прошел идентификацию',
  'full_name_posted_a_href_link_a_link_a_on_a_href_parent_user_name' => '{full_name} добавлено <a href="{link}">ссылку</a> на <a href="{parent_user_name}">{parent_full_name}</a> <a href="{link}">стене</a>.',
  'birthday_notification' => 'Уведомления о днях рождения',
  'happy_birthday' => 'С Днем Рождения!',
  'confirm' => 'Подтвердить',
  'remove_this_request' => 'Удалить этот запрос',
  'show_more_results_for_search_term' => 'Показать больше результатов "{search_term}"',
  'save_changes' => 'Сохранить',
  'setting_friends_only_profile' => '<title>Friends Only Profile</title><info>При включение этого параметра только друзья смогут просматривать профили друг друга.</info>',
  'see_all' => 'Посмотреть все',
  'confirmed' => 'Подтвержденный',
  'denied' => 'Отказано',
  'menu_friend_friends_532c28d5412dd75bf975fb951c740a30' => 'Friends',
); ?>
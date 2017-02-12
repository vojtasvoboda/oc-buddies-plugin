<?php return [
    'plugin' => [
        'name'                  => 'Buddies',
        'description'           => 'Авторизация/регистрация пользователей',
    ],
    'field' => [
        'name'                          => 'Имя',
        'last_name'                     => 'Фамилия',
        'password'                      => 'Пароль',
        'password_old'                  => 'Старый пароль',
        'password_confirm'              => 'Повторить пароль',
        'password_change'               => 'Изменить пароль',
        'mode'                          => 'Вид свойства',
        'addition_properties'           => 'Свойства',
        'password_limit_min'            => 'Минимальная длинна пароля',
        'password_regexp'               => 'Регулярное выражение для проверки пароля',
        'queue_on'                      => 'Отправка писем используя Queue',
        'queue_name'                    => 'Название queue для отправки письма',
    ],
    'menu' => [
        'main'          => 'Пользователи',
        'user'          => 'Пользователи',
        'property'      => 'Дополнительные свойства',
    ],
    'type' => [
        'input'         => 'Текстовое поле (input)',
        'textarea'      => 'Текстовое поле (textarea)',
        'checkbox'      => 'Множественный выбор из списка (checkbox)',
        'select'        => 'Выбор из списка (select)',
        'date'          => 'Поле выбора даты и времени (datetime)',
        'colorpicker'   => 'Поле выбора цвета (colorpicker)',
        'mediafinder'   => 'Файл',
    ],
    'button' => [
        'add_property_value' => 'Добавить значение свойства',
    ],
    'user' => [
        'name'          => 'пользователя',
        'list_title'    => 'Список пользователей',
    ],
    'property' => [
        'name' => 'свойства',
        'list_title' => 'Список свойств',
    ],
    'tab' => [
        'data'          => 'Данные',
        'validation'    => 'Настройки валидации',
        'mail'          => 'Отправка писем',
    ],
    'component' => [
        'registration'                  => 'Регистрация',
        'registration_desc'             => '',

        'login'                         => 'Авторизация',
        'login_desc'                    => '',
        'logout'                        => 'logout',
        'logout_desc'                   => '',

        'user_page'                     => 'Страница пользователя',
        'user_page_desc'                => 'Страница личного кабинета пользователя',
        'user_data'                     => 'Данные пользователя',
        'user_data_desc'                => 'Данные авторизованного пользователя',

        'activation_page'               => 'Активация пользователя',
        'activation_page_desc'          => 'Страница активации пользователя',

        'reset_password'                => 'Сброс пароля',
        'reset_password_desc'           => '',

        'change_password'               => 'Изменение пароля',
        'change_password_desc'          => '',

        'restore_password'         => 'Восстановление пароля',
        'restore_password_desc'    => '',

        'property_redirect_page'                => 'Redirect page',
        'property_redirect_on'                  => 'Redirect ON',
        'property_flash_on'                     => 'Flash ON',
        'property_force_login'                  => 'Автоматическая авторизация',
        'property_activation'                   => 'Активация пользователя',
        'property_activation_on'                => 'Активировать пользователя',
        'property_activation_off'               => 'Не активировать пользователя',
        'property_activation_mail'              => 'Отправить письмо подтвеждения email адреса',
        'property_check_old_password'           => 'Проверять действующий пароль на совпадение',

        'property_mode'             => 'Component mode',
        'mode_submit'               => 'Form submit',
        'mode_ajax'                 => 'Ajax',
    ],
    'message' => [
        'e_user_create'                 => 'Ошибка при создании пользователя',
        'e_user_banned'                 => 'Пользователь ":user" заблокирован',
        'e_user_suspended'              => 'Пользователь ":user" временно заблокирован',
        'e_login_not_correct'           => 'Некорректно введен email или пароль',
        'e_user_not_active'             => 'Пользователь деактивирован',
        'e_auth_fail'                   => 'Вы уже авторизованы',
        'e_user_not_found'              => 'Пользователь ":user" не найден',
        'e_user_not_found_by_id'        => 'Пользователь не найден',
        'e_check_old_password'          => 'Старый пароль введен не верно',
        'e_email_unique'                => 'Пользователь с данным email адресом уже существует',
        'registration_success'          => 'Вы успешно зарегестировались',
        'password_change_success'       => 'Пароль успешно изменен',
        'login_success'                 => 'Вы успешно авторизовались',
        'restore_mail_send_success'     => 'Письмо для восстановления пароля отправлено',
    ],
    'mail' => [
        'restore' => 'Восстановление пароля',
    ],
];
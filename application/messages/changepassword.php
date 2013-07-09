<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'password' => array(
        'not_empty' => 'Введите пароль',
        'matches' => 'Пароль должен совпадать с подтверждением',
        'min_length' => 'Пароль не может содержать меньше 8 символов',
        'max_length' => 'Пароль не может содержать более 32 символов',
    ),
);

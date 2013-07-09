<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
    'username' => array(
        'not_empty' => 'Введите желаемый логин',
        'max_length' => 'Имя ползователя не может содержать больше 32 символов',
        'regex' => 'Имя пользователя может содержать только латинские символы',
        'unique_login' => 'Такой логин уже сущществует',
    ),
    'first_name' => array(
        'not_empty' => 'Ввдетие имя',
        'max_length' => 'Имя не может содержать больше 32 символов',
        'regex' => 'Имя может содержать только буквы',
    ),
    'last_name' => array(
        'not_empty' => 'Введите фамилию',
        'max_length' => 'Фамилия не может содержать больше 32 символов',
        'regex' => 'Фамилия может содержать только буквы',
    ),
    'birthday' => array(
        'regex' => 'Не корректный формат даты',
    ),
    'website' => array(
        'regex' => 'Не корректный адрес сайта',
    ),
    'phone' => array(
        'regex' => 'Не корректный номер телефона'
    ),
    'password' => array(
        'not_empty' => 'Введите пароль',
        'matches' => 'Пароль должен совпадать с подтверждением',
        'min_length' => 'Пароль не может содержать меньше 8 символов',
        'max_length' => 'Пароль не может содержать более 32 символов',
    ),
    'pol_id' => array(
        'not_empty' => 'Выберите пол',
        'numeric' => 'pol_id должен быть числом',
        'in_array' => 'Такого пола не существует',
    ),
    'status_id' => array(
        'numeric' => 'status_id должен быть числом',
        'not_empty' => 'status_id не можут быть пустым',
        'in_array' => 'Такого статуса не существует',
    ),
    'country_id' => array(
        'not_empty' => 'Выберите страну',
        'numeric' => 'country_id должен быть числом',
        'in_array' => 'Выберите страну',
    ),
    'city_id' => array(
        'not_empty' => 'Выберите регион',
        'numeric' => 'city_id должен быть числом',
        'in_array' => 'Выберите регион',
    ),
    'hide_email' => array(
        'numeric' => 'hide_email должен быть числом',
        'in_array' => 'Не корректный формат hide_email',
    ),
    'avatar' => array(
        'Upload::image' => 'Не корректный формат избражения',
        'Upload::size' => 'Размерф Файла не может быть более 10 Мегабайт',
    ),
);

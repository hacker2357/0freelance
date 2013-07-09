<?php defined('SYSPATH') OR die('No direct access allowed.');
return array(
    'first_name' => '/^[а-яa-z]+$/iu',
    'last_name' => '/^[а-яa-z]+$/iu',
    'birthday' => '/^\d{4}-\d{2}-\d{2}$/u',
    'website'  => '/^http[s]{0,1}:\/\/(www\.){0,1}[0-9а-яa-z\-\.]+\.[а-яa-z\-]+\/.*$/iu',
    'phone'  =>  '/^\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/u',
    'username'  =>  '/^[a-z0-9_.]++$/iD',
);
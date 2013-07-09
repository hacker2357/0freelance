<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User
{

    protected $_belongs_to = array(
        'status' => array(
            'model' => 'Status',
            'foreign_key' => 'status_id',
        ),
        'pol' => array(
            'model' => 'Pol',
            'foreign_key' => 'pol_id',
        ),
        'avatar' => array(
            'model' => 'File',
            'foreign_key' => 'avatar_id',
        ),
        'region' => array(
            'model' => 'Region',
            'foreign_key' => 'city_id',
        ),
    );
    
    protected $_has_many = array(
        'user_tokens' => array('model' => 'User_Token'),
	'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'user_id',
        ),
        'answers' => array(
            'model' => 'Answer',
            'foreign_key' => 'user_id',
        ),
        'spec_razdels' => array(
            'model' => 'Specrazdel',
            'foreign_key' => 'user_id',
        ),
    );

    public function rules()
    {
            return array(
                    'username' => array(
                            array('not_empty'),
                            array('max_length', array(':value', 32)),
                    ),
                    'password' => array(
                            array('not_empty'),
                    ),
                    'email' => array(
                            array('not_empty'),
                            array('email'),
                    ),
            );
    }
    
    public static function get_password_validation($values)
    {
            return Validation::factory($values)
                    ->rule('password', 'min_length', array(':value', 8))
                    ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'))
                    ->labels(array( 'password_confirm' => '"Подтверждение"',
                                    'passowrd' => '"Пароль"'));
    }
    
    public function labels()
    {
            return array(
                    'username'         => 'Имя пользователя',
                    'email'            => 'Email',
                    'password'         => 'Пароль',
                    'password_confirm' => 'Подтверждение',
            );
    }

}
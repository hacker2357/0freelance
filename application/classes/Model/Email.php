<?php defined('SYSPATH') or die('No direct script access.');

class Model_Email extends ORM
{
    protected $_table_name = 'emails';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    function rules()
    {
        return array(
            'email' =>array(
                array('not_empty'),
                array('min_length', array(':value', 5)),
                array('max_length', array(':value', 255)),
                array('email'),
                array('email_domain'),
                ),
        );
    }
    
    function labels()
    {
        return array(
            'email' => 'Email',
        );
    }
    
    function filters()
    {
        return array(
            'email' => array(
                array('UTF8::trim'),
                ),
        );
    }
}

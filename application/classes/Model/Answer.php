<?php defined('SYSPATH') or die('No direct script access.');

class Model_Answer extends ORM
{
    protected $_table_name = 'answers';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_belongs_to = array(
        'currency' => array(
            'model' => 'Currency',
            'foreign_key' => 'currency_id',
        ),
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id',
        ),
        'prepay' => array(
            'model' => 'Prepay',
            'foreign_key' => 'prepay_id',
        ),
        'project' => array(
            'model' => 'Project',
            'foreign_key' => 'project_id',
        ),
    );
}

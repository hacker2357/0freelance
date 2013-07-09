<?php defined('SYSPATH') or die('No direct script access.');

class Model_Status extends ORM
{
    protected $_table_name = 'statuses';
    
    protected $_primary_key = 'status_id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'users' => array(
            'model' => 'user',
            'foreign_key' => 'status_id',
        ),
    );
}

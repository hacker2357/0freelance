<?php defined('SYSPATH') or die('No direct script access.');

class Model_Pol extends ORM
{
    protected $_table_name = 'pols';
    
    protected $_primary_key = 'pol_id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'users' => array(
            'model' => 'user',
            'foreign_key' => 'pol_id',
        ),
    );
}

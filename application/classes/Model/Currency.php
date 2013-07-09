<?php defined('SYSPATH') or die('No direct script access.');

class Model_Currency extends ORM
{
    protected $_table_name = 'currencies';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'projects' => array(
            'model' => 'project',
            'foreign_key' => 'currency_id',
        ),
        'answers' => array(
            'model' => 'Answer',
            'foreign_key' => 'currency_id',
        ),
    );
}

<?php defined('SYSPATH') or die('No direct script access.');

class Model_Type extends ORM
{
    protected $_table_name = 'types';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'projects' => array(
            'model' => 'project',
            'foreign_key' => 'type_id',
        ),
    );
}

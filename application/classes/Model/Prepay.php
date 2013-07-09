<?php defined('SYSPATH') or die('No direct script access.');

class Model_Prepay extends ORM
{
    protected $_table_name = 'prepay';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'prepay_id',
        ),
        'answers' => array(
            'model' => 'Answer',
            'foreign_key' => 'prepay_id',
        ),
    );
}

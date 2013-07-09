<?php defined('SYSPATH') or die('No direct script access.');

class Model_Specrazdel extends ORM
{
    protected $_table_name = 'spec_razdel';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_belongs_to = array(
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id',
        ),
    );
    
    protected $_has_many = array(
        'spec_podrazdel' => array(
            'model' => 'Specpodrazdel',
            'foreign_key' => 'razdel_id',
        ),
    );
}

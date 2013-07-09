<?php defined('SYSPATH') or die('No direct script access.');

class Model_Region extends ORM
{
    protected $_table_name = 'region_';
    
    protected $_primary_key = 'id_region';
    
    protected $_db_group = 'default';
    
    protected $_has_many  = array(
        'users' => array(
            'model' => 'user',
            'foreign_key' => 'city_id',
        ),
    );

    protected $_belongs_to = array(
        'country' => array(
            'model' => 'country',
            'foreign_key' => 'id_country',
        ),
    );
}
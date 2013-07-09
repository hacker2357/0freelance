<?php defined('SYSPATH') or die('No direct script access.');

class Model_Country extends ORM
{
    protected $_table_name = 'country_';
    
    protected $_primary_key = 'id_country';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'regions' => array(
            'model' => 'region',
            'foreign_key' => 'id_country',
        ),
    );
}

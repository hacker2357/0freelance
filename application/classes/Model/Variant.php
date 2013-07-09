<?php defined('SYSPATH') or die('No direct script access.');

class Model_Variant extends ORM
{
    protected $_table_name = 'variants';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'variant_id',
        ),
    );
}
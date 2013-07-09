<?php defined('SYSPATH') or die('No direct script access.');

class Model_Razdel extends ORM
{
    protected $_table_name = 'razdels';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'podrazdels' => array(
            'model' => 'Podrazdel',
            'foregin_key' => 'razdel_id',
            'through' => 'razdels_podrazdels',
            'far_key' => 'podrazdel_id',
        ),
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'razdel_id',
        ),
    );
}

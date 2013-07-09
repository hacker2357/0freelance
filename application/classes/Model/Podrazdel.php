<?php defined('SYSPATH') or die('No direct script access.');

class Model_Podrazdel extends ORM
{
    protected $_table_name = 'podrazdels';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'razdels' => array(
            'model' => 'Razdel',
            'foregin_key' => 'podrazdel_id',
            'through' => 'razdels_podrazdels',
            'far_key' => 'razdel_id',
        ),
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'podrazdel_id',
        ),
    );
}

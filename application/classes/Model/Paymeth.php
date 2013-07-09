<?php defined('SYSPATH') or die('No direct script access.');

class Model_Paymeth extends ORM
{
    protected $_table_name = 'paymeth';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_many = array(
        'projects' => array(
            'model' => 'Project',
            'foreign_key' => 'paymeth_id',
            'through' => 'projects_paymeth',
            'far_key' => 'project_id',
        ),
    );
}

<?php defined('SYSPATH') or die('No direct script access.');

class Model_Specpodrazdel extends ORM
{
    protected $_table_name = 'spec_podrazdel';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_belongs_to = array(
        'spec_razdel' => array(
            'model' => 'Specrazdel',
            'foreign_key' => 'razdel_id',
        ),
    );
}

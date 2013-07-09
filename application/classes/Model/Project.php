<?php defined('SYSPATH') or die('No direct script access.');

class Model_Project extends ORM
{
    protected $_table_name = 'projects';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_belongs_to = array(
        'type' => array(
            'model' => 'Type',
            'foreign_key' => 'type_id',
        ),
        'currency' => array(
            'model' => 'Currency',
            'foreign_key' => 'currency_id',
        ),
        'user' => array(
            'model' => 'User',
            'foreign_key' => 'user_id',
        ),
        'prepay' => array(
            'model' => 'Prepay',
            'foreign_key' => 'prepay_id',
        ),
        'variant' => array(
            'model' => 'Variant',
            'foreign_key' => 'variant_id',
        ),
        'razdel' => array(
            'model' => 'Razdel',
            'foreign_key' => 'razdel_id',
        ),
        'podrazdel' => array(
            'model' => 'Podrazdel',
            'foreign_key' => 'podrazdel_id',
        ),
    );
    
    protected $_has_many = array(
        'paymeth' => array(
            'model' => 'Paymeth',
            'foreign_key' => 'project_id',
            'through' => 'projects_paymeth',
            'far_key' => 'paymeth_id',
        ),
        'answers' => array(
            'model' => 'Answer',
            'foreign_key' => 'project_id',
        ),
    );
}

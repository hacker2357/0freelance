<?php defined('SYSPATH') or die('No direct script access.');

class Model_File extends ORM
{
    protected $_table_name = 'files';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
    
    protected $_has_one = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'avatar_id',
        ),
    );
    
}

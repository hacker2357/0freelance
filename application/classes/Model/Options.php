<?php defined('SYSPATH') or die('No direct script access.');

class Model_Options extends ORM
{
    protected $_table_name = 'options';
    
    protected $_primary_key = 'id';
    
    protected $_db_group = 'default';
}

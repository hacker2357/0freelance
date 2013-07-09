<?php defined('SYSPATH') or die('No direct script access.');

class Model_Filters extends Model
{
    public function first_name($value)
    {
        return UTF8::ucfirst(UTF8::strtolower(UTF8::trim($value)));
    }
    
    public function last_name($value)
    {
        return UTF8::ucfirst(UTF8::strtolower(UTF8::trim($value)));
    }
    
    public function birthday($value)
    {
        return UTF8::trim($value);
    }
    
    public function website($value)
    {
        return preg_replace('/^(http(s){0,1}:\/\/){0,1}(www\.){0,1}([0-9а-яa-z\-\.]+\.[а-яa-z]+)(\/){0,1}(.)*$/iu',
                        'http$2://$3$4/$6', HTML::chars(UTF8::trim($value)));
    }
    
    public function phone($value)
    {
        return preg_replace('/^(\d)(\s|-|\()*(\d{3})(\s|-|\))*(\d{3})(\s|-)*(\d{2})(\s|-)*(\d{2})$/u',
                        '$1 ($3) $5-$7-$9', UTF8::trim($value));
    }
    
    public function email($value)
    {
        return UTF8::trim(UTF8::strtolower($value));
    }
    
    public function filter_all(&$array, $func)
    {
        foreach ($func as $f)
        {
            if (method_exists(__CLASS__, $f))
            {
                if (isset($array[$f]))
                {
                    $array[$f] = $this->$f($array[$f]);
                }
            }
        }
    }

}

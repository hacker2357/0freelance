<?php defined('SYSPATH') or die('No direct script access.');

class Model_Useful extends Model
{
    public function generate_password($number)
    {
      $arr = array('a','b','c','d','e','f',
                   'g','h','i','j','k','l',
                   'm','n','o','p','r','s',
                   't','u','v','x','y','z',
                   'A','B','C','D','E','F',
                   'G','H','I','J','K','L',
                   'M','N','O','P','R','S',
                   'T','U','V','X','Y','Z',
                   '1','2','3','4','5','6',
                   '7','8','9','0');
      // Генерируем пароль
      $pass = '';
      for($i = 0; $i < $number; $i++)
      {
        // Вычисляем случайный индекс массива
        $index = rand(0, count($arr) - 1);
        $pass .= $arr[$index];
      }
      return $pass;
    }
    
    public function upload_file($file)
    {
        $ext = preg_replace('/(.+)(\.[a-z]+)$/iu', '$2', $file['name']);
                
        $dir = Kohana::$config->load('files')->get('dir');

        while(true)
        {
            $fname = Model::factory('Useful')->generate_password(50);

            $addr = $dir.'\\'.$fname.$ext;

            if (!file_exists($addr))
            {
                break;
            }
        }

        $path = Upload::save($file, $fname.$ext, $dir);

        $dir_with_slash = str_replace('\\', '/', $dir);

        $dir_with_back_slash = str_replace('\\', '\\\\', $dir);

        $url = preg_replace('/^(.*'.$dir_with_back_slash.'\\\\)(.+)$/i', $dir_with_slash.'/$2', $path);

        $doc_root = str_replace('\\', '\\\\', DOCROOT);

        $dir_to_db = preg_replace('/^('.$doc_root.')(.*)$/i', '$2', $path);

        $files = ORM::factory('file');
        
        $files->path = $dir_to_db;
        
        $files->url = $url;
        
        $files->time = time();
        
        $files->save();
        
        return array('id' => $files->id, 'url' => $url, 'path' => $dir_to_db);
    }
    
    private function format_years($years)
    {
        $string_years = (string)$years;
        
        $last_simbol2 = substr($string_years, -2, 1);
        $last_simbol = substr($string_years, -1, 1);
        
        $last_simbol = (int)$last_simbol;
        
        if ($last_simbol2 == 1 && strlen($string_years) > 1)
            return "$years лет";
        elseif ($last_simbol == 1)
            return "$years год";
        elseif ($last_simbol > 1 && $last_simbol < 5)
            return "$years года";
        elseif ($last_simbol > 4 || $last_simbol == 0)
            return "$years лет";
    }
    
    private function format_month($month)
    {
        $string_month = "$month";
        
        $last_simbol2 = substr($string_month, -2, 1);
        $last_simbol = substr($string_month, -1, 1);
        
        $last_simbol = (int)$last_simbol;
        
         if ($last_simbol2 == 1 && strlen($string_month) > 1)
            return "$month месяцев";
        if ($last_simbol == 1)
            return "$month месяц";
        elseif ($last_simbol > 1 && $last_simbol < 5)
            return "$month месяца";
        elseif ($last_simbol > 4 || $last_simbol == 0)
            return "$month месяцев";
    }
    
    public function format_days($days)
    {
        $string_days = "$days";
        
        $last_simbol2 = substr($string_days, -2, 1);
        
        $last_simbol = substr($string_days, -1, 1);
        
        $last_simbol = (int)$last_simbol;
        
        if ($last_simbol2 == 1 && strlen($string_days) > 1)
            return "$days дней";
        elseif ($last_simbol == 1)
            return "$days день";
        elseif ($last_simbol > 1 && $last_simbol < 5)
            return "$days дня";
        elseif ($last_simbol > 4 || $last_simbol == 0)
            return "$days дней";
    }
    
    public function get_user_time($time)
    {
        $raznost = time() - $time;
        if ($raznost >= 31536000)
            $years = (int)($raznost / 31536000);
        else
            $years = 0;
        
        $month = (int)(($raznost - $years * 31536000) / 2592000);
        
        if ($years == 0 && $month != 0)
            return $this->format_month($month);
        elseif ($years != 0 && $month != 0)
            return $this->format_years($years).' '.$this->format_month($month);
        elseif ($years != 0 && $month == 0)
            return $this->format_years($years);
        elseif ($years == 0 && $month == 0)
            return "меньше месяца";
    }
}

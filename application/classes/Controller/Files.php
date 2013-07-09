<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Files extends Controller
{	
	public function action_getfile()
	{
		$file = $this->request->param('filename');
		
		$ext = $this->getExtension($file);
		
		if ($ext==EXT) exit('Нельзя загрузить файл '.EXT);
		
		$ext_header = substr($ext, 1);
		
		$this->response->headers(array(
                'Content-type'      => File::mime_by_ext($ext_header),
            ));
		
		$file = APPPATH.'/views/'.$file;	
		
        $this->response->body(file_get_contents($file));
	}

} // End Welcome

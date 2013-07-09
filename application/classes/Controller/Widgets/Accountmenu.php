<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Accountmenu extends Controller_Template
{
	public $template = 'Widgets/W_accountmenu';
	
	public function action_index()
	{
            $controller = UTF8::strtolower(Request::initial()->controller());
            
            $user = Auth::instance()->get_user();
            
            $this->template->user_name = $user->first_name.' '.$user->last_name;
            
			$this->template->user_link = URL::base().Route::get('user')->uri(array('user_id' => $user->id));
			
            $this->template->menu_list = array(
                                                    array('current' => ($controller=='account') ? 1: 0, 'link' => URL::base().Route::get('default')->uri(array('controller' => 'account')), 'text' => 'Основные настройки'),
                                                    array('current' => ($controller=='portfolio') ? 1: 0, 'link' => URL::base().Route::get('default')->uri(array('controller' => 'portfolio')), 'text' => 'Портфолио'),
                                                    array('current' => ($controller=='uvedomlenya') ? 1: 0, 'link' => URL::base().Route::get('default')->uri(array('controller' => 'uvedomlenya')), 'text' => 'Уведомления / Рассылка'),
                                                    array('current' => ($controller=='safety') ? 1: 0, 'link' => URL::base().Route::get('default')->uri(array('controller' => 'safety')), 'text' => 'Безопасность'),
                                            );
	}

}
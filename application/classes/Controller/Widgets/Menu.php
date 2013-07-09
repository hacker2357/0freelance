<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Menu extends Controller_Template
{
	public $template = 'Widgets/W_menu';
	
	public function action_index()
	{
            if (Auth::instance()->logged_in('login'))
            {
		$this->template->menu_list = array(
							array('link' => URL::base().Route::get('default')->uri(array('controller' => 'account')), 'text' => Auth::instance()->get_user()->username),
							array('link' => URL::base(), 'text' => 'Главная'),
							array('link' => URL::base().Route::get('default')->uri(array('controller' => 'messages')), 'text' => 'Сообщения'),
							array('link' => URL::base(), 'text' => 'Проекты'),
							array('link' => URL::base(), 'text' => 'Купить PRO'),
						);
		$this->template->right_menu_list = array(
                                                        array('link' => URL::base().Route::get('default')->uri(array('controller' => 'logout')), 'text' => 'Выход')
                );
            }
            else
            {
                
                $this->template->left_menu = array(
                    array('link' => URL::base(), 'text' => 'Главная'),
                );
                
                $this->template->menu_login = array(
                       array('link' => URL::base().Route::get('default')->uri(array('controller' => 'registration')), 'text' => 'Регистрация'),
                       array('link' => URL::base().Route::get('default')->uri(array('controller' => 'login')), 'text' => 'Вход')
                    );
            }
	}

}
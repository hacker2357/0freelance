<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Avatar extends Controller
{
	public function action_index()
	{
            $user = Auth::instance()->get_user();
            $avatar = Model::factory('Functions')->get_user_preview($user);
            $this->response->body($avatar);
	}

}
<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Freereviews extends Controller_Template
{
    public $template = 'Widgets/W_freelancer_reviews';
    
	public function action_index()
	{
            $count_1 = ORM::factory('Review')->where('user_id', '=', $this->request->param('user_id'))->and_where('type', '=', 1)->count_all();
            $count__1 = ORM::factory('Review')->where('user_id', '=', $this->request->param('user_id'))->and_where('type', '=', -1)->count_all();
            
            $this->template->count_1 = $count_1;
            $this->template->count__1 = $count__1;
            $this->template->link = '#reviews';
	}

}
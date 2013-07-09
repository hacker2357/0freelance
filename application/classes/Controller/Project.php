<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Project extends Controller_Base
{
	public function before()
	{
		parent::before();
	}
	
	public function after()
	{
		parent::after();
	}
	
	public function action_getpage()
	{
               $id = $this->request->param('id');
               $project = ORM::factory('Project', array('id' => $id));
               $count_projects = $project->user->projects->count_all();
               $avatar = Model::factory('Functions')->get_user_preview($project->user);
               
               
               $this->template->content = View::factory('v_project', array(
                   'project' => $project,
                   'count_projects' => $count_projects,
                   'avatar' => $avatar,
                   'sidebar' => array(Request::factory('widgets/sidebar')->execute()),
               ));
	}

}
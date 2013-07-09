<?php defined('SYSPATH') or die('No direct script access.');

class Model_Functions extends Model
{
    public function get_user_preview($user)
    {
        if (!isset($user->id))
            $user = ORM::factory('User', array('id' => $user));
        return View::factory('Widgets/W_avatar', array(
            'avatar' => URL::base().$user->avatar->url,
            'reviews' => Request::factory('widgets/reviews/'.$user->id)->execute(),
            'link' => URL::base().Route::get('user')->uri(array('user_id' => $user->id)),
        ));
    }
}

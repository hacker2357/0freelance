<ul class="message_menu">
<?php foreach($chat_menu_list as $menu_li): ?>
    <li<?php if (URL::Base() . Route::get('default')->uri(array('controller' => UTF8::strtolower(Request::initial()->controller()))) == $menu_li['link']) echo ' class="message_btn_active"';?>><a href="<?=$menu_li['link'];?>"><?=$menu_li['text'];?></a></li>
<?php endforeach; ?>
</ul>

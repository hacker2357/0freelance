<div class="user-right">
    <span class="user-name"><a href="<?=$user_link;?>"><?=(isset($user_name)) ? $user_name: '';?></a></span>
    <ul class="settings-menu">
        <?php foreach($menu_list as $menu_li): ?>
        <li><a<?=($menu_li['current']==1) ? ' class="current"' : '';?> href="<?=$menu_li['link'];?>"><?=$menu_li['text'];?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
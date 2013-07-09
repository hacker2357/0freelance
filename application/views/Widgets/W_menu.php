<div class="fixed-header">
	<div class="header center">
        <?php if (isset($menu_list)) :?>
    	<ul class="header-menu left">
			<?php foreach($menu_list as $menu_li): ?>
				<li><a href="<?=$menu_li['link'];?>" alt=""><?=$menu_li['text'];?></a></li>
			<?php endforeach; ?>
        </ul>
        <?php endif;?>
        
        <?php if (isset($right_menu_list)) :?>    
        <ul class="header-menu-right right">
            <?php foreach($right_menu_list as $right_menu_li): ?>
        	<li><a href="<?=$right_menu_li['link'];?>" alt=""><?=$right_menu_li['text'];?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif;?>
            
        <?php if (isset($left_menu)) :?>    
        <ul class="header-menu-right left">
            <?php foreach($left_menu as $left_menu_li): ?>
        	<li><a href="<?=$left_menu_li['link'];?>" alt=""><?=$left_menu_li['text'];?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif;?>    
            
        <?php if (isset($menu_login)) :?>    
        <ul class="header-menu-right right">
            <?php foreach($menu_login as $menu_login_li): ?>
        	<li><a href="<?=$menu_login_li['link'];?>" alt=""><?=$menu_login_li['text'];?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif;?>
    </div>
</div>